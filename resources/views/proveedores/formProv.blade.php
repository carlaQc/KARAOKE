		<div class="form-group">
		        	<label for="title">nombre del empleado que registra</label>
		        	<h3>{{ auth()->user()->name }}</h3>
	        	</div>
	        	<input type="hidden" name="id_prov" id="id_prov" value="">
	    <div class="form-group">
		        	<input type="text" class="form-control" name="nombre_prov" id="nombre_prov" placeholder="nombre del Proveedor" value="{{ old('nombre_prov') }}">

		        	@if ($errors->has('nombre_prov'))
                     <span class="help-block">
                    <strong>{{ $errors->first('nombre_prov') }}</strong>
                    </span>
                    @endif
	        	</div>
	    <div class="form-group">
		        	<input type="number" class="form-control" name="nit_prov" id="nit_prov" placeholder="numero de NIT" value="{{ old('nit_prov') }}">

		        	@if ($errors->has('nit_prov'))
                     <span class="help-block">
                    <strong>{{ $errors->first('nit_prov') }}</strong>
                    </span>
                    @endif
	        	</div>
	      <div class="form-group">
		        	<input type="number" class="form-control" name="celular_prov" id="celular_prov" placeholder="numero de celular" value="{{ old('celular_prov') }}">

		        	@if ($errors->has('celular_prov'))
                     <span class="help-block">
                    <strong>{{ $errors->first('celular_prov') }}</strong>
                    </span>
                    @endif
	        	</div>
	    <div class="form-group">
		        	<input type="text" class="form-control" name="direccion_prov" id="direccion_prov" placeholder="direccion" value="{{ old('direccion_prov') }}">

		        	@if ($errors->has('direccion_prov'))
                     <span class="help-block">
                    <strong>{{ $errors->first('direccion_prov') }}</strong>
                    </span>
                    @endif
	        	</div>
