<?php

class DB{
private $conn;

public function getConnection(){

$this->conn= new mysqli("localhost","root","","mvc");

}
public function execrReader($SQL){
       return $this-> conn-> query($SQL);
}

public function execSQL($SQL){
        return $this-> conn -> prepare ($SQL);
}

}
?>