<?php
session_start();
    if (!isset($_SESSION['Usr'])) {
        header("Location: index.php");
    }
?>