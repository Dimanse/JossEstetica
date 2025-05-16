<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Personal</legend>

    <div class="formulario__campo">
        <!-- <label for="nombre" class="formulario__label">Nombre</label> -->
        <input
            type="text"
            class="formulario__input"
            id="nombre"
            name="nombre"
            placeholder="Nombre del Paciente"
            value="<?php echo $paciente->nombre ?? ''; ?>"
        >
    </div>

    <div class="formulario__campo">
        
        <input
            type="text"
            class="formulario__input"
            id="apellido"
            name="apellido"
            placeholder="Apellidos del Paciente"
            value="<?php echo $paciente->apellido ?? ''; ?>"
        >
    </div>

    <div class="formulario__campo">
        
        <input
            type="text"
            class="formulario__input"
            id="lugar"
            name="lugar"
            placeholder="Lugar de naciemiento"
            value="<?php echo $paciente->ciudad ?? ''; ?>"
        >
    </div>

    <div class="formulario__campo">
        
        <input
            type="date"
            class="formulario__input"
            id="fecha"
            name="fecha"
            placeholder="Fecha de nacimiento"
            value="<?php echo $paciente->fecha ?? ''; ?>"
        >
    </div>
    
</fieldset>

   

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Extra</legend>

    <div class="formulario__campo">
        
        <input
            type="email"
            class="formulario__input"
            id="email"
            name="email"
            placeholder="Email de Registro"
            value="<?php echo $paciente->email ?? ''; ?>"
        >
    </div>
    <div class="formulario__campo">
        
        <input
            type="tel"
            class="formulario__input"
            id="telefono"
            name="telefono"
            placeholder="Teléfono de contacto"
            value="<?php echo $paciente->telefono ?? ''; ?>"
        >
    </div>
    <div class="formulario__campo">
        
        <input
            type="password"
            class="formulario__input"
            id="password"
            name="password"
            placeholder="Password de Registro"
            
        >
    </div>
    <div class="formulario__campo">
        
        <input
            type="password"
            class="formulario__input"
            id="password2"
            name="password2"
            placeholder="Repite tu Password de Registro"
            
        >
    </div>
    
    
</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Observaciones</legend>

    <div class="formulario__campo">
        
        <textarea name="observaciones" id="observaciones" cols="30" rows="10" class="formulario__observaciones" placeholder="Observaciones del paciente"></textarea>
    </div>

</fieldset>