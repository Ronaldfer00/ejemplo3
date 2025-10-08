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
                                <h1 class="h3 mb-0 text-gray-800">Agregar nuevos Clientes</h1>
                            </div>

                   

                           
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h3 class="m-0 font-weight-bold text-primary">Administrar Clientes</h3>
                                   
                                    
                                    <form action="{{route ("cliente.store")}}" method="POST" >
                                        @csrf
                                        
                                     
                                        <label for="apellido" >apellido:</label>
                                        <input type="text"  id="apellido" name="apellido" ><br>
                                        
                                        <label for="nombre" >nombre:</label>
                                        <input type="text"  id="nombre" name="nombre" ><br>

                                        <label for="email" >email:</label>
                                        <input type="email"  id="email" name="email" ><br>
                                       
                                        <button type="button" class="btn btn-primary"><i class="fa-solid fa-pager"></i>Guardar</button>
                                      
                                        <a href="{{ route("ventas-clientes") }}" class="btn btn-warning">Cancelar</a>
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