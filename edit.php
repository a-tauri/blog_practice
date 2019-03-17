<?php
    require_once ('functions/db_manager.php');
    $ee = f($_GET['edit']);

    $db = getDb();
    
    $stt = $db->prepare("SELECT * FROM blogs WHERE id='$ee' ");
    $stt->execute();
    $row = $stt->fetch(PDO::FETCH_ASSOC);
    
?>
<form action="update.php" method="post">
    <input type = "hidden" name = "edit_id" value = <?php echo $ee; ?>>
    <input type="text" name="title" value = <?php echo $row['title']; ?>>
    <textarea name = "message"><?php echo $row['message']; ?></textarea>
    <button type="submit">Submit</button>
</form>