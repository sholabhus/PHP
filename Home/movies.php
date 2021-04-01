
<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Comptible"content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Movies</title>
        <link rel="stylesheet" href="movies.css">
    </head>    
    <body>
    
    <form action ="movies.php" method="POST">
    <div class="container">
    
    <h2>Movies Directory</h2> 
    <p> Enter a genre to see filmname, Directory, Year of release and Rating</p>
   
    Enter a Genre: <input type ="text" name="Genre" placeholder="Enter a Genre">  
   
   <br\>
   <input type ="submit" name="submit" value="submit" />
 </div>
 </form>
<br/>

     
<?php

if(isset($_POST['submit'])) {           


    
class Movie {

    //Declare properties
public $filmname;
public $yearofrelease;
public $rating;
public $director;
public $genre;



    
public function iterateAllProperties()
   {
       foreach ($this as $key => $value) {

       $input = $_POST['Genre'];
       
       
       if($input == $this->genre){
       // echo "$key.$value  <br /> ";
        echo(ucfirst("$key:$value <br />"));
    
      }
        
          
         }
          
        
        }  

    }
$movie1 = new Movie; // object - instance of class

$movie1->filmname ='The Adventures of Robin Hood';
$movie1->director ='Michael Curtiz ';
$movie1->yearofrelease ='1983';
$movie1->rating = 5;
$movie1->genre ='Family';


$movie2 = new Movie;  // object - instance of class

$movie2->filmname ='Snatch';
$movie2->director = 'Guy Ritchie';
$movie2->yearofrelease ='2000';
$movie2->rating = 4;
$movie2->genre ='Action';



$movie3= new Movie;  // object - instance of class

$movie3->filmname ='Gladiator';
$movie3->director = 'Ridley Scott';
$movie3->yearofrelease ='2000';
$movie3->rating = 5;
$movie3->genre ='Action';

$movie4= new Movie;  // object - instance of class

$movie4->filmname ='Harry Potter';
$movie4->director = 'David Yates, Chris Columbus';
$movie4->yearofrelease ='2001';
$movie4->rating = 5;
$movie4->genre ='Fantasy';

$movie1->iterateAllProperties();
echo "<br>";
$movie2->iterateAllProperties();
echo "<br>";
$movie3->iterateAllProperties();
echo"<br>";
$movie4->iterateAllProperties();



}




?>

</body>
 </html>