<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Домашняя работа №1</title>
</head>

<body>
<h1>Страница пользователя Сергей</h1>
<?php
$name='Сергей';
$age=26;
$email='sealtaev@yandex.ru';
$city='Улан-Удэ';
$os='О себе)';
?>
<table>
    <tr> <td>Имя</td> <td><?php echo $name;?></td></tr>
    <tr> <td>Возраст</td> <td><?php echo $age;?></td></tr>
    <tr> <td>Адрес электронной почты</td> <td><?php echo $email;?></td></tr>
    <tr> <td>Город</td> <td><?php echo $city;?></td></tr>
    <tr> <td>О себе</td> <td><?php echo $os;?></td></tr>
</table>
</body>

</html>