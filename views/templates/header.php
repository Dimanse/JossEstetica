<header class="header">
        <div class="header__grid">
            <div class="header__telefono">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 marron"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#b18059" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                <a href="tel:+50660576259" target="_blank" class="header__numero">6057 6259</a>
            </div>
            <div class="header__logo">
                <h3 class="header__logo-texto">
                    <span class="span1">The</span>
                     Beauty 
                    <span class="span2">Spa</span>
                </h3>
            </div>

            <div class="header__reserva">
                <?php if($paciente){ ?>
                    <p class="header__nombre"> <?php echo $paciente->nombre . ' ' . $paciente->apellido; ?> </p>
                    <form action="/logout" method="POST" class="header__form">
                        <input type="submit" class="header__logout" value="Cerrar Sesión">
                    </form>
                <?php }else{ ?>
                    <a href="/auth/login" class="header__boton">Iniciar Sesión</a>
                <?php } ?>
            </div>

        </div>
    </header>