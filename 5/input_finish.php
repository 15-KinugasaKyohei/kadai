<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>入力確認画面</title>
</head>
<body>
<?php
error_reporting(E_ALL & ~E_NOTICE);
?>
<?php


$name = $_post["name"];
$mail = $_post["mail"];
$age = $_post["age"];
$sex = $_post["sex"];

$str = $name.",".$mail.",".$age.",".$sex."\n";

$file = fopen("./data/data.csv","a"); //fileオープン
flock($file,LOCK_EX); //ファイルロック
fputs($file,$str); //書き込み
flock($file,LOCK_UN);//ロック解除
fclose($file); //ファイル閉じる
?>
<p>書き込みが完了しました。</p>
<p><a href="show.php">アンケートを表示する</a></p>

</body>
</html>