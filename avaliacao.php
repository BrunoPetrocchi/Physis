<?php
$VarListaAvaliacao = $clsAvaliacao->ConsultaAvaliacao();
?>
<h2><strong>Avaliação</strong></h2>
<a href="?pagina=cadastrar_avaliacao"><input type="submit" value="Cadastrar" class="btncadastrar" style="float:right" /></a>
<br/><br/>
<form method="post" name="consultaraluno" id="consultarfisio">
    <!-- <input type="text" class="form-control" placeholder="Consultar Fisioterapeuta" id="pesquisar" name="pesquisar">
     <br/>-->
     <table width="100%"  border="1" bordercolor="#CCCCCC" style="border-collapse:collapse;" cellpadding="0" cellspacing="0" id="tbl_relatorio" >
          <thead>
               <tr>
                    <th>Código</th>
                    <th>Aluno</th>
                    <th>Professor</th>
                    <th>Data Cadastro</th>
                    <th>Opção</th>
               </tr>
          </thead>
          <?php
          for ($i = 0; $i < count($VarListaAvaliacao); $i++) {
               ?>
               <tbody border="solid 1px" bordercolor="#FFFFFF">
                    <tr>
                         <td><?php echo $VarListaAvaliacao [$i]['codigo_fichaavaliacao']; ?></td>
                         <td><?php echo $VarListaAvaliacao [$i]['ALUNO']; ?></td>
                         <td><?php echo $VarListaAvaliacao [$i]['PROFESSOR']; ?></td>
                         <td><?php echo $VarListaAvaliacao [$i]['periodo']; ?></td>
                         <td><a href="#" onclick="javascript:confirmar(<?= $VarListaAvaliacao[$i]['codigo_fichaavaliacao']; ?>)" title="Apagar" ><img src="img/apagar.png" /></a>

                              <a href="?pagina=editar_alunos&id=<?php echo $VarListaAvaliacao[$i]['codigo_fichaavaliacao']; ?>"  title="Visualizar"><img src="img/visualizar.png" /></a>

                         </td>
                    </tr>
               </tbody>

               <?php
          }
          ?>

     </table>
     <br/>
     Total de <strong><?php echo count($VarListaAlunos); ?></strong> Alunos Ativos.
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
