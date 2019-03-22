<?php
    require_once ('functions/db_manager.php');
    $ff = f($_POST['title']);
    $gg = f($_POST['message']);
    $hh = f($_POST['edit_id']);
    
    $db = getDb();
    $stt = $db->prepare("UPDATE blogs SET title = :title, message = :message WHERE id = '$hh'");
    $stt->bindValue(':title',$ff);
    $stt->bindValue(':message',$gg);
    $stt->execute();

//    header('Location: list.php');