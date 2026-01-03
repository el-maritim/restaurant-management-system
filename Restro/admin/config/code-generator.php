<?php

 //-Password Reset Token generator--//
 //set the length of the token to be 30 characters
    $length = 30;
    //generate random string of specified length using uppercase letters and numbers
    $tk = substr(str_shuffle("QWERTYUIOPLKJHGFDSAZXCVBNM1234567890"),1,$length);
    
 //-Dummy Password Generator--//
    $length = 10;//set the length of the token to be 10 characters
    //generate a random string of specified length using uppercase letters and numbers
    $rc= substr(str_shuffle("QWERTYUIOPLKJHGFDSAZXCVBNM1234567890"),1,$length);


    //---System Generated Numbers---//
    $length = 4;
    //generate a random string of uppercase letters
    $alpha= substr(str_shuffle("QWERTYUIOPLKJHGFDSAZXCVBNM"),1,$length);
    $ln = 4;
    //generate a random string of numbers
    $beta = substr(str_shuffle("1234567890"),1,$length);
 // Generate unique identifiers using secure random bytes and convert them to hexadecimal format
 // Generate a checksum (12 bytes converted to hex = 24 characters)
    $checksum= bin2hex(random_bytes('12'));
    // Generate an operation ID (4 bytes converted to hex = 8 characters)
    $operation_id = bin2hex(random_bytes('4'));
    // Generate a customer ID (6 bytes converted to hex = 12 characters)
    $cus_id = bin2hex(random_bytes('6'));
    // Generate a product ID (5 bytes converted to hex = 10 characters)
    $prod_id  = bin2hex(random_bytes('5'));
    $orderid = bin2hex(random_bytes('5'));
    $payid = bin2hex(random_bytes('3'));

 // Generate a random Mpesa code
 // Set the length of the Mpesa code to 10 characters
    $length = 10;
    // Generate a random string of specified length using uppercase letters, numbers, and mixed patterns
    $mpesaCode = substr(str_shuffle("Q1W2E3R4T5Y6U7I8O9PLKJHGFDSAZXCVBNM"),1,$length);
    
?>