<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Categorias;
use App\Http\Controllers\Clientes;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DetalleVentas;
use App\Http\Controllers\Productos;
use App\Http\Controllers\Usuarios;
use App\Http\Controllers\Ventas;
use Illuminate\Support\Facades\Route;
Route::get('/crear-admin',[AuthController::class,'crearAdmin'])->name('crear-admin');
Route::get('/', [AuthController::class,'index'])->name('login');//ruta 
Route::post('/logear',[AuthController::class,'logear'])->name('logear');
Route::middleware("auth")->middleware('auth')->group(function(){
    Route::get('/home', [Dashboard::class, 'index'])->name('home');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
   
});

//Route::get('/home', [Dashboard::class,'index'])->name('home');


Route::prefix('ventas')->middleware('auth')->group(function(){
    Route::get('/nueva-venta', [Ventas::class,'index'])->name('ventas-nueva');
});

Route::prefix('detalle_ventas')->middleware('auth')->group(function(){
    Route::get('/detalle-venta', [DetalleVentas::class,'index'])->name('ventas-detalle');
});

Route::prefix('categorias')->middleware('auth')->group(function(){
    Route::get('/categoria', [Categorias::class,'index'])->name('ventas-categoria');

    
    Route::get('/create',[Categorias::class, 'create'])->name('categoria.create');
    Route::post('/store',[Categorias::class, 'store'])->name('categoria.store');

    Route::get('/show/{id}',[Categorias::class, 'show'])->name('categorias.show');//para eliminar
    Route::delete('/destroy/{id}',[Categorias::class, 'destroy'])->name('categorias.destroy');

    Route::get('/edit/{id}',[Categorias::class, 'edit'])->name('categorias.edit');//para eeditar
    Route::put('/update/{id}',[Categorias::class, 'update'])->name('categorias.update');

});

Route::prefix('productos')->middleware('auth')->group(function(){
    Route::get('/producto', [Productos::class,'index'])->name('ventas-producto');

    Route::get('/create',[Productos::class, 'create'])->name('producto.create');
    Route::post('/store',[Productos::class, 'store'])->name('producto.store');
});


Route::prefix('clientes')->middleware('auth')->group(function(){
    Route::get('/cliente', [Clientes::class,'index'])->name('ventas-clientes');

    Route::get('/create',[Clientes::class, 'create'])->name('cliente.create');
    Route::post('/store',[Clientes::class, 'store'])->name('cliente.store');

    Route::get('/show/{id}',[Clientes::class, 'show'])->name('cliente.show');//para eliminar
    Route::delete('/destroy/{id}',[Clientes::class, 'destroy'])->name('cliente.destroy');

    Route::get('/edit/{id}',[Clientes::class, 'edit'])->name('cliente.edit');//para eeditar
    Route::put('/update/{id}',[Clientes::class, 'update'])->name('cliente.update');


});Route::prefix('usuarios')->middleware('auth')->group(function(){
    Route::get('/usuario', [Usuarios::class,'index'])->name('usuarios');//ventas-usuarios

    Route::get('/create',[Usuarios::class, 'create'])->name('usuarios.create');
    Route::post('/store',[Usuarios::class, 'store'])->name('usuarios.store');


    Route::get('/edit/{id}', [Usuarios::class, 'edit'])->name('usuarios.edit');
    Route::put('/update/{id}', [Usuarios::class, 'update'])->name('usuarios.update');
    Route::get('/tbody', [Usuarios::class, 'tbody'])->name('usuarios.tbody');
    Route::get('/cambiar-estado/{id}/{estado}', [Usuarios::class, 'estado'])->name('usuarios.estado');
    Route::get('/cambiar-password/{id}/{password}', [Usuarios::class, 'cambio_password'])->name('usuarios.password');
});