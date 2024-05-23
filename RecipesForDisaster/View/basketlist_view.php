<?php
require_once "../Model/recipe.php";
require_once "../Controller/basketlist.php";
require_once "../Model/dataAccess.php";
?>
<!doctype html>
<html>
<head>
  <title>Recipes For Disaster</title>
</head>
<body>
  <h1>Basket List</h1>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>ingredients</th>
                <th>cookingTime</th>
                <th>dietaryRequirements</th>
                <th>keywords</th>
                <th>recipeText</th>
                <th>recipeCost</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($basket as $recipe): ?>
            <tr>
                <td><?= $recipe->id ?></td>
                <td><?= $recipe->ingredients ?></td>
                <td><?= $recipe->cookingTime ?></td>
                <td><?= $recipe->dietaryRequirements ?></td>
                <td><?= $recipe->keywords ?></td>
                <td><?= $recipe->recipeText ?></td>
                <td><?= $recipe->recipeCost ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    
    <button type = "button"><a href="../Controller/loginlist.php">Checkout</a></button>

  </body>
</html>