<div class="actual">
    <div class="contenido-index" >
        <div class="titulo-index contenedor-sm">
            <img src="../build/img/5.png" alt="Icono Fisiculturista">
            <h1>GymApp</h1>
        </div>
        <div class="descripcion-index">
            <h3>El Lugar Ideal Para Tu Salud</h3>
        </div>
    </div>

    <div class="acciones" >
        <div class="info">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad ipsa enim cupiditate odio quisquam voluptatibus!</p>
            <a href="/info">Más Información</a>
        </div>
        <div class="membresia">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad ipsa enim cupiditate odio quisquam voluptatibus!</p>
            <a href="/membresias">Membresias</a>
        </div>
        <div class="crear-cuenta">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad ipsa enim cupiditate odio quisquam voluptatibus!</p>
            <a href="/crear-cuenta">Crea tu Cuenta!</a>
        </div>
    </div>

    <?php include __DIR__ . '/../templates/flecha.php'; ?>
</div>

<?php include 'membresias.php'; ?>

<?php
    $script = "
        <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script type='module' src='build/js/app.js'></script>
    ";
?>