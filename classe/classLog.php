<?php

class Log {

     private $db;

     public function Log() {
          $this->db = $GLOBALS[db_homepage];
     }

     public function InserirLog($codigo_professor,$codigo_mensalidade,$dataentrada,$aluno,$valor_atual,$regusuario) {
          $dataentrada = time();
          $sql = "INSERT INTO pilates.log VALUES (NULL,'$codigo_professor','$codigo_mensalidade','$dataentrada','$aluno','N','$regusuario')";
          echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     }
     
     public function InserirNovoLog($codigo_professor,$codigo_mensalidade,$dataentrada,$aluno,$valor_atual,$regusuario) {
          $dataentrada = time();
          $sql = "INSERT INTO pilates.log VALUES (NULL,'$codigo_professor','$codigo_mensalidade','$dataentrada','$aluno','S','$regusuario')";
          echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     }
     
     public function ConsultaUltimoLog() {
          $sql = "SELECT MAX(codigo_log) AS id FROM pilates.log;";
          //   echo $sql;
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }
     
     public function ConsultaUltimoLogApagado() {
          $sql = "SELECT MAX(codigo_log) AS id, codigo_professor , codigo_mensalidade , data_alteracao, aluno, valor_atual, regapagado, regusuario FROM pilates.log;";
          //   echo $sql;
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }
     
     public function RelLog() {
          $sql = "SELECT
          A.codigo_professor,
          B.nome AS PROFESSOR,
          A.codigo_mensalidade,
          A.data_alteracao,
          A.aluno,
          C.codigo_paciente,
          C.nome as ALUNO,
          A.regapagado,
          A.regusuario
          FROM pilates.log as A
          LEFT JOIN pilates.professor AS B ON (B.codigo_professor = A.codigo_professor)
          LEFT JOIN pilates.paciente AS C ON (C.codigo_paciente = A.aluno)
          ORDER BY A.codigo_mensalidade DESC";
          //   echo $sql;
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }
    
}

//return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
//return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
?>
	
