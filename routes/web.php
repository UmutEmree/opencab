<?php

// Get Data
Route::get('/', 'Front\PagesController@index');
Route::get('/uber-uns', 'Front\PagesController@about')->name('about');
Route::get('/kontakt', 'Front\PagesController@contact')->name('contact');
Route::get('/preise', 'Front\PagesController@price')->name('price');
Route::get('/business', 'Front\PagesController@business')->name('business');
Route::get('/stadtrundfahrt', 'Front\PagesController@sightseeing')->name('sightseeing');
Route::get('/reservation/{code}', 'Front\ReservationController@step1')->name('reservation');
Route::get('/reservation/view-order/{code}', 'Front\ReservationController@step2')->name('step2');
Route::get('/reservation/confirmation/{code}', 'Front\ReservationController@step3')->name('step3');


// Post data
Route::post('/','Front\ReservationController@reservation')->name('reservation');
Route::post('/reservation','Front\ReservationController@reservation2')->name('reservation2');
Route::post('/reservation-final','Front\ReservationController@reservation3')->name('reservation-final');
Route::post('/contact-send', ['uses' =>'Front\PagesController@sendmail'])->name('contact-send');



Auth::routes();
Route::get('/lang/{lang}', 'LangController@index');
