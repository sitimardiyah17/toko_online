<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TOKOku</title>
    
    <link rel="stylesheet" type="text/css" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
      <?= $this->include('navbar') ?>

  </head>
  <body>

      
        <div class="container mt-4">
        <?= $this->renderSection('content') ?>
          
        </div>
      




    
    <script src="<?= base_url('bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script type="<?= base_url('bootstrap/js/bootstrap.min.js') ?>"></script>
    
    <script src="<?= base_url('bootstrap/js/jquery2.min.js') ?>"></script>
  </body>
</html>
