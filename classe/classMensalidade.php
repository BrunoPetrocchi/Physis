<?php

class Mensalidade {

     private $db;

     public function Mensalidade() {
          $this->db = $GLOBALS[db_homepage];
     }

     public function CadastrarMensalidade($codigo_professor, $valor_mensalidade, $codigo_paciente, $situacao_pagamento, $parcela, $data_pagamento, $data_vencimento) {
          $array_data = explode('/', $data);
          $data = mktime(0, 0, 0, $array_data[1], $array_data[0], $array_data[2]);

          $sql = "INSERT INTO pilates.mensalidade VALUES 
          (NULL,'$codigo_professor','$valor_mensalidade','$codigo_paciente','$situacao_pagamento','$parcela','$data_pagamento','$data_vencimento',0)";
          //echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     }

     public function ConsultarMensalidade() {
          $sql = "SELECT 
          A.codigo_mensalidade,
          A.codigo_professor, 
          C.nome Aluno,
          A.valor_mensalidade, 
          A.codigo_paciente, 
          B.nome Professor,
          A.situacao_pagamento, 
          A.parcela, 
          A.data_pagamento, 
          A.data_vencimento 
          FROM pilates.mensalidade AS A
          JOIN pilates.professor AS B ON (B.codigo_professor = A.codigo_professor)
          JOIN pilates.paciente AS C ON (C.codigo_paciente = A.codigo_paciente)
          WHERE
          A.apagado = 0 ORDER BY A.codigo_mensalidade DESC";
          //	echo $sql;
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }

     public function ConsultarMensalidadeId($id) {
          $sql = "SELECT 
               A.codigo_mensalidade,
               A.codigo_professor,
               B.codigo_professor Professor, 
               C.nome Aluno,
               A.valor_mensalidade, 
               A.codigo_paciente, 
               B.nome Paciente,
               A.situacao_pagamento, 
               A.parcela, 
               A.data_pagamento, 
               A.data_vencimento 
               FROM pilates.mensalidade AS A
               JOIN pilates.professor AS B ON (B.codigo_professor = A.codigo_professor)
               JOIN pilates.paciente AS C ON (C.codigo_paciente = A.codigo_paciente)
               WHERE
               A.apagado = 0 AND A.codigo_mensalidade = '$id'";
          // echo $sql;
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }

     public function EditaMensalidade($id,$professor,$mensalidade,$paciente,$sit_pagamento,$parcela,$pagamento,$vencimento) {
          $array_data = explode('/', $data);
          $data = mktime(0, 0, 0, $array_data[1], $array_data[0], $array_data[2]);
          $sql = "UPDATE pilates.mensalidade SET codigo_professor='$professor', valor_mensalidade='$mensalidade', codigo_paciente='$paciente',
          situacao_pagamento='$sit_pagamento', parcela='$parcela', data_pagamento='$pagamento', data_vencimento='$vencimento' WHERE
          codigo_mensalidade = '$id'";
          echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     }

     public function ExcluirMensalidade($id) {
          $sql = "UPDATE pilates.mensalidade SET apagado = 1  where codigo_mensalidade = '$id'";
         // echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     }
     
     public function ConsultaUltimaMensalidade() {
          $sql = "SELECT MAX(codigo_mensalidade) AS id FROM pilates.mensalidade;";
          //   echo $sql;
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }

}

//return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
//return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
?>
	
