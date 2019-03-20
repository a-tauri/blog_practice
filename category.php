<?php
    require_once ('functions/db_manager.php');


    $id = f($_GET['category']);
    $db = getDb();
    $stt = $db->prepare("SELECT * FROM category WHERE id = :id");
    $stt->bindValue(':id',$id);
    $stt->execute();

    $fet = $stt->fetch(PDO::FETCH_ASSOC);


?>
   
<!--    カテゴリーの編集または削除-->
<table>
    <tr>
        <td>
            カテゴリー名
        </td>
        <td>
            <?php echo $fet["category_name"]; ?>
        </td>
    </tr>
    <tr>
        <form action="delete_category.php" method="get">
            <button type="submit">削除</button>
            <input type = "hidden" name = "delete" value = <?php echo $id ?>>
        </form>
    </tr>
    <tr>
       <form action="edit_category.php" method="get">
            <button>編集</button>
            <input type = "hidden" name= "edit" value = <?php echo $id ?>>
        </form>
    </tr>
</table>
    
<!--    カテゴリーに属する記事一覧-->