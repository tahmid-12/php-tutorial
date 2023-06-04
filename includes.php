<?php
    $title = 'includes';

    include('./inc/header.php');
    require('./inc/functions.php');
    // require_once('./inc/functions.php');

    $johto = [
        ['name' => 'Chicurita'],
        ['name' => 'Cyndaquil'],
        ['name' => 'Totodile']
    ];
?>

    <div class="container">
        <div class="row">
            <?php output($johto) ?>
        </div>
    </div>
    
<?php include('./inc/footer.php') ?>    