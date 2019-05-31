<div class="box-body">
				<table class="table table-responsive">
					<thead>
					 <tr>					
							<th>producto</th>
							<th>precio</th>
							<th>cantidad</th>
							<th>costo total</th>	
					</tr>
		        	
					</thead>
					<tbody>

		  	        @foreach($productos as $producto)
                        <tr>
	
		        		<td class="col">{{$producto->nombre_prod}}</td>
		        		<td>precio"{{$producto->id_prec}}"bs</td>
		        		
		        		<td>Cantidad <input name="id_producto" id="Cantidad" size=""></td>
		        		<td><input type="text" name="costototal"> </td>
		        		</tr>
		        		
		        	@endforeach 

					</tbody>
						
			</table>
			<tr>costo final<input type="text" name="costototal"> </tr>
		        	

		         </div> 

