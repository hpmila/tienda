<?php
require_once('conexion.php');

class producto extends modelo{
    protected $nombre;  
    protected $precio;
    protected $cantidad;

    public  function __construct(){
        parent::__construct();
    }
    
    public function listar(){
        $sql="SELECT*FROM producto";
        $resultado=$this->_db->query($sql);
        $productos=$resultado->fetch_all(MYSQLI_ASSOC);
        if ($productos) {
         return $productos;
        $productos->close();
        $this->_db->close();
        }
    }
        

}

?>