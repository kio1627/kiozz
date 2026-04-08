<?php
$email = $_POST['email'] ?? '';
$price = $_POST['price'] ?? '';
$time  = date('Y-m-d H:i:s');

if ($email) {
    $line = "$time | 金额：$price | 邮箱：$email\n";
    file_put_contents('emails.txt', $line, FILE_APPEND);
}
?>
