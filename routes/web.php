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

Route::get('/', 'Home\HomeController@index')->name('homepage');
Route::get('/kelas', 'Home\HomeController@kelas')->name('list_kelas');
Route::get('/kelas-detail/{id}', 'Home\HomeController@kelasDetail')->name('kelas.detail');

Route::group(['prefix'=>'user'], function(){
    Route::post('/save-jadwal-to-cart', 'User\UserController@storeToCart')->name('store.jadwalToCart');
});

// Route::get('/kelas/filter', 'Home\HomeController@filterKelas')->name('filter.kelas');
// Route::get('/register', 'Home\HomeController@register');
// Route::get('/login', 'Home\HomeController@login');

Auth::routes();

Route::group(['middleware' => ['role:admin']], function () {
    //
});

Route::group(['middleware' => ['auth']], function () {

    // User Route
    // Route::group(['middleware' => ['role:user']], function () {
        // Route::get('/home', 'HomeController@index')->name('home');
    // });

    // Admin Route Role
    // Route::group(['middleware' => ['role:admin']], function () {
        Route::group(['prefix'=>'admin'], function(){
            Route::get('/dashboard', 'Admin\AdminController@index')->name('admin.dashboard');

            //edit cms
            Route::group(['prefix'=>'cms'], function(){
                Route::get('banner/edit', 'Admin\CmsController@editBanner')->name('admin.edit.banner');
                Route::post('banner/update', 'Admin\CmsController@updateBanner')->name('admin.update.banner');
                Route::get('about/edit', 'Admin\CmsController@editAbout')->name('admin.edit.about');
                Route::post('about/update', 'Admin\CmsController@updateAbout')->name('admin.update.about');
                Route::get('program/list', 'Admin\CmsController@listProgram')->name('admin.list.program');
                Route::get('program/create', 'Admin\CmsController@createProgram')->name('admin.create.program');
                Route::get('program/delete', 'Admin\CmsController@deleteProgram')->name('admin.delete.program');
                Route::get('program/edit/{id}', 'Admin\CmsController@editProgram')->name('admin.edit.program');
                Route::post('program/update/{id}', 'Admin\CmsController@updateProgram')->name('admin.update.program');
                Route::post('program/store', 'Admin\CmsController@storeProgram')->name('admin.store.program');
                Route::get('contact/list', 'Admin\CmsController@listContact')->name('admin.list.contact');
                Route::get('contact/edit/{id}', 'Admin\CmsController@editContact')->name('admin.edit.contact');
                Route::post('contact/update/{id}', 'Admin\CmsController@updateContact')->name('admin.update.contact');
            });

            // edit profile
            Route::group(['prefix'=>'profile'], function(){
                Route::get('edit', 'Admin\AdminController@profile')->name('admin.edit.profile');
                Route::post('update/{id}', 'Admin\AdminController@updateProfile')->name('admin.update.profile');
                Route::get('edit/password', 'Admin\AdminController@editPassword')->name('admin.edit.password');
                Route::post('update/password/{id}', 'Admin\AdminController@updatePassword')->name('admin.update.password');
                Route::post('update/{id}/photo', 'Admin\AdminController@updatePhoto')->name('admin.update.photo');
                Route::get('download/{id}/photo', 'Admin\AdminController@downloadPhoto')->name('admin.download.photo');
            });

            // pengajar
            Route::group(['prefix'=>'pengajar'], function(){
                Route::get('list', 'Admin\PengajarController@listPengajar')->name('admin.list.pengajar');
                Route::get('create', 'Admin\PengajarController@createPengajar')->name('admin.create.pengajar');
                Route::post('delete', 'Admin\PengajarController@deletePengajar')->name('admin.delete.pengajar');
                Route::post('store', 'Admin\PengajarController@storePengajar')->name('admin.store.pengajar');
                Route::get('edit/{id}', 'Admin\PengajarController@editPengajar')->name('admin.edit.pengajar');
                Route::post('edit/{id}', 'Admin\PengajarController@updatePengajar')->name('admin.update.pengajar');
                Route::get('download/{id}/photo', 'Admin\AdminController@downloadPhoto')->name('admin.download.photo');
            });

            // jadwal
            Route::group(['prefix'=>'jadwal'], function(){
                Route::get('list', 'Admin\JadwalKelasController@listJadwal')->name('admin.list.jadwal');
                Route::get('create', 'Admin\JadwalKelasController@createJadwal')->name('admin.create.jadwal');
                Route::post('store', 'Admin\JadwalKelasController@storeJadwal')->name('admin.store.jadwal');
                Route::get('edit/{id}', 'Admin\JadwalKelasController@editJadwal')->name('admin.edit.jadwal');
                Route::post('update/{id}', 'Admin\JadwalKelasController@updateJadwal')->name('admin.update.jadwal');
                Route::get('get_program', 'Admin\JadwalKelasController@getProgram')->name('admin.get.program');
                Route::get('get_pengajar', 'Admin\JadwalKelasController@getPengajar')->name('admin.get.pengajar');

            });


    });
});
