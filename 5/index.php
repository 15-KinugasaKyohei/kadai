<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>アンケート入力画面</title>
</head>
<body>
<form action="confirm.php" method="post">
	<p>お名前 <input type="text" name="name" size="20"/></p>
	<p>E-mail <input type="text" name="mail" size="20"/></p>
	<p>年齢 <input type="text" name="age" size="20"/></p>
	<p>性別：
		男<input type="radio" name="sex" size="6"/>
		女<input type="radio" name="sex" size="6"/>
	</p>
    <p><input type="submit" value="送信"/></p>
</form>

</body>
</html>