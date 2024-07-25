<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('rahul1', 'rahulcontroller@rahul')->name('login1');

Route::get('table', 'rahulcontroller@table')->name('login');

Route::get('/amit','rahulcontroller@amit');


//  Through url()......................................!!


Route::get('/Ram', function () {
    echo"Hello Ram through _url";
});




//  Through route()......................................!!


Route::get('/shyam', function () {
    echo"Hello Ram through _route";
})->name('ram');




