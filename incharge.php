<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['incharge_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>Project Incharge</span></h3>
      <h1>welcome <span><?php echo $_SESSION['incharge_name'] ?></span></h1>
      <p>this is a Project Incharge page</p>
      <a href="https://mail.google.com/mail/u/1/#inbox" class="btn">Approve/Reject</a><br><br>
      <a href="https://drive.google.com/drive/u/0/folders/1nBHH-wvS2QUaCFRq8lsXEyNYyKE8D3yf66YCg-A_12FdUuNQe1OzJP-tT1GAFLLgri1rix5P" class="btn">Uploaded Projects</a><br><br>
      <a href="https://docs.google.com/spreadsheets/d/1j0dP05UZ_V8rWAeGTZhCwAwGY66wplvpa7woFnEbdFo/edit#gid=1451992585" class="btn">Project History</a><br><br>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>