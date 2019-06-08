$(document).ready(function(){
	$('#alert').hide();
		$('.btn-delete').click(function(e){//cuando realizamos un click, no actualiza la vista, la captura
			e.preventDefault();
			if ( ! confirm("¿Esta seguro de eliminar?")) {
				return false;
			}
			var row = $(this).parents('tr');
			var form = $(this).parents('form');
			var url = form.attr('action');
			$('#alert').show();
			$.get(url, form.serialize(), function(result){
				row.fadeOut();
				$('#alert').html(result.mensaje);
			}).fail(function(){
				$('#alert').html('algo salio mal');
			});
		});
});

$(document).ready(function(){
	$('#alert').hide();
		$('.boton-guardarCliente').click(function(e){//cuando realizamos un click, no actualiza la vista, la captura
			e.preventDefault();
			if ( ! confirm("¿Esta seguro de eliminar?")) {
				return false;
			}
			var row = $(this).parents('tr');
			var form = $(this).parents('form');
			var url = form.attr('action');
			$('#alert').show();
			$.get(url, form.serialize(), function(result){
				row.fadeOut();
				$('#alert').html(result.mensaje);
			}).fail(function(){
				$('#alert').html('algo salio mal');
			});
		});
});

/*
$(document).on("submit",".form_edicionn",function(e){
	var formu=$(this);
	var quien=$(this).attr("id");

	console.log(quien);

	var form = $(this).parents('form');
		$.get(url, form.serialize(), function(result){
				row.fadeOut();
				$('#alert').html(result.mensaje);
			})



});
*/