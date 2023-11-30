<?php

use App\Http\Controllers\NoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::apiResource('/notes',NoteController::class);
Route::get('/read/{note:id}',[NoteController::class, 'show']); //retrieving a single note by its id

Route::post('/create',[NoteController::class,'store']); //create a new node
Route::get('/index',[NoteController::class,'index']); //retrieving all notes by single user_id
Route::post('/update/{note:id}',[NoteController::class,'update']);//updating a note
Route::delete('/delete/{note:id}',[NoteController::class,'destroy']);//deleting a note


