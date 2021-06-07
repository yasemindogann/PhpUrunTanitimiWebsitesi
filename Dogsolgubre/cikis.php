<?php

    session_start();
    $_SESSION = array();

    session_destroy();   //Oturum Sonlandırma

    header("Location:panelgiris.php");

?>