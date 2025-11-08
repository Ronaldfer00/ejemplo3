@extends('layouts.main')
@section('titulo', $titulo)
@section('contenido')
    <div id="wrapper">


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <!-- Begin Page Content -->
                <div id="wrapper">

                    <!-- Sidebar -->
                    @include('shared.sidebar')
                    <!-- End of Sidebar -->

                    <!-- Content Wrapper -->
                    <div id="content-wrapper" class="d-flex flex-column">

                        <!-- Main Content -->
                        <div id="content">

                            <!-- Topbar -->
                            @include('shared.topbar')
                            <!-- End of Topbar -->

                            <!-- Begin Page Content -->
                            <div class="container-fluid">

                                <!-- Page Heading -->
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h1 class="h3 mb-0 text-gray-800">Editar nuevo Producto</h1>
                                </div>




                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h3 class="m-0 font-weight-bold text-primary">Editar Productos</h3>

                                        <form action="{{ route('producto.update', $item->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')

                                            <h5 class="m-0 font-weight-bold text-primary mb-3">Editar Producto</h5>

                                            {{-- Selección de categoría --}}
                                            <div class="form-group mb-3">
                                                <label for="id_categoria"
                                                    class="font-weight-bold text-primary">Categoría</label>
                                                <select name="id_categoria" id="id_categoria" class="form-control" required>
                                                    @foreach ($categorias as $categoria)
                                                        <option value="{{ $categoria->id }}"
                                                            {{ $item->id_categoria == $categoria->id ? 'selected' : '' }}>
                                                            {{ $categoria->nombre }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            {{-- Nombre --}}
                                            <div class="form-group mb-3">
                                                <label for="nombre" class="font-weight-bold text-primary">Nombre del
                                                    Producto</label>
                                                <input type="text" id="nombre" name="nombre"
                                                    value="{{ $item->nombre }}" class="form-control form-control-user"
                                                    placeholder="Ingrese el nombre del producto" required>
                                            </div>

                                            {{-- Descripción --}}
                                            <div class="form-group mb-3">
                                                <label for="descripcion"
                                                    class="font-weight-bold text-primary">Descripción</label>
                                                <input type="text" id="descripcion" name="descripcion"
                                                    value="{{ $item->descripcion }}" class="form-control form-control-user"
                                                    placeholder="Ingrese la descripción del producto" required>
                                            </div>

                                            {{-- Precio y Cantidad --}}
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="precio"
                                                        class="font-weight-bold text-primary">Precio</label>
                                                    <input type="number" id="precio" name="precio"
                                                        value="{{ $item->precio }}" class="form-control form-control-user"
                                                        placeholder="Ingrese el precio" step="0.01" min="0"
                                                        required>
                                                </div>

                                                <div class="col-sm-6">
                                                    <label for="cantidad"
                                                        class="font-weight-bold text-primary">Cantidad</label>
                                                    <input type="number" id="cantidad" name="cantidad"
                                                        value="{{ $item->cantidad }}" class="form-control form-control-user"
                                                        placeholder="Ingrese la cantidad" min="0" required>
                                                </div>
                                            </div>

                                            {{-- Botones --}}
                                            <div class="mt-4">
                                                <button type="submit" class="btn btn-warning">
                                                    <i class="fa-solid fa-pen-to-square"></i> Editar
                                                </button>

                                                <a href="{{ route('ventas-producto') }}" class="btn btn-primary">
                                                    <i class="fa-solid fa-ban"></i> Cancelar
                                                </a>
                                            </div>
                                        </form>


                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">

                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!-- /.container-fluid -->

                        </div>
                        <!-- End of Main Content -->

                        <!-- Footer -->

                        @include('shared.footer')
                        <!-- End of Footer -->

                    </div>
                    <!-- End of Content Wrapper -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



        </div>
        <!-- End of Content Wrapper -->

    </div>
@endsection
