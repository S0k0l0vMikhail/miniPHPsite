<?php
  $name = htmlspecialchars ($_POST['name']);
  $email = htmlspecialchars ($_POST['email']);
  $subject = htmlspecialchars ($_POST['subject']);
  $message = htmlspecialchars ($_POST['message']);
  if ($name == '' || $email == '' || $subject =='' || $message == '') {
    echo '��������� ��� ����';
    exit;
  }
  // ��������
  $subject ="=?utf-8?B?".base64_encode($subject)."?=";
  $headers = "From: $email\r\nReply-to: dolgopeh2@yandex.ru\r\nContent-type: text/html; charset=utf-8\r\n";
  if (mail("dolgopeh2@yandex.ru", $subject, $message, $headers))
    echo "��������� ����������";
  else
    echo "��������� �� ����������";
?>
