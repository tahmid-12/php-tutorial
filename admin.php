<?php

    session_start();

    include('./inc/header.php');
    include('./inc/constants.php');
    require('./inc/functions.php');

    ensure_user_is_authenticated();

    echo $_SESSION['email'];

?>