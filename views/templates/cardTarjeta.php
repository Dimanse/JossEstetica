<div class="tarjeta__card ">
    <div class="tarjeta__card-grid">
        <div class="tarjeta__card-imagen">
            <img src="./build/img/tarjeta.webp" alt="imagen tarjeta" class="tarjeta__imagen">
        </div>

        <div class="tarjeta__card-informacion">
            <div class="tarjeta__logo">
                <h3 class="tarjeta__logo-texto">
                    <span class="tarjeta__logo-texto-span1">The</span>Beauty <span class="tarjeta__logo-texto-span2">Spa</span>
                </h3>
            </div>
            <div class="tarjeta__detalle-informacion">
                <div class="tarjeta__detalle-grid">
                    <div class="tarjeta__icono">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-3 bg-marron p-1"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#d9d3bf" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z"/></svg>
                    </div>
                    <p class="tarjeta__nombre"> <?php if(is_auth()){ ?>
                        <?php echo $paciente->nombre . ' ' . $paciente->apellido  ?>
                    <?php }else{ ?>
                        Nombre Paciente 
                    <?php } ?> 
                    </p>
                </div>
            </div>
            <div class="tarjeta__detalle-informacion">
                <div class="tarjeta__detalle-grid">
                    <div class="tarjeta__icono">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 bg-marron p-1"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#d9d3bf" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
                    </div>
                        <p class="tarjeta__nombre"> <?php echo $paciente->email ?? 'paciente@gmail.com'; ?> </p>
                </div>
                <div class="tarjeta__detalle-grid">

                    <div class="tarjeta__icono">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 bg-marron p-1"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#d9d3bf" d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17l0 80c0 13.3 10.7 24 24 24l80 0c13.3 0 24-10.7 24-24l0-40 40 0c13.3 0 24-10.7 24-24l0-40 40 0c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z"/></svg>
                    </div>
                        <p class="tarjeta__nombre">078b9012fr7c</p>
                        
                </div>    
                
            </div>
            <div class="tarjeta__detalle-informacion">
                <div class="tarjeta__detalle-grid">
                    <div class="tarjeta__icono">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-3 bg-marron p-1"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#d9d3bf" d="M374.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-320 320c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l320-320zM128 128A64 64 0 1 0 0 128a64 64 0 1 0 128 0zM384 384a64 64 0 1 0 -128 0 64 64 0 1 0 128 0z"/></svg>
                    </div>
                    <p class="tarjeta__nombre">15%</p>
                </div>
                <div class="tarjeta__detalle-grid">

                    <div class="tarjeta__icono">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 bg-marron p-1"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#d9d3bf" d="M96 352L96 96c0-35.3 28.7-64 64-64l256 0c35.3 0 64 28.7 64 64l0 197.5c0 17-6.7 33.3-18.7 45.3l-58.5 58.5c-12 12-28.3 18.7-45.3 18.7L160 416c-35.3 0-64-28.7-64-64zM272 128c-8.8 0-16 7.2-16 16l0 48-48 0c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l48 0 0 48c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-48 48 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-48 0 0-48c0-8.8-7.2-16-16-16l-32 0zm24 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-160 0C60.9 512 0 451.1 0 376L0 152c0-13.3 10.7-24 24-24s24 10.7 24 24l0 224c0 48.6 39.4 88 88 88l160 0z"/></svg>
                    </div>
                        <p class="tarjeta__nombre">Masaje Nervio Ciático</p>
                        
                </div>    
                
            </div>
            <div class="tarjeta__detalle-informacion">
                <div class="tarjeta__detalle-grid">
                    <div class="tarjeta__icono">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-3 bg-marron p-1"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#d9d3bf" d="M64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L64 32zm88 200l144 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-144 0c-13.3 0-24-10.7-24-24s10.7-24 24-24z"/></svg>
                    </div>
                    <p class="tarjeta__nombre">¢3000</p>
                </div>
                <div class="tarjeta__detalle-grid">

                    <div class="tarjeta__icono">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 bg-marron p-1"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#d9d3bf" d="M96 352L96 96c0-35.3 28.7-64 64-64l256 0c35.3 0 64 28.7 64 64l0 197.5c0 17-6.7 33.3-18.7 45.3l-58.5 58.5c-12 12-28.3 18.7-45.3 18.7L160 416c-35.3 0-64-28.7-64-64zM272 128c-8.8 0-16 7.2-16 16l0 48-48 0c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l48 0 0 48c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-48 48 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-48 0 0-48c0-8.8-7.2-16-16-16l-32 0zm24 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-160 0C60.9 512 0 451.1 0 376L0 152c0-13.3 10.7-24 24-24s24 10.7 24 24l0 224c0 48.6 39.4 88 88 88l160 0z"/></svg>
                    </div>
                        <p class="tarjeta__nombre">¢17000</p>
                        
                </div>    
                
            </div>
            
            
        </div>
    </div>

</div>