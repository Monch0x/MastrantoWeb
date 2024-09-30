const btnEnvio = document.getElementById('enviarCorreo_cliente');
btnEnvio.addEventListener('click', function(e){
    e.preventDefault();
    const nombre_apellido = document.getElementById('nombre_apellido').value;
    const nombre_farmacia = document.getElementById('nombre_farmacia').value;
    const asunto = `Solicitud de Registro de Cliente ${nombre_farmacia}`
    const email = document.getElementById('email').value;
    const telefono = document.getElementById('telefono').value;
    const estado = document.getElementById('estado').value;
    const rif = document.getElementById('rif_cliente').value;

    window.location.href = `mailto:clientesmastranto@gmail.com?subject=${asunto}&body=Nombre%20y%20Apellido%3A%20${nombre_apellido}%0ANombre%20de%20la%20Farmacia%3A%20${nombre_farmacia}%0ARif%3A%20${rif}%0ACorreo%3A%20${email}%0ATel%C3%A9fono%3A%20${telefono}%0AEstado%3A%20${estado}`;
});

const btnEnvio_proveedor = document.getElementById('enviarCorreo_proveedor');
btnEnvio_proveedor.addEventListener('click', function(e){
    e.preventDefault();
    const nombre_apellido_pro = document.getElementById('nombre_apellido_pro').value;
    const asunto_pro = `Solicitud de Registro de Proveedor ${nombre_apellido_pro}`
    //const nombre_proveedor = document.getElementById('nombre_proveedor').value;
    const email_pro = document.getElementById('email_pro').value;
    const telefono_pro = document.getElementById('telefono_pro').value;
    const estado_pro = document.getElementById('estado_pro').value;
    const rif_pro = document.getElementById('rif_proveedor').value;    

    window.location.href = `mailto:comprasmastrantomm@gmail.com?subject=${asunto_pro}&body=Nombre%20y%20Apellido%3A%20${nombre_apellido_pro}%0ARif%3A%20${rif_pro}%0ACorreo%3A%20${email_pro}%0ATel%C3%A9fono%3A%20${telefono_pro}%0AEstado%3A%20${estado_pro}`;    


});