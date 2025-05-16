<h2 class="dashboard__heading"><?php echo $titulo ?></h2>

<main class="bloques">
    <div class="bloques__grid">
        <div class="bloque">
            <h3 class="bloque__heading">Pacientes</h3>
            <p class="bloque__texto text-center">Número de pacientes registrados: <?php echo count($pacientes) ?></p>
            <div class="bloque__contenedor mt-3">
                <a class="bloque__boton-mostrar" href="/admin/pacientes?page=1">
                <i class="fa-solid fa-magnifying-glass"></i>
                    Ver
                </a>
            </div>

                
        </div>

        <div class="bloque">
            <h3 class="bloque__heading">Mensajes</h3>
            <p class="bloque__texto text-center">Número de mensajes recibidos: <?php echo count($mensajes) ?></p>
            <div class="bloque__contenedor mt-3">
                <a class="bloque__boton-mostrar" href="/admin/mensajes?page=1">
                <i class="fa-solid fa-magnifying-glass"></i>
                    Ver
                </a>
            </div>
            
        </div>

        <div class="bloque">
            <h3 class="bloque__heading">Tarjetas</h3>
            <p class="bloque__texto text-center">Número de tarjetas activas: <?php echo count($tarjetas) ?></p>
            <div class="bloque__contenedor mt-3">
                <a class="bloque__boton-mostrar" href="/admin/tarjetas">
                <i class="fa-solid fa-magnifying-glass"></i>
                    Ver
                </a>
            </div>
            

                
        </div>

        <div class="bloque">
            <h3 class="bloque__heading">Membresias</h3>
            <p class="bloque__texto text-center">Número de membresias recibidas: <?php echo count($membresias) ?></p>
            <div class="bloque__contenedor mt-3">
                <a class="bloque__boton-mostrar" href="/admin/membresias">
                <i class="fa-solid fa-magnifying-glass"></i>
                    Ver
                </a>
            </div>
             
        </div>
        
    </div>
</main>