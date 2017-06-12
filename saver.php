<?php
/**
 * Created by PhpStorm.
 * User: nafalin
 * Date: 10-Jun-17
 * Time: 2:28 PM
 */
$file = 'emailList.txt';

$current = file_get_contents($file);

$_POST["email"];
$date = new DateTime();
$_SERVER['REMOTE_ADDR'];


file_put_contents($file, "
          IP: " . $_SERVER['REMOTE_ADDR'] . "
          email:  " . $_POST['email'] . "
          datetime: " . $date->format('Y-m-d H:i:s') . "\n-----------------------------------------------------------------------------------\n
        ", FILE_APPEND);

header('Location: /?email=ok');