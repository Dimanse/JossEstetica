<main class="auth">
    <?php
        include_once __DIR__ .'/../templates/logo.php';
    ?>

    <?php
        require_once __DIR__ . '/../templates/alertas.php';
    ?>

    <form method="POST" action="/auth/registro" class="formulario" novalidate>
        <div class="formulario__auth">
            <label for="nombre" class="formulario__label">Nombre</label>
            <input 
                type="text" 
                class="formulario__input"
                placeholder="Tu Nombre"
                id="nombre"
                name="nombre"
                value="<?php echo $usuario->nombre ?>"
            />
        </div>
        <div class="formulario__auth">
            <label for="apellido" class="formulario__label">Apellido</label>
            <input 
                type="text" 
                class="formulario__input"
                placeholder="Tu Apellido"
                id="apellido"
                name="apellido"
                value="<?php echo $usuario->apellido ?>"
            />
        </div>
        <div class="formulario__auth">
            <label for="email" class="formulario__label">Email</label>
            <input 
                type="email" 
                class="formulario__input"
                placeholder="Tu email"
                id="email"
                name="email"
                value="<?php echo $usuario->email ?>"
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
        <div class="formulario__auth">
            <label for="password2" class="formulario__label">Repetir Password</label>
            <input 
                type="password" 
                class="formulario__input"
                placeholder="Repite Tu Password"
                id="password2"
                name="password2"
            />
        </div>

        <input 
            type="submit" 
            class="formulario__boton" 
            value="Crear Cuenta"
        />
    </form>

    <!-- <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes una cuenta? Inicia Sesión</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu password?</a>
    </div> -->
</main>