<?php
    require_once 'functions/db_manager.php';
    
    $tytle = f($_POST['tytle']);
    $article = f($_POST['article']);

    $db = getDb();

    $stt = $db->prepare('INSERT INTO blogs(title,message) VALUES(:tytle, :article)');

    $stt->bindValue(':tytle',$tytle);
    $stt->bindValue(':article',$article);
    $stt->execute();

    header('Location: index.php');