<div class="form-group">
		        	<label for="title">nombre del empleado</label>
		        	<h3>{{ auth()->user()->name }}</h3>
	        	</div>
	        	<input type="hidden" name="id_tprod" id="id_tprod" value="">
	    <div class="form-group">
		        	<input type="text" class="form-control" name="marca_tprod" id="marca_tprod" placeholder="marca del producto" value="{{ old('marca_tprod') }}">

		        	@if ($errors->has('marca_tprod'))
                     <span class="help-block">
                    <strong>{{ $errors->first('marca_tprod') }}</strong>
                    </span>
                    @endif
	        	</div>
		<div class="form-group">
					<label for="title">producto preparado </label>
		        	<input type="checkbox" class="form-control" name="prep_tprod" id="prep_tprod" value="1">

		        	@if ($errors->has('prep_tprod'))
                     <span class="help-block">
                    <strong>{{ $errors->first('prep_tprod') }}</strong>
                    </span>
                    @endif
	        	</div>
	    <div class="form-group">
		        	<input type="text" class="form-control" name="desc_tprod" id="desc_tprod" placeholder="descripcion del tipo de producto" value="{{ old('desc_tprod') }}">

		        	@if ($errors->has('desc_tprod'))
                     <span class="help-block">
                    <strong>{{ $errors->first('desc_tprod') }}</strong>
                    </span>
                    @endif
	        	</div>
	    