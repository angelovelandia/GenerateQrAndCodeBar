var _Admin =  (function (){
   
    var idioma =

    {
        "sProcessing":     "Procesando...",
        "sLengthMenu":     "Mostrar _MENU_ registros",
        "sZeroRecords":    "No se encontraron resultados",
        "sEmptyTable":     "Ning&uacute;n dato disponible en esta tabla",
        "sInfo":           "Mostrando del _START_ al _END_ de un total de _TOTAL_ registros",
        "sInfoEmpty":      "Mostrando del 0 al 0 de un total de 0 registros",
        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":    "",
        "sSearch":         "Buscar&nbsp;",
        "sUrl":            "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
    
        "buttons": {
            "copyTitle": 'Informacion copiada',
            "copySuccess": {
                "_": '%d filas copiadas al portapapeles',
                "1": '1 fila copiada al portapapeles'
            }
        }
    }; 

   var traerVista = (vista) =>{
      $('#vista_general').html('');
      var ruta = 'assets/classes/views/'+vista+'.php';
      window.localStorage.setItem('vista', vista);
      $.ajax({
         url: ruta,
         beforeSend:function(){
            $('#page-loader').fadeOut(800);
          },
         success:function (data){
            $('#vista_general').html(data);
            $('#sidebar-container').hide("slow/400fast");
            $('#mostrar_sidebar').show();
            $('#ocultar_sidebar').hide();
         },
         error: function(err){
            swal("Error!", "Modulo no encontrado",_err);
         }
      });
   }

   var alertaWait = ()=>{
      Swal.fire({
         title: 'Cargando...',
         icon: 'warning',
         showCancelButton: false,
         showConfirmButton: false
       });
   }

   var alertaError = ()=>{
      Swal.fire({
         icon: 'error',
         title: 'Oops...',
         text: 'Por favor verifique los datos',
      });
   }


         return {
            idioma:idioma,
            traerVista:traerVista,
            alertaWait:alertaWait,
            alertaError:alertaError
         }

})(jQuery);


$(document).ready(function(){
   var vista = 'index';
   if(localStorage.vista != undefined){
      vista = localStorage.vista;
   }
      _Admin.traerVista(vista);
});