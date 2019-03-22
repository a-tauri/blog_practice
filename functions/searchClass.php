<?php

/**
*  検索
*/
class searchClass
{
	
	public function getData($id, $table)
	{
		require_once './functions/db_manager.php';
		$db = getDb();
		// table名でカテゴリと記事本文をケース分け 不要
		$stt = $db->prepare("SELECT * FROM :table WHERE id = :id");
	    $stt->bindValue(':id',$id);
	    $stt->bindValue(':table',$table);
	    $stt->execute();
	    $fet = $stt->fetch(PDO::FETCH_ASSOC);
	    return $fet;
	}
}