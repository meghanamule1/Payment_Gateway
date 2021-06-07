<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Contact Form</title>

  <link rel="stylesheet" href="contactUs.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
</head>
<body>
  <header>
    
    <thead>
  <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#">CHILD FOUNDATION</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-lg-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactUs.php">Contact</a>
      </li> 
    </ul>
    
  </div>
</nav>  
    </div>
   </thead>
     <form action="contactUs.php" method="POST">
    <div class="Contact-Form">
      <h1>Contact Us</h1>
      <div class="txtb">
        <label>Full Name :</label>
        <input type="text" name="name" value=""  placeholder="Enter Your Name" required="">
      </div>
      
       <div class="txtb">
        <label>Email :</label>
        <input type="text" name="email" value="" id="email" placeholder="Enter Your Email" size="64" maxLength="64" required
          placeholder="username@gmail.com" pattern=".+@gmail.com"
          title="Please provide only valid e-mail address" >
      </div>

       <div class="txtb">
        <label>Message :</label>
        <textarea name="message" required="required" ></textarea>
      </div>

        
        <input type="submit" name="send" value="send" class="btn" style="color: white;">


    </div>

   <main>
       <h1>WE BELIEVE</h1>
       <br><br>
       <h4>"Every Child Deserves To Grow Up Safe From Harm"</h4>
   </main>

  <footer>
   <div class="content">
     <div class="left box">
       <div class="upper">
         <div class="topic">About us</div>
         <p>Supporting orphaned and vulnerable children while bringing about sustainable change that reduces the need for Child Care Institutions.</p>
       </div>
       <div class="lower">
         <div class="topic">Contact us</div>
         <div class="phone">
           <a href="#"><i class="fas fa-phone-volume"></i>+91-11-43123700</a>
         </div>
         <div class="email">
           <a href="#"><i class="fas fa-envelope"></i>childfoundation@gmail.com</a>
         </div>
       </div>
     </div>
     <div class="middle box">
       <div class="topic">Our Services</div>
       <div><a href="about.php">About</a></div>
       <div><a href="contactUs.php">Contact</a></div>
       <div><a href="index.php">Donate Now</a></div>
       
     </div>
     <div class="right box">
       <div class="topic">Subscribe us</div>
       
         <div class="media-icons">
           <a href="#"><i class="fab fa-facebook-f"></i></a>
           <a href="#"><i class="fab fa-instagram"></i></a>
           <a href="#"><i class="fab fa-twitter"></i></a>
           <a href="#"><i class="fab fa-youtube"></i></a>
           <a href="#"><i class="fab fa-linkedin-in"></i></a>
         </div>
       
     </div>
   </div>
   <div class="bottom">
     <p>Copyright © 2020 <a href="#">Child Foundation</a> All rights reserved</p>
   </div>
 </footer>
</header>



 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>



<?php


 //creating connection to database
$con=mysqli_connect("localhost","root","","payment_integration") or die(mysqli_error());

 //check whether submit button is pressed or not
if((isset($_POST['send'])))
{
  //fetching and storing the form data in variables
  

$Name = $con->real_escape_string($_POST['name']);
$Email = $con->real_escape_string($_POST['email']);
$Message = $con->real_escape_string($_POST['message']);
  //query to insert the variable data into the database
$sql="INSERT INTO contacts (name, email,message) VALUES ('".$Name."', '".$Email."', '".$Message."')";
  //Execute the query and returning a message
if(!$result = $con->query($sql)){
die('Error occured [' . $con->error . ']');
}
else
  "Thank you! We will get in touch with you soon";
}



?>