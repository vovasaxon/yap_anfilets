<?php

$connect = mysqli_connect('localhost', 'root', 'root', 'comp');

if (!$connect){
    echo "Ошибка!";
}