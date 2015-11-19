
<?php

if ($_GET['acao'] == 'cadastrar') {
     $VarInserirMensalidade = $clsMensalidade->CadastrarMensalidade($_POST['professor'],$_POST['mensalidade'], $_POST['alunos'], $_POST['pagamento'], $_POST['parcela'], $_POST['datepicker1'], $_POST['datepicker']);
     if($VarInserirMensalidade == 1){
          $VarConsultaUltimaMensalidade = $clsMensalidade->ConsultaUltimaMensalidade($_POST['id']);
          $VarConsultaMensalidadeLog = $clsLog->InserirLog($_POST['professor'],$VarConsultaUltimaMensalidade[0]['id'],$_POST['data'],$_POST['alunos'],$_POST['mensalidade'],'N',$_SESSION['nome']);
         // echo '<pre>';     print_r($VarConsultaMensalidadeLog);     echo '</pre>';
         /// exit();
     }
     echo '<script>alert("Mensalidade Salvo com Sucesso");</script>';
     echo "<script type='text/javascript'>window.location='?pagina=mensalidade'; </script>";
}
?>

<?php
$VarListaMensalidade = $clsMensalidade->ConsultarMensalidade();

if ($_GET['acao'] == 'excluir') {
     $VarExcluirMensalidade = $clsMensalidade->ExcluirMensalidade($_GET['id']);
     if ($VarExcluirMensalidade == 1) {
          $ConsultaUltimoLogApagado = $clsLog->ConsultaUltimoLogApagado($_POST['id'],$_GET['codigo_professor'],$_GET['data_alteracao'],$_GET['codigo_paciente']);
          $VarInserirMensalidadeLog = $clsLog->InserirLog($VarListaMensalidade[0]['codigo_professor'],$VarListaMensalidade[0]['codigo_mensalidade'],$ConsultaUltimoLogApagado[0]['data_alteracao'],$VarListaMensalidade[0]['codigo_paciente'],'0','S',$_SESSION['nome']);
           //echo '<pre>';     print_r($ConsultaUltimoLogApagado);     echo '</pre>';
          // print_r($_SESSION);
          exit();
       }

     ?>    
     <script type="text/javascript">
          alert("Exclusão Efetuada com Sucesso!");
          document.location.href = '?pagina=mensalidade';
     </script>

     <?php
   
}
?> 