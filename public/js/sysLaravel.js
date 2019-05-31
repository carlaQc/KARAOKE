
$(document).on("submit",".formarchivo",function(e){
		e.preventDefault();
		var formu =$(this);
		var nombreform =$(this).attr("id");

		if(nombreform == "f_subir_imagen"){var miurl = "subir_imagen_usuario"; var divresult = "notificacion_result_fci"}
		//iformacion del formulario
		var formData = new formData($("#"+nombreform+"")[0]);
		//realizamos la peticion a ajax
		$.ajax({
				url:miurl,
				type:'POST',
				//datos del formulario
				data:formData,
				//se requiere subir archivos mediante ajax
				cache:false,
				contentType:false,
				processData:false,
				//mientras enviamos el archivo
				beforeSend: function(){
					$("#"+divresult+"").html($("#cargador_empresa").html());
				},
				//una venz finalizado correctamente
				success: function(data){
					$("#"+divresult+"").html(data);
					$("#fotografia_usuario").attr('src', $("#fotografia_usuario").attr('src') + '?' + Math.random() );
				},
				//si a ocurrido un error
				error: function(data){
					alert("ha ocurrido un error");
				}
		});
});