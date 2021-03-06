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

    Route::get('/','HomeController@index');

    Route::get('/chart',function(){
        return view('chart');
    });

//crud pegawai

    //index
    Route::get('/pegawai','pegawaiController@index');

    //submit 
    Route::post('/pegawai/submit', 'pegawaiController@store');

    //delete
    Route::delete('/pegawai/delete/{id_user}','pegawaiController@destroy');

    //update
    Route::get('/pegawaiedit{id_user}','pegawaiController@edit');

    Route::post('/pegawaiupdate{id_user}','pegawaiController@update');

    Route::get('/manajemenPegawai',function(){
        return view('manajemenPegawai');
    });

    //SEARCH
    Route::get('/pegawaicari','pegawaiController@cari');
    

//end crud pegawai


// cuti

// Route::get('/pengajuan', function () {
//     return view('pengajuan');
// });
Route::get('/pengajuan','CutiController@show');

// delete
Route::delete('/pengajuan/delete/{id}','CutiController@destroy');
Route::put('/pengajuan/update/{id}','CutiController@updatestatus');

// end cuti

// absen

// Route::get('/dataAbsensi', function () {
//     return view('dataAbsensi');
// });

Route::get('/dataAbsensi','absenController@show');


Route::get('/absencari','AbsenController@cari');

// tutup absen

Route::get('/penugasan','PenugasanController@show');

// Route::get('/slipGaji',function(){
//     return view('slipGaji');
// });

// slipGaji
Route::get('/slipGaji','GajiController@show');



Route::get('/setting',function(){
    return view('setting');
});

Route::get('/editPerusahaan',function(){
    return view('editPerusahaan');
});

//crud edit perusahaan
    Route::post('editPerusahaan/submit','PerusahaanController@store');
//end edit perusahaan

Route::get('/editKaryawan',function(){
    return view('pendidikan');
});

Route::get('/editProfile',function(){
    return view('editProfile');
    });

Route::get('/akun',function(){
    return view('akun');
});

Route::get('/password',function(){
    return view('password');
});

Route::get('/pendidikan',function(){
    return view('pendidikan');
});

Route::get('/arsipFile',function(){
    return view('arsipFile');
});


// Route::get('/ijin',function(){
//     return view('ijin');
// });

// ijin
Route::get('/ijin','IjinController@show');

// delete
Route::delete('/ijin/delete/{id}','IjinController@destroy');



//crud tambah penguasan    

    Route::post('/tambahPenugasan/submit','PenugasanController@store');

    Route::get('/tambahPenugasan',
    'PenugasanController@index');

    Route::delete('/penugasan/delete/{id}','PenugasanController@destroy');

//end tambah penugasan



Route::get('/updateGaji',function(){
    return view('updateGaji');
});


// crud tambah gaji
    Route::post('/updateGaji/submit','GajiController@store');

    Route::get('/updateGaji',
    'GajiController@index');

    Route::delete('/slipGaji/delete/{id}','GajiController@destroy');
//end tambah gaji
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pengajuan/setuju/{id}','CutiController@update');

Route::get('/tolak/{id}','CutiController@tolak');

Route::get('/ijin/setuju/{id}','IjinController@update');

Route::get('/tolaks/{id}','IjinController@tolak');

Route::get('/selesai/{id}','PenugasanController@selesai');

Route::get('/kerja/{id}','PenugasanController@selesai');

Route::get('/penugasan{id_user}','PenugasanController@edit');

Route::post('/penugasanupdate{id_user}','PenugasanController@update');
