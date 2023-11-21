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

