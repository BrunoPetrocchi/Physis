<?php
	class Login{
	
		private $db;
	
		public function Login(){
			$this->db = $GLOBALS[db_homepage];
		}
		

		public function BuscaLogin($codigo){
			$sql = "SELECT codigo_professor, nome , senha  FROM professor where codigo_professor='$codigo' LIMIT 1";
		//	echo $sql;
			return MysqlManager::ExecutaConsultaMysql($sql,$this->db);
		}


























		
		
		
		
		public function cadLogin($nome,$senha){
			$sql = "INSERT INTO impact.login values (NULL, '$nome','$senha')";
			//echo $sql;
			return MysqlManager::ExecutaPersistenciaMysql($sql,$this->db);
			}	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		public function EditarUsuario($id, $nome, $senha){
			$sql = "UPDATE usuarios SET USUARIO_NOME = '$nome', USUARIO_SENHA = '$senha' WHERE id = '$id'";
			//echo $sql;
			return MysqlManager::ExecutaConsultaMysql($sql,$this->db);
		}	
		
		
	}
	
	
		
		
	
		/*		
		
		public function InserirParticipante($nome, $email, $cod_tipo, $curso){
			$datacadastro = time();
			$sql = "INSERT INTO GINC_CADASTRO VALUES (NULL, '$nome', '$email', '$cod_tipo','$curso', '$datacadastro')";
			//echo $sql;
			return MysqlManager::ExecutaPersistenciaMysql($sql,$this->db);
		}

		public function EditarProdutosParticipantes($gincana, $participante, $produto, $quantidade ){
			$sql = "
				UPDATE
					GINC_PROD_PART
				SET
					QUANT=QUANT + $quantidade
				WHERE
					COD_GINCANA = '$gincana'
					AND COD_PART = '$participante'
					AND COD_PROD = '$produto'

			";
			//echo $sql;	
			return MysqlManager::ExecutaPersistenciaMysql($sql,$this->db);
		}	
				
		*/
				
	
	
	

		?>

		
				
		
	

