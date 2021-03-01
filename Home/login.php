<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Comptible"content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="main.css">
    </head>

    <body>
    <form action ="login.php" method="POST">

  UserName: <input type ="text" name="username" placeholder="Enter username"><br><br>
   Password: <input type ="password" name="password" placeholder="Enter password"><br><br>

   <button type ="submit" name="submit" value="submit" >Login</button>

   <?php 
$username =$_POST['username']=='sholabhus';    // create variable answer1
$password =$_POST['password'] == 'School';

$usernamelength = strlen($username);
$passwordlength =strlen($password);

  if(isset($_POST['submit'])) {
        
   if(($usernamelength < 5)  && ($passwordlength <5 )) {  //check if the submit button has been submited
     
  echo 'You have enter valid username and password';
      } else{
    echo   "Incorrect Username or password";

      }
     }
    
   
     ?>

    </body>
    </html>