<?php
require_once ('Config/config.php');  // Include config file
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
<h1>PHP OOP CRUD</h1>
    <fieldset>
        <legend>OOP CRUD</legend>
    <form method="post" >
        <input type="text" name="pname" placeholder="Enter your product name"><br><br>
        <input type="number" name="pprice" placeholder="Enter your product price"><br><br>
        <input type="number" name="pqty" placeholder="Enter your product quantity"><br><br>
        <input type="submit" value="Done" name="btnproduct"><br><br>
    </form>
    </fieldset>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
if(isset($_POST['btnproduct'])){
    $name = $_POST['pname'];
    $price = $_POST['pprice'];
    $quantity = $_POST['pqty'];
    
    $result = $database->insert($name, $price, $quantity);
    if($result){
        swal("Success!", "Student data has been deleted.", "success");
    }else{
        echo "Error in inserting data.";
    }
}
?>

</form>
</body>
</html>