@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card bg-gradient-default shadow">
                    <div class="card-header bg-transparent">


            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myRegistroTprod">NUEVO TIPO DE PRODUCTO
            </button>

            <!--modal inicio-->                  
<div class="modal fade" id="myRegistroTprod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-danger"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">NUEVO TIPO DE PRODUCTO</h4>
      </div>
        <form action="{{route('tproducto.store')}}" method="post">    
        {{csrf_field()}}
          <div class="modal-body">
          @include('tipoProducto.formTprod')
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="myEdicionTprod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-danger"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">EDICION DE TIPO DE PRODUCTO</h4>
      </div>
        <form action="{{route('tproducto.update','test')}}" method="post">
        {{method_field('PATCH')}}      
        {{csrf_field()}}
          <div class="modal-body">
          @include('tipoProducto.formTprod')
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
                                <h3 class="mb-0">LISTA DE TIPO DE PRODUCTOS</h3>
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
                                <th>marca</th>
                                <th>preparable</th>
                                <th>descripcion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($tProductos->count())  
                                @foreach($tProductos as $tProducto)  
                                <tr>
                                    <td>{{$tProducto->marca_tprod}}</td>
                                    <td>{{$tProducto->prep_tprod}}</td>
                                    <td>{{$tProducto->desc_tprod}}</td>
                                    <td>
                                    <button type="button" class="btn btn-success" data-myid="{{$tProducto->id_tprod}}" data-mymarca="{{$tProducto->marca_tprod}}" data-myprep="{{$tProducto->prep_tprod}}" data-mydesc="{{$tProducto->desc_tprod}}" data-toggle="modal" data-target="#myEdicionTprod">edit</button> 
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
        $('#myEdicionTprod').on('show.bs.modal',function(event){
            var button = $(event.relatedTarget)
            var id_tprod = button.data('myid')
            var marca_tprod = button.data('mymarca')
            var prep_tprod = button.data('myprep')
            var desc_tprod = button.data('mydesc') 
            var modal = $(this)
            modal.find('.modal-body #id_tprod').val(id_tprod);
            modal.find('.modal-body #marca_tprod').val(marca_tprod);
            modal.find('.modal-body #prep_tprod').val(prep_tprod);
            modal.find('.modal-body #desc_tprod').val(desc_tprod);
        })
    </script>

@endpush