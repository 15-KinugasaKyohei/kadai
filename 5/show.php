<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>アンケート入力画面</title>
</head>
<body>
<?php
$fp = 	@fopen("./data/data.csv","r"); // ファイルを開く
flock($fp,LOCK_SH); //ファイルロック
while(!feof($fp)){   //whileが全行読み込んだら終わるという意味
	$fp_str=fgets($fp); //1行取り出す
	echo $fp_str."</br>"; //1行表示
}
flock($fp,LOCK_UN); //ロック解除
fclose($fp); //ファイルを閉じる
?>

</body>
</html>