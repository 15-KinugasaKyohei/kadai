<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
// ログイン状態のチェック
if (!isset($_SESSION["USERID"])) {
  header("Location: login.php");
}


$news_id = $_POST["news_id"];
$news_title = $_POST["news_title"];
$news_detail = $_POST["news_detail"];
$show_flg = $_POST["show_flg"];
$author = $_POST["author"];

$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
$sql = "INSERT INTO cs_academy (news_id, news_title, news_detail, show_flg, author, create_date, update_date) VALUES ( $news_id , '$news_title' , '$news_detail' , $show_flg , '$author', sysdate(), sysdate()) ";
var_dump($sql);
$stmt = $pdo->prepare($sql);
$result = $stmt->execute();
var_dump($result);

if($result) {
  echo "データが登録できました";
  echo "<a href=index.php>一覧へ</a>";
} else {
  echo "データの登録に失敗しました";
  echo "<a href=input.php>一覧へ</a>";
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

  </body>
</html>