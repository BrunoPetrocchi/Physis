<?php

class Professores {

     private $db;

     public function Professores() {
          $this->db = $GLOBALS[db_homepage];
     }

     public function CadastrarProfessor($nome, $endereco, $numero, $bairro, $cidade, $uf, $cep, $cpf, $rg, $data_nascimento, $telefone_fixo, $telefone_celular, $email, $crefito, $banco, $codigo_permissao, $observacao) {
          $array_data = explode('/', $data);
          $data = mktime(0, 0, 0, $array_data[1], $array_data[0], $array_data[2]);
          $sql = "INSERT INTO pilates.professor VALUES (NULL,'$nome','$endereco','$numero','$bairro','$cidade','$uf','$cep','$cpf','$rg','$data_nascimento','$telefone_fixo','$telefone_celular','$email','$crefito','$banco','123','1','$codigo_permissao','$observacao','0')";
          //echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     }

     public function ConsultarProfessor() {
          $sql = "SELECT
			codigo_professor,
			nome,
			endereco,
                        numero,
			bairro, 
			cidade,
			cep,
			cpf,
			rg, 
			data_nascimento,
			telefone_fixo,
			telefone_celular,
			email,
			crefito,
			banco,
			apagado,
			codigo_permissao,
			observacao,
                         status
			FROM pilates.professor 
			WHERE apagado = 1
                        ORDER BY codigo_professor DESC";
          //	echo $sql;
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }

     public function ConsultarIdProfessor($id) {
          $sql = "SELECT
			codigo_professor,
			nome,
			endereco,
                        numero,
			bairro, 
			cidade,
			cep,
			cpf,
			rg, 
			data_nascimento,
			telefone_fixo,
			telefone_celular,
			email,
			crefito,
			banco,
			apagado,
			codigo_permissao,
			observacao,
                        status
			FROM pilates.professor 
			WHERE apagado = 1
			AND codigo_professor = '$id'";
          //echo $sql;
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }

     public function ConsultarPermissao() {
          $sql = "SELECT codigo_permissao , descricao FROM pilates.professor_permissao where apagado = 1";
          //echo $sql;
          return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
     }

     public function EditarProfessor($id, $nome, $endereco, $numero, $bairro, $cidade, $uf, $cep, $cpf, $rg, $data_nascimento, $telefone_fixo, $telefone_celular, $email, $crefito, $banco, $codigo_permissao, $observacao, $status) {
          $array_data = explode('/', $data);
          $data = mktime(0, 0, 0, $array_data[1], $array_data[0], $array_data[2]);
          $sql = "UPDATE pilates.professor SET nome='$nome', endereco='$endereco', numero='$numero', bairro='$bairro',
				cidade='$cidade', uf='$uf', cep='$cep', cpf='$cpf', rg='$rg', data_nascimento='$data_nascimento',
				telefone_fixo='$telefone_fixo', telefone_celular='$telefone_celular', email='$email', crefito='$crefito',
				banco='$banco', senha='123', codigo_permissao='$permissao', observacao='$observacao', status='$status' where codigo_professor = '$id'";

          //echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     }

     public function ExcluirProfessor($id) {
          $sql = "UPDATE pilates.professor SET apagado = 0  where codigo_professor = '$id'";
          //echo $sql;
          return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
     }

}

//return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
//return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
?>
	
