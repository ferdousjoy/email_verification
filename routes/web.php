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



Auth::routes();


Route::get('/', 'SiteController@website');
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/dashboard', 'DashBoardController@dashboard');

// menu Section
Route::get('/upper/page', 'DashBoardController@upper')->name('upper');
  Route::post('/upper/insert', 'DashBoardController@upperinsert');
//sub  menu Section
Route::get('/sub/page', 'DashBoardController@sub')->name('sub');
 Route::post('/sub/insert', 'DashBoardController@subinsert');

// menu Section
Route::get('/menu/page', 'DashBoardController@menu')->name('menu');
 Route::post('/menu/insert', 'DashBoardController@menuinsert')->name('menuinsert');
// Banner Section
Route::get('/banner/page', 'DashBoardController@banner')->name('banner');
Route::post('/banner/insert', 'DashBoardController@bannerinsert')->name('bannerinsert');

// service Section
Route::get('/services/{id}', 'SiteController@servicedetail')->name('servicedetail');
Route::get('/service/page', 'DashBoardController@service')->name('service');
Route::post('/service/insert', 'DashBoardController@serviceinsert')->name('serviceinsert');
Route::post('/our/service/detail/service', 'DashBoardController@OurServiceDetailinsert')->name('serviceinsert');






Route::get('OurServiceDetail', 'DashBoardController@OurServiceDetail')->name('OurServiceDetail');
Route::post('/Specific/Update', 'DashBoardController@SpecificUpdate')->name('SpecificUpdate');
Route::post('/Specific/Update/three', 'DashBoardController@SpecificUpdateThree')->name('SpecificUpdateThree');
Route::post('/Specific/Update/two', 'DashBoardController@SpecificUpdateTwo')->name('SpecificUpdateTwo');

Route::get('/Specific/Service/Detail', 'DashBoardController@SpecificServiceDetail')->name('SpecificServiceDetail');

Route::get('/3/Specific', 'DashBoardController@Specificinput3')->name('Specificinput3');
Route::get('/2/Specific', 'DashBoardController@Specificinput2')->name('Specificinput2');
Route::get('/text/editor', 'DashBoardController@texteditor')->name('texteditor');



//  Solution Section
Route::get('/solution/detail/{id}', 'SiteController@solutiondetail')->name('solutiondetail');

Route::get('/solution/page', 'DashBoardController@solution')->name('solution');
Route::post('/solution/insert', 'DashBoardController@solutioninsert')->name('solutioninsert');
//  GT Solution Section
Route::get('/gtsolution/page', 'DashBoardController@gtsolution')->name('gtsolution');
Route::post('/gtsolution/insert', 'DashBoardController@gtsolutioninsert')->name('gtsolutioninsert');

//  CAD Solution Section
Route::get('/cadsolution/page', 'DashBoardController@cadsolution')->name('cadsolution');
Route::post('/cad/solution/insert', 'DashBoardController@cadsolutioninsert')->name('gtsolutioninsert');
//  Biometric Section
Route::get('/biometric/page', 'DashBoardController@biometric')->name('biometric');
Route::get('/biometric/detail/{id}', 'SiteController@biometricdetail')->name('biometricdetail');


Route::post('/biometric/insert', 'DashBoardController@biometricinsert')->name('biometricinsert');

// Ups Section
Route::get('/up/detail/{id}', 'SiteController@updetail')->name('updetail');
Route::get('/ups/page', 'DashBoardController@ups')->name('ups');
Route::post('/ups/insert', 'DashBoardController@upsinsert')->name('upsinsert');

// Fire Section
Route::get('/fire/detail/{id}', 'SiteController@firedetail')->name('firedetail');


Route::get('/fire/page', 'DashBoardController@fire')->name('fire');
Route::post('/fire/insert', 'DashBoardController@fireinsert')->name('fireinsert');

// event Section
Route::get('/event/page', 'DashBoardController@event')->name('event');
Route::post('/event/insert', 'DashBoardController@eventinsert')->name('eventinsert');


// Partner Section
Route::get('/Partner/page', 'DashBoardController@partner')->name('Partner');
Route::post('/Partner/insert', 'DashBoardController@Partnerinsert')->name('Partnerinsert');

// footer Section
Route::get('/footer/page', 'DashBoardController@footer')->name('footer');

Route::post('/footer/insert', 'DashBoardController@footerinsert')->name('footerinsert');
//detail

Route::get('/detail/service', 'SiteController@detailservice')->name('detailservice');
// ALLEDIT
Route::get('/SUBM/{id}','DashBoardController@SUBM')->name('SUBM');
Route::get('/ESS/{id}','DashBoardController@ESS')->name('ESS');
Route::get('/EU/{id}','DashBoardController@EU')->name('EU');
Route::get('/E0/{id}','DashBoardController@E0')->name('E0');
Route::get('/E5/{id}','DashBoardController@E5')->name('E5');
Route::get('/E4/{id}','DashBoardController@E4')->name('E4');
Route::get('/E3/{id}','DashBoardController@E3')->name('E3');
Route::get('/E2/{id}','DashBoardController@E2')->name('E2');
Route::get('/E1/{id}','DashBoardController@E1')->name('E1');
Route::get('/ESD/{id}','DashBoardController@ESD')->name('ESD');
Route::POST('/U1','DashBoardController@U1')->name('U1');
Route::POST('/U2','DashBoardController@U2')->name('U2');
Route::POST('/U3','DashBoardController@U3')->name('U3');
Route::POST('/U4','DashBoardController@U4')->name('U4');
Route::POST('/U5','DashBoardController@U5')->name('U5');
Route::POST('/Um','DashBoardController@Um')->name('Um');
Route::POST('/UU','DashBoardController@UU')->name('UU');
Route::POST('/USS','DashBoardController@USS')->name('USS');
Route::POST('/UPP','DashBoardController@UPP')->name('UPP');


Route::post('OurServiceDetailUpdate/insert', 'DashBoardController@OurServiceDetailUpdate')->name('serviceinsert');
// ALL DELETE
Route::get('/D999/{id}','DashBoardController@D999')->name('D999');
Route::get('/D1/{id}','DashBoardController@D1')->name('D1');
Route::get('/DSD/{id}','DashBoardController@DSD')->name('DSD');
Route::get('/DSDD/{id}','DashBoardController@DSDD')->name('DSDD');
Route::get('/DSDDD/{id}','DashBoardController@DSDDD')->name('DSDDD');


Route::get('/D2/{id}','DashBoardController@D2')->name('D2');
Route::get('/D3/{id}','DashBoardController@D3')->name('D3');
Route::get('/D4/{id}','DashBoardController@D4')->name('D4');
Route::get('/D5/{id}','DashBoardController@D5')->name('D5');
Route::get('/D6/{id}','DashBoardController@D6')->name('D6');
Route::get('/D8/{id}','DashBoardController@D8')->name('D8');
Route::get('/D9/{id}','DashBoardController@D9')->name('D9');
Route::get('/D10/{id}','DashBoardController@D10')->name('D10');
Route::get('/D11/{id}','DashBoardController@D11')->name('D11');
Route::get('/D17/{id}','DashBoardController@D17')->name('D17');
Route::get('/tt/{id}','DashBoardController@tt')->name('tt');
Route::get('/menudelete/{id}','DashBoardController@menudelete')->name('menudelete');




//summernote form
Route::view('/summernote','summernote');

//summernote store route
Route::post('/summernote','SummernoteController@store')->name('summernotePersist');

//summernote display route
Route::get('/summernote_display','SummernoteController@show')->name('summernoteDispay');
