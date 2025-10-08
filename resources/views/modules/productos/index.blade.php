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
                                <h1 class="h3 mb-0 text-gray-800">Productos</h1>
                                
                            </div>
                                                     
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h3 class="m-0 font-weight-bold text-primary">Administrar Productos</h3>
                                        <h6 class="m-0 font-weight-bold text-primary"> </h6>
                                        <a href="{{route('producto.create')}}" type="button" class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i>  Agregar Nuevo Producto </a>
                                
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th>nombre</th>
                                                        <th>descripcion</th>
                                                        <th>cantidad</th>
                                                        <th>precio</th>
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
                                                    <td>{{$item->descripcion}}</td>
                                                    <td>{{$item->cantidad}}</td>
                                                    <td>{{$item->precio}}</td>
                                                    <td>
                                                        <a href="" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                                        <a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                                                    </td>
                                                </tr>
                                               
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
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