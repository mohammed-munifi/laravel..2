<?php

use App\Http\Controllers\dashboard\categoriescontroller;
use App\Http\Controllers\Homecontroller;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

/*       Route::get('/', function () {
            return view('welcome');
        });*/

  /*  Route::get('/', function () {


        return view('index');
    });*/

Route::get('/',[Homecontroller::class,'index'])->name('Home');

Route::get('/pages/{name}',[Homecontroller::class,'show'])->name('pages');

//Route::view('/dashboard','layouts.dashborad');
Route::get('/dashboard/categories',[categoriescontroller::class,'index'])->name('dashboard.categories.index');



