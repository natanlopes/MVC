<?php

class DB{
private $conn;

public function getConnection(){

$this->conn= new mysqli("localhost","root","","mvc");

}
public function execSQL($SQL){
    
return $this-> conn->query($SQL);
}
}


?>