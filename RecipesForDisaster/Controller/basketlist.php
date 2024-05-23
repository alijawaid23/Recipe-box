<?php
session_start();

// M
require_once "../Model/recipe.php";
require_once "../Model/dataAccess.php";

// C
// if we've never initialised the basket session variable,
// create a new session variable called "basket" and initialise it
// with an empty array

if (!isset($_SESSION["basket"]))
{
    $_SESSION["basket"] = [];
}

$basket = $_SESSION["basket"];

// put the session variable into a regular PHP variable - just looks
// nicer


if (isset($_REQUEST["addToBasket"]))
{
    // we've selected a recipe!
    // Add them to the basket list
    
    $addItem = $_REQUEST("addToBasket");
    $itemsAdded = getItemsInBasket($addItem);
    $basket[] = $itemsAdded;
    $_SESSION["basket"] = $basket;

}

//V
// Remove the view later on 
//require_once "../View/basketlist_view.php"

?>