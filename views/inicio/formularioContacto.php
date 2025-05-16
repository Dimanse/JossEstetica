<div class="formulario__campo">
                        <input 
                            type="text"
                            id="nombre"
                            name="nombre"
                            class="formulario__input"
                            placeholder="Tu nombre"
                            value="<?php echo $paciente->nombre ?? ''; ?>"
                            <?php if(is_auth()){ ?>
                                disabled
                            <?php } ?>
                            >
                        <input 
                            type="text"
                            id="apellido"
                            name="apellido"
                            class="formulario__input"
                            placeholder="Tus apellidos"
                            value="<?php echo $paciente->apellido ?? ''; ?>"
                            <?php if(is_auth()){ ?>
                                disabled
                            <?php } ?>
                            >
                    </div>
                    <div class="formulario__campo">
                        <input 
                            type="email"
                            id="email"
                            name="email"
                            class="formulario__input"
                            placeholder="Tu email"
                            value="<?php echo $paciente->email ?? ''; ?>"
                            <?php if(is_auth()){ ?>
                                disabled
                            <?php } ?>
                            >
                        <input 
                            type="tel"
                            id="telefono"
                            name="telefono"
                            class="formulario__input"
                            placeholder="Tu teléfono"
                            value="<?php echo $paciente->telefono ?? ''; ?>"
                            <?php if(is_auth()){ ?>
                                disabled
                            <?php } ?>
                            >
                    </div>
                    <textarea name="mensaje" id="mensaje" cols="30" rows="10" class="formulario__mensaje" placeholder="Tu mensaje"></textarea>

                    