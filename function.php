<?php

    $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;':<>,.?\/";
    $passLength = $_GET['numeroPassword'];

    function getPassword($input, $numero){
        $password = '';
        for($i > 0; $i < $numero; $i++){
            $password .= $input[rand(0, strlen($input))];
        }
        return $password; 
    }
?>