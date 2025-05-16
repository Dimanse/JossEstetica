<header class="dashboard__header">
    <div class="dashboard__header-grid">
        <a href="/admin/dashboard">
        <?php
            include_once __DIR__ .'/admin-logo.php';
        ?>
        </a>

        <nav class="dashboard__nav">
            <form action="/logout" method="POST" class="dashboard__form">
                <input type="submit" class="dashboard__submit--logout" value="Cerrar Sesión">
            </form>
        </nav>

    </div>
</header>

<?php 
    $script = "
           <script src='/build/js/buscador.js'></script>
    "
?>