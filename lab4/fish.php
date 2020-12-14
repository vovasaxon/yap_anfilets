<?php
session_start();
$_SESSION['history'][] = $_SERVER['REQUEST_URI'];
$_SESSION['counter'][1] = $_SESSION['counter'][1] + 1;
echo $_SESSION['counter'][1];
?>
<html>
<head>
	<title>Страница 1</title>
</head>
<body>
<center><h1>Добро пожаловать!</h1></center>
Данная страница была предоставлена вам пользователем Владимир Калиновский<br/>
Она существует для ознакомительных целей.<br/>
<br/><br/>
<center><img src="fish.jpg" alt="Рыбка">
</center>
<br/><br/>
<b><font style="color:green">Уровень доступа для страницы: 1</font></b>
<br/><br/>
Низ страницы
<br/>
<hr>
Для предоставления дополнительных страниц войдите в систему.
<br/><br/>
Спасибо. До новых встреч!
<form action="index.php">
    <button>Main</button>
</form>
</body>
</html>