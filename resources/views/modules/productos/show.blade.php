@extends('layouts.main')
@section('titulo', $titulo)
@section('contenido')
<div id="wrapper">
    @include('shared.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            @include('shared.topbar')
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Eliminar Producto</h1>
                </div>

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">Confirmar eliminación</h3>

                        <form action="{{ route('producto.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <h5 class="m-0 font-weight-bold text-primary mb-3">
                                ¿Estás seguro de eliminar el producto 
                            </h5>

                            {{-- Categoría --}}
                            <div class="form-group mb-3">
                                <label for="id_categoria" class="font-weight-bold text-primary">Categoría</label>
                                <input type="text" class="form-control" value="{{ $item->categoria->nombre ?? 'Sin categoría' }}" readonly>
                            </div>

                            {{-- Nombre --}}
                            <div class="form-group mb-3">
                                <label for="nombre" class="font-weight-bold text-primary">Nombre del Producto</label>
                                <input type="text" class="form-control" value="{{ $item->nombre }}" readonly>
                            </div>

                            {{-- Descripción --}}
                            <div class="form-group mb-3">
                                <label for="descripcion" class="font-weight-bold text-primary">Descripción</label>
                                <input type="text" class="form-control" value="{{ $item->descripcion }}" readonly>
                            </div>

                            {{-- Precio y Cantidad --}}
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="precio" class="font-weight-bold text-primary">Precio</label>
                                    <input type="number" class="form-control" value="{{ $item->precio }}" readonly>
                                </div>

                                <div class="col-sm-6">
                                    <label for="cantidad" class="font-weight-bold text-primary">Cantidad</label>
                                    <input type="number" class="form-control" value="{{ $item->cantidad }}" readonly>
                                </div>
                            </div>

                            {{-- Botones --}}
                            <div class="mt-4">
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa-solid fa-trash-can"></i> Eliminar
                                </button>
                                <a href="{{ route('ventas-producto') }}" class="btn btn-primary">
                                    <i class="fa-solid fa-ban"></i> Cancelar
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @include('shared.footer')
        </div>
    </div>
</div>
@endsection
