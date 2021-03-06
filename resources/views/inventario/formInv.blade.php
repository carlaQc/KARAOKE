<div class="form-group">
		        	<label for="title">nombre del empleado que realiza el stock del producto</label>
		        	<h3>{{ auth()->user()->name }}</h3>
	        	</div>
	        	<input type="hidden" name="id_inv" id="id_inv" value="">
	    <div class="form-group">
		        	<input type="text" class="form-control" name="nombre_inv" id="nombre_inv"  value="{{ old('nombre_prod') }}">

		        	@if ($errors->has('nombre_inv'))
                     <span class="help-block">
                    <strong>{{ $errors->first('nombre_inv') }}</strong>
                    </span>
                    @endif
	        	</div>
	    <div class="form-group">
		        	<input type="number" class="form-control" name="cstock_inv" id="cstock_prod" placeholder="cantidad en unidades" value="{{ old('cstock_inv') }}">

		        	@if ($errors->has('cstock_inv'))
                     <span class="help-block">
                    <strong>{{ $errors->first('cstock_inv') }}</strong>
                    </span>
                    @endif
	        	</div>

	        	<!-- hasta aqui dejo el stock del inventario-->
	    <div class="form-group">
	    			<label for="title">fecha de ingreso de productos</label>
		        	<input type="date" class="form-control" name="fing_prod" id="fing_prod" placeholder="fecha de ingreso" value="{{ old('fing_prod') }}">

		        	@if ($errors->has('fing_prod'))
                     <span class="help-block">
                    <strong>{{ $errors->first('fing_prod') }}</strong>
                    </span>
                    @endif
	        	</div>
	    <div class="form-group">
	    	<label for="title">fecha de vencimiento del producto</label>
		        	<input type="date" class="form-control" name="fven_prod" id="fven_prod" placeholder="fecha de vencimiento" value="{{ old('fven_prod') }}">

		        	@if ($errors->has('fven_prod'))
                     <span class="help-block">
                    <strong>{{ $errors->first('fven_prod') }}</strong>
                    </span>
                    @endif
	        	</div>
	        	  <div class="form-group">
		        	<label for="title">Precio</label>
		        	<select name="id_prec" size="1" class="form-control">
		        		@if($precios->count())  
                        @foreach($precios as $precio)
		        		<option value="{{$precio->id_prec}}" selected="">{{$precio->cunitario_prec}}</option>@endforeach 
                        @endif	        			
		        	</select>
	        	</div>
	        	  <div class="form-group">
		        	<label for="title">Proveedores</label>
		        	<select name="id_prov" size="1" class="form-control">
		        		@if($proveedores->count())  
                        @foreach($proveedores as $proveedor)
		        		<option value="{{$proveedor->id_prov}}" selected="">{{$proveedor->nombre_prov}}</option>@endforeach 
                        @endif	        			
		        	</select>
	        	</div>
	        	<div class="form-group">
		        	<label for="title">Tipo de Producto</label>
		        	<select name="id_tprod" size="1" class="form-control">
		        		@if($tproductos->count())  
                        @foreach($tproductos as $tproducto)
		        		<option value="{{$tproducto->id_tprod}}" selected="">{{$tproducto->marca_tprod}}</option>@endforeach 
                        @endif	        			
		        	</select>
	        	</div>