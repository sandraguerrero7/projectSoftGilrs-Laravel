<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\StudentController;

/*
Sin uso de controladores
Route::get('/', function () {
    return view('TestView');
});

Route::get('/teacher', function () {
    return view('Admin.Teacher');
});

// Utiliza una ruta compuesta
Route::get('/teacher/list', function () {
    return view('Admin.teacher_list');
});

Route::get('/secretary', function () {
    return view('Admin.Secretary');
});

Route::get('/secretary/list', function () {
    return view('Admin.secretary_list');
});
// Ruta que redirecciona un mensaje
Route::get('/test', function () {
    return 'Esta es una prueba';
});

// Ruta con un solo parametro obligario:
Route::get('/users/{id}', function ($id) {
    return 'Es el usuario con id:' . $id ;
})->where('id', '[0-9]+');

// Ruta con dos parametros obligatorios
Route::get('/student/{name}/{lastname}', function ($name, $lastname) {
    return 'Estudiante con nombre: '. $name . ' apellido:'. $lastname;
});


// Ruta con dos parametros : 1 obligatorio y otro opcional (?)

Route::get('/employeer/{name}/{lastname?}', function ($name, $lastname = null) {
    return 'Empleado con nombre: '. $name . ' <br> apellido:'. $lastname;
});

*/

/*
Route::get('/', [AdminController::class, 'index']);
Route::get('/teacher', [AdminController::class, 'test']);
*/
Route::get('/home', [AdminController::class, 'index'])->name('inicio');

Route::get('/student', [StudentController::class, 'studentList'])->name('estudiante');

Route::get('/teacher', [TeachersController::class, 'teacherList'])->name('profesor');















