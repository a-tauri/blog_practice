<?php
    require_once ('functions/db_manager.php');
    $kk = f($_POST['category_name']);
    $mm = f($_POST['edit_id']);
    
    $db = getDb();
    $stt = $db->prepare("UPDATE category SET category_name = :category_name WHERE id = '$mm'");
    $stt->bindValue(':category_name',$kk);
    $stt->execute();

    header('Location: category_list.php');