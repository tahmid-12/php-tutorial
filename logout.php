<?php

session_start();
session_unset();
session_destroy();

require('./inc/functions.php');

redirect('post.php');

?>