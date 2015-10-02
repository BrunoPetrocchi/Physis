	<?php
	class SJBBPalavraVigario{
	
		private $db;
	
		public function SJBBPalavraVigario(){
			$this->db = $GLOBALS[db_homepage];
		}
		public function CadastroVigario($destaque, $noticia,$publicado){
			$sql="INSERT INTO sjbb.sjbb_palavravigario VALUES (NULL,'$destaque','$noticia','$publicado')";
			//echo $sql;
		return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
		}
		
		public function ConsultaVigario($id){
			$sql="SELECT PALAVRAVIGARIO_ID, PALAVRAVIGARIO_TITULO , PALAVRAVIGARIO_DESCRICAO  , PALAVRAVIGARIO_PUBLICADO FROM sjbb.sjbb_palavravigario";
			return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
		}
		
		public function ConsultaVigarioPublicado(){
			$sql="SELECT PALAVRAVIGARIO_ID, PALAVRAVIGARIO_TITULO , PALAVRAVIGARIO_DESCRICAO FROM sjbb.sjbb_palavravigario WHERE PALAVRAVIGARIO_PUBLICADO = 1";
			return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
		}
		
		public function ConsultaVigarioId($id){
			$sql="SELECT PALAVRAVIGARIO_ID, PALAVRAVIGARIO_TITULO , PALAVRAVIGARIO_DESCRICAO FROM sjbb.sjbb_palavravigario WHERE PALAVRAVIGARIO_ID = '$id'";
			return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
		}
		
		public function EditarVigario($id,$destaque,$noticia ){
			$sql="UPDATE sjbb.sjbb_palavravigario SET PALAVRAVIGARIO_TITULO='$destaque', PALAVRAVIGARIO_DESCRICAO='$noticia' WHERE PALAVRAVIGARIO_ID='$id'";
			return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
		}
	}
		//return MysqlManager::ExecutaConsultaMysql($sql, $this->db);
	//return MysqlManager::ExecutaPersistenciaMysql($sql, $this->db);
	
	?>
	
