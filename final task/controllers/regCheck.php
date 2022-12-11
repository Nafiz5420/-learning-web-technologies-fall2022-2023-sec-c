<?php
    session_start();
    require_once('../models/userModel.php');

    $id = $_POST['id'];
    $password = $_POST['password'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $utype = $_POST['utype'];

    if($id == "" || $password == "" || $email == ""|| $utype == ""){
        
        header('location: ../views/signup.php?err=null');

    }else { 
        $user = ['id'=>$id, 'password'=> $password,'username'=> $username ,'email'=> $email, 'utype'=> $utype];
        $status = insertUser($user);
        if($status){
            header('location: ../views/login.php');
        }else{
            echo "DB insert error!";
        }
        
    }


?>