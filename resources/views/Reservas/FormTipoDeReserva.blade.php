		<div class="form-group">
		        	<label for="title">nombre del empleado</label>
		        	<h3 style="color: white ;">{{ auth()->user()->name }}</h3>
		        	
	        	</div>
	    <div class="form-group">
		        	<label for="title">nombre del evento</label>
		        	<input type="text" class="form-control" name="nombre" id="nombre" required>
	        	</div>
	    <div class="form-group">
		        	<label for="title">capacidad</label>
		        	<input type="text" class="form-control" name="capacidad" id="capacidad" required="introduce la capacidad">
	        	</div> 
	    <div class="form-group">
		        	<label for="title">costo por hora</label>
		        	<input type="text" class="form-control" name="costo" id="costo" required> 
	        	</div>
	    <div class="form-group">
		        	<label for="title">disponible</label>
		        	<input type="text" class="form-control" name="disponible" id="disponible" required>
	        	</div>
<!--	     <div class="form-group">
	        		<label for="des">Description</label>
	        		<textarea name="description" id="des" cols="20" rows="5" id='des' class="form-control"></textarea>
	        	</div>
	        	-->