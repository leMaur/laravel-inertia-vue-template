<?php

Route::get('/')->uses('WelcomeController')->name('welcome');
Route::get('/about')->uses('AboutController')->name('about');
