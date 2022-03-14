<?php
class produtoVO{
private $id;
private $nome;
private $marca;
private $preco;

public function getId(){
    return $this->id;
}

public function setId{
    $this-> id= $id;
}
public function getNome(){
    return $this->nome;
}

public function setNome{
    $this-> nome = $nome;
}
public function getMarca(){
    return $this->marca;
}

public function setMarca{
    $this-> marca = $marca;
}

public function getPreco(){
    return $this->preco;
}

public function setPreco{
    $this-> preco = $preco;
}

?>