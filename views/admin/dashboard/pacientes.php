<h2 class="dashboard__heading"><?php echo $titulo ?></h2>

<main class="categorias">
    <div class="categorias__contenedor-crear">
        <a href="/admin/paciente/crear" class="categorias__boton">Registrar Paciente</a>
    </div>

    <div class="categorias__buscador">     
    <form 
        class="buscador" 
        method="POST" 
        action="/admin/pacientes"
        
        
        >
        <input
            class="buscador__input"
            id="terminoBusqueda"
            name="terminoBusqueda"
            placeholder="Ingresa los apellidos del paciente que buscas"
        
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

<?php if($usuario){ ?>
    <table class="table mt-3">
        
            <tbody class="table__tbody">
                <tr class="table__tr">
                    <td class="table__td">
                        <?php echo $usuario->nombre . ' ' . $usuario->apellido; ?>
                    </td>
    
                    <td class="table__td--acciones">
                            <a class="table__accion table__accion--ver" href="/admin/paciente/show?id= <?php echo $usuario->id; ?>">
                            <i class="fa-solid fa-magnifying-glass"></i>
                                Ver
                            </a>
                            <a class="table__accion table__accion--membresia" href="/admin/membresia/paciente?id=<?php echo $usuario->id; ?>">
                            <i class="fa-solid fa-users-viewfinder"></i>
                                 Membresia
                            </a>
                            <a class="table__accion table__accion--editar" href="/admin/paciente/editar?id= <?php echo $usuario->id; ?>">
                                <i class="fa-solid fa-user-pen"></i>
                                Editar
                            </a>

                            <form method="POST" action="/admin/paciente/eliminar" class="table__formulario">
                                <input type="hidden" name="id" value="<?php echo $usuario->id; ?>">
                                <button class="table__accion table__accion--eliminar" type="submit">
                                    <i class="fa-solid fa-circle-xmark"></i>
                                    Eliminar
                                </button>
                            </form>
                        </td>
                </tr>
            </tbody>
    </table>


<?php } ?>

    <div class="categorias__contenedor-pacientes">
    <?php if(!empty($pacientes)){ ?>
        <table class="table">
            <thead class="table__thead">
                <tr>
                    <th scope="col" class="table__th">Paciente</th>
                    <th scope="col" class="table__th"></th>
                </tr>
            </thead>

            <tbody class="table__tbody">
                <?php foreach($pacientes as $paciente){ ?>
                    <tr class="table__tr">
                        <td class="table__td">
                            <?php echo $paciente->nombre . ' ' . $paciente->apellido ?>
                        </td>

                        <td class="table__td--acciones">
                            <a class="table__accion table__accion--ver" href="/admin/paciente/show?id= <?php echo $paciente->id; ?>">
                            <i class="fa-solid fa-magnifying-glass"></i>
                                Ver
                            </a>
                            <a class="table__accion table__accion--membresia" href="/admin/membresia/paciente?id=<?php echo $paciente->id; ?>">
                            <i class="fa-solid fa-users-viewfinder"></i>
                                 Membresia
                            </a>
                            <a class="table__accion table__accion--editar" href="/admin/paciente/editar?id= <?php echo $paciente->id; ?>">
                                <i class="fa-solid fa-user-pen"></i>
                                Editar
                            </a>

                            <form method="POST" action="/admin/paciente/eliminar" class="table__formulario">
                                <input type="hidden" name="id" value="<?php echo $paciente->id; ?>">
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
        <p class="text-center">No hay pacientes aún</p>
    <?php } ?>
    </div>
</main>

