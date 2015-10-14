
<?php
require "login_verifica.php";

//echo "<pre>";	print_r($_SESSION);echo "</pre>"; 

include_once ("config/conexao.php");
include_once ("config/mysqlmanager.php");
$db = new MysqlManager();

include ("classe/classLogin.php");
$clsLogin = new Login();

include ("classe/classProfessor.php");
$clsProfessor = new Professores();

include ("classe/classAlunos.php");
$clsAlunos = new Alunos();

include ("classe/classPatrimonio.php");
$clsPatrimonio = new Patrimonio();

include ("classe/classMensalidade.php");
$clsMensalidade = new Mensalidade();

include ("classe/classAvaliacao");
$clsAvaliacao = new Avaliacao();
?>		

<!DOCTYPE HTML>
<html>
     <head>
          <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Physis Studio Pilates</title>
          <link href="css/estilo.css" rel="stylesheet">
          <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">       
          <link rel="stylesheet" type="text/css" href="css/datepicker.css">
          <link rel="stylesheet" type="text/css" href="js/jquery.ui.datepicker-pt-BR.js"/>
          <link rel="stylesheet" type="text/css" href="js/css/ui/smoothness/jquery-ui-1.7.1.custom.css"/>
          <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
          <script type="text/javascript" src="js/jquery-ui-1.8.24.custom.min.js"></script>
          <script type="text/javascript" src="js/datepicker.js"></script>
          <script type="text/javascript" src="js/cidades-estados-v0.2.js"></script> 
          <script type="text/javascript">
               window.onload = function () {
                    new dgCidadesEstados(
                            document.getElementById('estado'),
                            document.getElementById('cidade'),
                            true
                            );
               }

          </script>
     </head>
     <body>
          <div id="topo">
               <a href="?pagina=tela_inicial"/><div id="cabecalho"><img src="img/physis.png"/></div></a>
          <div id="menus">
               <?php include_once "menu.php"; ?>
          </div>
     </div>
     <div id="palco">
          <?php
          if (
                  $_GET['pagina'] == "painel" ||
                  $_GET['pagina'] == "tela_inicial" ||
                  $_GET['pagina'] == "principal" ||
                  $_GET['pagina'] == "acaopresenca" ||
                  $_GET['pagina'] == "acaoprofessor" ||
                  $_GET['pagina'] == "acaoalunos" ||
                  $_GET['pagina'] == "acaopatrimonio" ||
                  $_GET['pagina'] == "acaomensalidade" ||
                  $_GET['pagina'] == "acaoavaliacao" ||
                  $_GET['pagina'] == "editar_professor" ||
                  $_GET['pagina'] == "professor" ||
                  $_GET['pagina'] == "cadastrar_professor" ||
                  $_GET['pagina'] == "alunos" ||
                  $_GET['pagina'] == "cadastrar_alunos" ||
                  $_GET['pagina'] == "editar_alunos" ||
                  $_GET['pagina'] == "patrimonio" ||
                  $_GET['pagina'] == "cadastrar_patrimonio" ||
                  $_GET['pagina'] == "editar_patrimonio" ||
                  $_GET['pagina'] == "mensalidade" ||
                  $_GET['pagina'] == "cadastrar_mensalidade" ||
                  $_GET['pagina'] == "editar_mensalidade" ||
                  $_GET['pagina'] == "avaliacao" ||
                  $_GET['pagina'] == "cadastrar_avaliacao" ||
                  $_GET['pagina'] == "editar_avaliacao" ||
                  $_GET['pagina'] == "presenca" ||
                  $_GET['pagina'] == "cadastrar_presenca" ||
                  $_GET['pagina'] == "editar_presenca"
          ) {
               require_once ($_GET['pagina'] . ".php");
          } else {
               require_once ("tela_inicial.php");
          }
          ?>      


     </div>


     <script type="text/javascript">
          $(function () {
               $("#datepicker").datepicker();
          });
     </script>  

     <script type="text/javascript" src="js/jquery.maskedinput.js"></script> 


     <script>

          $("#cpf").mask("999.999.999-99");
          $("#crefito").mask("9/999999-F");
          $("#cep").mask("99999-999");
          $("#celular").mask("(99)99999-9999");
          $("#fixo").mask("(99)9999-9999");
          $("#entrada,#saida").mask("99:99");
          $("#altura").mask("999");
     </script>

     <script type="text/javascript" src="js/jquery.validate.min.js"></script> 
     <script type="text/javascript" src="js/scripts.js"></script>

     <script type="text/javascript">
     $(document).ready(function () {

          $('#peso, #altura').each(function (i) {

               var valor = $(this).val().replace(/[^0-9\.]+/g, '');
               $(this).val(valor);

               var soma = $('#peso').val() / ($('#altura').val() / 100 * $('#altura').val() / 100);
               $('#imc').val(soma.toFixed(2));

          });

          $('#peso, #altura').keyup(function () {

               var valor = $(this).val().replace(/[^0-9\.]+/g, '');
               $(this).val(valor);

               var soma = $('#peso').val() / ($('#altura').val() / 100 * $('#altura').val() / 100);
               $('#imc').val(soma.toFixed(2));
          });
     });
     </script>
     <div id="rodape">
          <div id="descricao">
               <strong>Genesis - Copyright &reg; 2015 / 2016 - Desenvolvido por Flow Sistemas</strong>
          </div>
     </div>
</body>
</html>