<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('MainPage.MainPage');});
Route::get('/abouts', function () { return view('About.About');})->name('about');
Route::get('/service', function () { return view('Service.Service');});
Route::get('/contact', function () { return view('Contact.Contact');});
Route::get('/project', function () { return view('Project.Project');});
Route::get('/career', function () { return view('Career.Career');});
Route::get('/webdevelopment', function () { return view('Developments.Webdevelopemnt.Web');});
Route::get('/webdesign', function () { return view('Developments.Webdesign.Webdesign');});
Route::get('/mobiledevelopment', function () { return view('Developments.Mobiledevelopemnt.Mobiledevelopment');});
Route::get('/softwaredevelopment', function () { return view('Developments.Softwaredevelopemnt.Softwaredevelopment');});
