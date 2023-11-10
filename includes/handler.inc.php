<?php

//check if user accessed php script page
if ($_SERVER["REQUEST_METHOD"] =="POST_METHOD"){
    $name = $_POST["name"];
    $email = $_POST["emailInput"];
    $passcode = $_POST["passcodeInput"];
    $lastname = $_POST["lastname"];
    $address = $_POST["address"];

} else{
    header("Location: ../index.php");
}

//only sanitize data when its being ouputted