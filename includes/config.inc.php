<?php

//secure sessions on website 
ini_set('session.ise_only_cookies', 1);
ini_set('session.ise_strict_mode', 1);

session_set_cookie_params([
    'lifetime'=> 1800,
    'domain'=> 'localhost',
    'path'=> '/',
    'secure'=> true,
    'httponly'=> true
]);

session_start();

if(!isset($_SESSION["last_regeneration"])){
    regenerateID();
} else{
    $interval = 30 *60;
    if(time() - $_SESSION["last_regeneration"]  >= $interval){
        regenerateID();
    }
}

function regenerateID(){
    session_regenerate_id(); 
    $_SESSION["last_regeneration"] = time();
}