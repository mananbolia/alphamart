<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>AlphaMArt</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <style type="text/css">
            .thumbnail{
            color: black;
            background-color: white;
            padding-top: 60px;
            padding-right: 60px;
            padding-bottom: 60px;
            padding-left: 60px;
            box-shadow: 7px 7px 5px rgba(0, 0, 0, .5);
            transition: all 0.3s ease-in-out;
            border:1px solid rgba(0, 0, 0, .7);
        }
        .thumbnail:hover {
            color: black;
            background-color: white;
            transform: scale(1.05);
            box-shadow: 7px 7px 7px rgba(0,0,0,0.2);
        }
        .row{
            padding-bottom: 15px;
            padding-top: 15px;
        }
        .coloumn{
            padding-bottom: 15px;
            padding-top: 15px;
        }
        a{
            text-decoration: none;
        }
        a:hover{
            text-decoration: none;
        }
        </style>
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
            <div class="container">
               <div class="row">
                   <div class="col-xs-6">
                       <div class="thumbnail">
                           <a href="resetpass.php">
                               <img src="img/resetpass.png" height="200px" width="200px" alt="Reset Password">
                           </a><br><br>
                           <center>
                                <h1>Reset Password</h1>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-6">
                       <div class="thumbnail">
                           <a href="history.php">
                               <img src="img/orderhistory.png" height="200px" width="200px" alt="Order History">
                           </a><br><br>
                           <center>
                                <h1>Order History</h1>
                           </center>
                       </div>
                   </div>
               </div>
               <div class="row">
                   <div class="col-xs-6">
                       <div class="thumbnail">
                           <a href=# onclick="document.getElementById('id03').style.display='block'" style="width:auto;">
                               <img src="img/feedback.png" height="200px" width="200px" alt="Reset Password">
                           </a><br><br>
                           <center>
                                <h1>Feedback</h1>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-6">
                       <div class="thumbnail">
                           <a href="history.php">
                               <img src="img/cssupp.png" height="200px" width="200px" alt="Order History">
                           </a><br><br>
                           <center>
                                <h1>Customer Support</h1>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            </div>
            <br><br><br><br><br>
           <footer class="footer">
               <div class="container">
               <center>
                   <p>Copyright &copy AlphaMart. All Rights Reserved. | Contact Us: +91 979996309</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
