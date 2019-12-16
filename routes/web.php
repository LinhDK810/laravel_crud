<?php

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
Route::resource('share', 'ShareController');
Route::get('detail/{id}', 'ShareController@detail')->name('share.detail');
Route::get('index', 'UserController@index');
Route::get('search', 'UserController@search')->name('user.search');
Route::get('shows', 'UserController@show');
Route::get('search02', 'UserController@searchUser')->name('user.search02');




Route::get('user', function(){
    $user = App\UserTest::create([
    
        'name'=>'Linh'


    ]);
    $modelTest = $user->modelTest()->create([
        'url' => 'jjhjhjhjh'
    ]);

});
Route::get('post', function (){
    $post = App\PostTest::create([
        'title'=>'abc',
        'content'=>'afjksfch'
    ]);
    $modelTest = $post->modelTest()->create([
        'url'=>'qwer'
    ]);
});
