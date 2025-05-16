<main class="auth">
    <?php
        require_once __DIR__ . '/../templates/logo.php';
    ?>
    <h2 class="auth__heading"><?php echo $titulo;?></h2>

    <?php
        require_once __DIR__ . '/../templates/alertas.php';
    ?>
    <?php if($token_valido){ ?>
        <form method="POST" class="formulario">
            

            <div class="formulario__campo">
                <label for="password" class="formulario__label">Nuevo Password</label>
                <input 
                    type="password" 
                    class="formulario__input"
                    placeholder="Tu Nuevo Password"
                    id="password"
                    name="password"
                />
            </div>
            

            <input 
                type="submit" 
                class="formulario__boton" 
                value="Guardar Nuevo Password"
            />
        </form>

    <?php } ?>

    <div class="acciones">
        <a href="/auth/login" class="acciones__enlace">¿Ya tienes una cuenta? Inicia Sesión</a>
    </div>
</main>