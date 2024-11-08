<?php
    
    require_once("../model/DAO/conexion.php");
    require_once("../model/domains/tUser.php");

    class RankingDAO{

        protected $db;

        public function __construct(){
            $this->db = DB::getInstance();
        }

        public function getUserRanking(){
            $conn = $this->db->getConnection();

            $query = "SELECT * FROM usuario";

            $resultado = $conn->query($query);

            $array = $resultado->fetch_all(MYSQLI_ASSOC);

            return $array;
        }

        public function getFacultyRanking(){
            $conn = $this->db->getConnection();

            $query = "SELECT * FROM facultad";

            $resultado = $conn->query($query);

            $array = $resultado->fetch_all(MYSQLI_ASSOC);

            return $array;
        }


    }