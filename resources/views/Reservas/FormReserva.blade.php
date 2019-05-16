		<div>
		        	<label for="title">nombre del empleado</label>
		        	<h3>{{ auth()->user()->name }}</h3>
		        	
	        	</div>
	    <div class="form-group">
		        	<label for="title">nombre del cliente</label>
		        	<input type="text" class="form-control" name="nombreCliente" id="nombreCliente">
	        	</div>
	    <div class="form-group">
		        	<label for="title">tipo de reserva</label>
		        	<input type="text" class="form-control" name="TipoReserva" id="TipoReserva">
	        	</div>
	    <div class="form-group">
		        	<label for="title">fecha de reserva</label>
		        	<input type="text" class="form-control" name="FechaReserva" id="FechaReserva">
	        	</div>
	    <div class="form-group">
		        	<label for="title">Pago total</label>
		        	<input type="text" class="form-control" name="PagoTotal" id="PagoTotal">
	        	</div>
	    <div class="form-group">
		        	<label for="title">anticipo</label>
		        	<input type="text" class="form-control" name="Anticipo" id="Anticipo">
	        	</div>
	    <div class="form-group">
		        	<label for="title">estado</label>
		        	<input type="text" class="form-control" name="Estado" id="Estado">
	        	</div>
	     <div class="form-group">
	        		<label for="des">Description</label>
	        		<textarea name="description" id="des" cols="20" rows="5" id='des' class="form-control"></textarea>
	     </div>