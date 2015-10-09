
<?php

if ($_GET['acao'] == 'cadastrar') {
     $VarInserirMensalidade = $clsMensalidade->CadastrarMensalidade($_POST['professor'],$_POST['mensalidade'], $_POST['alunos'], $_POST['pagamento'], $_POST['parcela'], $_POST['datepicker1'], $_POST['datepicker']);
     //echo '<pre>';     print_r($VarInserirAlunos);     echo '</pre>';
    // exit();
     echo '<script>alert("Mensalidade Salvo com Sucesso");</script>';
     echo "<script type='text/javascript'>window.location='?pagina=mensalidade'; </script>";
}
?>

<?php

if ($_GET['acao'] == 'editar') {
      $VarEditarMensalidade = $clsMensalidade->EditaMensalidade($_GET['id'], $_POST['professor'], $_POST['mensalidade'], $_POST['alunos'], $_POST['pagamento'], $_POST['parcela'], $_POST['datepicker1'], $_POST['datepicker']);
     //echo '<pre>';     print_r($VarEditarMensalidade);     echo '</pre>';
     //exit();
     echo '<script>alert("Mensalidade Alterada com Sucesso");</script>';
     echo "<script type='text/javascript'>window.location='?pagina=mensalidade'; </script>";
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
          document.location.href = '?pagina=mensalidade';
     </script>

     <?php

}
?> 