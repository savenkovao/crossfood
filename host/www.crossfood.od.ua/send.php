<?php $to="vash_mail@help-wp.ru"; // �������� �� ���� �����
$headers = "Content-type: text/html; charset=utf-8 \r\n";
$headers.= "From: ".$_SERVER['SERVER_NAME']." \r\n";
$subject="��������� � ����� ".$_SERVER['SERVER_NAME'];
$message="����";
mail($to, $subject, $message, $headers); ?>