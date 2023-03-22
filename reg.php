<?php
if(isset($_POST['submit'])){
 

 $conn= mysqli_connect('localhost','root','','reg');

 if(!$conn){
    die("connection to this database failed due to" .mysqli_connect_error());
 }
 $name=$_POST['name'];
 $gender=$_POST['gender'];
 $address=$_POST['address'];
 $email=$_POST['email'];
 $pincode=$_POST['pincode'];
 $phone=$_POST['phone'];
 $pass=$_POST['pass'];

   $sql="INSERT INTO `reg`.`a` (`name`, `gender`, `address`, `email`, `pincode`, `phone`, `pass`) VALUES ('$name', '$gender', '$address', '$email', '$pincode', '$phone', '$pass')";
 
  mysqli_query($conn,$sql);
  header('location:login.php');
  
  $conn->close();
};
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title> Registration Form</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="reg.css" />
  </head>
  <body>
    <div class="container">

      <h1 class="form-title">Registration</h1>
      <form action="http://localhost/EX%20BOOK/reg.php" method="post">

        <div class="main-user-info">
          <div class="user-input-box">
            <label for="fullName">Name</label>
            <input type="text"
                    id="name"
                    name="name"
                    placeholder="Enter  Name" required/>
          </div>
          <div class="user-input-box">
            <label for="pincode">Pincode</label>
            <input type="number"
                    id="pincode"
                    name="pincode"
                    placeholder="Enter pincode eg. 310002" required/>
          </div>
          <div class="user-input-box">
            <label for="email">Email</label>
            <input type="email"
                    id="email"
                    name="email"
                    placeholder="Enter Email eg.abc@gmail.com" required/>
          </div>
          <div class="user-input-box">
            <label for="phoneNumber">Phone Number</label>
            <input type="number"
                    id="phone"
                    name="phone"
                    placeholder="Enter Phone Number" required/>
          </div>
          <div class="user-input-box">
            <label for="password">Password</label>
            <input type="password"
                    id="pass"
                    name="pass"
                    placeholder="Enter Password" required />
          </div>
          <div class="user-input-box">
            <label for="address">Address:</label>
            <input type="text"
                    id="address"
                    name="address"
                    placeholder="Enter address" required/>
          </div>
        </div>
          <div class="gender-details-box">
            <span class="gender-title">Gender</span>
            <div class="gender-category">
              <input type="radio" name="gender" id="male">
              <label for="male">Male</label>
              <input type="radio" name="gender" id="female">
              <label for="female">Female</label>
              <input type="radio" name="gender" id="other">
              <label for="other">Other</label>
            </div>
          </div>
          <div class="form-submit-btn">
            <input type="submit" name="submit"  value="submit">
        </div>
      </form><br>
      

      <a href = "index.html" style = "color:white;">Go to Home</a>
     
    </div>
  
  </body>
</html>