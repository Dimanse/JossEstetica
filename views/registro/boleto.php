<main class="pagina">
    <h2 class="pagina__heading"><?php echo $titulo; ?></h2>
    <p class="pagina__descripcion">Tu boleto, te recomendamos guardarlo, puedes compartirlo en redes sociales</p>

    <div class="boleto-virtual">
        <div class="boleto boleto--<?php echo strtolower($registro->paquete->nombre); ?> boleto--acceso">
            <div class="boleto__contenido">
                <h4 class="boleto__logo">&#60;DevWebCamp /></h4>
                <p class="boleto__plan"><?php echo $registro->paquete->nombre; ?></p>
                <p class="boleto__nombre"><?php echo $registro->usuario->nombre .' '. $registro->usuario->apellido; ?></p>
            </div>
            <div class="boleto__codigo"><?php echo '#' . $registro->token; ?></div>
        </div>
    </div>
</main>