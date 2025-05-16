<h2 class="dashboard__heading"><?php echo $titulo . ' ' . $paciente->nombre . ' ' . $paciente->apellido;?></h2>
<div class="categorias__contenedor-crear">
    <a href="/admin/pacientes" class="categorias__boton">
        <i class="fa-solid fa-circle-arrow-left"></i>
        Volver
    </a>
</div>

<div class="categorias__contenedor-paciente">

    <div class="categorias__tablet">
        <div class="categorias__contenedor-izquierda">
            <div class="categorias__contenedor-general">
                <div class="categorias__grid-icono">
                    <i class="fa-solid fa-user categorias__icono"></i>
                    <p class="categorias__texto">Nombre</p>
                </div>
                <p class="categorias__nombre"><?php echo $paciente->nombre . ' ' . $paciente->apellido; ?></p>
            </div>
            <div class="categorias__contenedor-general">
                <div class="categorias__grid-icono">
                    <i class="fa-solid fa-city categorias__icono"></i>
                    <p class="categorias__texto">Lugar Naciemiento</p>
                </div>
                    <p class="categorias__nombre"><?php echo $paciente->lugar ?? ''; ?></p>
                </div>
            <div class="categorias__contenedor-general">
                <div class="categorias__grid-icono">
                    <i class="fa-solid fa-calendar-days categorias__icono"></i>
                    <p class="categorias__texto">Fecha Naciemiento</p>
                </div>
                <p class="categorias__nombre"><?php echo $nuevaPacienteFecha ?? ''; ?></p>
            </div>
            

        </div>
        <div class="categorias__contenedor-derecha">
            <div class="categorias__contenedor-general">
                <div class="categorias__grid-icono">
                    <i class="fa-solid fa-cake-candles categorias__icono"></i>
                    <p class="categorias__texto">Edad</p>
                </div>
                <p class="categorias__nombre"><?php echo $edad->y ?? ''; ?> años</p>
            </div>
            <div class="categorias__contenedor-general">
                <div class="categorias__grid-icono">
                    <i class="fa-solid fa-envelope categorias__icono"></i>
                    <p class="categorias__texto">E-mail</p>
                </div>
                <p class="categorias__nombre"><?php echo $paciente->email; ?></p>
            </div>
            <div class="categorias__contenedor-general">
                <div class="categorias__grid-icono">
                    <i class="fa-solid fa-phone categorias__icono"></i>
                    
                    <p class="categorias__texto">Teléfono</p>
                </div>
                <p class="categorias__nombre"><?php echo $paciente->telefono; ?></p>
            </div>
    </div>
</div>

<div class="categorias__observaciones">
    <div class="categorias__contenedor-info-observaciones">
        <div class="categorias__grid-icono--observaciones">
            <i class="fa-solid fa-magnifying-glass categorias__icono"></i>
            <p class="categorias__texto">Observaciones</p>
        </div>
            <p class="categorias__nombre"><?php echo $paciente->observaciones ?? ''; ?></p>
    
    </div>

</div>


