<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST['login'])){
 

    $conn= mysqli_connect('localhost','root','','reg');
   
    if(!$conn){
       die("connection to this database failed due to" .mysqli_connect_error());
    }
    $name = $_POST["name"];
    $pass = $_POST["pass"];

    $sql = "Select * from `reg`.`a` where name='$name' AND pass='$pass' ";

    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if($num >0){
      $login = true;
      header('location:monc.html');

    }
    else{
      $showError = "Invalid something!";
    }
 }
}
?>

<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>login</title>
      <link rel="stylesheet" href="ex.css">
  </head>
  <body>
      <section>
        <div class="container">
          <div class="user signinBx">
            <div class="imgBx"><img src="images/home 1.jpg " alt="" /></div>
            <div class="formBx">
              <form action="http://localhost/EX%20BOOK/login.php" method="POST">
                <h2>Sign In</h2>
                <input type="text" name="name" placeholder="Username" />
                <input type="password" name="pass" placeholder="Password" />
              
                <input type="submit" name="login"  value="Login"/>
                <p class="signup">
                  Don't have an account ?
                  <a href="http://localhost/EX%20BOOK/reg.php">Register.</a><br>
    <a href = "index.html">Go to Home</a>

                </p>
              </form>
            </div>
          </div>
        </div>
      </section>
    </body>
</html>