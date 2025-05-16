<h2 class="dashboard__heading"><?php echo $titulo ?></h2>

<main class="categorias">
    
<div class="categorias__buscador">
            
    <form 
        class="buscador" 
        method="POST" 
        action="/buscador"
        
        
        >
        <input
            class="buscador__input"
            id="terminoBusqueda"
            name="terminoBusqueda"
            placeholder="Ingresa el código de la tarjeta que buscas"
        
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
   
    <?php if(isset($datos[0])){ ?>
        <table class="table">
           
            <?php if(isset($datos[0]['tarjeta'])){ ?>
                <tbody class="table__tbody">
                    <tr class="table__tr">
                        <td class="table__td">
                            <?php echo $datos[0]['tarjeta']->codigo; ?>
                        </td>

                        <td class="table__td--acciones">
                            <a class="table__boton-mostrar" href="/admin/tarjeta/show?token= <?php echo $datos[0]['tarjeta']->codigo; ?>">
                            <i class="fa-solid fa-magnifying-glass"></i>
                                Ver
                            </a>
                        </td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
    
    
    <?php } ?>
    </div>
    
    <div class="categorias__contenedor-pacientes">
    <?php if(!empty($tarjetas)){ ?>
        <table class="table">
            <thead class="table__thead">
                <tr>
                    <th scope="col" class="table__th">Código Tarjeta</th>
                    <th scope="col" class="table__th"></th>
                </tr>
            </thead>

            <tbody class="table__tbody">
                <?php foreach($tarjetas as $tarjeta){ ?>
                    <tr class="table__tr">
                        <td class="table__td">
                            <?php echo $tarjeta->codigo; ?>
                        </td>

                        <td class="table__td--acciones">
                            <a class="table__boton-mostrar" href="/admin/tarjeta/show?token=<?php echo $tarjeta->codigo; ?>">
                            <i class="fa-solid fa-magnifying-glass"></i>
                                Ver
                            </a>
                            <!-- <a class="table__accion table__accion--editar" href="/admin/tarjeta/editar?id= <?php echo $tarjeta->id; ?>">
                                <i class="fa-solid fa-user-pen"></i>
                                Editar
                            </a> -->

                            <!-- <form method="POST" action="/admin/tarjeta/eliminar" class="table__formulario">
                                <input type="hidden" name="id" value="<?php echo $tarjeta->id; ?>">
                                <button class="table__accion table__accion--eliminar" type="submit">
                                    <i class="fa-solid fa-circle-xmark"></i>
                                    Eliminar
                                </button>
                            </form> -->
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
    
    <?php }else{ ?>
        <p class="text-center">No hay tarjetas aún</p>
    <?php } ?>
    </div>
</main>

<!-- <?php 
    echo $paginacion;
?> -->
<!-- <?php 
    $script = "
           <script src='/build/js/buscador.js'></script>
    "
?> -->