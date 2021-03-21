<?php

    $_SESSION = array();

    session_destroy();

    //header('Location: ../../index.php?logout=true');
    header('Location: ../../index.php');
    
?>