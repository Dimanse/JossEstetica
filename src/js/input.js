// let paso = 1;

document.addEventListener('DOMContentLoaded', function() {
    const inputPagado = document.getElementById('1');
    const inputNoPagado = document.getElementById('0');
    const monto = document.querySelector('#monto');
    const meses = document.querySelector('#meses');
    const fecha = document.querySelector('#valido');
    const observaciones = document.querySelector('#pagos');
    const botones = document.querySelectorAll('.custom-input input');

    inputPagado.addEventListener("click", ()=>{
        fecha.setAttribute('disabled', '');
        observaciones.setAttribute('disabled', '');
        monto.setAttribute('disabled', '');
        meses.setAttribute('disabled', '');
    });
    inputNoPagado.addEventListener("click", ()=>{
        fecha.removeAttribute('disabled', '');
        observaciones.removeAttribute('disabled', '');
        monto.removeAttribute('disabled', '');
        meses.removeAttribute('disabled', '');
    });

    
    });