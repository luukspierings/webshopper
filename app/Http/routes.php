<?php



Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();





//    Schema::table('products', function($table){
//        $table->string('name', 20);
//
//    });

    Route::get('/shoppingcart', 'ShoppingcartController@index');
    Route::get('/heren', 'HerenController@index');
    Route::get('/dames', 'DamesController@index');
    Route::get('/product', 'ProductdetailController@index');
    Route::get('/webshop', 'WebshopController@index');
    Route::get('/about', 'PagesController@getAbout');
    Route::get('/', 'PagesController@getIndex');


    // CMS HOME
    Route::get('/cms',[
        'uses'  =>  'CmsHomeController@index',
        'as'    =>  'cms.index'
    ]);

    // CMS CATEGORIES
    Route::get('/cms/categorieën',[
        'uses'  =>  'CmsCategoryController@index',
        'as'    =>  'cms.indexCategory'
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

    Route::put('cms/producten/{product}', 'CmsController@updateProduct');

    Route::get('cms/producten/{product}', [
        'uses'  => 'CmsProductsController@editProduct',
        'as'    => 'cms.editProduct'
    ]);

    Route::delete('cms/productendelete/{product}', [
        'uses'  => 'CmsProductsController@deleteProduct',
        'as'    => 'cms.deleteProduct'
    ]);



});