<?php if($membresiaPaciente){ ?>
    <?php if($fechaActual > $membresiaPaciente->pago_valido){ ?>
        <?php if($membresiaPaciente->pago_valido === '2000-01-01'){ ?>
            <legend class=" mt-3 azul">La membresía  <?php echo $afiliacion->membresia ?? ''; ?> no ha sido abonada</legend>
        <?php }else{ ?>
            <legend class=" mt-3 advertencia">La membresía  <?php echo $afiliacion->membresia ?? ''; ?> ha caducado</legend>
        <?php } ?>
        
    <?php }else{ ?>
        <?php if($membresiaPaciente->membresia_pagada === '1'){ ?>
            <legend class="formulario__legend mt-3">Membresía contratada: <?php echo $afiliacion->membresia ?? ''; ?> </legend>
        <?php }else{ ?>
            <legend class="formulario__legend mt-3">La membresia <?php echo $afiliacion->membresia; ?> ha sido solicitada pero aún no ha sido pagada. </legend>
        <?php } ?>
    <?php } ?>
    
    
    <div class="categorias__tablet mt-3">
        <div class="categorias__contenedor-izquierda">
            <div class="categorias__contenedor-general">
                <div class="categorias__grid-icono">
                    <i class="fa-solid fa-square-check categorias__icono"></i>
                    <p class="categorias__texto">Valido hasta</p>
                </div>
                
                <?php if($fechaActual > $membresiaPaciente->pago_valido){ ?>
                    <?php if($membresiaPaciente->pago_valido === '2000-01-01'){ ?>
                        <p class="categorias__nombre azul">No ha sido abonada</p>
                    <?php }else{ ?>
                        <p class="categorias__nombre advertencia">Caducado</p>
                    <?php } ?>
                <?php }else{ ?>
                    <?php if($fechaValidez === '01-01-2000'){ ?>
                        <p class="categorias__nombre">Pendiente de Pago.</p>
                    <?php }else{ ?>
                        <p class="categorias__nombre"><?php echo $fechaValidez ?? ''; ?></p>
                    <?php } ?>
                <?php } ?>
                
            </div>
            <div class="categorias__contenedor-general">
                <div class="categorias__grid-icono">
                    <i class="fa-solid fa-circle-dollar-to-slot categorias__icono"></i>
                    <p class="categorias__texto">Cantidad Abonada</p>
                </div>
                    <?php if($fechaActual > $membresiaPaciente->pago_valido){ ?>
                        <?php if($membresiaPaciente->pago_valido === '2000-01-01'){ ?>
                            <p class="categorias__nombre azul">No ha sido abonada</p>
                        <?php }else{ ?>
                            <p class="categorias__nombre advertencia">Caducado</p>
                        <?php } ?>
                    <?php }else{ ?>
                        <p class="categorias__nombre"><?php echo $membresiaPaciente->monto ?? ''; ?>¢</p>
                    <?php } ?>
                </div>
            
            

        </div>
        <div class="categorias__contenedor-derecha">
            <div class="categorias__contenedor-general">
                <div class="categorias__grid-icono">
                    <i class="fa-solid fa-calendar-days categorias__icono"></i>
                    <p class="categorias__texto">Meses pagados</p>
                </div>
                    <?php if($fechaActual > $membresiaPaciente->pago_valido){ ?>
                        <?php if($membresiaPaciente->pago_valido === '2000-01-01'){ ?>
                            <p class="categorias__nombre azul">No ha sido abonada</p>
                        <?php }else{ ?>
                            <p class="categorias__nombre advertencia">Caducado</p>
                        <?php } ?>
                    <?php }else{ ?>
                        <p class="categorias__nombre"><?php echo $membresiaPaciente->meses ?? '0'; ?> meses</p>
                    <?php } ?>
            </div>
            <div class="categorias__contenedor-general">
                <div class="categorias__grid-icono">
                    <i class="fa-solid fa-percent categorias__icono"></i>
                    <p class="categorias__texto">Descuento</p>
                </div>
                    <?php if($fechaActual > $membresiaPaciente->pago_valido){ ?>
                        <?php if($membresiaPaciente->pago_valido === '2000-01-01'){ ?>
                            <p class="categorias__nombre azul">No ha sido abonada</p>
                        <?php }else{ ?>
                            <p class="categorias__nombre advertencia">Caducado</p>
                        <?php } ?>
                    <?php }else{ ?>
                        <p class="categorias__nombre"><?php echo $afiliacion->descuento ?? ''; ?> %</p>
                    <?php } ?>
            </div>
            
        </div>
    </div>
    <div class="categorias__observaciones">
        <div class="categorias__contenedor-info-observaciones">
            <div class="categorias__grid-icono--observaciones">
                <i class="fa-solid fa-magnifying-glass categorias__icono"></i>
                <p class="categorias__texto">Observaciones</p>
            </div>
                <?php if($fechaActual > $membresiaPaciente->pago_valido){ ?>
                    <?php if($membresiaPaciente->pago_valido === '2000-01-01'){ ?>
                        <p class="categorias__nombre azul">No ha sido abonada</p>
                    <?php }else{ ?>
                        <p class="categorias__nombre advertencia">Caducado</p>
                    <?php } ?>
                <?php }else{ ?>
                    <p class="categorias__nombre"><?php echo $membresiaPaciente->observaciones ?? ''; ?></p>
                <?php } ?>
                
        
        </div>

    </div>


    <?php if($fechaActual < $membresiaPaciente->pago_valido){ ?>

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

