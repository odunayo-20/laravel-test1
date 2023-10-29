<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssignSubjectController;
use App\Http\Controllers\ClassController;
use App\Models\Register;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Models\AssignSubject;

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


Route::get('/', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'AuthLogin']);
Route::get('logout', [AuthController::class, 'AuthLogout']);
Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'insert']);
Route::get('/admin/dashboard', function(){
    return view('admin.dashboard');
})->middleware('admin');
// Route::get('/admin/list', function(){
//     return view('admin.admin.list');
// });
Route::prefix('admin')->group(function(){
    Route::get('login',[AdminController::class,'login'])->name('admin.login');
});

Route::get('admin/add', [AdminController::class, 'add'])->middleware('admin');
Route::post('admin/add', [AdminController::class, 'adminInsert']);
Route::get('admin/list', [AdminController::class, 'list'])->middleware('admin');
Route::get('admin/edit/{id}', [AdminController::class, 'edit']);
Route::post('admin/edit/{id}', [AdminController::class, 'update']);
Route::get('admin/delete/{id}', [AdminController::class, 'delete']);


Route::prefix('staff')->group(function(){
Route::
});


Route::get('admin/subject/list', [SubjectController::class, 'list']);
Route::get('admin/subject/add', [SubjectController::class, 'add']);
Route::post('admin/subject/add', [SubjectController::class, 'insert']);
Route::get('admin/subject/edit/{id}', [SubjectController::class, 'edit']);
Route::post('admin/subject/edit/{id}', [SubjectController::class, 'update']);
Route::get('admin/subject/delete/{id}', [SubjectController::class, 'delete']);

Route::get('admin/class/list', [ClassController::class, 'list']);
Route::get('admin/class/add', [ClassController::class, 'add']);
Route::post('admin/class/add', [ClassController::class, 'insert']);
Route::get('admin/class/edit/{id}', [ClassController::class, 'edit']);
Route::post('admin/class/edit/{id}', [ClassController::class, 'update']);
Route::get('admin/class/delete/{id}', [ClassController::class, 'delete']);
