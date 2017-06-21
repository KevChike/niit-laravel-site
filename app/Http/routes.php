<?php

Route::get('/', 'StaticPageDisplayController@index')->name('homepage');
Route::get('/about', 'StaticPageDisplayController@about')->name('about');
Route::get('/contact', 'StaticPageDisplayController@contact')->name('contact');

Route::get('/scholarship', 'ScholarshipController@index')->name('scholarship');
Route::post('/scholarship', 'ScholarshipController@store')->name('scholarship');

Route::resource('courses', 'CourseController');
Route::resource('events', 'EventController');
