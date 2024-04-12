<?php
require_once ('Config/config.php');  // Include config file

$id = $_GET['ID'];
$res = $database->Edit($id);
$row = mysqli_fetch_assoc($res);    

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<title></title>
</head>
<body>
<h1>EDIT OOP CRUD</h1>
    <fieldset>
        <legend>EDIT OOP CRUD</legend>
    <form method="Post" >
       
        <input type="text" name="pname" value="<?php echo $row['name']?>"><br><br>
        <input type="number" name="pprice" value="<?php echo $row['price']?>"><br><br>
        <input type="number" name="pqty" value="<?php echo $row['quantity']?>"><br><br>
        <input type="submit" value="Update" name="btnproduct"><br><br>
    </form>      
    </fieldset>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php

if(isset($_POST['btnproduct']))
{
    $name = $_POST['pname'];
    $price = $_POST['pprice'];
    $quantity = $_POST['pqty'];
    
    $result = $database->Update($id, $name, $price, $quantity);
    if($result){
      echo" <script> swal('Success!', 'Student data has been deleted.', 'success');</script>";
        header('Location:fetch.php');
    }else{
        echo "Error in Updating data.";
    }
}

?>

</form>
</body>
</html>