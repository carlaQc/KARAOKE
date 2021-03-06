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
				<h3 class="col-8">Orden</h3>
			
			</div>
			<div class="col">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Nuevo">Nuevos Registros
			</button>                
            
                          
           </div>


        </div>

     </div>

</div>

			<div class="box-body">
				<table class="table table-responsive">
					<thead>
						<tr>

							<th>empleado</th>
							<th>cliente</th>
							<th>fecha</th>
							<th>estado</th>


						</tr>
						
					</thead>

					<tbody>
						 <tr>
						 	@if($nregs->count())  
                                @foreach($nregs as $nreg) 
                                    <td>{{$nreg->name}}</td>
                                    <td>{{$nreg->nombre_cli}}</td>
                                    <td>{{$nreg->fecha}}</td>
                                    <td>{{$nreg->estado}}</td>
                                    <td>  <button type="button" class="btn btn-primary" data-myid="{{$nreg->id_nuevo}}" data-toggle="modal" data-target="#orden">Nuevos Registros de pedido</button></td>
                                    
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

<div class="modal fade" id="orden" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class=" modal-dialog "  role="document">
    <div class="modal-content">
      <div class="modal-header "  >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nueva Orden</h4>
      </div>
	         <form action="{{route('Orden.store','test')}}" method="post">
     
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

@push('js')
<script>

        $('#orden').on('show.bs.modal',function(event){
            var button = $(event.relatedTarget)
            var id_nuevo = button.data('myid') 
            var modal = $(this)
            modal.find('.modal-body #id_nuevo').val(id_nuevo);
        })
    </script>

</div>
@endpush






 @endsection
