


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" type = "text/css">
</head>
<body>
    <div class="side">
        <p>サイド</p>
        <ul>
            <li><a href="list.php">ブログ一覧</a></li>
            <li><a href="category_list.php">カテゴリ一覧</a></li>
        </ul>
    </div>
    <div class="main">
        <p>メイン</p>
        <p>こちらはメインコンテンツ</p>
        <form action="blog_post.php" method="post">
            <p>タイトル</p>
            <input type="text" name="tytle"></br>
            <p>記事内容</p>
            <textarea name="article" cols="20" rows="10"></textarea><br>
            <input type="submit" value="投稿">
        </form>
    </div>
    <div class = "clear">
        
    </div>
</body>
</html>