<?php
     $VarRellog = $clsLog->RelLog();
?>
<h2><strong>Relatório de Log</strong></h2>
<!-- Chama o PDF -->
<p> <a href="./rellogpdf.php" target="_blank">[Gerar PDF]</a></p>
<!-- Chama o PDF -->
<form method="post" name="consultaraluno" id="consultarfisio">
    <!-- <input type="text" class="form-control" placeholder="Consultar Fisioterapeuta" id="pesquisar" name="pesquisar">
     <br/>-->
     <table width="100%"  border="1" bordercolor="#CCCCCC" style="border-collapse:collapse;" cellpadding="0" cellspacing="0" id="tbl_relatorio" >
          <thead>
               <tr>
                    <th>Professor</th>
                    <th>Mensalidade</th>
                    <th>Data Alteração</th>
                    <th>Aluno</th>
                    <th>Apagado</th>
                    <th>Usuário</th>
               </tr>
          </thead>
          <?php
          for ($i = 0; $i < count($VarRellog); $i++) {
               ?>
               <tbody border="solid 1px" bordercolor="#FFFFFF">
                    <tr>
                         <td><?php echo $VarRellog [$i]['PROFESSOR']; ?></td>
                         <td><?php echo $VarRellog [$i]['codigo_mensalidade']; ?></td>
                         <td><?php echo date('d/m/Y - h:i:s ' , $VarRellog [$i]['data_alteracao']); ?></td>
                         <td><?php echo $VarRellog [$i]['ALUNO']; ?></td>
                         <td><?php echo $VarRellog [$i]['regapagado']; ?></td>
                         <td><?php echo $VarRellog [$i]['regusuario']; ?></td>
                        
                    </tr>
               </tbody>

               <?php
          }
          ?>

     </table>
     <br/>
     Total de <strong><?php echo count($VarRellog); ?></strong> Alunos.
     <br/>
</form>
