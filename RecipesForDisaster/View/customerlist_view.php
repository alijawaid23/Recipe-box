<!doctype html>
<?php require_once("../Controller/customerlist.php"); ?>
<html>
    <head>
        <title>Add Customers</title>
        <script src="../View/script.js"></script> <!-- importing the JavaScript File -->
        <link rel="stylesheet" type="text/css" href="../View/styles.css"> <!-- importing the CSS File -->
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script> <!-- CDN -->
    </head>
    <body>
        <form action="#" method="POST">
            <label>name:</label>
            <input name="givenName"/><br/>

            <label>email:</label>
            <input name="email"/><br/>

            <label>password:</label>
            <input name="password"/><br/>

            <label>phoneNumber:</label>
            <input name="phoneNumber"/><br/>

            <label>address:</label>
            <input name="address"/><br/>

            <input name="submitReg"type="submit"/>
        </form>

    <a href="../Controller/recipelist.php">go back to list</a>
    </body>
</html>

<!-- >