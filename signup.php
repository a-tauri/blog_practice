<?php
    session_start();
    require_once('db_manager.php');

    $csrf = htmlspecialchars($_POST['csrf_token'],ENT_QUOTES,'utf-8');
    if($_SESSION['csrf_token'] === $csrf){

        $name = htmlspecialchars($_POST['name'],ENT_QUOTES,'utf-8');
        $email = htmlspecialchars($_POST['email'],ENT_QUOTES,'utf-8');
        $pass = htmlspecialchars($_POST['password'],ENT_QUOTES,'utf-8');

        $db = getDb();
        var_dump($db);
        $stt = $db->prepare('INSERT INTO users(name,email,password) VALUES(:name, :email, :password)');
        $stt->bindValue(':name',$name);
        $stt->bindValue(':email',$email);
        $stt->bindValue(':password',$pass);
        $stt->execute();

        $_SESSION['name'] = $name;

        header('Location: index.php');
    }else{
        exit;
    }