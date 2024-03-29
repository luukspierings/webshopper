<?php



Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    
    Route::get('/shop', 'ShopController@index');
    Route::get('/shop/{id}/{category}', 'ShopController@getView');
    Route::get('/shop/{id}', 'ShopController@getIndex');
    Route::get('/product/{id}', 'ProductdetailController@getIndex');
    Route::get('/product/{id}?', 'ProductdetailController@putShoppingcart');
    Route::patch('/shoppingcart', 'ShoppingcartController@PostShoppingcart');
    Route::get('/shoppingcart', 'ShoppingcartController@index');
    Route::get('/product', 'ProductdetailController@index');
    Route::get('/webshop', 'WebshopController@index');
    Route::get('/about', 'PagesController@getAbout');
    Route::patch('/', 'PagesController@PostShoppingcart');
    Route::get('/', 'PagesController@getIndex');


    // CMS HOME
    Route::get('/cms',[
        'uses'  =>  'CmsHomeController@index',
        'as'    =>  'cms.index'
    ]);

    // CMS ORDERS

    Route::get('/cms/orders',[
        'uses'  =>  'CmsOrdersController@index',
        'as'    =>  'cms.indexOrder'
    ]);

    Route::delete('cms/orders/deleteorder/{order}', [
        'uses'  => 'CmsOrdersController@deleteOrder',
        'as'    => 'cms.deleteOrder'
    ]);

    // CMS CATEGORIES
    Route::get('/cms/categorieën',[
        'uses'  =>  'CmsCategoryController@index',
        'as'    =>  'cms.indexCategory'
    ]);

    Route::get('cms/categorieën/nieuwcategorie', [
        'uses'  => 'CmsCategoryController@newMainCategory',
        'as'    => 'cms.newMainCategory'
    ]);

    Route::put('cms/categorieën/nieuwcategorie', [
        'uses'  => 'CmsCategoryController@createMainCategory',
        'as'    => 'cms.createMainCategory'
    ]);

    Route::get('cms/categorieën/nieuwsubcategorie', [
        'uses'  => 'CmsCategoryController@newSubCategory',
        'as'    => 'cms.newSubCategory'
    ]);

    Route::put('cms/categorieën/nieuwsubcategorie', [
        'uses'  => 'CmsCategoryController@createSubCategory',
        'as'    => 'cms.createSubCategory'
    ]);

    Route::put('cms/categorieën/main/{mainCategory}', 'CmsCategoryController@updateMainCategory');

    Route::get('cms/categorieën/main/{mainCategory}', [
        'uses'  => 'CmsCategoryController@editMainCategory',
        'as'    => 'cms.editMainCategory'
    ]);

    Route::put('cms/categorieën/sub/{subCategory}', 'CmsCategoryController@updateSubCategory');

    Route::get('cms/categorieën/sub/{subCategory}', [
        'uses'  => 'CmsCategoryController@editSubCategory',
        'as'    => 'cms.editSubCategory'
    ]);


    Route::delete('cms/categorieën/maindelete/{mainCategory}', [
        'uses'  => 'CmsCategoryController@deleteMainCategory',
        'as'    => 'cms.deleteMainCategory'
    ]);

    Route::delete('cms/categorieën/subdelete/{subCategory}', [
        'uses'  => 'CmsCategoryController@deleteSubCategory',
        'as'    => 'cms.deleteSubCategory'
    ]);



    // CMS PRODUCTS
    Route::get('/cms/producten',[
        'uses'  =>  'CmsProductsController@index',
        'as'    =>  'cms.indexProduct'
    ]);

    Route::get('cms/producten/nieuwproduct', [
        'uses'  => 'CmsProductsController@newProduct',
        'as'    => 'cms.newProduct'
    ]);

    Route::put('cms/producten/nieuwproduct', [
        'uses'  => 'CmsProductsController@createProduct',
        'as'    => 'cms.createProduct'
    ]);

    Route::put('cms/producten/{product}', 'CmsProductsController@updateProduct');

    Route::get('cms/producten/{product}', [
        'uses'  => 'CmsProductsController@editProduct',
        'as'    => 'cms.editProduct'
    ]);

    Route::delete('cms/productendelete/{product}', [
        'uses'  => 'CmsProductsController@deleteProduct',
        'as'    => 'cms.deleteProduct'
    ]);



});
