<main class="auth">
<?php
        require_once __DIR__ . '/../templates/logo.php';
    ?>
    <h2 class="auth__heading"><?php echo $titulo;?></h2>


    <?php
        require_once __DIR__ . '/../templates/alertas.php';
    ?>

    <form method="POST" action="/auth/olvide" class="formulario">
        

        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input 
                type="email" 
                class="formulario__input"
                placeholder="Tu Email"
                id="email"
                name="email"
            />
        </div>
        

        <input 
            type="submit" 
            class="formulario__boton" 
            value="Enviar"
        />
    </form>

    <div class="acciones">
        <a href="/auth/login" class="acciones__enlace">¿Ya tienes una cuenta? Inicia Sesión</a>
        <!-- <a href="/registro" class="acciones__enlace">¿Aún no tienes una cuenta? Obtener una</a> -->
    </div>
</main>