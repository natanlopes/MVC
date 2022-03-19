<?php
class ProdutoDAO{
    
    public function insert(produtoVO $value){
        $SQL = "INSERT INTO produtos (nome, marca, preco) VALUES (";
        $SQL .= "?, ?, ?)";
        
        $DB = new DB();
        $DB->getConnection();
        $pstm = $DB->execSQL($SQL);
        
        $pstm->bind_param("sss", $value->getNome(), $value->getMarca(), $value->getPreco());
        
        if($pstm->execute())
            return true;
        else
            return false;
    }
    
    public function update(produtoVO $value){
        $SQL = "UPDATE produtos SET nome = ?, marca = ?, preco = ? WHERE id = ?";
        
        $DB = new DB();
        $DB->getConnection();
        $pstm = $DB->execSQL($SQL);
        
        $pstm->bind_param("sssi", $value->getNome(), $value->getMarca(), $value->getPreco(), $value->getId());
        
        if($pstm->execute())
            return true;
        else
            return false;
    }
    
    public function delete(produtoVO $value){
        $SQL = "DELETE FROM produtos WHERE id = ?";
        
        $DB = new DB();
        $DB->getConnection();
        $pstm = $DB->execSQL($SQL);
        
        $pstm->bind_param("i", $value->getId());
        
        if($pstm->execute())
            return true;
        else
            return false;
    }
    
    public function getById($id){
        $SQL = "SELECT * FROM produtos WHERE id = ".  addslashes($id);
        
        $DB = new DB();
        $DB->getConnection();
        $query = $DB->execReader($SQL);
        
        $vo = new ProdutoVO();
        
        while($reg = $query->fetch_array(MYSQLI_ASSOC)){
            $vo->setId($reg["id"]);
            $vo->setNome($reg["nome"]);
            $vo->setMarca($reg["marca"]);
            $vo->setPreco($reg["preco"]);
        }
        
        return $vo;
    }
    
    public function getAll(){
        $SQL = "SELECT * FROM produtos";
        
        $DB = new DB();
        $DB->getConnection();
        $query = $DB->execReader($SQL);
        $array = array();
        
        while($row = $query->fetch_array()){
            $array[] = array($row["id"], $row["nome"], $row["marca"], $row["preco"]);
        }
        
        return $array;
    }
}
?>
