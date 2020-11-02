<?php
use Illuminate\Support\Facades\Route;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */

Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'prefix' => 'dashboard',
    'middleware' => [
        'auth:web'
    ],
    'namespace' => 'App\Http\Controllers'
], function () {

    Route::get('/', 'UserProject\UserProjectController@index')->name('projects.list');
    
    Route::get('generator/article-to-video', 'VideoGenerator\ArticleController@showForm')->name('article.video.form');
    Route::post('generator/article-to-video', 'VideoGenerator\ArticleController@getContent')->name('article.video.form.submit');
    
    Route::resource('videos', 'VideoGenerator\VideoController');
    
    Route::get('ajax/video/fetch-content', 'VideoGenerator\ArticleController@getContent')->name('ajax.get.content');
    Route::post('ajax/video/generate', 'VideoGenerator\VideoGenerateController@generateVideo')->name('ajax.video.generate');
    
});