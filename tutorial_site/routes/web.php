<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', function(){
	return redirect()->route('video.index');
});

Route::get('/', 'VideoController@index')->name('video.index');

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify')->name('login.verify');

Route::get('/registration', 'regController@index')->name('registration.index');
Route::post('/registration', 'regController@store')->name('registration.verify');

//Route::get('/registration','regController@index2')->name('signup');
//Route::post('signup','regController@save')->name('signup');


Route::get('/play', 'PlayController@index')->name('play.index');
Route::get('/play/{id}', 'VideoController@play')->name('video.play');



Route::get('/like', 'VideoController@like')->name('video.like');
Route::get('/unlike', 'VideoController@unlike')->name('video.unlike');

Route::post('/cstore', 'VideoController@commentStore')->name('comment.store');

Route::get('/cmnt', 'VideoController@cmnt');

Route::group(['middleware' => ['sess']], function(){

Route::get('/home', 'HomeController@index')->name('home.index');

//Route::get('/play', 'PlayController@index')->name('play.index');
Route::get('/logout', 'LogoutController@index')->name('logout.index');

Route::get('/remove', 'VideoController@destroy')->name('video.remove');
//Route::get('/play/{id}', 'VideoController@play')->name('video.play');

//Route::get('/upload', 'uploadController@index')->name('video.upload');

Route::get('/upload', 'uploadController@index')->name('upload.index');
Route::post('/upload', 'uploadController@store')->name('upload.store');

Route::group(['middleware' => ['admin']], function(){

Route::get('/videos/delete/{id}', 'VideoController@delete')->name('video.delete');
Route::post('/videos/delete/{id}', 'VideoController@destroy')->name('video.destroy');
Route::get('/list', 'AdminController@userlist')->name('home.list');


});

});
