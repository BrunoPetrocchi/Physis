

<?php

if ($_GET['acao'] == 'cadastrar') {
     $VarInserirPatrimonio = $clsPatrimonio->CadastrarPatrimonio($_POST['nome'], $_POST['quantidade'], $_POST['valor'], $_POST['datepicker'], $_POST['professor']);
     //echo '<pre>';     print_r($VarInserirAlunos);     echo '</pre>';
    //exit();
     echo '<script>alert("Patrimonio Salvo com Sucesso");</script>';
     echo "<script type='text/javascript'>window.location='?pagina=patrimonio'; </script>";
}
?>

<?php

if ($_GET['acao'] == 'editar') {
     $VarEditarPatrimonio = $clsPatrimonio->AlterarPatrimonio($_GET['id'], $_POST['nome'], $_POST['datepicker'], $_POST['quantidade'], $_POST['valor'], $_POST['professor']);
     //print_r($VarEditarPatrimonio); 
     //exit();
     echo '<script>alert("Patrimonio Alterado com Sucesso");</script>';
     echo "<script type='text/javascript'>window.location='?pagina=patrimonio'; </script>";
}
?>
<?php

if ($_GET['acao'] == 'excluir') {
     $VarExcluirPatrimonio = $clsPatrimonio->ExcluirPatrimonio($_GET['id']);
}
if ($VarExcluirPatrimonio == 1) {
     ?>    
     <script type="text/javascript">
          alert("Exclusão Efetuada com Sucesso!");
          document.location.href = '?pagina=patrimonio';
     </script>

     <?php

}
?> 