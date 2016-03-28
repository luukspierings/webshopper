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


    Route::get('/cms',[
        'uses'  =>  'CmsController@index',
        'as'    =>  'cms.index'
    ]);

    Route::get('cms/nieuwproduct', [
        'uses'  => 'CmsController@newProduct',
        'as'    => 'cms.newProduct'
    ]);

    Route::put('cms/nieuwproduct', [
        'uses'  => 'CmsController@createProduct',
        'as'    => 'cms.createProduct'
    ]);



    Route::put('cms/{product}', 'CmsController@updateProduct');

    Route::get('cms/{product}', [
        'uses'  => 'CmsController@editProduct',
        'as'    => 'cms.editProduct'
    ]);

    Route::delete('cmsdelete/{product}', [
        'uses'  => 'CmsController@deleteProduct',
        'as'    => 'cms.deleteProduct'
    ]);



});
