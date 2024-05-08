<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\CloController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\OperationController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\QuestionController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'is_admin'])->group(function () {

    Route::prefix('students')->as('students.')->group(function () {

        Route::get('/', [StudentController::class, 'index'])->name('index');
        Route::get('/create', [StudentController::class, 'create'])->name('create');
        Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [StudentController::class, 'update'])->name('update');
        Route::post('/store', [StudentController::class, 'store'])->name('store');
    });


    Route::prefix('users')->as('users.')->group(function () {

        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/store', [UserController::class, 'store'])->name('store');
    });
    Route::prefix('courses')->as('courses.')->group(function () {

        Route::get('/', [CourseController::class, 'index'])->name('index');
        Route::get('/create', [CourseController::class, 'create'])->name('create');
        Route::post('/store', [CourseController::class, 'store'])->name('store');
        Route::get('/show/{id}', [CourseController::class, 'show'])->name('show');
        Route::get('/report/{id}', [CourseController::class, 'report'])->name('report');
        Route::get('/edit/{id}', [CourseController::class, 'edit'])->name('edit');
        Route::post('/get-report/{id}', [CourseController::class, 'getReport'])->name('get-report');
        Route::post('/update/{id}', [CourseController::class, 'update'])->name('update');
        Route::get('/request-edit/{id}', [CourseController::class, 'requestEdit'])->name('request-edit');
        Route::get('/requests', [CourseController::class, 'getRequestEdit'])->name('requests');
        Route::get('/requests/accept/{id}', [CourseController::class, 'requestAccept'])->name('requests.accept');
        Route::get('/requests/refuse/{id}', [CourseController::class, 'requestRefuse'])->name('requests.refuse');
    });
    Route::prefix('contents')->as('contents.')->group(function () {

        Route::get('/create', [ContentController::class, 'create'])->name('create');
        Route::post('/store', [ContentController::class, 'store'])->name('store');
    });

    Route::prefix('clos')->as('clos.')->group(function () {

        Route::get('/create', [CloController::class, 'create'])->name('create');
        Route::post('/store', [CloController::class, 'store'])->name('store');
    });

    Route::prefix('sections')->as('sections.')->group(function () {

        Route::get('/index', [SectionController::class, 'index'])->name('index');
        Route::get('/create', [SectionController::class, 'create'])->name('create');
        Route::post('/store', [SectionController::class, 'store'])->name('store');
    });

    Route::prefix('operations')->as('operations.')->group(function () {

        Route::get('/index', [OperationController::class, 'index'])->name('index');
        Route::get('/create', [OperationController::class, 'create'])->name('create');
        Route::post('/store', [OperationController::class, 'store'])->name('store');
    });
    Route::prefix('methods')->as('methods.')->group(function () {

        Route::get('/index/{section_id}', [GradeController::class, 'index'])->name('index');
        Route::get('/grades/{method_id}', [GradeController::class, 'showGrades'])->name('grades');
        Route::get('/grade/create/{method_id}', [GradeController::class, 'create'])->name('grades.create');
        Route::post('/grade/store', [GradeController::class, 'store'])->name('grades.store');
    });
    Route::prefix('questions')->as('questions.')->group(function () {

        Route::get('/create/{course_id}', [QuestionController::class, 'create'])->name('create');
        Route::post('/store', [QuestionController::class, 'store'])->name('store');
    });

});

require __DIR__ . '/auth.php';
