<?php
    require_once 'functions/db_manager.php';
    
    /*データベースに投稿したタイトルと本文をリストにして表示*/
    $db = getDb();
    
    $stt = $db->prepare("SELECT * FROM blogs");
    
    $stt->execute();

    $row = $stt->fetchAll();
    
    //var_dump($row);
    
    foreach($row as $v){
        echo "<a href='detail.php?text=".$v["id"]."'>";
        echo $v["id"]." ";
        echo $v["title"]." ";
        echo $v["created_at"]."</a><br>";
//        echo "<button>削除</button><br>";
    }