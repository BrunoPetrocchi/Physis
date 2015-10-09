# Host: localhost  (Version: 5.6.17)
# Date: 2015-10-08 20:46:39
# Generator: MySQL-Front 5.3  (Build 4.175)

/*!40101 SET NAMES latin1 */;

#
# Structure for table "anaminese"
#

DROP TABLE IF EXISTS `anaminese`;
CREATE TABLE `anaminese` (
  `codigo_anaminese` int(11) NOT NULL AUTO_INCREMENT,
  `queixa_principal` varchar(100) NOT NULL,
  `molestia_atual` varchar(100) NOT NULL,
  `molestia_progressa` varchar(100) NOT NULL,
  `medicamento` varchar(100) NOT NULL,
  `codigo_fichaavaliacao` int(11) NOT NULL,
  PRIMARY KEY (`codigo_anaminese`,`codigo_fichaavaliacao`),
  KEY `fk_anaminese_Ficha_Avaliacao1_idx` (`codigo_fichaavaliacao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "anaminese"
#


#
# Structure for table "avaliacao"
#

DROP TABLE IF EXISTS `avaliacao`;
CREATE TABLE `avaliacao` (
  `codigo_avaliacao` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) NOT NULL,
  `codigo_fichaavaliacao` int(11) NOT NULL,
  PRIMARY KEY (`codigo_avaliacao`),
  KEY `fk_Avaliacao_Ficha_Avaliacao1_idx` (`codigo_fichaavaliacao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "avaliacao"
#


#
# Structure for table "avaliacao_postural"
#

DROP TABLE IF EXISTS `avaliacao_postural`;
CREATE TABLE `avaliacao_postural` (
  `codigo_avaliacaopostural` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_fichaavaliacao` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  PRIMARY KEY (`codigo_avaliacaopostural`),
  KEY `fk_Avaliacao_Postural_Ficha_Avaliacao1_idx` (`codigo_fichaavaliacao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "avaliacao_postural"
#


#
# Structure for table "exame_fisico"
#

DROP TABLE IF EXISTS `exame_fisico`;
CREATE TABLE `exame_fisico` (
  `codigo_exame_fisico` int(11) NOT NULL AUTO_INCREMENT,
  `peso` int(11) NOT NULL,
  `altura` int(11) NOT NULL,
  `imc` char(50) DEFAULT NULL,
  `ponto_doloroso` varchar(45) NOT NULL,
  `freq_respiratoria` varchar(45) NOT NULL,
  `freq_cardiaca` varchar(45) NOT NULL,
  `pressao` varchar(45) NOT NULL,
  `umbigo_baixo` varchar(45) NOT NULL,
  `umbigo_cima` varchar(45) NOT NULL,
  `temperatura` int(10) DEFAULT NULL,
  `codigo_fichaavaliacao` int(11) NOT NULL,
  PRIMARY KEY (`codigo_exame_fisico`),
  KEY `fk_exame_fisico_Ficha_Avaliacao1_idx` (`codigo_fichaavaliacao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "exame_fisico"
#


#
# Structure for table "ficha_avaliacao"
#

DROP TABLE IF EXISTS `ficha_avaliacao`;
CREATE TABLE `ficha_avaliacao` (
  `codigo_fichaavaliacao` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_professor` int(11) NOT NULL,
  `data` varchar(255) NOT NULL,
  `codigo_paciente` int(11) NOT NULL,
  PRIMARY KEY (`codigo_fichaavaliacao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "ficha_avaliacao"
#


#
# Structure for table "log"
#

DROP TABLE IF EXISTS `log`;
CREATE TABLE `log` (
  `codigo_log` int(11) NOT NULL AUTO_INCREMENT,
  `Professor_codigo_professor` int(11) NOT NULL,
  `nome_tabela` varchar(45) NOT NULL,
  `valor_atual` varchar(45) NOT NULL,
  `valor_anterior` varchar(45) NOT NULL,
  `nome_campo` varchar(45) NOT NULL,
  PRIMARY KEY (`codigo_log`),
  KEY `fk_Log_Professor1_idx` (`Professor_codigo_professor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "log"
#


#
# Structure for table "mensalidade"
#

DROP TABLE IF EXISTS `mensalidade`;
CREATE TABLE `mensalidade` (
  `codigo_mensalidade` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_professor` int(11) DEFAULT NULL,
  `valor_mensalidade` varchar(255) DEFAULT NULL,
  `codigo_paciente` int(11) NOT NULL,
  `situacao_pagamento` int(1) DEFAULT NULL,
  `parcela` char(50) DEFAULT NULL,
  `data_pagamento` varchar(255) DEFAULT '',
  `data_vencimento` varchar(255) DEFAULT '',
  `apagado` int(1) DEFAULT '0',
  PRIMARY KEY (`codigo_mensalidade`),
  KEY `Mensalidade_Paciente_idx` (`codigo_paciente`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

#
# Data for table "mensalidade"
#

INSERT INTO `mensalidade` VALUES (1,1,'1000',4,1,'1x4','20/10/2015','01/10/2015',0),(2,2,'1000',5,1,'1','11/09/2015','14/09/2015',0),(3,1,'1100',4,1,'1','24/09/2015','15/09/2015',0),(4,2,'1000',5,1,'1x1','30/09/2015','22/09/2015',0),(5,2,'1000',5,1,'1x1','30/09/2015','22/09/2015',0),(6,0,'0',0,0,'','','',0),(7,2,'1000',5,2,'1x1','28/09/2015','22/09/2015',0),(8,0,'0',0,0,'','','',0),(9,0,'0',0,0,'','','',0),(10,0,'0',0,0,'','','',0),(11,0,'0',0,0,'','','',0),(12,1,'1000000',5,1,'1x1','28/10/2015','27/10/2015',0),(13,1,'R$ 1000,00',3,1,'1x1','28/10/2015','27/10/2015',0),(14,2,'12344456456465',3,1,'1/1','28/10/2015','26/10/2015',0),(15,2,'100,00',3,1,'1/1','21/10/2015','25/10/2015',0),(16,1,'100,00',7,1,'1/1','17/09/2015','05/09/2015',0);

#
# Structure for table "movimentacao"
#

DROP TABLE IF EXISTS `movimentacao`;
CREATE TABLE `movimentacao` (
  `codigo_movimentacao` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_fichaavaliacao` int(11) NOT NULL,
  `local_ruido` varchar(45) NOT NULL,
  `local_repouso` varchar(255) DEFAULT NULL,
  `repouso` varchar(45) NOT NULL,
  `movimento` varchar(45) NOT NULL,
  `ruido` varchar(45) NOT NULL,
  `local_movimentacao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codigo_movimentacao`),
  KEY `fk_Movimentacao_Ficha_Avaliacao1_idx` (`codigo_fichaavaliacao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "movimentacao"
#


#
# Structure for table "objetivos"
#

DROP TABLE IF EXISTS `objetivos`;
CREATE TABLE `objetivos` (
  `codigo_objetivo` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL,
  `codigo_fichaavaliacao` int(11) NOT NULL,
  PRIMARY KEY (`codigo_objetivo`),
  KEY `fk_Objetivo_Ficha_Avaliacao1_idx` (`codigo_fichaavaliacao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "objetivos"
#


#
# Structure for table "paciente"
#

DROP TABLE IF EXISTS `paciente`;
CREATE TABLE `paciente` (
  `codigo_paciente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `data_nascimento` varchar(255) NOT NULL,
  `estado_civil` char(10) NOT NULL,
  `cpf` char(11) NOT NULL,
  `rg` int(1) DEFAULT NULL,
  `telefone_fixo` char(13) DEFAULT NULL,
  `telefone_celular` char(14) DEFAULT NULL,
  `endereco` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `cidade` varchar(100) NOT NULL,
  `cep` char(9) DEFAULT NULL,
  `numero` char(10) NOT NULL,
  `profissao_atual` varchar(100) NOT NULL,
  `profissao_anterior` varchar(100) NOT NULL,
  `responsavel_legal` varchar(100) NOT NULL,
  `observacao` mediumtext,
  `codigo_professor` int(11) NOT NULL,
  `codigo_fichaavaliacao` int(11) NOT NULL,
  `apagado` int(1) DEFAULT '0',
  PRIMARY KEY (`codigo_paciente`,`codigo_fichaavaliacao`),
  KEY `fk_Paciente_Ficha_Avaliacao1_idx` (`codigo_fichaavaliacao`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

#
# Data for table "paciente"
#

INSERT INTO `paciente` VALUES (1,'Eu','22/09/2015','Solteiro','156.161.561',2147483647,'(15)1515-6156','(15)61651-6516','rua araraquara','Novo Lar','AP','Ferreira Gomes','15615-615','773','Ajudante','Ajudante 2','Bruno','teste',2,0,0),(2,'Macke','22/09/2015','Solteiro','156.161.561',2147483647,'(15)1515-6156','(15)61651-6516','rua araraquara','Novo Lar','AP','Ferreira Gomes','15615-615','773','Ajudante','Ajudante 2','Bruno','teste',2,0,0),(3,'Bruno Petrocchi','22/09/2015','Solteiro','156.161.561',2147483647,'(15)1515-6156','(15)61651-6516','rua araraquara','Novo Lar','AL','Batalha','15615-615','773','Ajudante','Ajudante 2','Bruno','teste',2,0,0),(4,'Bruno Petrocchi','22/09/2015','Solteiro','156.161.561',2147483647,'(15)1515-6156','(15)61651-6516','rua araraquara','Novo Lar','AC','Capixaba','15615-615','773','Ajudante','Ajudante 2','Bruno','teste',2,0,0),(5,'Bruno Petrocchi','22/09/2015','Solteiro','156.161.561',2147483647,'(15)1515-6156','(15)61651-6516','rua araraquara','Novo Lar','BA','Amargosa','15615-615','773','Ajudante','Ajudante 2','Bruno','teste',2,0,0),(6,'Eu','22/09/2015','Solteiro','156.161.561',2147483647,'(15)1515-6156','(15)61651-6516','rua araraquara','Novo Lar','AC','Feijó','15615-615','773','Ajudante','Ajudante 2','Bruno','teste',1,0,0),(7,'Eux','22/09/2015','Solteiro','156.161.561',2147483647,'(15)1515-6156','(15)61651-6516','rua araraquara','Novo Lar','AM','Atalaia do Norte','15615-615','773','Ajudante','Ajudante 2','Bruno','teste',1,0,0);

#
# Structure for table "patrimonio"
#

DROP TABLE IF EXISTS `patrimonio`;
CREATE TABLE `patrimonio` (
  `codigo_patrimonio` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `valor` varchar(100) DEFAULT NULL,
  `codigo_professor` int(11) NOT NULL,
  `apagado` int(1) DEFAULT '0',
  PRIMARY KEY (`codigo_patrimonio`),
  KEY `Patrimonio_Professor_idx` (`codigo_professor`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

#
# Data for table "patrimonio"
#

INSERT INTO `patrimonio` VALUES (1,'','Macke',22,'20',30,1),(2,'','22/09/2015',0,'30',1000,1),(3,'Nois123123123123','944013600',10,'10.00',1,0),(4,'Nois123123123123','944013600',10,'10.00',1,0),(5,'Nois123123123123','944013600',10,'10.00',1,0),(6,'Bruno Almeida Petrocchi','944013600',10,'10/09/2015',1,0),(7,'Bola 10x10xz','952570800',8,'30/09/2015',1,0),(8,'','',0,'',0,1),(9,'','',0,'',0,1),(10,'','',0,'',0,1),(11,'','',0,'',0,1),(12,'','',0,'',0,1),(13,'','952570800',1,'14/09/2015',2,1);

#
# Structure for table "presenca"
#

DROP TABLE IF EXISTS `presenca`;
CREATE TABLE `presenca` (
  `codigo_presenca` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_paciente` int(11) NOT NULL,
  `data_entrada` varchar(255) NOT NULL,
  `hentrada` char(50) DEFAULT NULL,
  `hsaida` char(50) DEFAULT NULL,
  `apagado` int(1) DEFAULT '0',
  PRIMARY KEY (`codigo_presenca`),
  KEY `fk_Presenca_Paciente1_idx` (`codigo_paciente`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "presenca"
#

INSERT INTO `presenca` VALUES (1,3,'21/10/2015','20:20','20:20',0);

#
# Structure for table "professor"
#

DROP TABLE IF EXISTS `professor`;
CREATE TABLE `professor` (
  `codigo_professor` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `numero` char(10) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `uf` varchar(100) DEFAULT NULL,
  `cep` char(9) NOT NULL DEFAULT '',
  `cpf` char(14) NOT NULL DEFAULT '',
  `rg` char(9) NOT NULL,
  `data_nascimento` varchar(255) NOT NULL,
  `telefone_fixo` char(13) NOT NULL DEFAULT '',
  `telefone_celular` char(14) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL,
  `crefito` varchar(100) NOT NULL,
  `banco` varchar(255) DEFAULT NULL,
  `senha` varchar(255) NOT NULL DEFAULT '',
  `apagado` int(11) DEFAULT '1',
  `codigo_permissao` int(1) DEFAULT NULL,
  `observacao` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`codigo_professor`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "professor"
#

INSERT INTO `professor` VALUES (1,'Bruno Almeida Petrocchi','Rua: Araraquara','773','Jd. São Sebastião','Bebedouro','SP','14701-250','225.811.538-81','41.378.10','13/09/2015','(17)3342-1723','(17)99133-2800','petrocchib@gmail.com','4/137881-F','Ag 0101 - CC 1252-2','123',1,0,'Teste',0),(2,'Rafael Almeida Petrocchi','rua araraquara','num','Novo Lar','Assunção do Piauí','PI','85236-999','225.811.538-81','413781070','14/09/2015','(17)3342-1723','(17)33432-5000','macpetrocchi@hotmail.com','1/561651-F','151515151515','123',1,0,'teste',0);

#
# Structure for table "professor_paciente"
#

DROP TABLE IF EXISTS `professor_paciente`;
CREATE TABLE `professor_paciente` (
  `Professor_codigo_professor` int(11) NOT NULL,
  `Paciente_codigo_paciente` int(11) NOT NULL,
  PRIMARY KEY (`Professor_codigo_professor`,`Paciente_codigo_paciente`),
  KEY `fk_Professor_Paciente_Paciente1_idx` (`Paciente_codigo_paciente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "professor_paciente"
#

INSERT INTO `professor_paciente` VALUES (1,2),(1,7),(5,2),(6,1);
