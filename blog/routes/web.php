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

/**
 * 文章管理
 */
Route::namespace('Admin')->group('articles',function () {
    //文章列表
    Route::get('/','ArticlesController@index');
    //文章详情
    Route::get('/{articles}','ArticlesController@info');
    //文章新增显示
    Route::get('/show','ArticlesController@show');
    //文章新增
    Route::post('/','ArticlesController@create');
    //文章编辑显示
    Route::get('/{articles}/edit','ArticlesController@edit');
    //文章编辑
    Route::post('/update','ArticlesController@update');
    //文章软删除
    Route::post('/delete','ArticlesController@delete');
});
