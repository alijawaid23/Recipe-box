<?php
ini_set('display_errors',1);
ini_set('display_startup_errors' ,1);
error_reporting(E_ALL);

$db_user = "k";
$db_name = "db_k";
$db_password = "";

$pdo = new
 PDO("mysql:host=localhost;dbname=$db_name",$db_user,$db_password);

function getAllRecipes()
{
  global $pdo;
  $statement = $pdo->prepare('SELECT * FROM recipes');
  $statement->execute();
  $result = $statement->fetchAll(PDO::FETCH_CLASS, 'recipe');
  return $result;
}

function getRecipeById($id)
{
  global $pdo;
  $statement = $pdo->prepare('SELECT * FROM recipes WHERE id = ?');
  $statement->execute([$id]);
  $result = $statement->fetchObject('recipe');
  return $result;
}

function getRecipesByIngredients($ingredients)
{
  global $pdo;
  $statement = $pdo->prepare('SELECT * FROM recipes WHERE ingredients LIKE ?');
  $statement->execute(["%".$ingredients."%"]);
  $result = $statement->fetchAll(PDO::FETCH_CLASS, 'recipe');
  return $result;
}

function getRecipesByCookingTime($cookingTime)
{
  global $pdo;
  $statement = $pdo->prepare('SELECT * FROM recipes WHERE cookingTime = ?');
  $statement->execute([$cookingTime]);
  $result = $statement->fetchAll(PDO::FETCH_CLASS, 'recipe');
  return $result;
}

function getRecipesByDietaryRequirements($dietaryRequirements)
{
  global $pdo;
  $statement = $pdo->prepare('SELECT * FROM recipes WHERE dietaryRequirements = ?');
  $statement->execute([$dietaryRequirements]);
  $result = $statement->fetchAll(PDO::FETCH_CLASS, 'recipe');
  return $result;
}

function getRecipesByKeywords($keywords)
{
  global $pdo;
  $statement = $pdo->prepare('SELECT * FROM recipes WHERE keywords = ?');
  $statement->execute([$keywords]);
  $result = $statement->fetchAll(PDO::FETCH_CLASS, 'recipe');
  return $result;
}

function getRecipesByRecipeText($recipeText)
{
  global $pdo;
  $statement = $pdo->prepare('SELECT * FROM recipes WHERE recipeText LIKE ?');
  $statement->execute(["%".$recipeText."%"]);
  $result = $statement->fetchAll(PDO::FETCH_CLASS, 'recipe');
  return $result;
}


function getRecipesByRecipeCost($recipeCost)
{
  global $pdo;
  $statement = $pdo->prepare('SELECT * FROM recipes WHERE recipeCost = ?');
  $statement->execute([$recipeCost]);
  $result = $statement->fetchAll(PDO::FETCH_CLASS, 'recipe');
  return $result;
}

//This function will add customers in the customers table
function addCustomers($customer)
{
  print_r($customer);
  global $pdo;
  $statement = $pdo->prepare("INSERT INTO customers (name, email, password, phoneNumber, address) VALUES (?,?,?,?,?)");
  $statement->execute([$customer->name,
                      $customer->email,
                      $customer->password,
                      $customer->phoneNumber,
                      $customer->address]);
}

function checkUser($Customer)
{
  global $pdo;
  $statement = $pdo->prepare('SELECT * FROM customers WHERE email = ? AND password = ?');
  $statement->execute([$Customer->email,
                       $Customer->password]);
  $result = $statement->fetchAll(PDO::FETCH_CLASS, 'customer');
  return count($result) == 0; // will return false if there is a user
}

function Login($Customer)
{
  global $pdo;
  $statement = $pdo->prepare('SELECT * FROM customers WHERE email = ? AND password = ?'); 
  $statement->execute([$Customer->email,
                       $Customer->password]);
  $result = $statement->fetchAll(PDO::FETCH_CLASS, 'customer');
  return $result;
}

function addRecipe($recipe)
{
    // allows admin to add ingredients
    global $pdo;
    $statement = $pdo->prepare('INSERT INTO recipes(id,ingredients,cookingTime,dietaryRequirements,keywords,recipeText,recipeCost) VALUES (?,?,?,?,?,?,?)');
    $statement->execute([$recipe->id,
                        $recipe->ingredients,
                        $recipe->cookingTime,
                        $recipe->dietaryRequirements,
                        $recipe->keywords,
                        $recipe->recipeText,
                        $recipe->recipeCost]);
}



function updateRecipe($recipe)
{
  global $pdo;
  $statement = $pdo->prepare("UPDATE recipes SET ingredients = ?, cookingTime = ?, dietaryRequirements = ?, recipeText = ?, recipeCost = ? WHERE keywords = ?");
  $statement->execute([$recipe->ingredients,
                        $recipe->cookingTime,
                        $recipe->dietaryRequirements,
                        $recipe->recipeText,
                        $recipe->recipeCost,
                        $recipe->keywords]);

}

?>
