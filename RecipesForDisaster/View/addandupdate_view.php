<!doctype html>
<html>
    <head>
        <title>Add and Update Recipes</title>
        <script src="../View/script.js"></script> <!-- importing the JavaScript File -->
        <link rel="stylesheet" type="text/css" href="../View/styles.css"> <!-- importing the CSS File -->
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script> <!-- CDN -->
    </head>

    <body>
        <h1>Recipe for disasters</h1>
            <form action="addandupdate.php" method="POST">
                <h2>Add Recipe </h2>
                <label>keywords</label></br>
                <input name="keywords"type="text" placeholder="Enter Recipe Name"><br>

                <label>Ingredients</label><br>
                <input name="ingredients" type="text" placeholder="Enter All Ingrediants"><br>

                    
                <label>cookingTime</label></br>
                <input name="cookingTime"type="number" placeholder="Enter Cooking Time "><br>
              
                <label>recipeCost</label></br>
                <input name="recipeCost"type="number" placeholder="Enter Cost"><br>

                <label>dietryRequiremnets </label></br>
                <input name="dietaryRequirements" type="text" placeholder="Dietary requiremnts of Recipe"><br>

                <label>recipeText</label></br>
                <input name="recipeText" type="text"  placeholder="Enter recipe text"><br>

                <button name="AddRecipe"type = "submit">Add Recipe</button>
            </form>
            <form action="addandupdate.php" method="POST">

            <h2>Update Recipe</h2>
            <label>Recipe name</label></br>
            <input name="Updatekeywords" type="text" placeholder="Enter Recipe Name"><br>

                <label>Ingredients</label><br>
                <input name="Updateingredients" type="text" placeholder="Enter Ingrediants"><br>

                    
                <label>Cooking time</label></br>
                <input name="UpdatecookingTime"type="number" placeholder="Enter Cooking Time"><br>
              
                <label>Cost of the Recipe</label></br>
                <input name="UpdaterecipeCost"type="number" placeholder="Enter Cost"><br>

                <label>update dietary Requirements </label></br>
                <input name="UpdatedietaryRequirements" type="text" placeholder="dietaryRequirements Recipe"><br>

                <label>Recipe Text</label></br>
                <input name="UpdaterecipeText" type="text"  placeholder="Enter recipe text"><br>

                <button name="UpdateRecipe"type = "submit">Update Recipe</button>
</form>
    </body> 