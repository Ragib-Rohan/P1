<?php

if ($_GET['button_submit']) {
    session_start();
    session_unset();
    session_destroy();
    echo ("<script>location.href = '../Login.php';</script>");
    // header("Location: ../Login.php");
}
