<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }else{
        $email=$_SESSION['email'];
        $user_id=$_POST['id'];
        $item_id=$_POST['id2'];
        $query2="select price from items where id='$item_id'";
        $result2=mysqli_query($con,$query2) or die(mysqli_error($con));
        $qty=$_POST['qty'];
        $confirm_query="update users_items set status='Confirmed', quantity=$qty where user_id=$user_id and item_id=$item_id";
        $query="select name, contact from users where email='$email'";
        $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));
        $result=mysqli_query($con,$query) or die(mysqli_error($con));
        if($result==0){
        }else{
            while($row=mysqli_fetch_array($result)){
                $name=$row['name'];
                $contact=$row['contact'];
           }
        }
        if($result2==0){
        }else{
            while($row=mysqli_fetch_array($result2)){
                $price=$row['price'];
           }
        }
        $total=$qty*$price;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>AlphaMart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
      <script>
        // window.alert("Thank you for ordering! The item is removed from your cart and will be out for delivery soon :)");
      </script>
      <meta http-equiv="refresh" content="0;url=Payment/index.php?email=<?php echo $_SESSION['email']; ?>&name=<?php echo $name; ?>&contact=<?php echo $contact; ?>&amount=<?php echo $total; ?>&product_id=<?php echo $item_id; ?>" />
</html>
