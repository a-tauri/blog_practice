<?php
    require_once 'functions/db_manager.php';
    
    $db = getDb();
    
    $stt = $db->prepare("SELECT * FROM category");
    
    $stt->execute();
    
    $row = $stt->fetchAll();

    //var_dump($row);
    
    echo "未分類<br>";

    foreach($row as $c){
        echo "<a href='category.php?category=".$c["id"]."'>";
        echo $c["id"]." ";
        echo $c["category_name"]."</a><br>";
    }

?>

<table>
    <tr>
        <form action="record_category.php" method="post">
           <p>新規タグ名</p>
           <input type="text" name="category_name"><br>
            <button>新規作成</button><br>
        </form>
    </tr>
    <tr>
        <a href="index.php">メインページに戻る</a>
    </tr>
</table>
