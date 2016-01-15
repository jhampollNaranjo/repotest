<?php
    class user_model  {

        private $db;
        private $user;
        public function __construct(){
            $this->db=Conectar::conexion();
            $this->user=array();
        }

        public function get_personas(){

            $consulta=$this->db->query("SELECT * FROM usuario;");
            while($filas=$consulta->fetch_assoc()){
                $this->user[]=$filas;
            }
            return $this->user;
        }

        public function delete_user($id){
            $sql=$this->db->query("DELETE FROM usuario WHERE id =$id");
        }

        public function add_user($nam,$ln){
             $sql=$this->db->query("INSERT INTO usuario VALUES (NULL,'$nam','$ln')");
        }
    }
?>
