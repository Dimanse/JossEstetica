<div>
<main class="membresia">
        <div class="membresia__imagen"></div>
        <div class="membresia__contenedor">
            <p class="membresia__descripcion">
                En The Beauty Spa, ofrecemos membresías diseñadas tanto para el alivio como para la relajación. Ya sea que busque alivio del estrés, apoyo para el dolor crónico o una combinación de ambos, nuestras membresías le facilitan disfrutar de los beneficios de nuestros tratamientos (masajes, pedicure spa, manicure spa, pedicure clínico y limpieza facial). Elija entre nuestros niveles Calma , Balance y Zen para encontrar el que mejor se adapte a sus necesidades de bienestar, sin compromisos a largo plazo.
            </p>

            <p class="membresia__header">
                Elija la membresía que se adapte a sus objetivos de bienestar
            </p>

            <?php if(is_auth()){?>
                
                <?php if($membresiasPaciente){ ?>
                    <?php if($fechaActual < $membresiasPaciente->pago_valido || $membresiasPaciente->pago_valido !== '2000-01-01'){?>
                        <?php if($membresiasPaciente->membresia_pagada === '1'){?>
                            <p class="text-center membresia__header mt-3"> <span class="advertencia"> <?php echo $afiliacion->membresia; ?>:</span> Su membresia ha sido contratada.</p>
                        <?php }else{ ?>
                            <p class="text-center membresia__header mt-3">Su membresia solicitada es: <span class="advertencia"> <?php echo $afiliacion->membresia; ?>.</span></p>
                        <?php } ?>
                    <?php }else{ ?>
                        <p class="text-center membresia__header mt-3">Su membresia <span class="advertencia"> <?php echo $afiliacion->membresia; ?> </span>ha caducado.</p>
                    <?php } ?>
                    
                
                <?php } ?>
            <?php }?>

            <div class="membresia__grid">
                <div class="membresia__target">
                    <p class="membresia__target-titulo">Calma</p>
                    <p class="membresia__target-precio">¢10000</p>
                    <p class="membresia__target-mes">por mes.</p>
                    <p class="membresia__target-descripcion">Para relajación y alivio ocasional.</p>
                    <ul class="membresia__target-ul">
                        <li class="membresia__target-li">
                            <div class="membresia__target-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#b18059" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
                            </div>
                            <span class="membresia__target-span">
                                Crédito mensual de ¢10000 para servicios de relajación o alivio del dolor.
                            </span>
                        </li>
                        <li class="membresia__target-li">
                            <div class="membresia__target-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#b18059" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
                            </div>
                            <span class="membresia__target-span">
                                5% de descuento.
                            </span>
                        </li>
                        <li class="membresia__target-li">
                            <div class="membresia__target-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#b18059" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
                            </div>
                            <span class="membresia__target-span">
                                Ideal para sesiones ocasionales de relajación o manejo del dolor.
                            </span>
                        </li>
                        <li class="membresia__target-li">
                            <div class="membresia__target-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-2 bold"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#dc341c" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                            </div>
                            <span class="membresia__target-span">
                                Meses no acumulabes.
                            </span>
                        </li>
                    </ul>

                    <p class="membresia__target-pago"> O Dos pagos anuales de ¢60000</p>

                </div>
                <div class="membresia__target">
                    <p class="membresia__target-titulo">Balance</p>
                    <p class="membresia__target-precio">¢20000</p>
                    <p class="membresia__target-mes">por mes.</p>
                    <p class="membresia__target-descripcion">Para soporte regular.</p>
                    <ul class="membresia__target-ul">
                        <li class="membresia__target-li">
                            <div class="membresia__target-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#b18059" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
                            </div>
                            <span class="membresia__target-span">
                                Crédito mensual de ¢20000 para tratamientos terapéuticos específicos.
                            </span>
                        </li>
                        <li class="membresia__target-li">
                            <div class="membresia__target-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#b18059" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
                            </div>
                            <span class="membresia__target-span">
                                10% de descuento.
                            </span>
                        </li>
                        <li class="membresia__target-li">
                            <div class="membresia__target-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#b18059" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
                            </div>
                            <span class="membresia__target-span">
                                Perfecto para un apoyo mensual constante.
                            </span>
                        </li>
                        <li class="membresia__target-li">
                            <div class="membresia__target-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-2 bold"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#dc341c" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                            </div>
                            <span class="membresia__target-span">
                                Meses no acumulabes.
                            </span>
                        </li>
                    </ul>
                    <p class="membresia__target-pago"> O Dos pagos anuales de ¢120000</p>
                </div>
                <div class="membresia__target">
                    <p class="membresia__target-titulo">Zen</p>
                    <p class="membresia__target-precio">¢30000</p>
                    <p class="membresia__target-mes">por mes.</p>
                    <p class="membresia__target-descripcion">Para un cuidado completo</p>
                    <ul class="membresia__target-ul">
                        <li class="membresia__target-li">
                            <div class="membresia__target-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#b18059" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
                            </div>
                            <span class="membresia__target-span">
                                Crédito mensual de ¢30000 para atención personalizada y avanzada.
                            </span>
                        </li>
                        <li class="membresia__target-li">
                            <div class="membresia__target-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#b18059" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
                            </div>
                            <span class="membresia__target-span">
                                20% de descuento.
                            </span>
                        </li>
                        <li class="membresia__target-li">
                            <div class="membresia__target-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#b18059" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
                            </div>
                            <span class="membresia__target-span">
                                Ideal para sesiones regulares o frecuentes tanto para la relajación como para el alivio del dolor.
                            </span>
                        </li>
                        <li class="membresia__target-li">
                            <div class="membresia__target-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-2 bold"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#dc341c" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                            </div>
                            <span class="membresia__target-span">
                                Meses no acumulabes.
                            </span>
                        </li>
                    </ul>
                    <p class="membresia__target-pago "> O Dos pagos anuales de ¢180000</p>
                </div>
            </div>

            <?php
                require_once __DIR__ . '/../templates/alertas.php';
            ?>

            <form action="/membresia" method="POST" class="formulario">
                    
                    <?php if(is_auth()){ ?>
                        <?php if(!$membresiasPaciente){ ?>

                            <div class="formulario__campo">
                                <input 
                                    type="email" 
                                    id="email" 
                                    name="email" 
                                    placeholder="Tu email de registro" class="formulario__input"
                                    value="<?php echo $paciente->email ?? ''; ?>"
                                    <?php if(is_auth()){ ?>
                                        disabled
                                    <?php } ?>
                                    >
        
                            </div>
                            <div class="formulario__campo">
                                <select  id="membresia_id"  name="membresia_id" class="formulario__select">
                                    <option hidden selected value="0"> -- Elige una Membresia--</option>
                                    <?php foreach($membresias as $membresia){?>
                                        <option value="<?php echo $membresia->id; ?>"><?php echo $membresia->membresia; ?> Pago semestral de <?php echo $membresia->precio*6 ?>¢</option>
                                    <?php }?>
                                    
                                </select>
                            </div>
                        <?php } ?>
                    <?php } ?>

                    <div 
                    <?php if(!$membresiasPaciente){ ?>
                        class="formulario__contenedor-boton"
                    <?php }?>
                    >
                        <?php if(is_auth()){ ?>
                            <?php if(!$membresiasPaciente){ ?>
                                <input type="submit" value="Registra tu Mambresía" class="formulario__boton">
                            <?php }else{ ?>
                                <?php if($membresiasPaciente->membresia_pagada === '0'){ ?>
                                    <p class="text-center advertencia">
                                        Tiene una membresía solicitada, necesita hacer el pago de esta misma para confirmarla.
                                    </p>
                                <?php }else{ ?>
                                    
                                    <p class="text-center blue mt-3">
                                        El código de su membresía es: <span class="negrita"><?php echo $membresiasPaciente->codigo ?? '';?></span>
                                    </p>
                                    <p class="text-center blue mt-3">
                                        Precios exclusivos con el descuento de su membresía.
                                    </p>
                                    <?php if($membresiasPaciente->membresia_pagada === '1'){ ?>
                                        <table class="table mt-3">
                                            <thead class="table__thead">
                                                <tr>
                                                    <th scope="col" class="table__th">Tratamiento</th>
                                                    <th scope="col" class="table__th">Precio</th>
                                                    <th scope="col" class="table__th text-center">Precio Membresia</th>
                                                </tr>
                                            </thead>
        
                                            <tbody class="table__tbody">
                                                <?php foreach($tratamientos as $tratamiento){ ?>
                                                    <tr class="table__tr">
                                                        <td class="table__td">
                                                            
                                                            
                                                            <?php echo $tratamiento->nombre?>
                                                        </td>
                                                        <td class="table__td">
        
                                                            <?php echo $tratamiento->precio; ?>
                                                        </td>
                                                        <td class="table__td text-center blue">
        
                                                            <?php echo $tratamiento->precio - ($tratamiento->precio * $afiliacion->descuento) / 100; ?>
                                                        </td>
        
                                                        
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
        
                                        </table>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                            
                            
                            
                        <?php }else{ ?>
                            <p class="text-center advertencia">
                                Esta opción se habilitara después de haber tenido tu primera cita con nosotros.
                            </p>
                        <?php } ?>

                        
                    </div>
                </form>

        </div>

    </main>

    <section class="eleccion">
        <div class="eleccion__contenedor">
            <div class="eleccion__grid">
                <div class="eleccion__contenedor-texto">
                    <p class="eleccion__titulo">¿Por qué elegir una membresía de The Beauty Spa?</p>

                    <div class="eleccion__contenedor-texto-grid">
                        <div class="eleccion__texto-grid">
                            <div class="eleccion__contenedor-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-3"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#d9d3bf" d="M64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L64 32zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
                            </div>
                            <p class="eleccion__descripcion-texto">Alivio constante del dolor y reducción del estrés: <span class="eleccion__span">sesiones regulares que apoyan tanto el manejo del dolor como el alivio del estrés, adaptadas a sus necesidades.</span> </p>
                        </div>
                        <div class="eleccion__texto-grid">
                            <div class="eleccion__contenedor-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-3"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#d9d3bf" d="M64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L64 32zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
                            </div>
                            <p class="eleccion__descripcion-texto">Ahorros y créditos mensuales: <span class="eleccion__span">cada nivel incluye créditos y descuentos, lo que hace que el bienestar regular sea asequible.</span> </p>
                        </div>
                        <div class="eleccion__texto-grid">
                            <div class="eleccion__contenedor-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-3"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#d9d3bf" d="M64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L64 32zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
                            </div>
                            <p class="eleccion__descripcion-texto">Atención flexible y personalizada: <span class="eleccion__span">elija entre un enfoque de relajación, un enfoque de alivio del dolor o una combinación, personalizada por nuestros terapeutas expertos.</span> </p>
                        </div>
                        
                    </div>
                </div>
                <div class="eleccion__contenedor-imagen">
                    <img src="./build/img/elecicio.webp" alt="imagen eleccion" class="eleccion__imagen">
                </div>
            </div>
        </div>
    </section>
</div>
