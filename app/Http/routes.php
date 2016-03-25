<?php



Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();


//    Schema::table('products', function($table){
//        $table->timestamps();
//    });


    Route::get('/webshop', 'WebshopController@index');
    Route::get('/about', 'PagesController@getAbout');
    Route::get('/', 'PagesController@getIndex');


    Route::get('/cms',[
        'uses'  =>  'CmsController@index',
        'as'    =>  'cms.index'
    ]);

    Route::get('/cms/editproduct', [
        'uses'  => 'CmsController@editProduct',
        'as'    => 'cms.editProduct'
    ]);


});
