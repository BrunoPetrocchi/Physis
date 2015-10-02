

<?php

if ($_GET['acao'] == 'cadastrar') {
     $VarInserirPresenca = $clsPresenca->CadastrarPresenca($_POST['aluno'], $_POST['datepicker'], $_POST['entrada'], $_POST['saida']);
     //echo '<pre>';     print_r($VarInserirAlunos);     echo '</pre>';
    //exit();
     echo '<script>alert("Alunos Salvo com Sucesso");</script>';
     echo "<script type='text/javascript'>window.location='?pagina=presenca'; </script>";
}
?>

<?php

if ($_GET['acao'] == 'editar') {
     $VarEditarPresenca = $clsPresenca->EditarPresenca($_GET['id'], $_POST['aluno'], $_POST['datepicker'], $_POST['entrada'], $_POST['saida']);
     //exit();
     echo '<script>alert("Presença Alterado com Sucesso");</script>';
     echo "<script type='text/javascript'>window.location='?pagina=presenca'; </script>";
}
?>
<?php

if ($_GET['acao'] == 'excluir') {
     $VarExcluirPresenca = $clsPresenca->ApagarPresenca($_GET['id']);
}
if ($VarExcluirPresenca == 1) {
     ?>    
     <script type="text/javascript">
          alert("Exclusão Efetuada com Sucesso!");
          document.location.href = '?pagina=presenca';
     </script>

     <?php

}
?> 