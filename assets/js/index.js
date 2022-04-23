$(document).ready(function(){
    $('#mostrar_sidebar').on('click', ()=> {
        $('#sidebar-container').show("slow/400fast");
        $('#ocultar_sidebar').show();
        $('#mostrar_sidebar').hide();
    });

    $('#ocultar_sidebar').on('click', ()=> {
        $('#sidebar-container').hide("slow/400fast");
        $('#mostrar_sidebar').show();
        $('#ocultar_sidebar').hide();
    });


});

