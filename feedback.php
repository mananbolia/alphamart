<?php
    require 'connection.php';
    session_start();
    $subject= mysqli_real_escape_string($con,$_POST['subject']);
    $content=mysqli_real_escape_string($con,$_POST['content']);
    $email=mysqli_real_escape_string($con,$_SESSION['email']);
    $feedback="insert into feedback(email,subject,content) values ('$email','$subject','$content')";
    mysqli_query($con,$feedback);
    ?>
    <meta http-equiv="refresh" content="0;url=settings.php" />