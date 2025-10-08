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
                                <h1 class="h3 mb-0 text-gray-800">Usuarios</h1>
                                
                                
                            </div>


                            <form action="{{ route("usuarios.store") }}" method="POST">
                                @csrf
                                <label for="name">Nombre del usuario</label>
                                <input type="text" class="form-control" required name="name" id="name">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control" required>                            
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" 
                                class="form-control" required>
                                <label for="rol">Rol de usuario</label>
                                <select name="rol" id="rol" class="form-select">
                                  <option value="">Selecciona el rol</option>
                                  <option value="admin">Admin</option>
                                  <option value="cajero">Cajero</option>
                                </select>
                                <button class="btn btn-primary mt-3">Guardar</button>
                                <a href="{{ route("usuarios") }}" class="btn btn-info mt-3">
                                    Cancelar
                                </a>
                            </form>
                              
                           
                        
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
