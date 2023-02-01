<?php

$title = 'List stagaires';

ob_start() // debut de l'enregistrement d'une partie de code 
?>
<a href="index.php?action=Ajouter" class="btn btn-primary">Ajouter</a>
<table class=" mt-3 table table-border">
    <thead class="bg bg-warning">

        <tr>
            <td>id</td>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Age</td>
            <td>Login</td>
            <td>Action</td>
        </tr>
    </thead>
    <?php foreach ($stagaire as $stg) {  ?>
    <tr>

        <td><?= $stg['idStagaire'] ?>
        </td>
        <td><?= $stg['nom'] ?></td>
        <td><?= $stg['prenom'] ?></td>
        <td><?= $stg['age'] ?></td>
        <td><?= $stg['login'] ?></td>
        <td>
            <a class="btn btn-success btn-sm" href="index.php?action=edit&id=<?php echo $stg['idStagaire']; ?>">Edit</a>
            <a class="btn btn-danger btn-sm"
                href="index.php?action=delete&id=<?php echo $stg['idStagaire']; ?>">delete</a>
        </td>
    </tr>
    <?php }  ?>
</table>



<?php $output = ob_get_clean() ?>
<!-- /// fin de sauvgarde avec affectation de tout le code a la variable -->
<!-- reutilise dans unefiche -->

<!-- integer le codee la pagelayout -->

<?php include_once('View/layout.php') ?>