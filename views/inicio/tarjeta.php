<main class="tarjeta bg-beige">
        <p class="tarjeta__texto-titulo">Mejore su bienestar con la tarjeta de fidelidad de The Beauty Spa</p>
        <div class="tarjeta__contenedor-descripcion">
            <p class="tarjeta__descripcion">
                En un mundo donde el estrés y la tensión son tan comunes, The Beauty Spa quiere regalarte estupendos descuentos en nuestros tratamientos.
                Una vez que nuestros profesionales te registren en nuestra base de datos, después de tu primera visita a The Beauty Spa. Con tu email de registro podras acceder a nuestras tarjetas regalo con descuentos de entre el 5% al 25% en todos nuestros tratamientos.
            </p>
        </div>

        <div class="tarjeta__contenedor">
            <div class="tarjeta__grid">
                
                <?php
                    require_once __DIR__ . '/../templates/cardTarjeta.php';
                ?>
                <?php
                    require_once __DIR__ . '/../templates/alertas.php';
                ?>
                <form action="/tarjeta" method="POST" class="formulario">
                    
                    <?php if(is_auth()){ ?>
                        <?php if(!$tarjetaPaciente){ ?>

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
                                <select  id="masaje_id"  name="masaje_id" class="formulario__select">
                                    <option hidden selected value="0"> -- Elige un tratamiento--</option>
                                    <?php foreach($masajes as $masaje){?>
                                        <option value="<?php echo $masaje->id; ?>"><?php echo $masaje->nombre; ?></option>
                                    <?php }?>
                                    
                                </select>
                            </div>
                        <?php } ?>
                    <?php } ?>

                    <div 
                    <?php if($tarjetaPaciente){?>
                        class="formulario__contenedor-boton"
                    <?php }?>
                    >
                        <?php if(is_auth()){ ?>
                            <?php if($tarjetaPaciente){ ?>
                                <a href="/tarjeta/show?token=<?php echo $tarjetaPaciente->codigo; ?>" class="formulario__tarjeta">Ver Tarjeta</a>
                            <?php }else{ ?>

                                <input type="submit" value="Crear Tarjeta" class="formulario__boton">
                            <?php } ?>
                            
                        <?php }else{ ?>
                            <p class="advertencia">
                                Esta opción se habilitara después de haber tenido tu primera cita con nosotros.
                            </p>
                        <?php } ?>
                    </div>
                </form>
            </div>
        </div>
    </main>