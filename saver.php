<?php
/**
 * Created by PhpStorm.
 * User: nafalin
 * Date: 10-Jun-17
 * Time: 2:28 PM
 */
$file = 'emailList.txt';
// Открываем файл для получения существующего содержимого
$current = file_get_contents($file);

$_POST["email"];

$result = $current . "\n" .$_POST["email"];

file_put_contents($file, $result);
header('Location: /?email=ok');