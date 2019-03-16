<?php
    session_start();
    $toke_byte = openssl_random_pseudo_bytes(16);
  $csrf_token = bin2hex($toke_byte);
  // 生成したトークンをセッションに保存します
  $_SESSION['csrf_token'] = $csrf_token;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
    <header>
        <div class="header">
            <h2 id="header_title">新規登録</h2>
        </div>
        <div class="transfer">
             <a href="login.php">ログインページへ</a>
        </div>
     </header>
    
    <main>
       <div class="form-wrapper">
            <form action ="signup.php" method = "post">
                <div id="txt_email">
                   <input type="hidden" name="csrf_token" value="<?=$csrf_token?>">
                    <label for="lbl_name">Name</label><br>
                    <input type="txt" id="lbl_name" name="name" size="10" class="box" required><br>
                    <label for="lbl_email">Email address</label><br>
                    <input type="email" id="lbl_email" name="email" size="10" class="box" required><br>
                    <label>Password</label><br/>
                    <input type="txt" name = "password" size="10" class="box" required><br/>
                    <input type="submit" value="SignIn" name="btn" class="button">
                </div>
            </form>
        </div>
    </main>
    
</body>
</html>