<?php


use Illuminate\Support\Facades\Mail;
use App\Mail\contact;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/{website}', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');



// Route::get('mail', function () {

//     Mail::to('nour-ja19@hotmail.fr')->send(new contact());
// });

Route::get('/contact', 'contactMail@contact');
Route::post('/contact', 'contactMail@mail');