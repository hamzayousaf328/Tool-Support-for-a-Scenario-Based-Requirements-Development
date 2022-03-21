<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [AuthController::class,'index']);
Route::get('signup', [AuthController::class,'signup']);
Route::post('login', [AuthController::class,'login'])->name('login');
Route::post('registration', [AuthController::class,'registradd_problemation'])->name('registration');
Route::get('logout', [AuthController::class,'logout'])->name('logout');

Route::get('home', [HomeController::class,'index'])->name('home');
Route::post('create_project', [HomeController::class,'create_project'])->name('create_project');
Route::get('project_detail', [HomeController::class,'project_detail'])->name('project_detail');
Route::get('requirement', [HomeController::class,'requirement'])->name('requirement');
Route::post('create_requirement', [HomeController::class,'create_requirement'])->name('create_requirement');
Route::get('concept', [HomeController::class,'concept'])->name('concept');
Route::post('create_concept', [HomeController::class,'create_concept'])->name('create_concept');
Route::get('overview', [HomeController::class,'overview'])->name('overview');
Route::get('activity_overview', [HomeController::class,'activity_overview'])->name('activity_overview');
Route::post('create_problem', [HomeController::class,'create_problem'])->name('create_problem');
Route::get('problem', [HomeController::class,'problem'])->name('problem');
Route::post('add_problem', [HomeController::class,'add_problem'])->name('add_problem');
Route::get('activity', [HomeController::class,'activity'])->name('activity');
Route::post('add_activity', [HomeController::class,'add_activity'])->name('add_activity');
Route::get('claims', [HomeController::class,'claims'])->name('claims');
Route::post('add_claims', [HomeController::class,'add_claims'])->name('add_claims');
Route::get('problem_claims', [HomeController::class,'problem_claims'])->name('problem_claims');
Route::post('add_problem_claims', [HomeController::class,'add_problem_claims'])->name('add_problem_claims');
Route::post('add_highlighted_problem_claims', [HomeController::class,'add_highlighted_problem_claims'])->name('add_highlighted_problem_claims');
Route::get('diagram', [HomeController::class,'diagram'])->name('diagram');
Route::post('highlighted_problem', [HomeController::class,'highlighted_problem'])->name('highlighted_problem');
Route::get('highlighted_problem_claims', [HomeController::class,'highlighted_problem_claims'])->name('highlighted_problem_claims');
Route::post('highlighted_activity', [HomeController::class,'highlighted_activity'])->name('highlighted_activity');
Route::get('highlighted_activity_claims', [HomeController::class,'highlighted_activity_claims'])->name('highlighted_activity_claims');
Route::post('add_highlighted_activity_claims', [HomeController::class,'add_highlighted_activity_claims'])->name('add_highlighted_activity_claims');
