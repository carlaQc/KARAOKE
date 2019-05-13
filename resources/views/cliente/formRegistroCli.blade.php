		<div class="form-group">
		        	<label for="title">nombre del empleado</label>
		        	<h3>{{ auth()->user()->name }}</h3>
	        	</div>
	        	<input type="hidden" name="id_cli" id="id_cli" value="">
	    <div class="form-group">
		        	<input type="text" class="form-control" name="nombre_cli" id="nombre_cli" placeholder="nombre del cliente" value="{{ old('nombre_cli') }}">

		        	@if ($errors->has('nombre_cli'))
                     <span class="help-block">
                    <strong>{{ $errors->first('nombre_cli') }}</strong>
                    </span>
                    @endif
	        	</div>
	    <div class="form-group">
		        	<input type="number" class="form-control" name="ci_cli" id="ci_cli" placeholder="numero de carnet" value="{{ old('ci_cli') }}">

		        	@if ($errors->has('ci_cli'))
                     <span class="help-block">
                    <strong>{{ $errors->first('ci_cli') }}</strong>
                    </span>
                    @endif
	        	</div>
	    <div class="form-group">
		        	<input type="text" class="form-control" name="paterno_cli" id="paterno_cli" placeholder="apellido paterno" value="{{ old('paterno_cli') }}">

		        	@if ($errors->has('paterno_cli'))
                     <span class="help-block">
                    <strong>{{ $errors->first('paterno_cli') }}</strong>
                    </span>
                    @endif
	        	</div>
	    <div class="form-group">
		        	<input type="text" class="form-control" name="materno_cli" id="materno_cli" placeholder="apellido materno" value="{{ old('materno_cli') }}">


		        	@if ($errors->has('materno_cli'))
                     <span class="help-block">
                    <strong>{{ $errors->first('materno_cli') }}</strong>
                    </span>
                    @endif
	        	</div>
	    <div class="form-group">
		        	<input type="number" class="form-control" name="celular_cli" id="celular_cli" placeholder="numero de celular" value="{{ old('celular_cli') }}">

		        	@if ($errors->has('celular_cli'))
                     <span class="help-block">
                    <strong>{{ $errors->first('celular_cli') }}</strong>
                    </span>
                    @endif
	        	</div>
	    <div class="form-group">
		        	<label for="title">Genero</label>
		        	<select name="genero_cli" size="1" class="form-control">
		        		@if (old('genero_cli') == "F")
		        		<option value="F" selected="">Femenino</option>
		        		<option value="M" >Masculino</option>
		        		<option value="O">Otros</option>
		        		@else
		        			@if (old('genero_cli') == "M")
		        			<option value="F" >Femenino</option>
		        			<option value="M" selected="">Masculino</option>
		        			<option value="O">Otros</option>
		        			@else
		        				@if (old('genero_cli') == "O")
		        				<option value="F" >Femenino</option>
		        				<option value="M" >Masculino</option>
		        				<option value="O" selected="">Otros</option>
		        				@else
		        				<option value="F" >Femenino</option>
		        				<option value="M" >Masculino</option>
		        				<option value="O" selected="">Otros</option>

		        				@endif

		        			@endif
		        	
		        		@endif
		        			
		        	</select>
	        	</div>