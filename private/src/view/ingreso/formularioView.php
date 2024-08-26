<?php require_once(dirname(__FILE__, 2) . '/layout/header.php'); ?>

<form action="<?= APP_ROOT . 'index.php?controller=formulario&activity=ingreso' ?>" method="post">
    <input type="text" name="nombre" id="">
    <input type="date" name="fecha_nacimiento" id="">

    <input type="submit" value="Enviar">
</form>

<?php require_once(dirname(__FILE__, 2) . '/layout/footer.php'); ?>