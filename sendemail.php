<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = 'liaojinbo1999@163.com';  // 接收者邮箱
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n";

    $body = "姓名: $username\n".
            "邮箱: $email\n".
            "电话: $phone\n".
            "留言: $message\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "留言发送成功！";
    } else {
        echo "留言发送失败，请重试。";
    }
}
?>
