<!DOCTYPE html>
  <html>
  <head>
    <meta charset="UTF-8">
    <title>PHP課題2</title>
    <link type="text/css" rel="stylesheet" href="reset.css">
    <link type="text/css" rel="stylesheet" href="style.css">
  </head>
  <body>
  <div id="container">
    <h1>お問い合わせフォーム</h1>
    <form action="confirmation.php" method="post">
      <p>お名前:</p><input type="text" name="name"><br>
      <p>件名:</p><input type="text" name="subject"><br>
      <p>メールアドレス:</p><input type="text" name="address"><br>
      <p>本文:</p><textarea name="comment"></textarea><br>
      <ul>
        <li><input id="button" type="submit" value="投稿"></li>
      </ul>
    </form>
  </div>
  </body>
  </html>
