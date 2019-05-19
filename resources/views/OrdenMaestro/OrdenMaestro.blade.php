@extends('layouts.app', ['title' => __('User Management')])

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
				<h3 class="col-8">Orden</h3>
			
			</div>
			<div class="col">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Nuevo">Nuevos Registros
			</button>                
            
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Orden">Nuevos Registros de pedido
			</button>                
           </div>


        </div>

     </div>

</div>

			<div class="box-body">
				<table class="table table-responsive">
					<thead>
						<tr>

							<th>nombre</th>
							<th>capacidad</th>
							<th>costo por hora</th>
							<th>diponible</th>


						</tr>
						
					</thead>

					<tbody>
						
						
					
					</tbody>


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
	      @include('OrdenMaestro.FormOrdenMaestro')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save</button>
	      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="Orden" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class=" modal-dialog "  role="document">
    <div class="modal-content">
      <div class="modal-header "  >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nueva Orden</h4>
      </div>
	         <form action="{{route('TiposDeAmbiente.store','test')}}" method="post">
     
      		{{csrf_field()}}
	      <div class="modal-body"  >
	      @include('OrdenMaestro.FormOrden')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save</button>
	      </div>
      </form>
    </div>
  </div>
</div>




</div>




 @endsection
