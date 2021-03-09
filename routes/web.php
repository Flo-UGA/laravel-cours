<?php

use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
 *     return view('welcome');
 *     return ['foo' => 'bar'];
 *     $name = request('name');
 *     return $name;
 * });
 *  */
use App\Http\Controllers\PagesController;
Route::get('/', [PagesController::class, 'home']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/welcome', function () {
      return view('welcome');
});


/* Route::get('/welcome', function () {
 *     return view('welcome');
 * });
 * 
 * Route::get('/contact', function () {
 *     $tasks = [
 *         'Aller faire les courses',
 *         'Aller à la gym',
 *         'Dormir'
 *     ];   
 *     return view('contact', [
 *         'tasks' => $tasks,
 *         'name' => 'Titi']);
 * 
 *     return view('welcome')->withTasks($tasks)->withName('test');
 *     
 *     return view('welcome')->with([
 * 	    'tasks' => $tasks,
 * 	    'name' => 'Mon test'
 *     ]); 
 * 
 * });
 * 
 * Route::get('user/{id}', function ($id) {
 *     return 'User '.$id;
 * }); */

use App\Http\Controllers\ProjectController;
/* Route::get('/project', [ProjectController::class, 'index']);
 * Route::get('/project/create', [ProjectController::class, 'create']);
 * Route::post('/project', [ProjectController::class, 'store']); */

Route::resource('project', ProjectController::class); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');;
