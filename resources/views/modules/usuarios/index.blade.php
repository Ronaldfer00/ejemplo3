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
                
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h3 class="m-0 font-weight-bold text-primary">Administrar Usuarios</h3>
                                    <h6 class="m-0 font-weight-bold text-primary"> </h6>
                                     <a href="{{route('usuarios.create')}}" type="button" class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i>  Agregar Nueva Usuarios </a>
                            
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Email</th>
                                                    <th>Nombre</th>
                                                    <th>Rol</th>
                                                    <th>Cambio password</th>
                                                    <th>Activo</th>
                                                    <th>Editar</th>
                                                    
                                                    
                                              
                                                </tr>
                                            </thead>

                                                   
                                            
                                            <tbody id="tbody-usuarios">
                                                @include('modules.usuarios.tbody')
                                            </tbody>

                                            
                                            
                                            <tfoot>
                                                <tr>
                                                   

                                                  
                                                </tr>
                                            </tfoot>
                                            
                                                
                                     
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

@include('modules.usuarios.modal_cambiar_password')

@push('scripts')
    <script>

      function recargar_tbody(){
        $.ajax({
          type : "GET",//que tipo va ser 
          url : "{{ route('usuarios.tbody') }}",//donde se dirigira
          success : function(respuesta){
            console.log(respuesta);
          } 
        });
      }

      function cambiar_estado(id, estado) {//madar un id y el estado
        $.ajax({
          type: "GET",
          url : "cambiar-estado/" + id + "/" + estado,
          success: function(respuesta){
            if(respuesta == 1){
              Swal.fire({
                title: 'Exito!',
                text: 'Cambio de estado exitoso!',
                icon: 'success',
                confirmButtonText:'Aceptar'
              });
              recargar_tbody();
            } else {
              Swal.fire({
                title: 'Fallo!',
                text: 'No se llevo a cabo el cambio!',
                icon: 'error',
                confirmButtonText:'Aceptar'
              });
            }
          }
        });
      }

      function agregar_id_usuario(id) {
        $('#id_usuario').val(id);
      }

      function cambio_password(){
        let id = $('#id_usuario').val();
        let password = $('#password').val();

        $.ajax({
          type: "GET",
          url: "cambiar-password/" + id + "/" + password,
          success :function(respuesta){
            if(respuesta == 1){
               Swal.fire({
                title: 'Exito!',
                text: 'Cambio de password exitoso!',
                icon: 'success',
                confirmButtonText:'Aceptar'
              });
              $('#cambiar_password').modal('hide');
              $('#frmPassword')[0].reset();
            } else {
              Swal.fire({
                title: 'Fallo!',
                text: 'Cambio de password no exitoso!',
                icon: 'error',
                confirmButtonText:'Aceptar'
              });
            }
          }
        });

        return false;
      }

      $(document).ready(function(){
        $('.form-check-input').on("change", function(){
          let id = $(this).attr("id");
          let estado = $(this).is(":checked") ? 1 : 0;
          cambiar_estado(id, estado);
        });
      });
    </script>
@endpush