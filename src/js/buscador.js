document.addEventListener('DOMContentLoaded', function(){
    iniciarApp();
});

function iniciarApp(){
    buscarPorCodigo();
}

function buscarPorCodigo(){
    
    const codigoInput = document.querySelector('#terminoBusqueda');
    const botonInput = document.querySelector('#buscadorButton');
    codigoInput.addEventListener('click', function(e){
        console.log(botonInput);
        // const codigoSeleccionado = e.target.value;
        // window.location = `/tarjeta?id=${codigoSeleccionado}`;
    });
    
    
}