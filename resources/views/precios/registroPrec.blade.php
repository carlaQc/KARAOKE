@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card bg-gradient-default shadow">
                    <div class="card-header bg-transparent">


            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myRegistroPrec">Nuevo Precio
            </button>

            <!--modal inicio-->                  
<div class="modal fade" id="myRegistroPrec" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-danger"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registrar precios de productos</h4>
      </div>
        <form action="{{route('precio.store')}}" method="post">    
        {{csrf_field()}}
          <div class="modal-body">
          @include('precios.formPrec')
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="myEdicionPrec" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-danger"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar proveedor</h4>
      </div>
        <form action="{{route('precio.update','test')}}" method="post">
        {{method_field('PATCH')}}      
        {{csrf_field()}}
          <div class="modal-body">
          @include('precios.formPrec')
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
                                <th>costo paquete</th>
                                <th>costo unitario</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($precios->count())  
                                @foreach($precios as $precio)  
                                <tr>
                                    <td>{{$precio->cpaquete_prec}}</td>
                                    <td>{{$precio->cunitario_prec}}</td>
                                    <td>
                                    <button type="button" class="btn btn-success" data-myid="{{$precio->id_prec}}" data-mypaquete="{{$precio->cpaquete_prec}}" data-myunitario="{{$precio->cunitario_prec}}" data-toggle="modal" data-target="#myEdicionPrec">edit</button> 
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
        $('#myEdicionPrec').on('show.bs.modal',function(event){
            var button = $(event.relatedTarget)
            var id_prec = button.data('myid')
            var cpaquete_prec = button.data('mypaquete')
            var cunitario_prec = button.data('myunitario')
            var modal = $(this)
            modal.find('.modal-body #id_prec').val(id_prec);
            modal.find('.modal-body #cpaquete_prec').val(cpaquete_prec);
            modal.find('.modal-body #cunitario_prec').val(cunitario_prec);


        })
    </script>

@endpush