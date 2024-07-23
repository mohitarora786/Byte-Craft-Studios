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
Route::get('/digitalmarketing', function () { return view('Developments.DigitalMarketing.Digitalmarket');});
Route::get('/seo', function () { return view('Developments.DigitalMarketing.Seo.Seo');});
Route::get('/socialmedia', function () { return view('Developments.DigitalMarketing.SocialMedia.Socialmedia');});
Route::get('/advancedigitalmarketing', function () { return view('Developments.DigitalMarketing.Advancedigitalmarketing.Advancedigitalmarket');});
Route::get('/affilatemarketing', function () { return view('Developments.DigitalMarketing.Affilatemarketing.Affilatemareket');});
Route::get('/contentmarketing', function () { return view('Developments.DigitalMarketing.Contentmarketing.Contentmarket');});
Route::get('/digitalmarkettrain', function () { return view('Developments.DigitalMarketing.DigitalMarketTrain.DigitalMarkettrain');});
Route::get('/emailmarketing', function () { return view('Developments.DigitalMarketing.Emailmarketing.Emailmarketing');});
Route::get('/ppcadvertising', function () { return view('Developments.DigitalMarketing.PPCadvertising.PPC');});
Route::get('/itSupport', function () { return view('Developments.itsupport.index');});
Route::get('/itconsulting', function () { return view('Developments.itsupport.Itconsulting.ITCONSULTING');});
Route::get('/itsupports', function () { return view('Developments.itsupport.ITSUPPORT.itsupport');});
Route::get('/cloudserbices', function () { return view('Developments.itsupport.Cloudservices.Cloudservices');});
Route::get('/business', function () { return view('Developments.itsupport.Business.Business');});
Route::get('/virtualcto', function () { return view('Developments.itsupport.VirtualCto.Virtualcto');});
Route::get('/enterprise', function () { return view('Developments.itsupport.Enterprise.Enterprise');});
Route::get('/dataService', function () { return view('Developments.Dataservices.DataService');});
Route::get('/aimachinelearning', function () { return view('Developments.Dataservices.AiM.Ai');});
Route::get('/bigdatasolutions', function () { return view('Developments.Dataservices.BigData.BigData');});
Route::get('/dataanalytics', function () { return view('Developments.Dataservices.DataAnalysts.DataAnalysts');});
Route::get('/datamanagement', function () { return view('Developments.Dataservices.DataManagement.DataManagement');});
Route::get('/datascienceconsulting', function () { return view('Developments.Dataservices.DataScience.DataScience');});
Route::get('/edgecomputing', function () { return view('Developments.Dataservices.EdgeComputing.Edgecomputing');});
Route::get('/marketing', function () { return view('FilmServices.Distribution.Distribution');});
Route::get('/postproduction', function () { return view('FilmServices.PostProduction.Postproduction');});
Route::get('/preproduction', function () { return view('FilmServices.Preproduction.Preproduction');});
Route::get('/production', function () { return view('FilmServices.Production.Production');});
Route::get('/video', function () { return view('FilmServices.Videoproduction.Video');});
