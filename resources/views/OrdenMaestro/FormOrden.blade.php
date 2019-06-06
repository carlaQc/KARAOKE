<div class="box-body">
				<table class="table table-responsive">
					<thead>
<<<<<<< HEAD
					 <tr>					
							<th>producto</th>
							<th>precio</th>
							<th>cantidad</th>
							<th>costo total</th>	
					</tr>
		        	
=======
							<th>producto</th>
							<th>precio (bs)</th>
							<th>unidades</th>	
>>>>>>> 5b952c6847cca5672f48273000bae3ef647f237e
					</thead>
					<tbody>
						<input type="hidden" name="id_nuevo" id="id_nuevo" value="">
		  	        @foreach($pyps as $pyp)
                        <tr>
		        		<td class="col"><input name="{{$namProd}}{{$nprod=$nprod-1}}" type="text" value="{{$pyp->nombre_prod}}"></td>
		        		<td class="col"><input name="{{$precProd}}{{$pprod=$pprod-1}}" type="number" value="{{$pyp->cunitario_prec}}"></td>
		        		<td class="col"><input name="{{$cantProd}}{{$cprod=$cprod-1}}" type="number" ></td>
		        		</tr>
		        	@endforeach 
					</tbody>	
			</table>
		        	

</div> 

