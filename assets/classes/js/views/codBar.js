var _codeBar = (function(){

	var TableListCodebar;

	//************************************************************/

	/* Inicia pestana interacciones */

	_ButtonsDom = [{
		extend:'copyHtml5',
		text:'<i class="fa fa-clipboard"></i> Copiar',
		title:'Informe Detallado Codigos de Barras',
		titleAttr:'Copiar',
		className:'btn btn-app export barras',
		exportOptions: {
			columns: [ 0, 1, 2, 3]
		}
	},
	{
		extend:'excelHtml5',
		text:'<i class="fas fa-file-excel"></i> Excel',
		title:'Informe Detallado Codigos de Barras',
		titleAttr:'Excel',
		className:'btn btn-app export excel',
		exportOptions: {
			columns: [ 0, 1, 2, 3]
		}
	},
	{
		extend:'csvHtml5',
		text:'<i class="fas fa-file-csv"></i> CSV',
		title:'Informe Detallado Codigos de Barras',
		titleAttr:'CSV',
		className:'btn btn-app export csv',
		exportOptions: {
			columns: [ 0, 1, 2, 3]
		}
	}];

	/* Tabla de interacciones generales */
	TableListCodebar = $("#tablaCodebar").DataTable({
		pagingType: "numbers",
		language: _Admin.idioma,
		autoWidth: false,
		searching: true,
		ordering: true,
		paging: true,
		destroy: true,
		select: true,
		pageLength: 10,
		order: [[0,"DESC"]],
		dom: 'f<"ml-auto py-2"B>t<"pagination_datatable"p>',
		buttons: {
				dom: {
				buttonLiner: {
					tag: null
				}
				},
				buttons: _ButtonsDom,  
		},
		"drawCallback": function() {
			$('li.paginate_button').addClass("pagination-lg");
	   	}
	});

	var traerDataCodebar = ()=>{

		$.ajax({
			url: 'assets/classes/codeBar.php',
			type: 'POST',
			dataType: 'json',
			data: {
				"metodo": btoa("traerDataCodebar"),
				"parametros": btoa('')
			},
			beforeSend: function () {
				_Admin.alertaWait();
				TableListCodebar.rows().clear().draw();
			},
			success: function (data) {
				TableListCodebar.rows().clear().draw();
				if(data){
					var optHerramientas;
					$.each(data.datos,(i,e)=>{
						TableListCodebar.row.add([
                            e.idprod,
                            e.nombre,
                            e.cod_bar,
                            e.fecha,
							optHerramientas = '<span onclick="_codeBar.generarImagenCodVar('+e.cod_bar+')" class="btn btn-danger"><i class="fas fa-box"></i></span>'
						]).draw();
					});
				}
				Swal.close();
			},
			error: function (request, status, error) {
				_Admin.alertaError();
				console.log(request.responseText);
			}
		});
	}	

	var generarImagenCodVar = (idcod)=>{
			$('#modalImgCodebar').modal('show');
			JsBarcode("#codeEndGenerate", idcod, {
				format: "codabar",
				lineColor: "#000",
				width: 2,
				height: 50,
				displayValue: true
			});
	}

    var generateCodBar = ()=>{
        $.ajax({
			url: 'assets/classes/codeBar.php',
			type: 'POST',
			dataType: 'json',
			data: {
				"metodo": btoa("generateCodBar"),
				"parametros": btoa($('#contentCodBar').val())
			},
			success: function (data) {
				if(data){
					$('#contentCodBar').val('');
					_codeBar.traerDataCodebar();
				}
				swal.close();
			},
			error: function (request, status, error) {
				_Admin.alertaError();
				console.log(request.responseText);
			}
		});

    }

	var downloadCodeBar = (image)=>{
		var source = image;
		var down = document.createElement('a');
		down.download = "Codebar";
		down.target = '_blank';
		down.href= source;
		down.click();
	}

	return {
		traerDataCodebar:traerDataCodebar,
        generateCodBar:generateCodBar,
		generarImagenCodVar:generarImagenCodVar,
		downloadCodeBar:downloadCodeBar
	}
})();


$(document).ready(() => {

    _codeBar.traerDataCodebar();

	$('#generateCodeBar').off('click').on('click', ()=>{
		if ($('#contentCodBar').val().length == 0) {
			_Admin.alertaError();
		} else {
			_codeBar.generateCodBar();
		}
	});

	$('#codeEndGenerate').click(function(){                                             
		var imgsrc = $(this).attr('src');
		_codeBar.downloadCodeBar(imgsrc);
	 });   

	$('#contentCodBar').keypress(function(e) {
		if(e.which == 13) {
			if ($('#contentCodBar').val().length == 0) {
				_Admin.alertaError();
			} else {
				_codeBar.generateCodBar();
			}
		}
	});

});