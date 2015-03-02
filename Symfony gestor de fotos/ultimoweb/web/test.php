<?php

    $password = 'hola';

    // A higher "cost" is more secure but consumes more processing power
    $cost = 10;

    // Create a random salt
    $salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');

    // Prefix information about the hash so PHP knows how to verify it later.
    // "$2a$" Means we're using the Blowfish algorithm. The following two digits are the cost parameter.
    $salt = sprintf("$2y$%02d$", $cost) . $salt;

    echo 'Salt: '.$salt;
    echo "\n\r";
    // Value:
    // $2a$10$eImiTXuWVxfM37uY4JANjQ==

    // Hash the password with the salt
    $hash = crypt($password, $salt);
    echo 'Hash: '.$hash;
    echo "\n\r";

    //$hash = '$2y$10$kSppeHCpeCre8hDYzHzJ6.TYWP7yAVHhK/BFc1e0qe2mm5fQdDABK';
    //$pass = '7';

    $test = crypt($password, $hash);

    echo 'Test: '.$test;
    echo "\n\r";