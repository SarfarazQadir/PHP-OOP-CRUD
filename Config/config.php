<?php

class  Database
{
    private $con;

    public function connection(){
        $this->con = mysqli_connect("localhost","root","","oop_db");
        if(mysqli_connect_errno())
        {
            die("connection failed!". mysqli_connect_error());
        }
    }
    public function insert($name, $price, $quantity){
        $query = "INSERT INTO `tbl_insert`(`name`, `price`, `quantity`) VALUES ('$name', $price, $quantity)";
        $result =  mysqli_query($this->con,$query);
        if($result){
            return true;
        }else{
            return false;
        }   
    }
    public function fetch(){
        $query = "SELECT * FROM tbl_insert";
        $results = mysqli_query($this->con ,$query);
        return $results;
    }
    public function edit($id){
        $query = "SELECT * FROM `tbl_insert` Where `id`= '$id' ";
        $result = mysqli_query($this->con ,$query);
        return $result;
    }
    public function Update($id, $name, $price, $quantity){
        $query = "UPDATE `tbl_insert` SET `name`='$name',`price`='$price',`quantity`='$quantity' WHERE `id`='$id'";
        $result = mysqli_query($this->con, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public  function delete($id){
        $query= "DELETE FROM `tbl_insert` WHERE `id`='$id' ";
        $result = mysqli_query($this->con ,$query);    
       return $result;
    }
}

$database = new Database();

$database->connection();

?>