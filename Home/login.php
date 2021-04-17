
  
<?php 
  $username = $_POST['username']?? "";    // create variable 
  $password = $_POST['password']?? "";
 $hashpassword =password_hash($password,PASSWORD_BCRYPT); // hash password
  $error = "";
  $success ="";
 
  
  if(isset($_POST['submit'])) {// checks whether user clicked submit button or not
    if (!preg_match("#[0-9]+#", $password)) {
      $error ="Your Password must contain at least 1 number";
    }elseif(strlen($_POST['password']) < 5 ) {     // check password length
   $error = "Password must be at least 6 characters";
    }else{
      $success ="Thanks I have received your Logging details";
    $f=fopen("data.txt","a+"); //open text file
    fwrite($f, 'Your login name is:'. $username );
    fwrite($f, "\n");
    fwrite($f, 'Your password is:'. $password);
    fwrite($f, "\n");
    fwrite($f, 'bcrypt algorithm:' . $hashpassword);
    fclose($f);
  
    }
 
  if(empty($_POST['username'])  && empty($_POST['password'])){  //check if fields are empty
    $error ="Please enter your username and password";
     
  }

  }

    
  ?>
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

    <?php include "header.html"; ?>

    <form action ="login.php" method="POST">
    <div class="container">
    
    <h2>Please Login</h2> 
  <div class ="error"> <?php echo $error; ?></div><div class ="success"><?php echo $success; ?></div><br>
   UserName: <input type ="username" name="username" placeholder="Enter username"><br><br>
   Password: <input type ="password" name="password" placeholder="Enter password"><br><br>
 
   <button type ="submit" name="submit" value="submit" >Login</button>

  </div>
  
 </form>

 <?php include "footer.html"; ?>

</body>
    </html>
  

     
