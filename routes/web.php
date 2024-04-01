<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Yajra\DataTables\Facades\DataTables;

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
    return view('empty');
})->name('index');

Route::get('user', function () {

    $model = User::select('*', 'users.id');
    return DataTables::eloquent($model)->toJson();
})->name('useri');

Route::get('home', function () {
    $pageinfo = [
        'title'    => 'Home',
        'subtitle' => 'Welcome page',
    ];
    return view('home', compact('pageinfo'));
})->name('home');

Route::get('routes', function () {
    $pageinfo = [
        'title'    => 'Routes',
        'subtitle' => 'All about laravel routes',
    ];
    return view('routes', compact('pageinfo'));
})->name('routes');

Route::get('models', function () {
    $pageinfo = [
        'title'    => 'Models',
        'subtitle' => 'All about laravel models',
    ];
    return view('default', compact('pageinfo'));
})->name('models');

Route::get('controllers', function () {
    $pageinfo = [
        'title'    => 'Controllers',
        'subtitle' => 'All about laravel controllers',
    ];
    return view('default', compact('pageinfo'));
})->name('controllers');

Route::get('users', function () {
    $pageinfo = [
        'title'    => 'Users',
        'subtitle' => 'Website users',
    ];
    return view('default', compact('pageinfo'));
})->name('users');

Route::get('roles', function () {
    $pageinfo = [
        'title'    => 'Roles',
        'subtitle' => 'Users roles',
    ];
    return view('default', compact('pageinfo'));
})->name('roles');

Route::get('permissions', function () {
    $pageinfo = [
        'title'    => 'Permissions',
        'subtitle' => 'Roles permissions',
    ];
    return view('default', compact('pageinfo'));
})->name('permissions');
