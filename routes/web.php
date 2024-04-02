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

Route::middleware('auth', 'verified')->group(function () {

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

    Route::get('packages/authorization/fortify', function () {
        $pageinfo = [
            'title'    => 'Laravel Fortify',
            'subtitle' => 'Complete Laravel authorization package',
        ];
        return view('packages.authorization.fortify', compact('pageinfo'));
    })->name('fortify');

    Route::get('packages/authorization/spatie-permissions', function () {
        $pageinfo = [
            'title'    => 'Laravel Spatie Permissions',
            'subtitle' => 'Complete Laravel roles and permissions package',
        ];
        return view('packages.authorization.spatie', compact('pageinfo'));
    })->name('spatie');

    Route::get('administration/user-rights/users', function () {
        $pageinfo = [
            'title'    => 'Users administration',
            'subtitle' => 'Website users management',
        ];
        return view('administration.users', compact('pageinfo'));
    })->name('users');

    Route::get('administration/user-rights/roles', function () {
        $pageinfo = [
            'title'    => 'Roles administration',
            'subtitle' => 'User\'s roles management',
        ];
        return view('administration.users', compact('pageinfo'));
    })->name('roles');

    Route::get('administration/user-rights/permissions', function () {
        $pageinfo = [
            'title'    => 'Permissions administration',
            'subtitle' => 'Roles permissions management',
        ];
        return view('administration.users', compact('pageinfo'));
    })->name('permissions');
});
