<aside class="dashboard__sidebar">
    <div class="dashboard__menu">
        <!-- <a href="/admin/dashboard" class="dashboard__enlace <?php echo pagina_actual('/dashboard') ? ('dashboard__enlace--actual') : ''; ?>">
            <i class="fa-solid fa-house dashboard__icono"></i>
            <span class="dashboard__menu-texto">Inicio</span>
        </a> -->

        <a href="/admin/pacientes" class="dashboard__enlace <?php echo pagina_actual('/pacientes') ? ('dashboard__enlace--actual') : ''; ?> ">
        <i class="fa-solid fa-users dashboard__icono"></i>
            <span class="dashboard__menu-texto">Pacientes</span>
        </a>

        <a href="/admin/mensajes" class="dashboard__enlace <?php echo pagina_actual('/mensajes') ? ('dashboard__enlace--actual') : ''; ?>">
            <i class="fa-solid fa-envelope dashboard__icono"></i>
            <span class="dashboard__menu-texto">Mensajes</span>
        </a>

        <a href="/admin/tarjetas" class="dashboard__enlace <?php echo pagina_actual('/tarjetas') ? ('dashboard__enlace--actual') : ''; ?> ">
            
            <i class="fa-solid fa-credit-card dashboard__icono"></i>
            <span class="dashboard__menu-texto">Tarjetas</span>
        </a>

        <a href="/admin/membresias" class="dashboard__enlace <?php echo pagina_actual('/membresias') ? ('dashboard__enlace--actual') : ''; ?> ">
            
            <i class="fa-solid fa-people-arrows dashboard__icono"></i>
            <span class="dashboard__menu-texto">Membresias</span>
        </a>
    </div>
</aside>