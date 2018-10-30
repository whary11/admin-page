// listar los datos en variables
var formulario = $('#formulario'),
    nombre = $('#nombre'),
    telefono = $('#telefono'),
    servicios = $('#servicios'),
    resp = $('#resp')

// Capturar evento de envio 'submit'
formulario.submit(function(event){
    // Evita que la p√°gina se recargue
    event.preventDefault();
    // Validaci√≥n
    if (nombre.val().length < 1) {
        // Notificar error en el campo nombre.
        resp.text('El nombre no es valido.')
    }else if(telefono.val().length < 7 || telefono.val().length > 10){
        resp.text('El telefono no es valido')
    }else if(servicios.val() == ''){
        resp.text('Debe seleccionar un servicio')
    }else{
        // Enviar los datos por AJAX
        $.ajax({
            method: "POST",
            url: "./backend/index.php",
            data: {
                nombre: nombre.val(),
                servicio: servicios.val(),
                telefono: telefono.val(),
                correo: 'pablomart81@gmail.com'
            },
            beforeSend: function( xhr ) {
                resp.text('Enviando solicitud') 
            }
        })
        .done(function( msg ) {

            // Respuesta del servidor
            resp.text('Solicitud enviada, en unos minutos un consultor en $servicios le contactar®¢')


            nombre.val('')
            telefono.val('')
            
        });

        
    }




    event.preventDefault
  
    
})