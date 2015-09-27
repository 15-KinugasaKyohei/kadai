<?php
error_reporting(E_ALL & ~E_NOTICE);
// セッション開始
session_start();

if (!isset($_SESSION["USERID"])) {
  header("Location: login.php");
}

?>
<!doctype html>
<html>
  <head>
  <meta charset="UTF-8">
  <title>サンプルアプリケーション</title>
  </head>
  <body>
  <h1>更新機能UI</h1>
  <!-- $_SERVER['PHP_SELF']はXSSの危険性があるので、actionは空にしておく -->

    <form action="update_execute.php" method="post">
      news_id: <input type="text" name="news_id" value="<?php echo $news_id ?>" />
      author: <input type="text" name="author" value="<?php echo $author ?>" />
      <input type="hidden" name="id" value="<?php echo $id ?>" />
      <input type="submit" value="更新" />
    </form>
  </body>
</html>