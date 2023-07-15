<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\booking;


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

/*--Admin route   */
Route::prefix('admin')->group(function(){

Route::get('/login',[AdminController::class, 'Index'])->name('login_from');

//Route::get('/login/owner',[AdminController::class, 'Login'])->name('admin.login');

Route::get('/dashbord',[AdminController::class, 'Dahboard'])->name('admin.dashboard');

});

//store function route for user creation
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');
// register button route
Route::get('/users/register', [RegisteredUserController::class, 'create'])->name('users.register');


/*--End Admin route---  */
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register');

Route::get('/userdash', [HomeController::class, 'userdash'])->name('userdash');
Route::get('/book', [HomeController::class, 'useBooking'])->name('useBooking');
Route::get('/view', [HomeController::class, 'viewBooking'])->name('viewBooking');
Route::get('/pay', [HomeController::class, 'payment'])->name('payment');
Route::get('/date', [HomeController::class, 'date'])->name('date');

Route::get('/admin', [HomeController::class, 'index'])->name('admin');
Route::get('/admin/about', [HomeController::class, 'about'])->name('admin.about');
Route::get('/admin/pay', [HomeController::class, 'AdmPay'])->name('admin.AdmPay');
Route::get('/admin/Ferry', [HomeController::class, 'homeFerry'])->name('admin.homeFerry');
Route::get('/admin/Avalable', [HomeController::class, 'availF'])->name('admin.availF');
Route::get('/admin/Date', [HomeController::class, 'AdnDate'])->name('admin.AdnDate');

//booking//
Route::get('/booking', [booking::class, 'index'])->name('booking.index');
Route::get('/booking/create', [booking::class, 'create'])->name('booking.create');
Route::post('/booking', [booking::class, 'storeBooking'])->name('booking.store');
Route::get('/booking/{booking}', [booking::class, 'show'])->name('booking.show');


Route::get('/operator', [HomeController::class, 'operator'])->name('operator');


require __DIR__.'/auth.php';
