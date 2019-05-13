<div class="form-group">
		        	<label for="title">nombre del empleado que registra</label>
		        	<h3>{{ auth()->user()->name }}</h3>
	        	</div>
	        	<input type="hidden" name="id_prec" id="id_prec" value="">
	    <div class="form-group">
		        	<input type="number" class="form-control" name="cpaquete_prec" id="cpaquete_prec" placeholder="costo por paquete" value="{{ old('cpaquete_prec') }}">

		        	@if ($errors->has('cpaquete_prec'))
                     <span class="help-block">
                    <strong>{{ $errors->first('cpaquete_prec') }}</strong>
                    </span>
                    @endif
	        	</div>
	     <div class="form-group">
		        	<input type="number" class="form-control" name="cunitario_prec" id="cunitario_prec" placeholder="costo por unidad" value="{{ old('cunitario_prec') }}">

		        	@if ($errors->has('cunitario_prec'))
                     <span class="help-block">
                    <strong>{{ $errors->first('cunitario_prec') }}</strong>
                    </span>
                    @endif
	        	</div>

