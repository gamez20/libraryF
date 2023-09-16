
const isbnInput = document.getElementById('isbn');
const identificacionUsuarioInput = document.getElementById('identificacionUsuario');
const tipoUsuario = document.getElementById('tipoUsuario');

isbnInput.addEventListener('input', function () {
    this.value = this.value.toUpperCase();
});

identificacionUsuarioInput.addEventListener('input', function () {
    this.value = this.value.replace(/[^0-9]/g, '');
});

tipoUsuario.addEventListener('input', function () {
    this.value = this.value.replace(/[^0-9]/g, '');

    if (this.value.length > 1) {
        this.value = this.value.slice(0, 1);
    }
});

function confirmacion() {
    Swal.fire({
        title: '¿Estás seguro?',
        text: ' crearas un préstamo. ¿Deseas continuar?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, crear préstamo',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            // Si el usuario confirmó, envía el formulario
            document.querySelector('form').submit();
        }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    // Tu código aquí
    document.querySelector('.btn-crear-prestamo').addEventListener('click', function(e) {
        e.preventDefault();
        confirmacion();
    });
});