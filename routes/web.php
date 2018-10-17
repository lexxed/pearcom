<?php




Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');


Route::post('search', 'SearchController@search');
