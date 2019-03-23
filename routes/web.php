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
Route::get('index','Controller@getIndex');

Route::get('elogin','NvCtrl@getLogin');
Route::post('elogin','NvCtrl@postLogin');

Route::get('elogout','NvCtrl@getLogout');

Route::group(['prefix'=>'admin', 'middleware'=>'adminLogin'],function(){
    //trang chủ
    Route::group(['prefix'=>'trangchu'],function(){
        Route::get('admin','adminCtrl@getIndex');
    });
    //xe
    Route::group(['prefix'=>'xe'],function(){
        Route::get('list','xeCtrl@getList');
        Route::post('list','xeCtrl@postAdd');
        Route::get('list/{id}/del','xeCtrl@getDel');
    });
    //khách hàng
    Route::group(['prefix'=>'khachhang'],function(){
        Route::get('list','KhCtrl@getListKH');
        Route::post('list','KhCtrl@postKh');
        Route::get('list/{id}/del','KhCtrl@getDelKH');
        Route::get('list/{id}/edit','KhCtrl@geteditkh');
        Route::post('list/update','KhCtrl@updatekh');
    });
    //hãng xe
    Route::group(['prefix'=>'hangxe'],function(){
        Route::get('list','HxCtrl@getListHx');
        Route::post('list','HxCtrl@postHx');
        Route::get('list/{id}/del','HxCtrl@getDelHx');
        Route::get('list/{id}/edit','HxCtrl@geteditHx');
        Route::post('list/update','HxCtrl@updateHx');
    });
    //Nhân viên
    Route::group(['prefix'=>'nhanvien'],function(){
        Route::get('list','NvCtrl@getNv');
        Route::post('list','NvCtrl@postNv');
        Route::get('list/{id}/del','NvCtrl@getDelNv');
        Route::get('list/{id}/edit','NvCtrl@geteditNv');
        Route::post('list/update','NvCtrl@updateNv');
    });
    //Biên bản sự cố
    Route::group(['prefix'=>'bienban'],function(){
        Route::get('list','BBCtrl@getBB');
        Route::post('list','BBCtrl@postBB');
        Route::get('list/{id}/del','BBCtrl@getDelBB');
        Route::get('list/{id}/edit','BBCtrl@geteditBB');
        Route::post('list/update','BBCtrl@updateBB');
    });
    //hợp đồng
    Route::group(['prefix'=>'hopdong'],function(){
        Route::get('list','HdCtrl@getHD');
        Route::post('list','HdCtrl@postHD');
        Route::get('list/{id}/del','HdCtrl@getDelHD');
        Route::get('list/{id}/edit','HdCtrl@geteditHD');
        Route::post('list/update','HdCtrl@updateHD');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
