<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\StudentController;
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
    return "Салом ба хама !";
});

/*Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/student/store', [StudentController::class, 'store'])->name('students.store');*/

Route::resource('student',StudentController::class);


