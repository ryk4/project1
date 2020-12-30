<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecipeController;
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


//test pages ========================

//welcome page
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

//home Controller
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Home API


//Recipe API Controller
//Route::middleware('auth:api')->post('/api/sendEmail', [App\Http\Controllers\HomeController::class, 'sendEmail'])->name('sendEmail'); //add routes
Route::post('/api/sendEmail', [App\Http\Controllers\HomeController::class, 'sendEmail'])->name('sendEmail'); //add routes


Route::get('/api/recipes', [App\Http\Controllers\RecipeController::class, 'getAllRecipes']);
//Route::middleware('auth:api')->get('/api/recipes', [App\Http\Controllers\RecipeController::class, 'getAllRecipes']);

Route::get('/api/recipe/tags/{id}', [App\Http\Controllers\RecipeController::class, 'getRecipeTags']);

Route::middleware('auth:api')->post('/api/recipe/create', [App\Http\Controllers\RecipeController::class, 'createRecipe']);
Route::get('/api/recipe/{id}', [App\Http\Controllers\RecipeController::class, 'getRecipe']);
Route::middleware('auth:api')->put('/api/recipe/{id}', [App\Http\Controllers\RecipeController::class, 'updateRecipe']);
Route::middleware('auth:api')->delete('/api/recipe/{id}', [App\Http\Controllers\RecipeController::class, 'deleteRecipe']);

//API tokens Controller
Route::post('/api/token/generate', [App\Http\Controllers\ApiTokenController::class, 'generateToken'])->name('generateToken');

//UI routes
Route::get('/recipe/{id}', [App\Http\Controllers\RecipeController::class, 'recipe'])->name('recipe');
Route::get('/recipes', [App\Http\Controllers\RecipeController::class, 'getRecipesFilter'])->name('recipes');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contactPage']);


