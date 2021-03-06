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

Route::get('/', 'HomeController@index');

// Route::get('/', function () {
//     // 測試一：取得users資料表的全部資料
//   $users = DB::table('member')
//   		->select('name')
//   		->get();

  
//    return view('home',compact('users'));
// });

Route::get('/test/{Qnum?}', function ($Qnum = null) {
    return view('test');
});

Auth::routes();


Route::resource('/GrowthStrategy/Q2', 'BscController');
Route::resource('/GrowthStrategy/Q3', 'CapabilityController');
Route::resource('/GrowthStrategy/Q4', 'StrategyController');
Route::resource('/GrowthStrategy/Q5', 'GrowthController');
Route::get('/GrowthStrategy/{Qnum?}', function ($Qnum = null) {
    return view('GrowthStrategy');
});

Route::resource('/Allocation/{Qnum?}/strategy', 'AllocationStrategyController');
// Route::get('/Allocation/{Qnum?}', function ($Qnum = null) {
//     return view('AllocationStrategy');
// });


// Route::resource('/Performance/{Qnum?}', 'AllocationStrategyController');


if (Request::segment(2) == "Q8"){
	Route::resource('/Performance/Q8/{PLC?}', 'ResourceController');
}
if (Request::segment(2) == "Q9"){
	Route::resource('/Performance/Q9/{PLC?}', 'PerformanceController');
}
if (Request::segment(2) == "Q10"){
	Route::get('/Performance/Q10/{PLC?}', 'PerformanceController@deavalue');
}
Route::get('/Performance/{Qnum?}', function ($Qnum = null) {
    return view('PerformanceOfCapability');
});
// Route::resource('Performance/{Qnum?}', 'PerformanceController');






Route::get('/{any}','HomeController@index')->where('any',',*');
