<section class="correos">
    <h1 class="correos__heading"><?php echo $titulo; ?></h1>
    <p class="correos__descripcion">Bandeja de entrada: <span class="correos__descripcion-span"><?php echo count($mensajes);?> mensajes</span> </p>
    <div class="correos__contenedor">
        <?php foreach($mensajes as $mensaje){ ?>
            <div class="correos__grid">
                <div class="correos__container">

                    <div class="correos__div">
                        <p class="correos__nombre">Nombre:</p>
                        <p class="correos__span"><?php echo $mensaje->nombre . ' ' . $mensaje->apellido; ?></p>
                    </div>
    
                    <div class="correos__div">
                        <p class="correos__nombre">Email:</p>
                        <p class="correos__span"><?php echo $mensaje->email ?></p>
                    </div>
    
                    <div class="correos__div">
                        <p class="correos__nombre">Teléfono:</p>
                        <p class="correos__span"><?php echo $mensaje->telefono ?></p>
                    </div>
    
                    <div class="correos__div">
                        <p class="correos__nombre">Fecha:</p>
                        <p class="correos__span"><?php echo $mensaje->fecha; ?></p>
                    </div>
    
                    <div class="correos__div">
                        <p class="correos__nombre">Hora:</p>
                        <p class="correos__span"><?php echo $mensaje->hora; ?></p>
                    </div>
                </div>
                <div class="correos__mensaje">
                    <div class="correos__mensaje-div">
                        <p class="correos__nombre">Mensaje:</p>
                        <p class="correos__span--mensaje"><?php echo $mensaje->mensaje; ?></p>
                    </div>
                </div>

                <div class="correos__acciones">

                    <a target="_blank" href="https://wa.me/<?php echo $mensaje->telefono; ?>" class="correos__whatsApp"><i class="fa-brands fa-whatsapp"></i></a>

                    <a class="table__accion table__accion--editar" href="mailto: <?php echo $mensaje->email; ?>">
                        <i class="fa-solid fa-paper-plane"></i>
                        contestar
                    </a>

                    <form method="POST" action="/admin/mensaje/eliminar" >
                        <input type="hidden" name="id" value="<?php echo $mensaje->id; ?>">
                        <button class="table__accion table__accion--eliminar" type="submit">
                            <i class="fa-solid fa-circle-xmark"></i>
                            Eliminar
                        </button>
                    </form>
                </div>
                
            </div>
        <?php } ?>   
    </div>
</section>

<?php 
    echo $paginacion;
?>