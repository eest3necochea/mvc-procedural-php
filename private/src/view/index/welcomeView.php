<?php require_once(dirname(__FILE__, 2) . '/layout/header.php'); ?>

<h1>welcome view <?= $name ?></h1>

<a href=" <?= APP_ROOT . 'index.php?controller=formulario&activity=ingreso' ?>">Ingresar al formulario</a>

<?php require_once(dirname(__FILE__, 2) . '/layout/footer.php'); ?>