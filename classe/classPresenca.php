<?php

class Presenca {

     private $db;

     public function Presenca() {
          $this->db = $GLOBALS[db_homepage];
     }

     public function CadastrarPresenca($codigo_paciente, $data_entrada, $hentrada, $hsaida) {

          $array_data = explode('/', $data);
          $data = mktime(0, 0, 0, $array_data[1], $array_data[0], $array_data[2]);

          $sql = "INSERT INTO pilates.presenca VALUES (null,'$codigo_paciente','$data_entrada','$hentrada','$hsaida',0)";
          //echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     }

     public function ConsultarPresenca() {
          $array_data = explode('/', $data);
          $data = mktime(0, 0, 0, $array_data[1], $array_data[0], $array_data[2]);
          $sql = "SELECT A.codigo_presenca, A.codigo_paciente, B.nome, A.data_entrada, A.hentrada, A.hsaida, A.apagado
          FROM pilates.presenca AS A
          JOIN pilates.paciente AS B ON (B.codigo_paciente = A.codigo_paciente)
          WHERE A.apagado = 0
          ORDER BY B.nome";
          // echo $sql;
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }

     public function EditarPresenca($id, $codigo_paciente, $data_entrada, $entrada, $saida) {
          $array_data = explode('/', $data);
          $data = mktime(0, 0, 0, $array_data[1], $array_data[0], $array_data[2]);

          $sql = "UPDATE pilates.presenca
               SET
               codigo_paciente='$codigo_paciente', data_entrada='$data_entrada', hentrada='$entrada', hsaida='$saida'
               WHERE
               codigo_presenca = '$id'";
          //echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     }

     public function ConsultarPresencaId($id) {
          $array_data = explode('/', $data);
          $data = mktime(0, 0, 0, $array_data[1], $array_data[0], $array_data[2]);

          $sql = "SELECT codigo_presenca, codigo_paciente, data_entrada, hentrada, hsaida  FROM pilates.presenca
          WHERE codigo_presenca = '$id' ";
          //echo $sql;
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }

     public function ConsultaPacientePresenca() {
          $array_data = explode('/', $data);
          $data = mktime(0, 0, 0, $array_data[1], $array_data[0], $array_data[2]);

          $sql = "SELECT codigo_paciente, nome  FROM pilates.paciente WHERE apagado = 0 ";
          //echo $sql;
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }

     public function ApagarPresenca($id) {
          $sql = "UPDATE  pilates.presenca SET apagado = 1 WHERE codigo_presenca = '$id'";
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     }

}

//return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
//return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
?>
	
