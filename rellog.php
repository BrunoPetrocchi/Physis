<?php
$VarRelAlunos = $clsAlunos->RelAlunos();
?>
<h2><strong>Log de Mensalidade</strong></h2>
<form method="post" name="consultaraluno" id="consultarfisio">
    <!-- <input type="text" class="form-control" placeholder="Consultar Fisioterapeuta" id="pesquisar" name="pesquisar">
     <br/>-->
     <table width="100%"  border="1" bordercolor="#CCCCCC" style="border-collapse:collapse;" cellpadding="0" cellspacing="0" id="tbl_relatorio" >
          <thead>
               <tr>
                    <th>Código Mensalidade</th>
                    <th>Usuário Cad.</th>
                    <th>Data Cad.</th>
                    <th>Usuario Exclusão</th>
                    <th>Data Exclusão</th>
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
                        
                    </tr>
               </tbody>

               <?php
          }
          ?>

     </table>
     <br/>
     Total de <strong><?php echo count($VarRelAlunos); ?></strong> Registros.
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
