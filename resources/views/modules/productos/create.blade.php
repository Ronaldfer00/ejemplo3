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
                                <h1 class="h3 mb-0 text-gray-800">Agregar nuevos productos</h1>
                            </div>

                   

                           
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h3 class="m-0 font-weight-bold text-primary">Administrar productos</h3>
                                   
                                    
                                    <form action="{{route ("producto.store")}}" method="POST" >
                                        @csrf
                                        
                                      


                                        <label for="nombre" >nombre</label>
                                        <input type="text"  id="nombre" name="nombre" ><br>
                                        
                                        <label for="descripcion" >descripcion</label>
                                        <input type="text"  id="descripcion" name="descripcion" ><br>

                                        <label for="precio" >precio</label>
                                        <input type="text"  id="precio" name="precio" ><br>

                                        <label for="cantidad" >cantidad</label>
                                        <input type="text"  id="cantidad" name="cantidad" ><br>

                                       
                                       
                                        <button class="">Guardar</button>
                                      
                                        <a href="{{route("ventas-producto") }}" class="btn btn-primary"><i class="fa-solid fa-trash-can"></i>Cancelar</a>
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