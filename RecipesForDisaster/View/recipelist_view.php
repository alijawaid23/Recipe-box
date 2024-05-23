<!doctype html>
<html>
<head>
  <title>Recipes</title>
  <script src="../View/script.js"></script> <!-- importing the JavaScript File -->
  <link rel="stylesheet" type="text/css" href="../View/styles.css"> <!-- importing the CSS File -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script> <!-- CDN -->
</head>
<body>
  <h1>Recipes for Disaster</h1>

 <!-- JavaScript + JQuery -->
  <div id="jsTarget">Hello</div>
  <div id="jqTarget">there</div>
  <script type = "text/javascript">
    document.getElementById("jsTarget").innerHTML = "<b>Welcome!</b>";
    $("div#jqTarget").html("<b>Happy Shopping!</b>");
  </script>

  <a href="../View/customerlist_view.php">Register</a>
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
        <th>action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($results as $recipe): ?>
      <tr>
        <td><?= $recipe->id ?></td>
        <td><?= $recipe->ingredients ?></td>
        <td><?= $recipe->cookingTime ?></td>
        <td><?= $recipe->dietaryRequirements ?></td>
        <td><?= $recipe->keywords ?></td>
        <td><?= $recipe->recipeText ?></td>
        <td><?= $recipe->recipeCost ?></td>
        <td><a href="recipelist.php?addToBasket=<?= $recipe->id ?>">add in basket</a></td> <!-- basket will count the number of people added -->
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
  <a href="../Controller/recipelist.php">Clear search</a>
  <hr/>
  <form action="recipelist.php" method="POST"> <!-- previously the form was getting submitted to the controller -->
    Search by id:
    <input name="searchid"/> <input type="submit" value="Search"/><br/>
    Search by ingredients:
    <input name="searchin"/> <input type="submit" value="Search"/><br/>
    Search by CookingTime:
    <input name="searchct"/> <input type="submit" value="Search"/><br/>
    Search by dietaryRequirements:
    <input name="searchdr"/> <input type="submit" value="Search"/><br/>
    Search by keywords:
    <input name="searchkey"/> <input type="submit" value="Search"/><br/>
    Search by recipeText:
    <input name="searchrt"/> <input type="submit" value="Search"/><br/>
    Search by recipeCost:
    <input name="searchrc"/> <input type="submit" value="Search"/><br/>
  </form>
  <hr/>

  <button id="color-button" onclick="toggleColor()">Switch to black background</button>

  <?= count($basket) ?> Items added to <a href="../View/basketlist_view.php">basket</a>
  <a href="../Controller/adminlist.php">Admin Portal</a>
</body>
</html>