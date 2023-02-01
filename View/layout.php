  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?php echo $title ?></title>
  </head>


  <?php require_once('Nav.php') ?>
  <h1><?php echo $title ?></h1>
  <?php echo $output ?>
  <!-- ajouter la variable de ob_start et obclean -->


  <?php
        echo "<p >Copyright &copy; 2022-" . date("Y") . " Arif.com</p>";

        ?>
  </body>

  </html>