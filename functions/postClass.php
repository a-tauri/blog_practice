<?php

/**
*  登録処理
*/
class postClass
{
	/**
	*  @param title string BlogTitle or Category Name
	*  @param message string blogMessage. if post data is category, null 
	*  @param table insert table name
	*/	
	public function postMessage($title, $message=null, $table)
	{
		require_once './functions/db_manager.php';
		$db = getDb();
		// table名でカテゴリと記事本文をケース分け
		if ($table = "category") {
			$stt = $db->prepare('INSERT INTO category(category_name) VALUES(:title)');
		    $stt->bindValue(':title',$title);
		    $stt->execute();
		    header('Location: category_list.php');
		}else{
			$stt = $db->prepare('INSERT INTO blogs(title,message) VALUES(:title, :message)');
		    $stt->bindValue(':title',$title);
		    $stt->bindValue(':message',$message);
		    $stt->execute();
		    header('Location: index.php');
		}
	}
}