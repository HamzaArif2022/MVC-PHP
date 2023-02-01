<?php
$title = 'Modifier Stagaire ';
ob_start()
?>
<br>
<form action="index.php?action=updating" method="POST" class="ml-5 mr-5">
    <!-- passe le data to the store page -->
    <div class="form-group">
        <input type="hidden" name="id" value="<?= $stagaire['idStagaire'] ?>" class="form-control">

        <label for="">Nom:</label>
        <input type="text" name="nom" value="<?= $stagaire['nom'] ?>" class="form-control">

    </div>
    <div class="form-group">
        <label for="">Prenom:</label>
        <input type="text" name="prenom" value="<?= $stagaire['prenom'] ?>" class="form-control">

    </div>
    <div class="form-group">
        <label for="">Age:</label>
        <input type="text" name="age" value="<?= $stagaire['age'] ?>" class="form-control">

    </div>
    <div class="form-group">
        <label for="">Login:</label>
        <input type="text" name="login" value="<?= $stagaire['login'] ?>" class="form-control">

    </div>
    <div class="form-group">

        <input type="submit" name="submit" value="Update" class="btn btn-success">

    </div>
</form>
<?php $output = ob_get_clean() ?>
<?php include_once('View/layout.php') ?>
<!-- // include the layout page reusable -->