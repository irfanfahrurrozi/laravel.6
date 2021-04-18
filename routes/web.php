<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmployeeController;



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
    return view('welcome');
});

Route::get('add-student', [StudentController::class, 'addStudent']);

Route::post('add-student', [StudentController::class, 'storeStudent'])->name('student.store');

Route::get('all-students', [StudentController::class, 'students']);

Route::get('edit-student/{id}', [StudentController::class, 'editStudent']);

Route::post('update-student/', [StudentController::class, 'updateStudent'])->name('student.updated');

Route::get('delete-student/{id}', [StudentController::class, 'deleteStudent']);

Route::get('contact-us', [ContactController::class, 'contact']);

Route::post('send-message', [ContactController::class, 'sendEmail'])->name('contact.send');

Route::get('add-product', [ProductController::class, 'addProducts']);

Route::get('search', [ProductController::class, 'search']);

Route::get('autorcomplete', [ProductController::class, 'autocomplete'])->name('autocomplete');

Route::get('employee', [EmployeeController::class, 'index' ]);