<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MyController;

use App\Http\Controllers\AuthController;



use App\Http\Controllers\Logout;
use App\Http\Controllers\Myposts;
use App\Http\Controllers\Coments;
use App\Http\Controllers\Post_uchenik;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

use Illuminate\Http\Request;
use App\Models\Artical;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MyController::class, 'index'])->name('index');

Route::get('/posts', [Myposts::class, 'myposts'])->name('posts');


Route::get('/posts{katalog}', [Myposts::class, 'katalog'])->name('katalog');
Route::group([], function(){
Route::get('/text{id}', [Myposts::class, 'textID'])->name('textID');
Route::post('/text/comments', [Coments::class, 'postComent'])->name('postComent');

});

Route::get('/info', [MyController::class, 'info'])->name('info');

Route::get('/profil{id}', [ProfileController::class, 'profil'])->name('profil.profile');
Route::post('/profil/avatar{id}', [ProfileController::class, 'avatar'])->name('profil.profiles');


Route::get('/newpost', [Post_uchenik::class, 'postArticals'])->name('postArticals');
Route::post('/newpost{id}', [Post_uchenik::class, 'PostUchenik'])->name('PostUchenik');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');

Route::get('/search', [Myposts::class, 'search'])->name('search');

Route::post('/register', [AuthController::class, 'Store']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/logout', [Logout::class, 'logout'])->name('logout');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('delete/{id}',[Myposts::class, 'destroy'])->name('destroy');










