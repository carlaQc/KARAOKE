@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card bg-gradient-default shadow">
                    <div class="card-header bg-transparent">


            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myRegistroProd">Nuevo Producto
            </button>

            <!--modal inicio-->                  
<div class="modal fade" id="myRegistroProd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-danger"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registrar productos</h4>
      </div>
        <form action="{{route('producto.store')}}" method="post">    
        {{csrf_field()}}
          <div class="modal-body">
          @include('productos.formProd')
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="myEdicionProd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-danger"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar productos</h4>
      </div>
        <form action="{{route('producto.update','test')}}" method="post">
        {{method_field('PATCH')}}      
        {{csrf_field()}}
          <div class="modal-body">
          @include('productos.formProd')
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
                                <h3 class="mb-0">LISTA DE PRODUCTOS</h3>
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
                                <th>producto</th>
                                <th>cantidad</th>
                                <th>fecha ingreso</th>
                                <th>fecha vencimiento</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($productos->count())  
                                @foreach($productos as $producto)  
                                <tr>
                                    <td>{{$producto->nombre_prod}}</td>
                                    <td>{{$producto->cant_prod}}</td>
                                    <td>{{$producto->fing_prod}}</td>
                                    <td>{{$producto->fven_prod}}</td>
                                    <td>
                                    <button type="button" class="btn btn-success" data-myid="{{$producto->id_prod}}" data-mynombre="{{$producto->nombre_prod}}"
                                    data-mycant="{{$producto->cant_prod}}" data-myfing="{{$producto->fing_prod}}" data-myfven="{{$producto->fven_prod}}"
                                    data-myproveedor="{{$producto->id_prov}}" data-myprecio="{{$producto->id_prec}}" data-toggle="modal" data-target="#myEdicionProd">edit</button> 
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
        $('#myEdicionProd').on('show.bs.modal',function(event){
            var button = $(event.relatedTarget)
            var id_prod = button.data('myid')
            var nombre_prod = button.data('mynombre')
            var cant_prod = button.data('mycant')
            var fing_prod = button.data('myfing')
            var fven_prod = button.data('myfven')
            var id_prec = button.data('myprecio')
            var id_prov = button.data('myproveedor')
            var modal = $(this)
            modal.find('.modal-body #id_prod').val(id_prod);
            modal.find('.modal-body #nombre_prod').val(nombre_prod);
            modal.find('.modal-body #cant_prod').val(cant_prod);
            modal.find('.modal-body #fing_prod').val(fing_prod);
            modal.find('.modal-body #fven_prod').val(fven_prod);
            modal.find('.modal-body #id_prec').val(id_prec);
            modal.find('.modal-body #id_prov').val(id_prov);


        })
    </script>

@endpush