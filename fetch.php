<?php
require_once ('Config/config.php');  // Include config file
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>PRICE</th>
                <th>QUANTITY</th>
                <th colspan="2" >ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $res = $database->fetch();
            while($row = mysqli_fetch_assoc($res))
            {
                ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['price']?></td>
                    <td><?php echo $row['quantity']?></td>
                    <td><a href="edit.php?ID=<?php echo $row['id']?>"><button>EDIT</button></a></td>
                    <td><a href="delete.php?ID=<?php echo $row['id']?>"><button>DELETE</button></a></td>
                </tr>
                <?php
                }
                
                ?>
        </tbody>
    </table>
</body>
</html>