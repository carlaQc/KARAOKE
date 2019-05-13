@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card bg-gradient-default shadow">
                    <div class="card-header bg-transparent">


            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myRegistroProv">Nuevo Proveedor
            </button>

            <!--modal inicio-->                  
<div class="modal fade" id="myRegistroProv" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-danger"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registrar proveedor</h4>
      </div>
        <form action="{{route('proveedor.store')}}" method="post">    
        {{csrf_field()}}
          <div class="modal-body">
          @include('proveedores.formProv')
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="myEdicionProv" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-danger"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar proveedor</h4>
      </div>
        <form action="{{route('proveedor.update','test')}}" method="post">
        {{method_field('PATCH')}}      
        {{csrf_field()}}
          <div class="modal-body">
          @include('proveedores.formProv')
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
                                <h3 class="mb-0">LISTA DE PROVEEDORES</h3>
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
                                <th>NIT</th>
                                <th>celular</th>
                                <th>direccion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($proveedores->count())  
                                @foreach($proveedores as $proveedor)  
                                <tr>
                                    <td>{{$proveedor->nombre_prov}}</td>
                                    <td>{{$proveedor->nit_prov}}</td>
                                    <td>{{$proveedor->celular_prov}}</td>
                                    <td>{{$proveedor->direccion_prov}}</td>
                                    <td>
                                    <button type="button" class="btn btn-success" data-myid="{{$proveedor->id_prov}}" data-mynombre="{{$proveedor->nombre_prov}}" data-mynit="{{$proveedor->nit_prov}}" data-mycelular="{{$proveedor->celular_prov}}" data-mydireccion="{{$proveedor->direccion_prov}}" data-toggle="modal" data-target="#myEdicionProv">edit</button> 
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
        $('#myEdicionProv').on('show.bs.modal',function(event){
            var button = $(event.relatedTarget)
            var id_prov = button.data('myid')
            var nombre_prov = button.data('mynombre')
            var nit_prov = button.data('mynit')
            var celular_prov = button.data('mycelular')
            var direccion_prov = button.data('mydireccion') 
            var modal = $(this)
            modal.find('.modal-body #id_prov').val(id_prov);
            modal.find('.modal-body #nombre_prov').val(nombre_prov);
            modal.find('.modal-body #nit_prov').val(nit_prov);
            modal.find('.modal-body #celular_prov').val(celular_prov);
             modal.find('.modal-body #direccion_prov').val(direccion_prov);

        })
    </script>

@endpush