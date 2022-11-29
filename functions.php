<?php

function random_password($passwordLen)
{

    $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    return substr(str_shuffle($data), 0, $passwordLen);
}


$newPassword = random_password($_GET['passwordLen']);
