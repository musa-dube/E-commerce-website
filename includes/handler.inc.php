<?php

//check if user accessed php script page
if ($_SERVER["REQUEST_METHOD"] == "POST_METHOD"){

    // sign up
        $name = $_POST["name"];
        $email = $_POST["emailInput"];
        $passcode = $_POST["passcodeInput"];
        $lastname = $_POST["lastname"];
        $address = $_POST["address"];

        $comment = $_POST["comment"];
        
        $username = $_POST["username"];
        $pwd = $_POST["pwd"];

            //Send data to db
            try{
                require_once "db.inc.php"; // a method to link files like <link in css
                $query = "INSERT INTO customer(name, lastname, date_of_birth, email, password, address_line) VALUES(?,?,?,?);" ;
                $statement = $pdo->prepare($query);

                $statement->exxecute([$name,$emai, $passcode,$lastname,$address]);

                //comment:
                $queryComment = "INSERT INTO customer(email, comment) VALUES(?,?);" ;
                $stmtComment = $pdo->prepare($queryReiew);

                $stmtComment->exxecute([$name,$emai]);

                header("Location: ../index.php");
                die();
            }catch(PDOException $exp){
                die("QUERY FAILED: " . $exp->getMessage());
            }
   
        try{
            $queryUsername = "SELECT email FROM customer WHERE email = ?" ;
            $queryPwd = "SELECT password FROM customer WHERE password = ?" ;
        
            $stmtUsername = $pdo->prepare($queryUsername);
            $stmtPwd= $pdo->prepare($queryPwd);

            $stmtUsername->execute([$username]);
            $stmtPwd->execute([$pwd]);

            $fetchUsername = $stmtUsername->fetch(PDO::FETCH_ASSOC);
            $fetchPwd = $stmtPwd->fetch(PDO::FETCH_ASSOC);
            if($email == $queryUsername && $pwd == $queryPwd ){
                
            }

        }catch(PDOException $ex){

        }
        if(){

        }


} else{
    header("Location: ../index.php");
}

//only sanitize data when its being ouputted