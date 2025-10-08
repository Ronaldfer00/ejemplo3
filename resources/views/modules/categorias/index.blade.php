@extends("layouts.main")
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
                                <h1 class="h3 mb-0 text-gray-800">Categorias</h1>
                            </div>

                           
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h3 class="m-0 font-weight-bold text-primary">Administrar Categorias</h3>
                                    <h6 class="m-0 font-weight-bold text-primary">Ejemplo de tablas e </h6>
                                    <a href="{{route('categoria.create')}}" type="button" class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i>  Agregar Nueva Categoria </a>
                            
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Nombre de la categoria</th>
                                                    <th>Acciones</th>
                                                    
                                              
                                                </tr>
                                            </thead>
                                            
                                            <tfoot>
                                                <tr>
                                                   

                                                  
                                                </tr>
                                            </tfoot>
                                            
                                            <tbody>
                                                @foreach ($items as $item)
                                            <tr>
                                                <td>{{$item->nombre}}</td>
                                                <td>
                                                    <a href="{{route('categorias.edit',$item->id)}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href=" {{route('categorias.show',$item->id)}} " class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                                                </td>
                                            </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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

