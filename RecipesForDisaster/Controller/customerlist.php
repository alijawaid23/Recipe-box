<?php
    
    require_once ("../Model/customer.php");
    require_once ("../Model/dataAccess.php");
    //getting the inputs

    if(isset($_REQUEST["submitReg"]))
    {
        //$customerId = $_REQUEST["customerId"];
        $name = $_REQUEST["givenName"];
        $email = $_REQUEST["email"];
        $address = $_REQUEST["address"];
        $phoneNumber = $_REQUEST["phoneNumber"];
        $password = $_REQUEST["password"];

        //creating the customer
        $customer = new Customer();
        $customer->customerId = "";
        $customer->name = htmlentities($name);
        $customer->email = htmlentities($email);
        $customer->password = htmlentities($password);
        $customer->address = htmlentities($address);
        $customer->phoneNumber = htmlentities($phoneNumber);

        print_r($customer);

        //calling the function to add customer to the database
        addCustomers($customer); 
    }
    
    //V
    require_once "../View/customerlist_view.php";
 
?>