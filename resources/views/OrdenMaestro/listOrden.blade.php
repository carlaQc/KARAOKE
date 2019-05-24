@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    	<div class="container-fluid mt--7">
        <div class="row">
            <div class="col" >
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
    							
    							<div class="box-header">
				<h3 class="col-8">listado de  Ordenes</h3>
			
			</div>
			<div class="col">                 
           </div>


        </div>

     </div>

</div>

			<div class="box-body">
				<table class="table table-responsive">
					<thead>
						<tr>

							<th>producto</th>
							<th>precio</th>
							<th>cantidad</th>
							<th>costo parcial</th>


						</tr>
						
					</thead>

					<tbody>
						 <tr>
						 	@if($ordenes->count())  
                                @foreach($ordenes as $orden) 
                                    <td>{{$orden->producto}}</td>
                                    <td>{{$orden->precio}}</td>
                                    <td>{{$orden->cantidad}}</td>
                                    <td>{{$orden->ctotal}}</td>
                                    
            </tr>
					</tbody>
          <tr>
            </tr>
                     @endforeach 
                     <td>
                 <td>  <button type="button" class="btn btn-primary" data-mycliente="{{$orden->nombre_cli}}" data-myid="{{$orden->id_nuevo}}" data-toggle="modal" data-target="#regOrden">Registrar Orden</button></td>
              </td>
                <td>
                  <label>cliente</label>
                  {{$orden->nombre_cli}}
                </td>
                     @else
                
                       <tr>
                           <td colspan="8">No hay registro !!</td>
                       </tr>
                       @endif


				</table>				
			</div>
		</div>
	</div>
	</div>

<div class="modal fade" id="Nuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-danger "  role="document">
    <div class="modal-content">
      <div class="modal-header "  >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nuevo Registro</h4>
      </div>
	         <form action="{{route('OrdenMaestro.store','test')}}" method="post">
     
      		{{csrf_field()}}
	      <div class="modal-body"  >




	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save</button>
	      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="regOrden" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class=" modal-dialog "  role="document">
    <div class="modal-content">
      <div class="modal-header "  >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nueva Orden</h4>
      </div>
	         <form action="{{route('ListOrden.store','test')}}" method="post">
     
      		{{csrf_field()}}
	      <div class="modal-body"  >
        @include('OrdenMaestro.formRegOrden')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save</button>
	      </div>
      </form>
    </div>
  </div>
</div>
@endsection

@push('js')
<script>

        $('#regOrden').on('show.bs.modal',function(event){
            var button = $(event.relatedTarget)
            var id_nuevo = button.data('myid')
            var nombre_cli = button.data('mycliente') 
            var modal = $(this)
            modal.find('.modal-body #id_nuevo').val(id_nuevo);
            modal.find('.modal-body #nombre_cli').val(nombre_cli);
        })
    </script>

</div>
@endpush