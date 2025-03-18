<?php
function getRandomCode() {
    $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $codeLength = 10;
    $code = "";
    for ($i = 0; $i < $codeLength; $i++) {
        $code .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $code;
}
?>
