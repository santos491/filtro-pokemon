<?php
    class Conectar{
        protected $dbh;

        protected function conexion(){
            try{
                $conectar = $this->dbh = new PDO("mysql:host=localhost;dbname=pokemonfiltro;charset=utf8mb4","root","");
                return $conectar;
            }catch(Exception $e){
                print "¡Error BD!: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        protected function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }
    }
?>