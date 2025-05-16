<main class="tarjeta bg-beige">
    <h2 class="dashboard__heading"><?php echo $titulo; ?></h2>
    <div class="categorias__contenedor-crear--between">
        <?php if(is_admin()){?>
            <form method="POST" action="/admin/tarjeta/eliminar" class="table__formulario">
                <input type="hidden" name="id" value="<?php echo $tarjeta->id; ?>">
                <button class="table__accion table__boton--eliminar" type="submit">
                    <i class="fa-solid fa-circle-xmark"></i>
                    Eliminar
                </button>
            </form>
        <?php }?>
        <a href="/admin/tarjetas" class="categorias__boton">
            <i class="fa-solid fa-circle-arrow-left"></i>
            Volver
        </a>
    </div>

    <?php
        require_once __DIR__ . './../../templates/tarjetaCard.php';
    ?>

    

</main>

