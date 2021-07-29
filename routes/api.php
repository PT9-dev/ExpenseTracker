<?php

use App\Http\Controllers\ExpenseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth.api:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('unauthorized', 'ApiController@unauthenticated')->name('invalid');

Route::get("/expenses/all", "ExpenseController@index");  // get all expenses -- admin
Route::get("users/{id}/expenses/{expense}", "ExpenseController@show"); // get single expense for a user
Route::post("/users/{id}/expenses", "ExpenseController@store"); // create single expense for a single user
Route::delete("users/{id}/expenses/{expense}", "ExpenseController@delete"); // delete single expense foor a user
/**
 * User routes
 */
Route::post("/users", "UserController@store"); // create single user
Route::get("/users/{id}/expenses", "UserController@getUserExpenses"); // get all expense of a user
Route::get("/users/all", "UserController@index");  //get all users -- admin
