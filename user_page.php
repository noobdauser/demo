<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Project Approval system!</title>
  </head>
  <body background="welcome.jpg"; background-postion: center;>
    
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Project Approval System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register_form.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login_form.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      
     
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/bubbles/50/null/guest-male.png"> <?php echo "Welcome User"?></a>
      </li>
  </ul>
  </div>


  </div>
</nav>

<div class="container">
<h3 style="text-align:center;"><?php echo "Welcome Student! "?>! You can now Upload you projects using this website <br><br>***scroll down to upload***</h3>
</div>
</div>
<div class="container">
   <div class="content">
<link rel="stylesheet" href="css/style.css">
<a href="https://docs.google.com/forms/d/e/1FAIpQLSc8OKXoKpRFl7JEgiqQx8ljmqa1_S4MM6F9T7ddnN_qcIPG-g/viewform?usp=sf_link" class="btn">CLEAR HERE TO UPLOAD YOUR PROJECTS!</a>
</div>
</div>
</div>
<div>


  

<h4 align="center">
<font family="Lato" color="#2e9cc3" size="4">***upload your projects for Approval***</font><br>
<font family="Lato" color="#2e9cc3" size="4">you will be notified via E-mail after sucessfull Submission. Please check your E-mails for approval status</font>
</div>
</font>  
    </button>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
