<?php

//M
require_once "../Model/customer.php";
require_once "../Model/dataAccess.php";


//C
//session_start();

if(!isset($_SESSION["ActualUser"]))
{
    $_SESSION["ActualUser"] = [];
}

$actualUser = $_SESSION["ActualUser"];

$status = false;

if(isset($_REQUEST["login"]))
{
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];

    if($password != "" && $email != "")
    {
        $Customer = new Customer();
        $Customer->email = htmlentities($email);
        $Customer->password = htmlentities($password);

        if(checkUser($Customer) == false)
        {
            $actualUser = Login($Customer);
            $_SESSION["ActualUser"] =  $actualUser;
            header("Location: ../Controller/checkoutlist.php");
        }
        else
        {
            $status  = "You do not have an account, please make one on the register page";
            header("Location: ../Controller/loginlist.php");
        }
    }
}

//V
require_once "../View/loginlist_view.php";

?>