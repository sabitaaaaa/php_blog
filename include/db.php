
<?php

//database connection

$servername ="Localhost";  
$username ="root";
$password ="";
$dbname = "blogs";

$conn = new mysqli ($servername ,$username , $password ,$dbname);

if($conn -> connect_error){ 
    die("Connection failed: " .$conn->connect_error);
} 
else { 
    echo 'connected successfully';
}
