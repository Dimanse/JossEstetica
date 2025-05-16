<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>
<div class="categorias__contenedor-crear">
        <a href="/admin/pacientes" class="categorias__boton">
            <i class="fa-solid fa-circle-arrow-left"></i>
            Volver
        </a>
    </div>
    
    <div class="dashboard__formulario">
        <?php 
            include_once __DIR__ . './../../templates/alertas.php';
        ?>
    
        <form 
            method="POST" 
            action="/admin/membresia/paciente?id=<?php echo $paciente->id; ?>"
            enctype="multipart/form-data" 
            class="formulario">
            <?php include_once __DIR__ . './../../templates/formularioMembresia.php'; ?>
    
            <?php if($fechaActual < $membresiaPaciente->pago_valido){ ?>
                <p class="text-center membresia__header mt-3">La membresia ha sido Abonada y esta dentro de una fecha valida</p>
            <?php } ?>

            <?php if($fechaActual > $membresiaPaciente->pago_valido && $membresiaPaciente->pago_valido > '2000-01-01'){ ?>
                <p class="text-center membresia__header mt-3">La membresia ha caducado</p>
                <!-- <form method="POST" action="/admin/membresia/paciente/eliminar" class="table__formulario">
                    <input type="hidden" name="id" value="<?php echo $membresiaPaciente->id; ?>">
                    <button class="table__accion table__boton--eliminar mt-3" type="submit">
                        <i class="fa-solid fa-circle-xmark"></i>
                        Eliminar
                    </button>
                </form> -->
            <?php } ?>

            <?php if($membresiaPaciente->pago_valido === '2000-01-01'){ ?>
                <input class="formulario__submit formulario__boton" type="submit" value="Finalizar Membresia">
            <?php } ?>
        </form>
    </div>

   