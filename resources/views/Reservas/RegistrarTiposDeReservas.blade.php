@extends('layouts.app', ['title' => __('User Management')])

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
				<h3 class="col-8">Tipos de Ambiente </h3>
			
			</div>

			<div class="col-2 text-right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Nuevo
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
						@foreach($tipos_de_ambiente as $tip)
							<tr>
								
								<td>{{$tip->nombre}}</td>
								<td>{{$tip->capacidad}}</td>
								<td>{{$tip->costo}}</td>
								<td>{{$tip->disponible}}</td>
								
								<td>
									</td>
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
  <div class="modal-dialog modal-danger"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nuevo tipo de evento</h4>
      </div>
		        
   
      		{{csrf_field()}}
	      <div class="modal-body">
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
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Category</h4>
      </div>
      		{{method_field('patch')}}
      		{{csrf_field()}}
	      <div class="modal-body">
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save Changes</button>
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