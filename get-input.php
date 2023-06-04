<?php
    $title = 'GET Input';

    include('./inc/header.php');
    require('./inc/functions.php');
    // require_once('./inc/functions.php');

   $productid = $_GET['productid'];
  //  $limit = $_GET['limit'];

  $limit = filter_input(INPUT_GET,'limit',FILTER_VALIDATE_INT);

?>

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">GET Input</h1>
        </div>
      </div>
      <div class="row">
        <!-- Showing category: <?= $category; ?>. Limit <?= $limit; ?> -->
        <?=  $productid; ?>
        <br />
        <?= $limit; ?>
      </div>
    </div>
    
<?php include('./inc/footer.php') ?>      