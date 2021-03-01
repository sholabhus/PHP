<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Comptible"content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Simple Calculator</title>
        <style>
    body {
    text-align: center;
    margin:0;
    padding: 0;
    background: brown;
    font-family: "Arial, Helvetica, sans-serif";
}
</style>    

    </head>

    <body>
    <form action ="calc.php" method="GET">
    
    <h1>Calculator</h2></div>
    
    <input type ="number" name="num1"  placeholder="Number1"><br><br>
    <input type ="number" name="num2" placeholder="Number2"><br><br>

    <select name ="operators">
    <option>Please select</option>
     <option>Addition</option>
     <option>Subtract</option>
     <option>Multiply</option>
     <option>Divide</option>
     </select><br><br>

    <button type ="submit" name="submit" value="submit" >Calculate</button>
   
   </form>
     <p><b> Answer is :  
    
    <?php  
    
    if(isset($_GET['submit'])) {  //check if the submit button has been submited
     $answer1 =$_GET['num1'];   // create variable answer1
     $answer2 =$_GET['num2'];// create variable answer2
     $operators =$_GET['operators']; // create a varaiable arithmetics
     
     switch($operators) {  // checking arithmetics
        case "Please select":
            echo "error";
            break;
      case "Addition": 
           echo  $answer1 + $answer2;
           break;
      case "Subtract":
            echo  $answer1 - $answer2;
            break;
        case "Multiply":
                echo  $answer1 * $answer2;
                break;
        case "Divide":
                echo $answer1 / $answer2;
                break;

     }
}
    
    ?>
</b></p>
    </body>
    </html>