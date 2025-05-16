<main class="auth">
    <?php
    include_once __DIR__ .'/../templates/logo.php';
    ?>

    <?php
        require_once __DIR__ . '/../templates/alertas.php';
    ?>

    <form method="POST" action="/auth/login" class="formulario">
        <div class="formulario__auth">
            <label for="email" class="formulario__label">Email</label>
            <input 
                type="email" 
                class="formulario__input"
                placeholder="Tu email"
                id="email"
                name="email"
            />
        </div>

        <div class="formulario__auth">
            <label for="password" class="formulario__label">Password</label>
            <input 
                type="password" 
                class="formulario__input"
                placeholder="Tu Password"
                id="password"
                name="password"
            />
        </div>

        <input 
            type="submit" 
            class="formulario__boton" 
            value="Iniciar Sesión"
        />
    </form>

    <div class="acciones">
        <!-- <a href="/registro" class="acciones__enlace">¿Aún no tienes una cuenta? Obtener una</a> -->
        <a href="/auth/olvide" class="acciones__enlace">¿Olvidaste tu password?</a>
    </div>
</main>