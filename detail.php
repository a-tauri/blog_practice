<?php
    require_once ('functions/db_manager.php');
//    echo $_GET['text'];
    
    $id = f($_GET['text']);
    $db = getDb();
    $stt = $db->prepare("SELECT * FROM blogs WHERE id = :id");
    $stt->bindValue(':id',$id);
    $stt->execute();
    
    $fet = $stt->fetch(PDO::FETCH_ASSOC);

//    var_dump($fet);
?>
<table>
    <tr>
        <td>
            title
        </td>
        <td>
            <?php echo $fet["title"]; ?>
            <?php echo $fet["message"]; ?>
        </td>
    </tr>
    <tr>
        <form action="delete.php" method="get">
            <button type="submit">削除</button>
            <input type = "hidden" name = "delete" value = <?php echo $id ?>>
        </form>
    </tr>
    <tr>
       <form action="edit.php" method="get">
            <button>編集</button>
            <input type = "hidden" name= "edit" value = <?php echo $id ?>>
        </form>
    </tr>
</table>