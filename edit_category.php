<?php
    //カテゴリー名を変更するためのコード
    require_once ('functions/db_manager.php');
    $ii = f($_GET['edit']);

    $db = getDb();
    
    $stt = $db->prepare("SELECT * FROM category WHERE id='$ii' ");
    $stt->execute();
    $row = $stt->fetch(PDO::FETCH_ASSOC);
    
?>
<form action="update_category.php" method="post">
    <input type = "hidden" name = "edit_id" value = <?php echo $ii; ?>>
    <input type="text" name="category_name" value = <?php echo $row['category_name']; ?>>
    <button type="submit">変更</button>
</form>