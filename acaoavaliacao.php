
<?php

if ($_GET['acao'] == 'cadastrar') {
     $VarInserirFichaAvaliacao = $clsAvaliacao->CadastrarAvaliacao($_POST['alunos'],$_POST['datepicker'], $_POST['professor']);
    // echo '<pre>';     print_r($VarInserirFichaAvaliacao);     echo '</pre>';  exit();
     if ($VarInserirFichaAvaliacao = 1) {
          $VarConsultaUltimaFicha = $clsAvaliacao->ConsultaUltimaficha($_POST['id']);
          //print_r($VarConsultaUltimaFicha);
          $VarInserirAnaminese = $clsAvaliacao->CadastrarAnaminese($_POST['qprincipal'], $_POST['matual'], $_POST['mprogessa'], $_POST['medicamentos'], $VarConsultaUltimaFicha [0]['id']);
          //exit();
          $VarInserirExameFisico  = $clsAvaliacao->CadastrarExameFisico($_POST['peso'], $_POST['altura'], $_POST['imc'], $_POST['dolorosos'],$_POST['respiratoria'],$_POST['cardiaca'],$_POST['arterial'], $_POST['umbigo'],$_POST['abaixo'],$_POST['cima'],$_POST['temperatura'], $VarConsultaUltimaFicha [0]['id']);
        // exit();
          $VarInserirMovimentacao = $clsAvaliacao->CadastrarMovimentacao($VarConsultaUltimaFicha [0]['id'],$_POST['localruido'],$_POST['localrepouso'],$_POST['repouso'],$_POST['movimento'],$_POST['ruido'],$_POST['lmovimento']);
          $VarInserirPostural = $clsAvaliacao->CadastrarPostura($VarConsultaUltimaFicha [0]['id'], $_POST['descpostural']);
          $VarInserirObjetivos = $clsAvaliacao->CadastrarObjetivos($_POST['descfisio'], $VarConsultaUltimaFicha [0]['id']);
          
     }
     exit();
     echo '<script>alert("Avaliação Salvo com Sucesso");</script>';
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