<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   header('location:home.php');
};

if(isset($_POST['submit'])){

   $address = $_POST['country'] .', '.$_POST['region'].', '.$_POST['municipality'].', '.$_POST['barangay'] .', '. $_POST['other'];
   $address = filter_var($address, FILTER_SANITIZE_STRING);


   $update_address = $conn->prepare("UPDATE `user` set address = ? WHERE id = ?");
   $update_address->execute([$address, $user_id]);

   $message[] = 'address saved!';

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update address</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php' ?>

<section class="form-container">

   <form action="" method="post">
      <input type="text" class="box" placeholder="Your country" required maxlength="50" name="country">
      <input type="text" class="box" placeholder="Your region" required maxlength="50" name="region">
      <input type="text" class="box" placeholder="Your municipality" required maxlength="50" name="municipality">
      <input type="text" class="box" placeholder="Your barangay" required maxlength="50" name="barangay">
      <input type="text" class="box" placeholder="other details(Street/nearest building)" required maxlength="50" name="other">
      <input type="submit" value="save address" name="submit" class="btn">
   </form>

</section>










<?php include 'components/footer.php' ?>







<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>