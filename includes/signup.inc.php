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
                require_once "db.inc.php"; // a method to link files like <link in css
                require_once "";
                $query = "INSERT INTO customer(name, lastname, email, password, address_line) VALUES(?,?,?,?,?);" ;
                $statement = $pdo->prepare($query);

                if($passcode == $confirmPasscode)
                {
                        $statement->execute([$name,$lastname, $email, $passcode,$address]);

                        header("Location: ../index.php");

                        exit();
                }
                else
                {
                    echo "ERROR: passwords entered do not match";
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