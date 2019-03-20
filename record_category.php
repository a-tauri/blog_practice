<?php
    require_once 'functions/db_manager.php';

    //新たに作るカテゴリーをデータベースに登録

    $category_name = f($_POST['category_name']);
    
    $db = getDb();
    
    $stt = $db->prepare('INSERT INTO category(category_name) VALUES(:category_name)');

    $stt->bindValue(':category_name',$category_name);
    $stt->execute();

    header('Location: category_list.php');