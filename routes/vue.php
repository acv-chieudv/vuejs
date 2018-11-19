<?php 


    Route::get('vue','VueController@index');
    Route::get('dang-nhap','LoginController@index');


    
    Route::group(['prefix'=>'vue'],function(){
        Route::get('listvue','VueController@listvue');
        Route::post('addvue','VueController@addvue');
        Route::post('delvue/{id}','VueController@delvue');
        Route::get('geteditvue/{id}','VueController@geteditvue');
        Route::post('editvue/{id}','VueController@editvue');
    });
    



?>