@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card bg-gradient-default shadow">
                    <div class="card-header bg-transparent">


            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myRegistroCliente">Nuevo
            </button>

            <!--modal inicio-->                  
<div class="modal fade" id="myRegistroCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-danger"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nuevo tipo de evento</h4>
      </div>
        <form action="{{route('clientes.store')}}" method="post">    
        {{csrf_field()}}
          <div class="modal-body">
          @include('cliente.formRegistroCli')
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="myEdicionCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-danger"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nuevo tipo de evento</h4>
      </div>
        <form action="{{route('clientes.update','test')}}" method="post">
        {{method_field('PATCH')}}      
        {{csrf_field()}}
          <div class="modal-body">
          @include('cliente.formRegistroCli')
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
      </form>
    </div>
  </div>
</div>



                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">LISTA DE CLIENTES</h3>
                            </div>
                            <div class="col text-right">
                                <a href="#!" class="btn btn-sm btn-primary">See all</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                <th>nombre</th>
                                <th>ci</th>
                                <th>apellido paterno</th>
                                <th>apellido materno</th>
                                <th>celular</th>
                                <th>genero</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($clientes->count())  
                                @foreach($clientes as $cliente)  
                                <tr>
                                    <td>{{$cliente->nombre_cli}}</td>
                                    <td>{{$cliente->ci_cli}}</td>
                                    <td>{{$cliente->paterno_cli}}</td>
                                    <td>{{$cliente->materno_cli}}</td>
                                    <td>{{$cliente->celular_cli}}</td>
                                    <td>{{$cliente->genero_cli}}</td>
                                    <td>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myEdicionCliente">edit</button> 
                                        </td>
                                        <td>
                                        <button type="button" class="btn btn-danger data-toggle="modal" data-target="#myEdicionCliente"">eliminar</button>
                                        </td>
                                    </tr>

                                    @endforeach 
                                    @else
                                    <tr>
                                        <td colspan="8">No hay registro !!</td>
                                    </tr>
                                    @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>


    </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
<script>
        $('#myEdicionCliente').on('show.bs.modal',function(event){
            var button = $(event.relatedTarget)
            var id_cli = button.data('myid')
            var nombre_cli = button.data('mynombre')
            var ci_cli = button.data('myci')
            var paterno_cli = button.data('mypaterno')
            var materno_cli = button.data('mymaterno')
            var celular_cli = button.data('mycelular')
            var genero_cli = button.data('mygenero') 
            var modal = $(this)
            modal.find('.modal-body #id_cli').val(id_cli);
            modal.find('.modal-body #nombre_cli').val(nombre_cli);
            modal.find('.modal-body #ci_cli').val(ci_cli);
            modal.find('.modal-body #paterno_cli').val(paterno_cli);
             modal.find('.modal-body #materno_cli').val(materno_cli);
            modal.find('.modal-body #celular_cli').val(celular_cli);
            modal.find('.modal-body #genero_cli').val(genero_cli);
        })
    </script>

@endpush