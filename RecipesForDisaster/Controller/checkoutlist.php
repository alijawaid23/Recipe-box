<?php

//M
require_once "../Model/dataAccess.php";
require_once "../Model/recipe.php";

//C
session_start();

if (!isset($_SESSION["basket"]))
{
    $_SESSION["basket"] = [];
}

$basket = $_SESSION["basket"];

//V
require_once "../View/checkoutlist_view.php";
?>