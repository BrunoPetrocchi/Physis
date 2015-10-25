
<?php
if ($_GET['acao'] == 'cadastrar') {
     $VarInserirFichaAvaliacao = $clsAvaliacao->CadastrarAvaliacao($_POST['professor'],$_POST['datepicker'], $_POST['alunos']);
    // echo '<pre>';     print_r($VarInserirFichaAvaliacao);     echo '</pre>';  exit();
     if ($VarInserirFichaAvaliacao = 1) {
          $VarConsultaUltimaFicha = $clsAvaliacao->ConsultaUltimaficha($_POST['id']);
          //print_r($VarConsultaUltimaFicha);
          $VarInserirAnaminese = $clsAvaliacao->CadastrarAnaminese($VarConsultaUltimaFicha [0]['id'],$_POST['qprincipal'], $_POST['matual'], $_POST['mprogessa'], $_POST['medicamentos']);
          //exit();
          $VarInserirExameFisico  = $clsAvaliacao->CadastrarExameFisico($_POST['peso'], $_POST['altura'], $_POST['imc'], $_POST['dolorosos'],$_POST['respiratoria'],$_POST['cardiaca'],$_POST['arterial'], $_POST['umbigo'],$_POST['abaixo'],$_POST['cima'],$_POST['temperatura'], $VarConsultaUltimaFicha [0]['id']);
        // exit();
          $VarInserirMovimentacao = $clsAvaliacao->CadastrarMovimentacao($VarConsultaUltimaFicha [0]['id'],$_POST['localruido'],$_POST['localrepouso'],$_POST['repouso'],$_POST['movimento'],$_POST['ruido'],$_POST['lmovimento']);
          $VarInserirPostural = $clsAvaliacao->CadastrarPostura($VarConsultaUltimaFicha [0]['id'], $_POST['descpostural']);
          $VarInserirObjetivos = $clsAvaliacao->CadastrarObjetivos($VarConsultaUltimaFicha [0]['id'],$_POST['descfisio']);
               }
   //  exit();
     echo '<script>alert("Avaliação Salvo com Sucesso");</script>';
     echo "<script type='text/javascript'>window.location='?pagina=avaliacao'; </script>";
}
?>


<?php
if ($_GET['acao'] == 'editar') {
     $VarEditarFichaAvaliacao = $clsAvaliacao->EditarAvaliacao($_POST['professor'], $_POST['datepicker'], $_POST['alunos'], $_GET['id']);
    // echo '<pre>';     print_r($VarInserirFichaAvaliacao);     echo '</pre>';  exit();
     if ($VarEditarFichaAvaliacao = 1) {
          $VarConsultaUltimaFicha = $clsAvaliacao->ConsultaUltimaficha($_POST['id']);
          //print_r($VarConsultaUltimaFicha);
          $VarInserirAnaminese = $clsAvaliacao->EditarAnaminese($_POST['qprincipal'], $_POST['matual'], $_POST['mprogessa'], $_POST['medicamentos'],$_GET['id'], $VarConsultaUltimaFicha [0]['id']);
          //exit();
          $VarInserirExameFisico  = $clsAvaliacao->EditarExameFisico($_POST['peso'], $_POST['altura'], $_POST['imc'], $_POST['dolorosos'],$_POST['respiratoria'],$_POST['cardiaca'],$_POST['arterial'], $_POST['umbigo'],$_POST['abaixo'],$_POST['cima'],$_POST['temperatura'],  $_GET['id'],$VarConsultaUltimaFicha [0]['id']);
        // exit();
          $VarInserirMovimentacao = $clsAvaliacao->EditarMovimentacao($_GET['id'],$_POST['localruido'],$_POST['localrepouso'],$_POST['repouso'],$_POST['movimento'],$_POST['ruido'],$_POST['lmovimento'],$VarConsultaUltimaFicha [0]['id']);
          
          $VarInserirPostural = $clsAvaliacao->EditarPostura($_GET['id'], $_POST['descpostural'],$VarConsultaUltimaFicha [0]['id']);
         
          $VarInserirObjetivos = $clsAvaliacao->EditarObjetivos($_GET['id'],$_POST['descfisio'],$VarConsultaUltimaFicha [0]['id']);
               }
     //exit();
     echo '<script>alert("Avaliação Alterado com Sucesso");</script>';
     echo "<script type='text/javascript'>window.location='?pagina=avaliacao'; </script>";
}
?>









































<?php

if ($_GET['acao'] == 'editar') {
     $VarEditarAlunos = $clsAlunos->AlterarAlunos($_GET['id'], $_POST['nome'], $_POST['datepicker'], $_POST['estado_civil'], $_POST['cpf'], $_POST['rg'], $_POST['fixo'], $_POST['celular'], $_POST['endereco'], $_POST['bairro'], $_POST['estado'], $_POST['cidade'], $_POST['cep'], $_POST['numero'], $_POST['atual'], $_POST['anterior'], $_POST['legal'], $_POST['observacao'], $_POST['professor']);
     //exit();
     echo '<script>alert("Aluno Alterado com Sucesso");</script>';
     echo "<script type='text/javascript'>window.location='?pagina=alunos'; </script>";
}
?>
<?php

if ($_GET['acao'] == 'excluir') {
     $VarExcluirAlunos = $clsAlunos->ExcluirAlunos($_GET['id']);
}
if ($VarExcluirAlunos == 1) {
     ?>    
     <script type="text/javascript">
          alert("Exclusão Efetuada com Sucesso!");
          document.location.href = '?pagina=alunos';
     </script>

     <?php

}
?> 