<?php
session_start();
/* $uri = $_SERVER['REQUEST_URI'];
array_push($_SESSION['uriHistory'], $uri); */
$_SESSION['history'][] = $_SERVER['REQUEST_URI'];
$_SESSION['counter'][3] = $_SESSION['counter'][3] + 1;
echo $_SESSION['counter'][3];
?>
<html>
<head>
	<title>Страница 2</title>
</head>
<body>
<center><h1>Добро пожаловать!</h1></center>
Данная страница была предоставлена вам пользователем Владимир Калиновский<br/>
Она существует для ознакомительных целей.<br/>
<br/><br/>
<center><img src="goose.jpg" alt="Гусь">
</center>
<br/><br/>
<b><font style="color:green">Уровень доступа для страницы: 2+admin</font></b>
<br/><br/>
Низ страницы
<br/>
<hr>
Вам предоставлены все материалы
<br/><br/>
Спасибо. До новых встреч!
<form action="index.php">
    <button>Main</button>
</form>
</body>
</html>