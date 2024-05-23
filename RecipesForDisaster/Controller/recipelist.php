<?php

// M
require_once "../Model/recipe.php";
require_once "../Model/dataAccess.php";
session_start();

// C
// if they typed something into the search id
//      results = getRecipeById(whatever they typed)
if (isset($_REQUEST["searchid"]) && $_REQUEST["searchid"] != "")
{    
    $results = [ getRecipeById($_REQUEST["searchid"]) ];    
}
// else if they typed something into the search ingredients
//      results = getRecipesByingredients(whatever they typed)
else if (isset($_REQUEST["searchin"]) && $_REQUEST["searchin"] != "")
{
    $results = getRecipesByIngredients($_REQUEST["searchin"]);
}
// else if they typed something into the search cookingTime
//      results = getRecipesByCookingTime(whatever they typed)
else if (isset($_REQUEST["searchct"]) && $_REQUEST["searchct"] != "")
{
    $results = getRecipesByCookingTime($_REQUEST["searchct"]);
}
// else if they typed something into the search dietaryRequirements
//      results = getRecipesBydietaryRequirements(whatever they typed)
else if (isset($_REQUEST["searchdr"]) && $_REQUEST["searchdr"] != "")
{
    $results = getRecipesByDietaryRequirements($_REQUEST["searchdr"]);
}
// else if they typed something into the search keywords
//      results = getRecipesByKeywords(whatever they typed)
else if (isset($_REQUEST["searchkey"]) && $_REQUEST["searchkey"] != "")
{
    $results = getRecipesByKeywords($_REQUEST["searchkey"]);
}
// else if they typed something into the search recipeText
//      results = getRecipesByRecipeText(whatever they typed)
else if (isset($_REQUEST["searchrt"]) && $_REQUEST["searchrt"] != "")
{
    $results = getRecipesByRecipeText($_REQUEST["searchrt"]);
}
// else if they typed something into the search RecipeCost
//      results = getRecipesByRecipeCost(whatever they typed)
else if (isset($_REQUEST["searchrc"]) && $_REQUEST["searchrc"] != "")
{
    $results = getRecipesByRecipeCost($_REQUEST["searchrc"]);
}
else
{
    // otherwise
    $results = getAllRecipes();
}

//Empty Arraylist of Basket everytime the user opens the app

if (!isset($_SESSION["basket"]))
{
    $_SESSION["basket"] = [];
}

$basket = $_SESSION["basket"];

if (isset($_REQUEST["addToBasket"]))
{
    // we've selected a recipe!
    // Add them to the basket list
    
    $addItem = $_REQUEST["addToBasket"];
    $itemsAdded = getRecipeById($addItem);
    $basket[] = $itemsAdded;
    $_SESSION["basket"] = $basket;

}


if (!isset($_SESSION["customerEmail"]))
{
    $_SESSION["customerEmail"] = [];
}

if (!isset($_SESSION["password"]))
{
    $_SESSION["password"] = [];
}

// V
require_once "../View/recipelist_view.php";


?>