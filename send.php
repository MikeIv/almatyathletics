<?php
$surname = $_POST['surname'];
$name = $_POST['name'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$surname = htmlspecialchars($surname);
$name = htmlspecialchars($name);
$sex = htmlspecialchars($sex);
$age = htmlspecialchars($age);
$phone = htmlspecialchars($phone);
$email = htmlspecialchars($email);
$surname = urldecode($surname);
$name = urldecode($name);
$sex = urldecode($sex);
$age = urldecode($age);
$phone = urldecode($phone);
$email = urldecode($email);
$surname = trim($surname);
$name = trim($name);
$sex = trim($sex);
$age = trim($age);
$phone = trim($phone);
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
if (mail("almatyathletics@gmail.com", "Заявка с сайта", "Фамилия:".$surname.".\n Имя: ".$name.".\n Пол: ".$sex.".\n Год рождения: ".$age.".\n Телефон: ".$phone.".\n E-mail: ".$email , "From: info@almatyathletics.com \r\n"))
 {     echo "Сообщение успешно отправлено. Вернитесь, пожалуйста, на страницу для оплаты";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>
