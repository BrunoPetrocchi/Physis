<?php
$VarRelPatrimonio = $clsPatrimonio->RelPatrimonio();
?>
<h2><strong>Relatório de Patrimônio</strong></h2>
<p> <a href="./relpatrimoniopdf.php" target="_blank">[Gerar PDF]</a></p>
<form method="post" name="consultaraluno" id="consultarfisio">
    <!-- <input type="text" class="form-control" placeholder="Consultar Fisioterapeuta" id="pesquisar" name="pesquisar">
     <br/>-->
     <table width="100%"  border="1" bordercolor="#CCCCCC" style="border-collapse:collapse;" cellpadding="0" cellspacing="0" id="tbl_relatorio" >
          <thead>
               <tr>
                    <th>Código</th>
                    <th>Nome do Material</th>
                    <th>Data Aquis.</th>
                    <th>Quantidade</th>
                    <th>Valor</th>
                    <th>Professor</th>
               </tr>
          </thead>
          <?php
          for ($i = 0; $i < count($VarRelPatrimonio); $i++) {
               ?>
               <tbody border="solid 1px" bordercolor="#FFFFFF">
                    <tr>
                         <td><?php echo $VarRelPatrimonio [$i]['codigo_patrimonio']; ?></td>
                         <td><?php echo $VarRelPatrimonio [$i]['descricao']; ?></td>
                         <td><?php echo $VarRelPatrimonio [$i]['data']; ?></td>
                         <td><?php echo $VarRelPatrimonio [$i]['quantidade']; ?></td>
                         <td><?php echo $VarRelPatrimonio [$i]['valor']; ?></td>
                         <td><?php echo $VarRelPatrimonio [$i]['nome']; ?></td>
                        
                    </tr>
               </tbody>

               <?php
          }
          ?>

     </table>
     <br/>
     Total de <strong><?php echo count($VarRelPatrimonio); ?></strong> Professores.
     <br/>
</form>
<script type="text/javascript">
     function confirmar(codigo_paciente) { // pode ser qualquer nome
          if (confirm("Deseja Realmente Excluir?")) {
               window.location = "?pagina=acaoalunos&acao=excluir&id=" + codigo_paciente; // pode ser qualquer nome
               return true;
          } else {
               return false;
          }
     }
</script>
