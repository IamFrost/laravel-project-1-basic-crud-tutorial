<?php

use App\Http\Controllers\PeoplentechController;
use GuzzleHttp\Psr7\Uri;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// :: means scope resolution operator

// if we goto the route below
// a text will be shown
// Route::get('peoplentech', function () {
//     return 'welcome to pnt';
// });

// now lets do the same using a page
// use view function to locate the page

// lets change the route but page is same
// Route::get('peoplentech', function () {
//     return view('peoplentechView');
// });



// now lets do the same using controller
// the above example only shows it can be done usings this
// but good practise is when url is hit, it will goto controller first
// and will call a method from controller

// Route::get('pnt', function () {
//     return view('peoplentechView');
// });

// lets do the above using controller
// instead of using annonymous function
// we will use controller name and
// the function name of the controller using @

// Route::get('pnt', function () {
//     return view('peoplentechView');
// });

Route::get('pnt', 'PeoplentechController@index');

// Route::get('peoplentech/about',function(){
//     return view('about');
// });

// lets make the same

Route::get('peoplentech/about', 'PeoplentechController@about');

Route::get('pnt/about/form', 'PeoplentechController@form')->name('about.form');;

// lets make it post, sending data , so
// Route::post('pnt/about/preview', 'PeoplentechController@preview');

// lets rename the route,
// now if i do this, i need to change everywhere i used the route
// so lets give it a name

//here we data inserting so post method
Route::post('preview', 'PeoplentechController@preview')
        ->name('preview');
// GET fetch data
// POST data store on server, or sending data, (try form submit in post)
// PUT update data in server
// DELETE delete data from server

Route::get('show', 'PeoplentechController@show')->name('show');;





// create will send public inputed data to server , so get
// store will get data from server, that may or maynot be public, so post

// if there is a variable inside route, u need to use curly brace
Route::get('author/create', 'AuthorController@create')->name('author.create');
Route::post('author/store', 'AuthorController@store')->name('author.store');
Route::get('author/index', 'AuthorController@index')->name('author.index');
Route::get('author/edit/{id}', 'AuthorController@edit')->name('author.edit');
Route::put('author/update/{id}', 'AuthorController@update')->name('author.update');
Route::delete('author/delete/{id}', 'AuthorController@destroy')->name('author.destroy');



Route::get('book/create', 'BookController@create')->name('book.create');
Route::post('book/store', 'BookController@store')->name('book.store');
Route::get('books', 'BookController@index')->name('book.index');
Route::get('book/{id}/edit', 'BookController@edit')->name('book.edit');
Route::put('book/{id}/edit', 'BookController@update')->name('book.update');
Route::delete('book/delete/{id}', 'BookController@destroy')->name('book.destroy');
