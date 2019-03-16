<?php session_start(); 
 $toke_byte = openssl_random_pseudo_bytes(16);
  $csrf_token = bin2hex($toke_byte);
  // 生成したトークンをセッションに保存します
  $_SESSION['csrf_token'] = $csrf_token;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
    <header>
        <div class="header">
            <h2 id="header_title">ログイン</h2>
        </div>
        <div class="transfer">
            <a href="register.php">新規登録ページへ</a>
        </div>
     </header>
    
    <main>
       <div class="form-wrapper">
            <form action ="kakunin.php" method = "post">
                <div id="txt_email">
                   <input type="hidden" name="csrf_token" value="<?=$csrf_token?>">
                    <label for="lbl_email">Email address</label><br>
                    <input type="email" id="lbl_email" name="test" size="10" class="box" required><br>
                    <label>Password</label><br>
                    <input type="txt" name = "password" size="10" class="box" required><br>
                    <input type="submit" value="LogIn" name="btn" class="button">
                </div>
            </form>
        </div>
        <p class = "error_message" align="center">
            <?php
                if(isset($_SESSION['error']) && $_SESSION['error'] == 0 ){
                    echo "メールアドレス　または　パスワードが違います";
                }

            ?>
        </p>
    </main>
    
</body>
</html>