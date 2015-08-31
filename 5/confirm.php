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
$name = $_POST["name"];
$mail = $_POST["mail"];
$age = $_POST["age"];
$sex = $_POST["sex"];

$str = $name.",".$mail.",".$age.",".$sex."\n";
echo $str;


?>


</body>
</html>