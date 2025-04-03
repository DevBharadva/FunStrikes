<?php

$response = array("code" => 1, "message" => "");
//if (empty($_POST["name"])) {
//    $response["code"] = 0;
//    $response["massage"] .= " Please enter your name.";
//}
//if (empty($_POST["email"])) {
//    $response["code"] = 0;
//    $response["massage"] .= " Please enter your email.";
//}
//if (empty($_POST["massage"])) {
//    $response["code"] = 0;
//    $response["massage"] .= " Please enter your massage.";
//}
if (empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["email"]) || empty($_POST["message"])) {
    $response["code"] = 0;
    $response["message"] .= "Please fill up all detail.";
}
if ($response["code"] == 0) {
    echo json_encode($response);
} else {
    include("mail.php");
    $mail = new Mail();
    $mail->protocol = "smtp";
    $mail->smtp_hostname = "ssl://smtp.gmail.com";
    $mail->smtp_port = 465;
    $mail->smtp_username = "design@achievecreative.in";
    $mail->smtp_password = "pwqnndtmakzkmoov";
    $mail->smtp_timeout = "4";

    $u_html = "<table border='1' cellpadding='10'><tr><td>First Name : </td><td>" . $_POST["fname"] . "</td></tr><tr><td>Last Name : </td><td>" . $_POST["lname"] . "</td></tr><tr><td>Email :</td><td> " . $_POST["email"] . "</td></tr><tr><td> Message :</td><td> " . $_POST["message"] . "</td></tr></table>";
    $u_subject = "Fun Strike Enquiry";
    $mail->setTo("inquiry.funstrikes@gmail.com");
    $mail->setFrom("design@achievecreative.in");
    $mail->setSender(html_entity_decode("Enquiry - Fun Strike", ENT_QUOTES, "UTF-8"));
    $mail->setSubject(html_entity_decode($u_subject, ENT_QUOTES, "UTF-8"));
    $mail->setHtml($u_html);
    $mail->Send();
    $response = array("code" => 1, "message" => "Your request submitted successfully. we will get you soon!");
    echo json_encode($response);
}
?>