<h2 class="dashboard__heading"><?php echo $titulo ?></h2>
<!-- <main class="categorias"> -->
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
            action="/admin/paciente/crear"
            enctype="multipart/form-data" 
            class="formulario">
            <?php include_once __DIR__ . '/formulario.php'; ?>
    
            <input class="formulario__submit formulario__boton" type="submit" value="Registrar Paciente">
        </form>
    </div>
<!-- </main> -->