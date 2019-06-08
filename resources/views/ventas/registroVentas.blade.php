@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card bg-gradient-default shadow">
                    <div class="card-header bg-transparent">


            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hacerVenta">NUEVA VENTA
            </button>

            <form action="{{route('seleccionProducto')}}" method="post">
                {{csrf_field()}}        
                <div class="form-group">
                    <label for="title">PRODUCTO</label>
                    <select name="nproducto" id="nproducto" size="1" class="form-control">
                        @if($listProds->count())  
                                @foreach($listProds as $listProd)
                        <option value="{{$listProd->nombre_prod}}" selected="">{{$listProd->nombre_prod}}</option>
                                @endforeach
                        @else
                            <label>no hay registros</label>
                        @endif
                    </select>
                    <label for="title">ACCION</label>
                    <select name="accion" id="accion" size="1" class="form-control">
                        <option value="r" selected="">registros</option>
                        <option value="v" selected="">ventas</option>
                    </select>
                        <label>FECHA INICIO</label>
                        <input id="fecha_inicio" name="fecha_inicio" type="date" class="form-control">
                        <label>FECHA DE FINAL</label>
                        <input id="fecha_final" name="fecha_final" type="date" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">VERIFICAR VENTAS</button>
            </form>

            <!--modal inicio-->                  
<div class="modal fade" id="myRegistroTprod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-danger"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">NUEVA VENTA</h4>
      </div>
        <form action="{{route('ventass.store')}}" method="post">    
        {{csrf_field()}}
          <div class="modal-body">
          @include('ventas.formVentas')
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="hacerVenta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-danger"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">EDICION</h4>
      </div>
        <form action="{{route('ventass.update','test')}}" method="post">
        {{method_field('PATCH')}}      
        {{csrf_field()}}
          <div class="modal-body">
          @include('ventas.formVentas')
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
                                <h3 class="mb-0">VENTA DE PRODUCTOS</h3>
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
                                <th>stock</th>
                                <th>ingresos</th>
                                <th>salidas</th>
                                <th>fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($ventas->count())  
                                @foreach($ventas as $venta)
                                <tr>
                                    <td>{{$venta->nombre_inv}}</td>
                                    <td>{{$venta->stock_inv}}</td>
                                    <td>{{$venta->ing_inv}}</td>
                                    <td>{{$venta->sal_inv}}</td>
                                    <td>{{$venta->f_inv}}</td>
                                    <input value="{{$in=$venta->ing_inv+$in}}" type="hidden">
                                    <input value="{{$en=$venta->sal_inv+$en}}" type="hidden">
                                    <td>
                                    </tr>

                                    @endforeach 
                                    @else
                                    <tr>
                                        <td colspan="8">No hay registro !!</td>
                                    </tr>
                                    @endif
                            </tbody>
                        </table>
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                <th>producto</th>
                                <th>stock restante</th>
                                <th>ingresos totales</th>
                                <th>salidas totales</th>
                                <th>fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$venta->nombre_inv}}</td>
                                    <td>{{$venta->stock_inv}}</td>
                                    <td>{{$in}}</td>
                                    <td>{{$en}}</td>
                                    <td>{{$venta->f_inv}}</td>
                                    <td>
                                </tr>
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

@endpush

