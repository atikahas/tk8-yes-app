<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BorangController;
use App\Http\Controllers\DropdownController;
  
Route::get('/', function () { return view('welcome'); });

Auth::routes();
  
Route::get('/home', [HomeController::class, 'index'])->name('home');
  
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);

    //Dropdown
    Route::get('getNegeri', [DropdownController::class, 'getNegeri']); 
    Route::get('getParlimen', [DropdownController::class, 'getParlimen']); 
    Route::get('getDun', [DropdownController::class, 'getDun']); 
    Route::get('getDaerah', [DropdownController::class, 'getDaerah']); 
    Route::get('getMukim', [DropdownController::class, 'getMukim']); 
    Route::get('getStatusPerkahwinan', [DropdownController::class, 'getStatusPerkahwinan']); 
    Route::get('getStatusPendidikan', [DropdownController::class, 'getStatusPendidikan']); 
    Route::get('getStatusKediaman', [DropdownController::class, 'getStatusKediaman']); 
    Route::get('getStatusPekerjaan', [DropdownController::class, 'getStatusPekerjaan']); 

    //Borang
    Route::get('borang', [BorangController::class, 'index'])->name('borang.list'); 
    Route::get('borang/create', [BorangController::class, 'create'])->name('borang.create'); 
    Route::post('borang/store', [BorangController::class, 'store'])->name('borang.store'); 
    Route::get('borang/show/{borang}', [BorangController::class, 'show'])->name('borang.show'); 
    Route::get('borang/edit/{borang}', [BorangController::class, 'edit'])->name('borang.edit'); 

});