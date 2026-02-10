<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/reservas', function () {
    return view('reservas');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/perfil', function () {
    return view('usuario.perfil');
})->name('perfil');


