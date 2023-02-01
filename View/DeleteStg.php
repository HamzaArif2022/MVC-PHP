<?php
$title = 'Delete Stagaire';
ob_start();
?>
<h5> Voulez vous vraiment Suprrimer </h5>
<a href="index.php?action=Deleted&id=<?php echo $id; ?>" class="btn btn-primary">Valider</a>
<a href="index.php?action=list" class="btn btn-danger">Annuler la suppression</a>
<!--  redirege a la page home -->

<?php $output = ob_get_clean() ?>
<?php include_once("View/layout.php") ?>