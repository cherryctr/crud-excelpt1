<?php
use App\Models\Rumah;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('file-export', [App\Http\Controllers\HomeController::class, 'fileExport'])->name('file-export');

Route::get('pdfview',array('as'=>'pdfview','uses'=>'HomeController@pdfExport'));



Route::get('/filter/datakecamatan', [App\Http\Controllers\HomeController::class, 'filterDataKecamatan']);

Route::get('/filter/datakelurahan', [App\Http\Controllers\HomeController::class, 'filterDataKelurahan']);
Route::get('/hapus/{id_rumah}',[App\Http\Controllers\RumahController::class,'delete'])->name('hapusdatarumah');
Route::get('/data/{district_id}/kelurahan',[App\Http\Controllers\HomeController::class,'getKelurahan'])->name('hapusdatarumah');

Route::get('/databykelurahan',[App\Http\Controllers\HomeController::class,'dataindex'])->name('getDataKat');

// GADI PAKAI TAPI MASIH DI BUTUHIN
Route::get('alert/{AlertType}',[App\Http\Controllers\RumahController::class,'alert'])->name('alert');
Route::get('/add/rumahibadah', [App\Http\Controllers\RumahController::class, 'create'])->name('createHome');
Route::post('/post/add/rumahibadah', [App\Http\Controllers\RumahController::class, 'prosestambahrumah'])->name('createHomeIbadah');
Route::get('/edit/rumahibadah/{id_rumah}', [App\Http\Controllers\RumahController::class, 'editData'])->name('editHome');
Route::post('/rumah/edit/{id_rumah}/',[App\Http\Controllers\RumahController::class, 'updateData'])->name('updaterumah');

Route::resource('datatables', 'HomeController', 
[
    'data'  => 'datatables.data',
    'dataindex' => 'datatables',
]);

Route::resource('custom-filter', 'HomeController');

Route::get('dataindex',[App\Http\Controllers\HomeController::class, 'dataindex']);
Route::get('home/json/',[App\Http\Controllers\HomeController::class, 'data']);

Route::get('/proses/logout',  [App\Http\Controllers\Auth\LoginController::class, 'logout']);

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

    Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');


});


// GET PROVINSI  - KOTA
Route::get('/getCity/{provice_id}', [App\Http\Controllers\HomeController::class, 'getCity'] );
Route::get('/getCitys/{provice_id}', [App\Http\Controllers\HomeController::class, 'getCitys'] );
Route::get('/getCitysAll', [App\Http\Controllers\HomeController::class, 'ambilDataSemuaKota'] );

// Route::get('get/{id}', 'CategoryController@get_causes_against_category');

// GET Kecamatan
Route::get('/getDistrict/{city_id}', [App\Http\Controllers\HomeController::class, 'getDistrict'] );

Route::get('/getDistricts/{city_id}', [App\Http\Controllers\HomeController::class, 'getDistricts'] );
// GET Kelurahan
Route::get('/getVillages/{district_id}', [App\Http\Controllers\HomeController::class, 'getVillages'] );
Route::get('/getVillage/{district_id}', [App\Http\Controllers\HomeController::class, 'getVillage'] );



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// ADD USER
Route::post('/add/post/users', [App\Http\Controllers\UserController::class, 'prosestambahuser'])->name('postdatauser');
Route::get('/add/users', [App\Http\Controllers\UserController::class, 'tambahuser'])->name('postuser');

// DeleteUSER
Route::get('/user/hapus/{id}',[App\Http\Controllers\UserController::class, 'hapusDataUser'])->name('hapusdatauser');

// EDIT USER
Route::get('/user/edit/{id}',[App\Http\Controllers\UserController::class, 'updates'])->name('updatedatauser');
Route::post('/user/proses/edit/{id}',[App\Http\Controllers\UserController::class, 'update'])->name('editdatauser');


// Edit profile
Route::get('/user/profile/{id}',[App\Http\Controllers\UserController::class, 'updatesProfile'])->name('updatedataprofile');

Route::post('/user-profile/proses/edit/{id}',[App\Http\Controllers\UserController::class, 'updateProfiles'])->name('editdatauserprofiles');

// EXCEL ROUTE
Route::get('/exportuser',[App\Http\Controllers\UserController::class, 'exportUser'])->name('user.export');

Route::get('/exportData',[App\Http\Controllers\HomeController::class, 'exportData'])->name('rumah.export');
Route::post('/import', [App\Http\Controllers\HomeController::class, 'importData'])->name('import');

Route::get('/download-template',[App\Http\Controllers\HomeController::class, 'downloadTemplate'])->name('rumah.temp');


// Route::delete('/deleted-all', [App\Http\Controllers\RumahController::class, 'deleteAll'])->name('data.deleted');


Route::delete('/deleted-all', [App\Http\Controllers\RumahController::class, 'deleteAll'])->name('data.deleted');
Route::delete('myproductsDeleteAll', 'RumahController@deleteAll');

Auth::routes();




