<?php 
$conn = mysqli_connect("localhost", "root", "", "chat");

if(!$conn){
    echo "Database connecton" .mysqli_connect_error();
}
    

?>
