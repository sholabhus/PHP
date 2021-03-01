<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Comptible"content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MadLib</title>
    
    <style>
    body {
    text-align: center;
    margin:0;
    padding: 0;
    background: cyan;
    font-family: "Arial, Helvetica, sans-serif";
}
</style>
</head>
    <body>
    <form action ="madLibs.php" method="POST">
    
    <h1>MadLibs</h2></div>
    
   Roses are: <input type ="text" name="adjective"><br><br>
   Violets are: <input type ="text" name="noun"><br><br>
   Sugar is : <input type ="text" name="sweet"><br><br>
   And I love: <input type ="text" name="mySelf"><br><br>
    <input type ="submit">

</form>

<br><br>
    <?php

    $adjective = $_POST["adjective"] ?? "";
    $noun =$_POST["noun"] ?? "";
    $sweet =$_POST["sweet"] ?? "";
    $mySelf =$_POST["mySelf"]?? "";

    echo "<p> Roses are $adjective </p>";
    echo  "<p>Violets are $noun </p>"; 
    echo "<p>Sugar is  $sweet</p>" ;
    echo "<p>And I love  $mySelf </p>";
    
    ?>

    </body>
</html>
