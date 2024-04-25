<?php
include("Config/config.php");   // Include Fiule 

// Delete File 

$id = $_GET['ID'];
$res = $database->delete($id);
if($res){
    echo"<script>alert('Delete Successfull !!')</script>";
    header('Location:fetch.php');
}else{
    echo"<script>alert('Delete Failed')</script>";
}

?>