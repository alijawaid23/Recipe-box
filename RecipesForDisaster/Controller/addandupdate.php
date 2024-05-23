<?php
    //M
    require_once "../Model/recipe.php";
    require_once "../Model/dataAccess.php";
    //C
    session_start();

    /*
    if(!isset($_SESSION["rname"]))
    {
        $_SESSION["rname"] = [];
    }
    $recipeCost = "";
    $results = getRecipesByKeywords($recipeCost);
    */
    
    if (isset($_REQUEST["AddRecipe"]))
    {
        $keywords = $_REQUEST["keywords"];
        $ingredients = $_REQUEST["ingredients"];
        $cookingTime = $_REQUEST["cookingTime"];
        $dietaryRequirements = $_REQUEST["dietaryRequirements"];
        $recipeCost = $_REQUEST["recipeCost"];
        $recipeText = $_REQUEST["recipeText"];


        
        $recipe = new Recipe();
        $recipe->keywords = htmlentities($keywords);
        $recipe->ingredients = htmlentities($ingredients);
        $recipe->cookingTime = htmlentities($cookingTime);
        $recipe->dietaryRequirements = htmlentities($dietaryRequirements);
        $recipe->recipeCost = htmlentities($recipeCost);
        $recipe->recipeText = htmlentities($recipeText);

        
        addRecipe($recipe);
    }

    if (isset($_REQUEST["UpdateRecipe"]))
    {
        $keywords = $_REQUEST["Updatekeywords"];
        $ingredients = $_REQUEST["Updateingredients"];
        $cookingTime = $_REQUEST["UpdatecookingTime"];
        $dietaryRequirements = $_REQUEST["UpdatedietaryRequirements"];
        $recipeCost = $_REQUEST["UpdaterecipeCost"];
        $recipeText = $_REQUEST["UpdaterecipeText"];


        
        $recipe = new Recipe();
        $recipe->keywords = htmlentities($keywords);
        $recipe->ingredients = htmlentities($ingredients);
        $recipe->cookingTime = htmlentities($cookingTime);
        $recipe->dietaryRequirements = htmlentities($dietaryRequirements);
        $recipe->recipeCost = htmlentities($recipeCost);
        $recipe->recipeText = htmlentities($recipeText);

        
        updateRecipe($recipe);

    }
             
    //V
    require_once "../View/addandupdate_view.php";
?>