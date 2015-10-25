<?php
$VarRelAlunos = $clsAlunos->RelAlunos();
?>
<h2><strong>Relatório de Alunos</strong></h2>
<form method="post" name="consultaraluno" id="consultarfisio">
    <!-- <input type="text" class="form-control" placeholder="Consultar Fisioterapeuta" id="pesquisar" name="pesquisar">
     <br/>-->
     <table width="100%"  border="1" bordercolor="#CCCCCC" style="border-collapse:collapse;" cellpadding="0" cellspacing="0" id="tbl_relatorio" >
          <thead>
               <tr>
                    <th>Código</th>
                    <th>Alunos</th>
                    <th>Tel. Celular</th>
                    <th>Endereço</th>
                    <th>Bairro</th>
                    <th>Número</th>
                    <th>Professor</th>
               </tr>
          </thead>
          <?php
          for ($i = 0; $i < count($VarRelAlunos); $i++) {
               ?>
               <tbody border="solid 1px" bordercolor="#FFFFFF">
                    <tr>
                         <td><?php echo $VarRelAlunos [$i]['codigo_paciente']; ?></td>
                         <td><?php echo $VarRelAlunos [$i]['aluno']; ?></td>
                         <td><?php echo $VarRelAlunos [$i]['telefone_celular']; ?></td>
                         <td><?php echo $VarRelAlunos [$i]['endereco']; ?></td>
                         <td><?php echo $VarRelAlunos [$i]['bairro']; ?></td>
                         <td><?php echo $VarRelAlunos [$i]['numero']; ?></td>
                         <td><?php echo $VarRelAlunos [$i]['Nome_Professor']; ?></td>
                        
                    </tr>
               </tbody>

               <?php
          }
          ?>

     </table>
     <br/>
     Total de <strong><?php echo count($VarRelAlunos); ?></strong> Alunos.
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
