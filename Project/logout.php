<?php
session_start();
unset($_SESSION['user']);
header("location:template/index.php");