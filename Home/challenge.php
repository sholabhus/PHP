
<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Comptible"content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Movies</title>
       
    </head>    
    <body>
    <?php
    class Bicycle { //defne a class

        var $brand;
        var $model;
        var $year;
        var $description='Used bicycle';
        var $weight_kg =0.0;

    

    function name() {
        return $this->brand ." ".$this->model ."(". $this->year .")";
    
    }

    function weight_lbs() {
        return floatval($this->weight_kg) *2.2046226218;
    }
    function set_weight_lbs($value) {
        $this->weight_kg =floatval($value) /2.2046226218;
    }
}

$trek = new Bicycle;
$trek->brand ='Trek';
$trek->model ='Emonda';
$trek->year ='2017';
$trek->weight_kg =1.0;


$cd =new Bicycle;
$cd->band ='Cannondale';
$cd->model ='Synapse';
$cd->year ='2016';
$cd->weight_kg =8.0;

echo $trek->name() ."<br />";
echo $cd->name() ."<br />";

echo $trek->weight_kg ."<br />";
echo $trek->weight_lbs() ."<br />";

$trek->set_weight_lbs(2);
echo $trek->weight_kg ."<br />";
echo $trek->weight_lbs() ."<br />";

?>

    </body>
 </html>