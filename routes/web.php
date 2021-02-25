<?php

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
    return view('frontend.Home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about-project', 'HomeController@aboutProject')->name('about-project');

Route::get('/about-team', 'HomeController@aboutTeam')->name('about-team');

Route::get('/about-associated-partners', 'HomeController@aboutAssociatedPartners')->name('about-associated-partners');

Route::get('/deliverables-ge-graduate-diploma', 'HomeController@deliverablesGEGraduateDiploma')->name('deliverables-ge-graduate-diploma');

Route::get('/deliverables-educational-ge-pilot-plant', 'HomeController@deliverablesEducationalGEPilotPlant')->name('deliverables-educational-ge-pilot-plant');

Route::get('/deliverables-integrated-ge-laboratories', 'HomeController@deliverablesIntegratedGELaboratories')->name('deliverables-integrated-ge-laboratories');

Route::get('/deliverables-egyptian-Society-of-ge', 'HomeController@deliverablesEgyptianSocietyOfGE')->name('deliverables-egyptian-Society-of-ge');

Route::get('/events-meetings', 'HomeController@eventsMeetings')->name('events-meetings');

Route::get('/events-trainings', 'HomeController@eventsTrainings')->name('events-trainings');

Route::get('/events-dissemination', 'HomeController@eventsDissemination')->name('events-dissemination');

Route::get('/project-newsletters', 'HomeController@projectNewsletters')->name('project-newsletters');

Route::get('/contact-us', 'HomeController@contactUs')->name('contact-us');

