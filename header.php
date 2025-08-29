<?php 
   if(session_status() === PHP_SESSION_NONE) {
     session_start();
     if(isset($_SESSION["id"]))
     {
       header("Location:index_log.php");
     }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Farm Diary</title>
  <link rel="icon" type="image/png" href="../img/favicon.png">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light custom-navbar">
    <a class="navbar-brand" href="index.php">Farm Diary</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
            
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <?php 
           if(!isset($_SESSION["id"])) {
        ?>    
        <li class="nav-item">
          <a class="btn btn-custom login-btn" href="login.php">Login</a>
        </li>
        <?php 
           } else { 
        ?>  
        <li class="nav-item">
          <a class="btn btn-custom login-btn" href="logout.php" onclick="return confirm('Are you sure you want to log out?');">Logout</a>
        </li>
        <?php
           }
         ?> 
      </ul>
    </div>
  </nav>
