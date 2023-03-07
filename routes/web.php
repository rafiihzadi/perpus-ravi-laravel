<?php
use App\Http\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Contoller\UserContoller;

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
    return view (' home',[
        "title" => "Home",
        "active" => 'home'
    ]);
    
    Route::get('/pengguna.login');
})->name('login');

Route::get('/about', function () {
    return view(' about', [
        "title" => "About",
        "active" => 'about',
        "name" => "Ravi Hebat",
        "email" => "rafi_ihzadi@gmail.com",
        "image" => "wuifu.jpg"
    ]);
}); 

Route::post('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::match(['get','post'], '/edit/{eid}',[Studentcontroller::class,'edit'])->name('edit_other_name');
Route::group(['middleware' => ['auth:pengguna', 'cekLevel:mhs']], function () {
});

