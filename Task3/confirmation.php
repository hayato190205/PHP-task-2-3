<!--
＜問題点>
・入力ボックスが残った状態でエラーメッセージを入力したいができない
・エラーがでても内容確認ですすめてしまう。
・戻った時にスタートに戻ってしまう。入力データを1から入れなおさないといけない。
-->

<?php
$to='hayato190205@gmail.com';
$name=$_POST['name'];
$subject=$_POST['subject'];
$address=$_POST['address'];
$comment=$_POST['comment'];

$errormsg = array();
if ($name == null)
{
  $errormsg[] = "（注）お名前が未入力です。";
}
if ($subject == null)
{
  $errormsg[] = "（注）件名が未入力です。";
}
if ($address == null)
{
  $errormsg[] = "（注）メールアドレスが未入力です。";
}
if ($comment == null)
{
  $errormsg[] = "（注）本文が未入力です。";
}

?>
<!DOCTYPE>
  <html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PHP課題2</title>
    <link type="text/css" rel="stylesheet" href="reset.css">
    <link type="text/css" rel="stylesheet" href="style2.css">
  </head>
  <body>
  <div id="container">
    <h1>内容確認</h1>

    <div class="error">
    <?php if (count($errormsg) > 0): ?>
    <?php foreach($errormsg as $msg): ?>
      <?php echo htmlspecialchars($msg, ENT_QUOTES, "UTF-8")?><br>
    <?php endforeach; ?>
    <?php endif ?>
   </div>

    <div class="content">
      <p>お名前:</p><?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?><br>
      <p>件名:</p><?php echo htmlspecialchars($subject, ENT_QUOTES, "UTF-8"); ?><br>
      <p>メールアドレス:</p><?php echo htmlspecialchars($address, ENT_QUOTES, "UTF-8"); ?><br>
      <p>本文:</p><?php echo htmlspecialchars($comment, ENT_QUOTES, "UTF-8"); ?><br>
    </div>

    <?php if (count($errormsg) == 0): ?>
    <form action="thankyou.php" method="post">
      <input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?>">
      <input type="hidden" name="subject" value="<?php echo htmlspecialchars($subject, ENT_QUOTES, "UTF-8"); ?>">
      <input type="hidden" name="address" value="<?php echo htmlspecialchars($address, ENT_QUOTES, "UTF-8"); ?>">
      <input type="hidden" name="comment" value="<?php echo htmlspecialchars($comment, ENT_QUOTES, "UTF-8"); ?>">
      <input id="button1" type="submit" value="内容確認">
      <?php mb_send_mail ($to, "お問い合わせ内容: " . $subject, $comment); ?>
    </form>
    <?php endif ?>

    <form action="index.php" method="post">
      <input id="button2" type="submit" value="戻る">
    </form>ß
  </div>
  </body>
  </html>
