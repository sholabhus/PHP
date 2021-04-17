
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

    <p> Enter a genre to view  Filmname(s),Year of release, Rating and Director.</p>
      
    Enter a Genre: <input type ="text" name="Genre" placeholder="Enter a Genre">  

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


 function __construct($aFilmname, $aYearofrelease, $aRating, $aDirector, $aGenre) {
     $this->filmname = $aFilmname;
     $this->yearofrelease = $aYearofrelease;
     $this->rating = $aRating;
     $this->director = $aDirector;
     $this-> genre = $aGenre;

 }
 

   
public function iterateAllProperties()
  {
       foreach ($this as $key => $value) {

      $input = $_POST['Genre'];
       
      if($input == $this->genre){
       //echo (ucfirst("$key:$value <br />"));

echo "<p class='number'> $key:$value </p>";


          
         }
        }    
        
       }  
    }
     
$movie1 = new Movie("The Adventures of Robin Hood", 1983, "PG-13","Michael Curtiz", "Family");// object - instance of class

$movie2 = new Movie ("Snatch", 2000, "R", "Guy Ritchie", "Action");  // object - instance of class

$movie3= new Movie("Gladiator", 2000, "R", "Ridley Scott","Action");  // object - instance of class

$movie4= new Movie("Harry Potter", 2001, 5, "David Yates", "Fantasy");  // object - instance of class


$movie1->iterateAllProperties();
//echo "<br>";
$movie2->iterateAllProperties();
//echo "<br>";
$movie3->iterateAllProperties();
//echo"<br>";
$movie4->iterateAllProperties();
//echo"<br>";






}




?>
<?php include "footer.html"; ?>
</body>
 </html>