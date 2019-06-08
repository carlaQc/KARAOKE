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
						
						@foreach($inventarios as $inventario)  
                                <tr>
                                <td>{{$inventario->id_inv}}</td>
                                <td>{{$inventario->nombre_inv}}</td>
                                 <td>{{$inventario->accion_inv}}</td>
                                 <td>{{$inventario->stock_inv}}</td> 
                                 <td>{{$inventario->ing_inv}}</td>
                                 <td>{{$inventario->sal_inv}}</td>
                                 <td>{{$inventario->f_inv}}</td>
                                 <td></td>
                                </tr>
					  @endforeach
					</tbody>
				</table>				
			</div>
		</div>
	</div>
	</div>
	</div>


 @endsection
 




