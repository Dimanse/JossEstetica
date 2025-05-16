
        const btnAbrirModal = document.querySelector('#btn-abrir-modal');
        const modal = document.querySelector('#modal');
        const btnCerrarModal = document.querySelector('#btn-cerrar-modal');

        

        document.addEventListener('DOMContentLoaded', function() {
            iniciarApp();
        });

        function iniciarApp(){
            activarModal();
            
        }
            
    
            
    
            function activarModal(){
                btnAbrirModal.addEventListener("click", ()=>{
                    modal.showModal()
                });
        
                btnCerrarModal.addEventListener("click", ()=>{
                    modal.close()
                });
            }
           
            
            
            

            