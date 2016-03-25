<?php



Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();


//    Schema::table('products', function($table){
//
//
//        $table->double('price', 8, 2);
//
//
//    });


    Route::get('/webshop', 'WebshopController@index');
    Route::get('/about', 'PagesController@getAbout');
    Route::get('/', 'PagesController@getIndex');


    Route::get('/cms',[
        'uses'  =>  'CmsController@index',
        'as'    =>  'cms.index'
    ]);

    Route::put('cms/{product}', 'CmsController@updateProduct');

    Route::get('cms/{product}', [
        'uses'  => 'CmsController@editProduct',
        'as'    => 'cms.editProduct'
    ]);




});
