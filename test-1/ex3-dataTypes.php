<?php
echo "<h1 style='color: orange'>=== PHP Array ===</h1>";
$colors = array("Red", "Green", "Blue");
var_dump($colors);
echo "<br>";
 
$color_codes = array(
    "Red" => "#ff0000",
    "Green" => "#00ff00",
    "Blue" => "#0000ff"
);
var_dump($color_codes);

echo "<h1 style='color: orange'>=== PHP Objects ===</h1>";

// Class definition
class greeting{
    // properties
    public $str = "Hello World!";
    
    // methods
    function show_greeting(){
        return $this->str;
    }
}
 
// Create object from class
$message = new greeting;
var_dump($message);
echo "<br>";
echo "message is: " . $message->show_greeting();

echo "<h1 style='color: orange'>=== PHP NULL ===</h1>";
$a = NULL;
var_dump($a);
echo "<br>";
 
$b = "Hello World!";
$b = NULL;
var_dump($b);
echo "<br>";

echo "<h1 style='color: orange'>=== PHP Resources ===</h1>";
// Open a file for reading
$handle = fopen("note.txt", "r");
var_dump($handle);
echo "<br>";
 
// // Connect to MySQL database server with default setting
// $link = mysql_connect("localhost", "root", "");
// var_dump($link);
// echo "<br>";