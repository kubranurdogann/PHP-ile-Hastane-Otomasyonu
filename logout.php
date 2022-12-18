<?php
include 'baglanti.php';
session_start();
session_destroy();
header("Location:index.php?exit");
?>