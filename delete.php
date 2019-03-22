<?php
    require_once ('functions/db_manager.php');
    $dd = f($_GET['delete']);

    $db = getDb();
    
    $stt = $db->prepare("DELETE FROM blogs WHERE id='$dd' ");
    $stt->execute();
    header('Location: list.php');