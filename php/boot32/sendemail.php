<?php
/**
 * Created by PhpStorm.
 * User: hze
 * Date: 11/18/15
 * Time: 4:54 PM
 */

echo("dssss");
$receiverAddress = "zh700@nyu.edu";
$subject = isset($_POST["subject"])?$_POST["subject"]:" ";
$content = isset($_POST["content"])?$_POST["content"]:" ";

$senderAddress = isset($_POST["email"])?$_POST["email"]:" ";
$senderAddress = "From: ".$senderAddress;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    mail($receiverAddress,$subject,$content,$senderAddress);

    echo("Success");
}
