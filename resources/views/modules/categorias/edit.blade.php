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
                                <h1 class="h3 mb-0 text-gray-800">editar categoria Categorias</h1>
                            </div>

                   

                           
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h3 class="m-0 font-weight-bold text-primary">editar categoria Categorias</h3>
                                    
                                    
                                    <form action="{{route ("categorias.update", $item->id)}}" method="POST" >
                                        @csrf
                                        @method('PUT')

                                        <h5 class="m-0 font-weight-bold text-primary">Estas seguro de editar esta categoria </h5><br>

                                        <label for="nombre" >Nombre de Categorias:</label><br>
                                        <input type="text"  value="{{ $item->nombre }}" id="nombre" name="nombre" ><br><br>
                                       
                                         <button type="button" class="btn btn-warning" > <i class="fa-solid fa-pen-to-square"></i>editar</button>
                                      
                                        <a href="{{ route("ventas-categoria") }}" class="btn btn-primary"><i class="fa-solid fa-ban"></i>Cancelar</a>
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