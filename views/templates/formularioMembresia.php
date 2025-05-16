<fieldset class="formulario__fieldset">

    <!-- <ol class="switches">
    <li>
        <input 
            type="checkbox" 
            id="membresia_pagada" 
            name="membresia_pagada"
            value="<?php echo $paciente->membresia_pagada; ?>"
            >
        <label for="membresia_pagada">
        <span>Membresia Pagada</span>
        <span></span>
        </label>
    </li>
    
    </ol> -->
    <div class="contenedor-wraper">
        <p class="membresia__header">Estado de la membresia</p>
        <div class="wrapper">
            <div class="custom-input">
                <input 
                    type="radio" 
                    data-paso="1"
                    id="0" 
                    name="membresia_pagada"
                    value="<?php echo $membresiaPaciente->membresia_pagada; ?>"
                    <?php if($membresiaPaciente->membresia_pagada === '0'){?>
                        checked
                    <?php }?>
                    >
                <label for="0">No Abonado</label>
            </div>
            <div class="custom-input">
                <input 
                    type="radio" 
                    data-paso="2"
                    id="1" 
                    name="membresia_pagada"
                    value="<?php echo $membresiaPaciente->membresia_pagada; ?>"
                    <?php if($membresiaPaciente->membresia_pagada === '1'){?>
                        checked
                    <?php }?>
                    >
                <label for="1">Abonado</label>
            </div>
        </div>
    </div>
    
 

    <legend class="formulario__legend">Información Membresía (<?php echo $membresia->membresia; ?>) de <?php echo $paciente->nombre . ' ' . $paciente->apellido; ?></legend>

    <div class="formulario__campo2">
        <div>
            <label for="valido" class="formulario__label1">Monto Abonado</label>
            <input
                type="number"
                class="formulario__input"
                id="monto"
                name="monto"
                placeholder="Monto abonado"
                value="<?php echo $membresiaPaciente->monto ?? ''; ?>"
               <?php if($membresiaPaciente->membresia_pagada === '1'){?>   
                disabled   
               <?php }?>      
            >
        </div>
        <div>

            <label for="valido" class="formulario__label1">Meses de Validez</label>
            <input
                type="number"
                class="formulario__input"
                id="meses"
                name="meses"
                placeholder="Meses de Validez"
                value="<?php echo $membresiaPaciente->meses ?? ''; ?>"
               <?php if($membresiaPaciente->membresia_pagada === '1'){?>   
                disabled   
               <?php }?>      
            >
        </div>
    </div>
    <div class="formulario__campo1">
        <label for="valido" class="formulario__label1">Fecha limite membresía</label>
        <input
            type="date"
            class="formulario__input"
            id="valido"
            name="valido"
            placeholder="Fecha hasta la que es valida la membresia"
            
            <?php if($membresiaPaciente->pago_valido !== '2000-01-01'){?>
                value="<?php echo $membresiaPaciente->pago_valido ?? ''; ?>"
            <?php }?>
            
           <?php if($membresiaPaciente->membresia_pagada === '1'){?>   
            disabled   
           <?php }?>      
        >
    </div>

    <div class="formulario__campo1">
    <label for="pagos" class="formulario__label1">Observaciones del pago de la mebresía</label>
        
        <textarea
            class="formulario__input"
            id="pagos"
            name="pagos"
            cols="10"
            rows="10"
            <?php if($membresiaPaciente->membresia_pagada === '1'){?>   
                disabled   
            <?php }?> 
        ><?php echo $membresiaPaciente->observaciones; ?></textarea>
    </div>

    

    
    
</fieldset>