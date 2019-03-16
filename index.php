


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
            <li>カテゴリ</li>
        </ul>
    </div>
    <div class="main">
        <p>メイン</p>
        <p>こちらはメインコンテンツ</p>
        <form action="blog_post.php" method="post">
            <input type="text" name="tytle"></br>
            <textarea name="article" cols="5" rows="3"></textarea>
            <input type="submit" value="投稿">
        </form>
    </div>
    <div class = "clear">
        
    </div>
</body>
</html>