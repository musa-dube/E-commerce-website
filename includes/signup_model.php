<?php 

declare(strict_types=1);
require_once "db.inc.php";

function getEmail(object $pdo, string $email){
    $query = "SELECT email FROM customer WHERE email= :email;";
    $statement = $pdo->prepare($query);
    $statement->bindParam(":email", $email);
    $statement->execute();
    $outcome =
}

function submitForm(){

    $query = "INSERT INTO customer(name, lastname, email, password, address_line) VALUES(?,?,?,?,?);" ;
    $statement = $pdo->prepare($query);

    if($passcode == $confirmPasscode)
    {
            $statement->execute([$name,$lastname, $email, $passcode,$address]);

            header("Location: index.php");

            exit();
    }
    else
    {
        echo "ERROR: passwords entered do not match";
    }
}
