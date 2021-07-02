<?php

require 'config/dbconnect.php';

$stmt = $pdo->prepare("INSERT INTO admin (firstname, middlename, lastname, email, password, created_at, updated_at ) VALUES (:firstname, :lastname, :lastname, :email, :password, :created_at, :updated_at)");

$stmt->execute([
    ":firstname" => "Kelechi",
    ":middlename" => "None",
    ":lastname" => "Okorie",
    ":email" => "kelechiokorie22@gmail.com",
    "password" => password_hash('password', PASSWORD_DEFAULT),
    "created_at" => '2021-07-02 14:57:03', 
    "updated_at" => '2021-07-02 14:57:03' 
]);

if($stmt->errorCode() == '0000') {

    $return_arr['status'] = 'success';
    $return_arr['data'] = [];
    
    echo json_encode($return_arr);
}

