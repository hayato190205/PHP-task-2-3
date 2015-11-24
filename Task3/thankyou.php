<?php
$name=$_POST['name'];
$subject=$_POST['subject'];
$address=$_POST['address'];
$comment=$_POST['comment'];

mb_send_mail($address, $subject, $name . "<br>" . $comment);
?>

<!DOCTYPE html>
  <html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PHP課題2</title>
    <link type="text/css" rel="stylesheet" href="reset.css">
    <link type="text/css" rel="stylesheet" href="style3.css">
  </head>
  <body>
  <div id="container">
  <h1>お問い合わせありがとうございます。</h1>
  <p>以下内容でお問い合わせ完了しました</p>

  <div class="contents">
  <p>お名前:</p><?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?><br>
  <p>メールアドレス:</p><?php echo htmlspecialchars($address, ENT_QUOTES, "UTF-8"); ?><br>
  <p>件名:</p><?php echo htmlspecialchars($subject, ENT_QUOTES, "UTF-8"); ?><br>
  <p>本文:</p><?php echo htmlspecialchars($comment, ENT_QUOTES, "UTF-8"); ?><br>
  </div>
  </div>
  </body>
  </html>