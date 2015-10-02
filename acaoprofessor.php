

<?php

if ($_GET['acao'] == 'cadastrar') {
     $VarProfessor = $clsProfessor->CadastrarProfessor($_POST['nome'], $_POST['endereco'], $_POST['numero'], $_POST['bairro'], $_POST['cidade'], $_POST['estado'], $_POST['cep'], $_POST['cpf'], $_POST['rg'], $_POST['datepicker'], $_POST['fixo'], $_POST['celular'], $_POST['email'], $_POST['crefito'], $_POST['banco'], $_POST['permissao'], $_POST['observacao']);
     //exit();
     echo '<script>alert("Professor Salvo com Sucesso");</script>';
     echo "<script type='text/javascript'>window.location='?pagina=professor'; </script>";
}
?>

<?php

if ($_GET['acao'] == 'editar') {
     $VarEditarProfessor = $clsProfessor->EditarProfessor($_GET['id'], $_POST['nome'], $_POST['endereco'], $_POST['numero'], $_POST['bairro'], $_POST['cidade'], $_POST['estado'], $_POST['cep'], $_POST['cpf'], $_POST['rg'], $_POST['datepicker'], $_POST['fixo'], $_POST['celular'], $_POST['email'], $_POST['crefito'], $_POST['banco'], $_POST['codigo_permissao'], $_POST['observacao'],$_POST['status']);
     //exit();
     echo '<script>alert("Professor Alterado com Sucesso");</script>';
     echo "<script type='text/javascript'>window.location='?pagina=professor'; </script>";
}
?>
<?php

if ($_GET['acao'] == 'excluir') {
     $VarExcluirProfessor = $clsProfessor->ExcluirProfessor($_GET['id']);
}
if ($VarExcluirProfessor == 1) {
     ?>    
     <script type="text/javascript">
          alert("Exclusão Efetuada com Sucesso!");
          document.location.href = '?pagina=professor';
     </script>

     <?php

}
?> 