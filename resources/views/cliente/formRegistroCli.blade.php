		<div class="form-group">
		        	<label for="title">nombre del empleado</label>
		        	<h3>{{ auth()->user()->name }}</h3>
	        	</div>
	    <div class="form-group">
		        	<input type="text" class="form-control" name="nombre_cli" id="nombre_cli" placeholder="nombre del cliente">

		        	@if ($errors->has('nombre_cli'))
                     <span class="help-block">
                    <strong>{{ $errors->first('nombre_cli') }}</strong>
                    </span>
                    @endif
	        	</div>
	    <div class="form-group">
		        	<input type="text" class="form-control" name="ci_cli" id="ci_cli" placeholder="numero de carnet">

		        	@if ($errors->has('ci_cli'))
                     <span class="help-block">
                    <strong>{{ $errors->first('ci_cli') }}</strong>
                    </span>
                    @endif
	        	</div>
	    <div class="form-group">
		        	<input type="text" class="form-control" name="paterno_cli" id="paterno_cli" placeholder="apellido paterno">

		        	@if ($errors->has('paterno_cli'))
                     <span class="help-block">
                    <strong>{{ $errors->first('paterno_cli') }}</strong>
                    </span>
                    @endif
	        	</div>
	    <div class="form-group">
		        	<input type="text" class="form-control" name="materno_cli" id="materno_cli" placeholder="apellido materno">


		        	@if ($errors->has('materno_cli'))
                     <span class="help-block">
                    <strong>{{ $errors->first('materno_cli') }}</strong>
                    </span>
                    @endif
	        	</div>
	    <div class="form-group">
		        	<input type="text" class="form-control" name="celular_cli" id="celular_cli" placeholder="numero de celular">

		        	@if ($errors->has('celular_cli'))
                     <span class="help-block">
                    <strong>{{ $errors->first('celular_cli') }}</strong>
                    </span>
                    @endif
	        	</div>
	    <div class="form-group">
		        	<label for="title">Genero</label>
		        	<select name="genero_cli" size="1" class="form-control">
		        		<option value="M" selected>Masculino</option>
		        		<option value="F" >Femenino</option>
		        		<option value="O">Otros</option>
		        	</select>
	        	</div>