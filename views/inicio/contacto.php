<div>

<main class="contact">
        <div class="contact__bg">
            <p class="contact__head">Contáctenos</p>
        </div>
        <div class="contact__contenedor">
            <div class="contact__texto-descripcion">
                <p class="contact__texto-titulo">Contáctenos</p>
                <p class="contact__texto">
                    En The Beauty Spa, su comodidad y bienestar son nuestra máxima prioridad. Estamos aquí para responder a cualquier pregunta que tenga y garantizar que su experiencia con nosotros sea lo más relajante y reparadora posible. No dude en contactarnos.
                </p>
            </div>
            <?php
                require_once __DIR__ . '/../templates/alertas.php';
            ?>
            <div class="contact__grid">

                <form action="/contacto" method="POST" class="formulario">
                <?php include_once __DIR__ . '/formularioContacto.php'; ?>
                    <div class="formulario__contenedor-boton">
                        <input type="submit" value="Enviar" class="formulario__boton">
                    </div>
                </form>
                <div class="contact__contenedor-imagen">
                    <img src="./build/img/ciatica.webp" alt="imagen formulario" class="contact__imagen">
                </div>

            </div>
        </div>
    </main>

    

</div>