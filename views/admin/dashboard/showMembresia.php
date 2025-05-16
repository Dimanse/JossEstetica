<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>

<main class="categorias">

<div class="categorias__buscador">     
    <form 
        class="buscador" 
        method="POST" 
        action="/admin/membresias"
        
        
        >
        <input
            class="buscador__input"
            id="terminoBusqueda"
            name="terminoBusqueda"
            placeholder="Ingresa el código de la membresia que buscas"
        
            >
        <button 
            type="submit" 
            class=" buscador__button modal" 
            id="buscadorButton"
            >
        <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </form>
</div>

<div class="categorias__contenedor-pacientes contenedor-sm">
   
    <?php if($membresia){ ?>
        <table class="table">
            <tbody class="table__tbody">
                <tr class="table__tr">
                    <td class="table__td">
                        <?php echo $membresia->codigo; ?>
                    </td>

                    <td class="table__td--acciones">
                        <a class="table__boton-mostrar" href="/admin/paciente/show?id= <?php echo $membresia->user_id; ?>">
                        <i class="fa-solid fa-magnifying-glass"></i>
                            Ver
                        </a>
                        <?php if($membresia->membresia_pagada === '0'){ ?>
                            <a class="table__boton-mostrar" href="/admin/membresia/paciente?id=<?php echo $membresia->user_id; ?>">
                                <i class="fa-solid fa-users-viewfinder"></i>
                                Membresia
                        </a>
                        <?php } ?>
                    </td>
                </tr>
            </tbody>
        </table>
    
    
    <?php } ?>
    </div>


    
    <div class="categorias__contenedor-pacientes">
    <?php if(!empty($membresias)){ ?>
        <table class="table">
            <thead class="table__thead">
                <tr>
                    <th scope="col" class="table__th">Código</th>
                    <th scope="col" class="table__th">validez</th>
                    <th scope="col" class="table__th"></th>
                </tr>
            </thead>

            <tbody class="table__tbody">
                <?php foreach($membresias as $membresia){ ?>
                    <tr class="table__tr">
                        <td class="table__td">
                            
                            
                            <?php echo $membresia->codigo?>
                        </td>
                        <td class="table__td 
                            <?php if($fechaActual > $membresia->pago_valido && $membresia->pago_valido > '2000-01-01'){ ?>
                                 advertencia
                            <?php } ?>
                            <?php if( $membresia->pago_valido === '2000-01-01'){ ?>
                                 azul
                            <?php } ?>
                            ">

                            <?php if($fechaActual > $membresia->pago_valido && $membresia->pago_valido > '2000-01-01'){ ?>
                                 La membresia ha caducado
                            <?php } ?>
                            <?php if($fechaActual < $membresia->pago_valido){ ?>
                                La membresia ha sido contratada
                            <?php } ?>

                            <?php if( $membresia->pago_valido === '2000-01-01'){ ?>
                                 La membresia no ha sido abonada
                            <?php } ?>
                        </td>

                        <td class="table__td--acciones">
                            <a class="table__accion table__accion--ver" href="/admin/paciente/show?id= <?php echo $membresia->user_id; ?>">
                            <i class="fa-solid fa-magnifying-glass"></i>
                                Ver
                            </a>
                            <?php if($membresia->membresia_pagada === '0'){ ?>
                                <a class="table__accion table__accion--membresia" href="/admin/membresia/paciente?id=<?php echo $membresia->user_id; ?>">
                                    <i class="fa-solid fa-users-viewfinder"></i>
                                 Membresia
                            </a>
                            <?php } ?>

                            <form method="POST" action="/admin/membresia/eliminar" class="table__formulario">
                                <input type="hidden" name="id" value="<?php echo $membresia->id; ?>">
                                <button class="table__accion table__accion--eliminar" type="submit">
                                    <i class="fa-solid fa-circle-xmark"></i>
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
    
    <?php }else{ ?>
        <p class="text-center">No hay membresias registradas aún</p>
    <?php } ?>
    </div>
</main>

