<?php
$surname = $_POST['surname'];
$your-name = $_POST['your-name'];
$your-your-email = $_POST['your-email'];
$surname = htmlspecialchars($surname);
$your-name = htmlspecialchars($your-name);
$your-email = htmlspecialchars($your-email);
$surname = urldecode($surname);
$your-name = urldecode($your-name);
$your-email = urldecode($your-email);
$surname = trim($surname);
$your-name = trim($your-name);
$your-email = trim($your-email);
//echo $surname;
//echo $your-name;
//echo "<br>";
//echo $your-email;
if (mail("gagarahome@gmail.com", "Регистрация на сайте", "Фамилия:".$surname.". "Имя:".$your-name.". " E-mail: ".$your-email ,"From: info@almatyathletics.com \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>
