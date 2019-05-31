		<div class="form-group">
		        	<label for="title">nombre del empleado</label>
		       <select type="text" class="form-control" name="name" id="name" value="name" >
		        		<option>
		        		{{ auth()->user()->name }}
		        		</option>
	        	</select>
	        	</div>
	    <div class="form-group">
		        	<label for="title">nombre del cliente</label>
		        	<select name="nombre_cli" size="1" id="nombre_cli" class="form-control">
		          
                        @foreach($clientes as $cliente)
		        		<option value="{{$cliente->nombre_cli}}" selected="">{{$cliente->nombre_cli}}</option>@endforeach 
                       		

		        	</select>
		        </div> 
	    <div class="form-group">
		        	<label for="title">fecha de creacion</label>
		        	<input type="date" class="form-control" name="fecha" id="fecha" required>
	        	</div>  
	    <div class="form-group">
		        	<label for="title">estado</label>
		        	<select class="form-control">
		        		<option>realizado</option>
		        		<option>en espera</option>
		        		<option>cancelado</option>
		        	</select>
	        	</div>