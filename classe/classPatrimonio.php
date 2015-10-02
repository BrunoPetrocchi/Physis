<?php

class Patrimonio {

     private $db;

     public function Patrimonio() {
          $this->db = $GLOBALS[db_homepage];
     }

     public function CadastrarPatrimonio($descricao, $data, $quantidade, $valor, $codigo_professor) {

          $array_data = explode('/', $data);
          $data = mktime(0, 0, 0, $array_data[1], $array_data[0], $array_data[2]);

          $sql = "INSERT INTO pilates.patrimonio VALUES (NULL,'$descricao','$data','$quantidade','$valor','$codigo_professor','0')";
          echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     }

     public function ConsultaPatrimonio() {
          $array_data = explode('/', $data);
          $data = mktime(0, 0, 0, $array_data[1], $array_data[0], $array_data[2]);
          $sql = "SELECT codigo_patrimonio, descricao, data, quantidade , valor, codigo_professor FROM pilates.patrimonio WHERE apagado = 0 ORDER BY codigo_patrimonio DESC";
          //echo $sql;
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }

     public function ConsultarPatrimonioId($id) {
          // $array_data = explode('/', $data);
          // $data = mktime(0, 0, 0, $array_data[1], $array_data[0], $array_data[2]);
          $sql = "SELECT codigo_patrimonio, descricao, data, quantidade, valor, codigo_professor
          FROM pilates.patrimonio 
          WHERE codigo_patrimonio = '$id' ";
          // echo $sql;
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }

     public function AlterarPatrimonio($id, $descricao, $data, $quantidade, $valor, $professor) {
          $sql = "UPDATE pilates.patrimonio SET 
          descricao='$descricao',
          data='$data',
          quantidade='$quantidade',
          valor='$valor',
          codigo_professor='$professor'
          WHERE
          codigo_patrimonio='$id'";
          //echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     }

     public function ExcluirPatrimonio($id) {
          $sql = "UPDATE pilates.patrimonio SET  apagado = 1  WHERE codigo_patrimonio='$id'";
          //echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     }

}

//return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
//return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
?>

