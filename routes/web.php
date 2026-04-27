<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

// =======================
// HALAMAN UTAMA
// =======================
Route::get('/', function () {
    return view('welcome');
});

// =======================
// LOGIN (GET)
// =======================
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// =======================
// LOGIN (POST)
// =======================
Route::post('/login', function (Request $request) {

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {

        // redirect berdasarkan role
        if (Auth::user()->role == 'admin') {
            return redirect('/admin');
        } else {
            return redirect('/user');
        }
    }

    return back()->with('error', 'Login gagal');
});

// =======================
// LOGOUT
// =======================
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});

// =======================
// ROUTE USER
// =======================
Route::middleware(['auth', 'rolecheck:user'])->group(function () {

    Route::get('/user', function () {
        return view('user.dashboard');
    });

});

// =======================
// ROUTE ADMIN
// =======================
Route::middleware(['auth', 'rolecheck:admin'])->group(function () {

    Route::get('/admin', function () {
        return view('admin.dashboard');
    });

    Route::get('/admin/secret', function () {
        return view('admin.secret');
    });

});

