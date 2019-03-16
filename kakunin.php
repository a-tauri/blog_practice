<?php
    session_start();
    require_once('db_manager.php');

    $csrf = htmlspecialchars($_POST['csrf_token'],ENT_QUOTES,'utf-8');
    if($_SESSION['csrf_token'] === $csrf){
        $test = htmlspecialchars($_POST['test'],ENT_QUOTES,'utf-8');
        $pass = htmlspecialchars($_POST['password'],ENT_QUOTES,'utf-8');
        $db = getDb();
        $stt = $db->prepare("SELECT * FROM users WHERE email = :test AND password = :pass");
        $stt->bindValue(":test",$test);
        $stt->bindValue(":pass",$pass);
        $stt->execute();
        $con = $stt->fetchAll(PDO::FETCH_ASSOC);
//        print_r($con);
        print_r($con[0]['name']);
        
        if(empty($con)){
            $_SESSION['name'] = $test;
            header('Location: login.php');
        }else{
            $_SESSION['user'] = $con[0]['name'];
            header('Location: index.php');
        }
    }else{
        exit;
    }
    
    //if($test == 'sample@mail.com' && $pass == '123456'){
    //    $_SESSION['name'] = $test;
    //    header('Location: index.php');
   // }else{
    //    $_SESSION['error'] = 0;
   //     header('Location: login.php');
    //    
    //}