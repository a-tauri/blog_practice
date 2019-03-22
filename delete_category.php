<?php
    require_once ('functions/db_manager.php');
    $jj = f($_GET['delete']);

    $db = getDb();
    
    $stt = $db->prepare("DELETE FROM category WHERE id='$jj' ");
    $stt->execute();
    header('Location: category_list.php');