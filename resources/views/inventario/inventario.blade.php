@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
	<div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
    							<div class="box-header">
				<h3 class="col-8">Inventario</h3>
			
			</div>
			
        </div>
     </div>
</div>
			<div class="box-body">
				<table class="table table-responsive">
					<thead>
						<tr>

							<th>id</th>
							<th>Producto</th>
							<th>Accion</th>
							<th>Stock</th>
							<th>Ingreso</th>
							<th>Salida</th>
							<th>Fecha</th>
							<th>Estado</th>
							
						</tr>
					</thead>

					<tbody>
						
						@foreach($productos as $producto)  
                                <tr>
                                <td></td>
                                <td>{{$producto->nombre_prod}}</td>
                                <td></td>
                                 <td>{{$producto->cant_prod}}</td> 
                                </tr>
					  @endforeach
					</tbody>
				</table>				
			</div>
		</div>
	</div>
	</div>
	</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-danger "  role="document">
    <div class="modal-content">
      <div class="modal-header "  >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nuevo tipo de evento</h4>
      </div>
	         <form action="{{route('TiposDeAmbiente.store','test')}}" method="post">
     
      		{{csrf_field()}}
	      <div class="modal-body"  >
	      @include('Reservas.FormTipoDeReserva')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save</button>
	      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header  "  style="background-color: orangered;" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar tipos de ambientes</h4>
      </div>
       <form action="{{route('TiposDeAmbiente.update','test')}}" method="post">
      		{{method_field('patch')}}
      		{{csrf_field()}}
	      <div class="modal-body " style="background-color:;"  >
	      	<input type="hidden" name="tipos_de_ambiente_id" id="tip_id" value="">
	      	@include('Reservas.FormTipoDeReserva')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
	       
	        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
	      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					Are you sure you want to delete this?
				</p>
	      		<input type="hidden" name="category_id" id="cat_id" value="">

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
	        <button type="submit" class="btn btn-warning">Yes, Delete</button>
	      </div>
      </form>
    </div>
  </div>
</div>


 @endsection
 




