<h2 class="dashboard__heading"><?php echo $titulo ?></h2>

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
        action="/admin/paciente/editar"
        enctype="multipart/form-data" 
        class="formulario">
        <?php include_once __DIR__ . '/formularioEditar.php'; ?>

        <input class="formulario__submit formulario__boton" type="submit" value="Actualizar Paciente">
    </form>
</div>