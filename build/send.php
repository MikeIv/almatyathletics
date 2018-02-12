<?php
$surname = $_POST['surname'];
$name = $_POST['name'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$email = $_POST['email'];
$surname = htmlspecialchars($surname);
$name = htmlspecialchars($name);
$sex = htmlspecialchars($sex);
$age = htmlspecialchars($age);
$email = htmlspecialchars($email);
$surname = urldecode($surname);
$name = urldecode($name);
$sex = urldecode($sex);
$age = urldecode($age);
$email = urldecode($email);
$surname = trim($surname);
$name = trim($name);
$sex = trim($sex);
$age = trim($age);
$email = trim($email);
//echo $surname;
//echo "<br>";
//echo $name;
//echo "<br>";
//echo $sex;
//echo "<br>";
//echo $age;
//echo "<br>";
//echo $email;
if (mail("gagarahome@gmail.com", "Заявка с сайта", "Фамилия:".$surname.". Имя: ".$name.". Пол: ".$sex.". Год рождения: ".$age.". E-mail: ".$email , "From: info@almatyathletics.com \r\n"))
 {     echo "Сообщение успешно отправлено. Вернитесь, пожалуйста, на страницу для оплаты";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>
