<?php


$namespace = 'Survey\Http\Controllers';

Route::group(
            [
                    'namespace' => $namespace,
                    'prefix' => 'audit',
                    'middleware' => 'web'
            ]
    ,function(){

    Route::get('/', 'SurveyController@index');
    Route::get('/add', 'SurveyController@add')->name('survey-add');
    Route::post('/add', 'SurveyController@store')->name('add-survey');
});

