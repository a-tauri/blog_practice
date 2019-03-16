<?php
    require_once ('functions/db_manager.php');
    echo $_GET['text'];
    
    $id = f($_GET['text']);
    $db = getDb();
    $stt = $db->prepare("SELECT * FROM blogs WHERE id = :id");
    $stt->bindValue(':id',$id);
    $stt->execute();
    
    $fet = $stt->fetch(PDO::FETCH_ASSOC);

    var_dump($fet);