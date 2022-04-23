var _qrCode = (function(){

    var generarQrTexto = ()=>{

        $.ajax({
			url: 'assets/classes/qrCode.php',
			type: 'POST',
			dataType: 'json',
			data: {
				"metodo": btoa("generarQrTxt"),
				"parametros": btoa(JSON.stringify({"texto":$('#txt_texto').val(),"tamanio_txt":$('#tamanio_txt').val(),"calidad":$('#ecc_txt').val(),"colorlineal":$('.pcr-result').val(),"logo":$('#rutalogotipo').val()}))
			},
			success: function (data) {
				console.log(data);
				if(data){
					$("#qrGenerated").attr("src",data);
				}
				swal.close();
			},
			error: function (request, status, error) {
				$("#qrGenerated").attr("src",request.responseText);
			}
		});

    }

	var downloadCodeBar = (image)=>{
		var source = image;
		var down = document.createElement('a');
		down.download = "QRcode";
		down.target = '_blank';
		down.href= source;
		down.click();
	}

	return {
		downloadCodeBar:downloadCodeBar,
		generarQrTexto:generarQrTexto
	}
})();


$(document).ready(() => {

	$('#qrGenerated').off('click').click(function(){                                             
		var imgsrc = $(this).attr('src');
		_qrCode.downloadCodeBar(imgsrc);
	 });   

	$('#generaQrTxt').off('click').on('click',()=>{
		if($('#qrGenerated').attr('src') != ''){
			$('#qrGenerated').attr('src') == '';
		}
		_qrCode.generarQrTexto();
	});

	$("#formQrText").submit(function(e) {e.preventDefault();});

});