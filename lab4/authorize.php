<?php
session_start();
if($_POST['Submit']){
    if(($_POST['user_name']=="qwerty")&&($_POST['user_pass']=="qwerty")){
        $_SESSION['type']=1;
        $_SESSION['counter'][4];
        header("Location: index.php"); //Отправка HTTP-заголовка
        exit;
    }
    if(($_POST['user_name']=="admin")&&($_POST['user_pass']=="admin")){
        $_SESSION['type']=2;
        header("Location: index.php");
        exit;
    }
}
elseif($_POST['Exit']){
    header("Location: index.php");
    exit;
}
?>
<html><body>
Wrong password!
</body></html>