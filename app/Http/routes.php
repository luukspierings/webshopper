<?php



Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

<<<<<<< HEAD
    Route::get('/dames', 'DamesController@index');
=======

//    Schema::table('products', function($table){
//
//
//        $table->double('price', 8, 2);
//
//
//    });


>>>>>>> 5ba0a0430bfa61cfd6ea0fa809df7d043ac170d6
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




});
