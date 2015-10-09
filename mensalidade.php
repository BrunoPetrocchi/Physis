<?php
$VarListaMensalidade = $clsMensalidade->ConsultarMensalidade();
?>
<h2><strong>Mensalidade</strong></h2>
<a href="?pagina=cadastrar_mensalidade"><input type="submit" value="Cadastrar" class="btncadastrar" style="float:right" /></a>
<br/><br/>
<form method="post" name="exibirmensalidade" id="exibirmensalidade">
    <!-- <input type="text" class="form-control" placeholder="Consultar Fisioterapeuta" id="pesquisar" name="pesquisar">
     <br/>-->
     <table width="100%"  border="1" bordercolor="#CCCCCC" style="border-collapse:collapse;" cellpadding="0" cellspacing="0" id="tbl_relatorio" >
          <thead>
               <tr>
                    <th>Código</th>
                    <th>Aluno</th>
                    <th>Professor</th>
                    <th>Data Vencimento</th>
                    <th>Opção</th>
               </tr>
          </thead>
          <?php
          for ($i = 0; $i < count($VarListaMensalidade); $i++) {
               ?>
               <tbody border="solid 1px" bordercolor="#FFFFFF">
                    <tr>
                         <td><?php echo $VarListaMensalidade [$i]['codigo_mensalidade']; ?></td>
                         <td><?php echo $VarListaMensalidade [$i]['Aluno']; ?></td>
                         <td><?php echo $VarListaMensalidade [$i]['Professor']; ?></td>
                         <td><?php echo $VarListaMensalidade [$i]['data_vencimento']; ?></td>
                         <td><a href="#" onclick="javascript:confirmar(<?= $VarListaMensalidade[$i]['codigo_mensalidade']; ?>)" title="Apagar" ><img src="img/apagar.png" /></a>

                         </td>
                    </tr>
               </tbody>

               <?php
          }
          ?>

     </table>
     <br/>
     Total de <strong><?php echo count($VarListaMensalidade); ?></strong> Alunos Ativos.
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
