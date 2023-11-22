<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){

    //sign up information:
        $name = $_POST["name"];
        $email = $_POST["emailInput"];
        $passcode = $_POST["passcodeInput"];
        $confirmPasscode = $_POST["passcodeConfirm"];
        $lastname = $_POST["lastname"];
        $address = $_POST["address"];

        {
            //Send data to db
            try
            {
                require_once "db.inc.php"; 
                require_once "signup_model.inc.php";
                require_once "signup_controller.inc.php";

                if(isInputEmpty($name, $lastname, $email, $passcode, $confirmPassword, $addressLine)){

                }

                if(isEmailValid($email)){

                }

            }
            catch(PDOException $exp)
            {
                die("QUERY FAILED: " . $exp->getMessage());
            }
        }
} 
else {
    header("Location: ../index.php");
    die();
}

//only sanitize data when its being ouputted