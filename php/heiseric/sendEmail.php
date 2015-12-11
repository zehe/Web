<?php
/**
 * Created by PhpStorm.
 * User: hze
 * Date: 11/28/15
 * Time: 11:23 PM
 */

if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['content'];
    $from = 'Demo Contact Form';
    $to = '87631834@qq.com';
    $subject = 'Message from Contact Demo ';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    // Check if name has been entered
    if (!$_POST['name']) {
        $errName = 'Please enter your name';
    }

    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Please enter a valid email address';
    }

    //Check if message has been entered
    if (!$_POST['content']) {
        $errMessage = 'Please enter your message';
    }

// If there are no errors, send the email
    if (!$errName && !$errEmail && !$errMessage) {
        if (mail ($to, $subject, $body, $from)) {
            $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
        } else {
            $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Hide this line for IE (needed for Firefox and others) -->
    <![if !IE]>
    <link rel="icon" href="images/me.png" type="image/x-icon" />
    <![endif]>
    <!-- This is needed for IE -->
    <link rel="shortcut icon" href="images/me.ico" type="image/ico" />

    <title>He Is Eric</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
</body>
<div class="container">
    <?php echo $result; ?>
</div>
<script>

</script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
