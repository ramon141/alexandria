<?php

    $to = "ramonbarbosa123456789@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $number = $_REQUEST['number'];
    $cmessage = $_REQUEST['message'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "You have a message from your Bitmap Photography.";

    $logo = 'img/logo.png';
    $link = '#';

	$str = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$str .= "<table style='width: 100%;'>";
	$str .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$str .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$str .= "</td></tr></thead><tbody><tr>";
	$str .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
	$str .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	$str .= "</tr>";
	$str .= "<tr><td style='border:none;'><strong>Subject:</strong> {$subject}</td></tr>";
	$str .= "<tr><td></td></tr>";
	$str .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	$str .= "</tbody></table>";
	$str .= "</body></html>";

    $send = mail($to, $subject, $str, $headers);

?>