<?php

/* Задаем переменные */
$name      = htmlspecialchars($_POST["name"]);
$phone      = htmlspecialchars($_POST["phone"]);
$email      = htmlspecialchars($_POST["email"]);
$code        = htmlspecialchars($_POST["code"]);
$typeHouse        = htmlspecialchars($_POST["Industry"]);
$m2        = htmlspecialchars($_POST["m2"]);
$quantityBedroom        = htmlspecialchars($_POST["quantityBedroom"]);
$quantityBathroom        = htmlspecialchars($_POST["quantityBathroom"]);
$typeCleaning        = htmlspecialchars($_POST["typeCleaning"]);

/* Ваш адрес и тема сообщения */
$address = "Info@cleanify.com, Cleanify@ursadigital.com, boyozucker@gmail.com";
$sub = "Get Quote";

/* Формат письма */
$mes = "
<table width='100%' cellspacing='0' cellpadding='4' border='1'>
    <tr>
        <td width='20%'>Name:</td>
        <td>$name</td>
    </tr>
    <tr>
        <td>Phone:</td>
        <td>$phone</td>
    </tr>
    <tr>
        <td>Email:</td>
        <td>$email</td>
    </tr>
    <tr>
        <td>Zip code:</td>
        <td>$code</td>
    </tr>
    <tr>
        <td>Industry:</td>
        <td>$typeHouse</td>
    </tr>
    <tr>
        <td>Sq.ft.:</td>
        <td>$m2</td>
    </tr>
    <tr>
        <td>Bedroom:</td>
        <td>$quantityBedroom</td>
    </tr>
    <tr>
        <td>Bathroom:</td>
        <td>$quantityBathroom</td>
    </tr>
    <tr>
        <td>Type:</td>
        <td>$typeCleaning</td>
    </tr>
</table>
";

 $headers = "From: " . $email . "\r\n";
 $headers .= "Reply-To: ". $email . "\r\n";
 $headers .= "MIME-Version: 1.0\r\n";
 $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

 mail($address, $sub, $mes, $headers);
?>
