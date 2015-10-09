

<?php

if ($_GET['acao'] == 'cadastrar') {
     $VarInserirAlunos = $clsAlunos->CadastrarAlunos($_POST['alunos'], $_POST['professor'], $_POST['datepicker']);
     //echo '<pre>';     print_r($VarInserirAlunos);     echo '</pre>';
    // exit();
     echo '<script>alert("Avaliação Salvo com Sucesso");</script>';
     echo "<script type='text/javascript'>window.location='?pagina=alunos'; </script>";
}
?>









































<?php

if ($_GET['acao'] == 'editar') {
     $VarEditarAlunos = $clsAlunos->AlterarAlunos($_GET['id'], $_POST['nome'], $_POST['datepicker'], $_POST['estado_civil'], $_POST['cpf'], $_POST['rg'], $_POST['fixo'], $_POST['celular'], $_POST['endereco'], $_POST['bairro'], $_POST['estado'], $_POST['cidade'],$_POST['cep'], $_POST['numero'], $_POST['atual'], $_POST['anterior'], $_POST['legal'], $_POST['observacao'],$_POST['professor']);
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