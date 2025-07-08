<?php

$array = array("name" => "", "email" => "", "phone" => "", "message" => "", "nameError" => "", "emailError" => "", "phoneError" => "", "messageError" => "", "isSuccess" => false);
$emailTo = "contact@oaliv.com";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $array["name"] = test_input($_POST["name"]);
    $array["email"] = test_input($_POST["email"]);
    $array["phone"] = test_input($_POST["phone"]);
    $array["message"] = test_input($_POST["message"]);
    $array["isSuccess"] = true;
    $emailText = "";


    if (empty($array["name"])) {
        $array["nameError"] = "Votr nom svp !";
        $array["isSuccess"] = false;
    } else {
        $emailText .= "Name: {$array['name']}\n";
    }

    if (!isEmail($array["email"])) {
        $array["emailError"] = "Votre Email svp !";
        $array["isSuccess"] = false;
    } else {
        $emailText .= "Email: {$array['email']}\n";
    }

    if (!isPhone($array["phone"])) {
        $array["phoneError"] = "Que des chiffres et des espaces, stp...";
        $array["isSuccess"] = false;
    } else {
        $emailText .= "Phone: {$array['phone']}\n";
    }

    if (empty($array["message"])) {
        $array["messageError"] = "Que voulez vous nous dire ?";
        $array["isSuccess"] = false;
    } else {
        $emailText .= "Message: {$array['message']}\n";
    }

    if ($array["isSuccess"]) {
        $headers = "From: {$array['name']} <{$array['email']}>\r\nReply-To: {$array['email']}";
        mail($emailTo, "Un message de de Oaliv.com", $emailText, $headers);
    }

    echo json_encode($array); // pour renvoyer le array json qui contient le resutat du travail de notre code php
}

function isEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
function isPhone($phone)
{
    return preg_match("/^[0-9 ]*$/", $phone);
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
