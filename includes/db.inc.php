<?php

    $dsn= "mysql:$host=localhost;$dbname=careflow_db";
    $dbname = "careflow_db";
    $dbusername= "root";
    $dbpassword= "";
  
    try
    {
        //php data objects = pdo, flexabile connections to may types of db
        $pdo = new PDO($dsn, $dbusername, $dbpassword); // NB line to connect to db
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // throw an excpetion
    }
    catch(PDOException $exp)
    {
        echo "Connection failed: " . $exp->getMessage(); //display error in browser 
    }



    