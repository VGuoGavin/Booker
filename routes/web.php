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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>['auth']],function(){
    Route::get('/meetingroom', [App\Http\Controllers\MeetingRoomController::class, 'index'])->name('meetingroom');
    Route::get('/meeting-room/create', [App\Http\Controllers\MeetingRoomController::class, 'create'])->name('meeting-room.create');
    Route::post('/meeting-room/store', [App\Http\Controllers\MeetingRoomController::class, 'store'])->name('meeting-room.store');
});
