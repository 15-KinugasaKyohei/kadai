<?php
error_reporting(E_ALL & ~E_NOTICE);
// セッション開始
session_start();

if (!isset($_SESSION["USERID"])) {
  header("Location: login.php");
}
//$db['host'] = "hogehoge.ne.jp";  // DBサーバのurl
//$db['user'] = "ユーザID";
//$db['pass'] = "パスワード";
//$db['dbname'] = "データベース名";

$news_id = $_POST["news_id"];
//$news_title = $_POST["news_title"];
//$news_detail = $_POST["news_detail"];
//$show_flg = $_POST["show_flg"];
$author = $_POST["author"];
var_dump($news_id);
var_dump($author);

$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
$sql = "UPDATE cs_academy set author ='$author', update_date = sysdate() " . "WHERE news_id = " . $news_id;
var_dump($sql);
$stmt = $pdo->prepare($sql);
$result = $stmt->execute();
var_dump($result);
if($result) {
  echo "データが更新できました";
  echo "<a href=index.php>一覧へ</a>";
} else {
  echo "データの更新に失敗しました";
}
$pdo = null;
?>

<!doctype html>
<html>
  <head>
  <meta charset="UTF-8">
  <title>サンプルアプリケーション</title>
  </head>
  <body>
  <h1>更新完了</h1>

  </form>
  </body>
</html>