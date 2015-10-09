<?php

class Alunos {

     private $db;

     public function Alunos() {
          $this->db = $GLOBALS[db_homepage];
     }

     public function AlterarAlunos($id, $nome, $data_nascimento, $estado_civil, $cpf, $rg, $telefone_fixo, $telefone_celular, $endereco, $bairro, $estado, $cidade, $cep, $numero, $profissao_atual, $profissao_anterior, $responsavel_legal, $observacao,$codigo_professor) {

          $array_data = explode('/', $data);
          $data = mktime(0, 0, 0, $array_data[1], $array_data[0], $array_data[2]);

          $sql = "UPDATE pilates.paciente SET
          nome='$nome',
          data_nascimento='$data_nascimento',
          estado_civil='$estado_civil',
          cpf='$cpf',
          rg='$rg',
          telefone_fixo='$telefone_fixo',
          telefone_celular='$telefone_celular',
          endereco='$endereco',
          bairro='$bairro',
          estado='$estado',
          cidade='$cidade',
          cep='$cep',
          numero='$numero',
          profissao_atual='$profissao_atual', 
          profissao_anterior='$profissao_anterior',
          responsavel_legal='$responsavel_legal',
          observacao='$observacao',
          codigo_professor='$codigo_professor'
          WHERE codigo_paciente = '$id'";
          //echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     }
     
     public function CadastrarAlunos($nome, $data_nascimento, $estado_civil, $cpf, $rg, $telefone_fixo, $telefone_celular, $endereco, $bairro, $estado, $cidade, $cep, $numero, $profissao_atual, $profissao_anterior, $responsavel_legal, $observacao,$professor) {

          $array_data = explode('/', $data);
          $data = mktime(0, 0, 0, $array_data[1], $array_data[0], $array_data[2]);

          $sql = "INSERT INTO  pilates.paciente VALUES 
          (NULL,'$nome',
          '$data_nascimento','$estado_civil',
          '$cpf','$rg',
          '$telefone_fixo','$telefone_celular',
          '$endereco','$bairro','$estado',
          '$cidade','$cep','$numero',
          '$profissao_atual',
          '$profissao_anterior','$responsavel_legal','$observacao',
          '$professor','','0')";
          
           $sql = "insert into pilates.professor_paciente VALUES ('$professor',LAST_INSERT_ID());";
           
          
           
          echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     }

     public function ConsultarAlunos() {
         // $array_data = explode('/', $data);
         // $data = mktime(0, 0, 0, $array_data[1], $array_data[0], $array_data[2]);
          $sql = "SELECT 
          A.codigo_paciente, A.nome,
          A.data_nascimento, A.estado_civil,
          A.cpf, A.rg,
          A.telefone_fixo, A.telefone_celular,
          A.endereco, A.bairro, A.estado, A.cidade,
          A.numero, A.profissao_atual, A.profissao_anterior,
          A.responsavel_legal, A.observacao, A.codigo_professor,A.apagado,
          B.nome as Nome_Professor
          FROM pilates.paciente as A
          LEFT JOIN pilates.professor as B ON (A.codigo_professor = B.codigo_professor)
          WHERE A.apagado = 0 
          ORDER BY A.codigo_paciente DESC";
                   // echo $sql;
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }
     
     public function ConsultarAlunosId($id) {
         // $array_data = explode('/', $data);
         // $data = mktime(0, 0, 0, $array_data[1], $array_data[0], $array_data[2]);
          $sql = "SELECT 
          A.codigo_paciente, A.nome,
          A.data_nascimento, A.estado_civil,
          A.cpf, A.rg,
          A.telefone_fixo, A.telefone_celular,
          A.endereco, A.bairro, A.estado, A.cidade,A.cep,
          A.numero, A.profissao_atual, A.profissao_anterior,
          A.responsavel_legal, A.observacao, A.codigo_professor,A.apagado,
          B.nome as Nome_Professor
          FROM pilates.paciente as A
          LEFT JOIN pilates.professor as B ON (A.codigo_professor = B.codigo_professor)
          WHERE A.apagado = 0 
          and A.codigo_paciente = '$id'";
                   // echo $sql;
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }
      public function ExcluirAlunos($id) {
          $sql = "UPDATE pilates.paciente SET apagado = 1  where codigo_paciente = '$id'";
          //echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     }

}

//return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
//return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
?>
	
