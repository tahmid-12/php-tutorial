<?php
    $title = "For Each Loop";

    $teams = [
        'Pikachu',
        'Charizard',
        'Pidgeot'
    ];

    $types = [
        'thunder' => 'Pikachu',
        'fire' => 'Charizard',
        'flying' => 'Pidgeot' 
    ];

    // $kanto = [
    //     'Grass' => 'Bulbasaur',
    //     'Fire' => 'Charmander',
    //     'Water' => 'Squirtle'
    // ]

    $kanto = ['Bulbasaur','Charmander','Squirtle'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title;  ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PHP Fundamentals: <?= $title;  ?></a>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <table class="table table-dark table-striped">
                <?php
                    foreach($teams as $pokemon){
                        echo "<tr><td>$pokemon</tr></td>";
                    }
                ?>
            </table>

            <table class="table table-dark table-striped">
                <?php
                    foreach($types as $key => $pokemon){
                        echo "<tr><td>$key</td><td>$pokemon</tr></td>";
                    }
                ?>
            </table>

            <table class="table table-dark table-striped">
                <?php
                    for($i=0; $i<count($kanto);$i++){
                        $pokemon = $kanto[$i];
                        echo "<tr><td>$pokemon</td></tr>";
                    }
                ?>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>