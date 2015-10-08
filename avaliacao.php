<?php
$VarListaAlunos = $clsAlunos->ConsultarAlunos();
?>
<h2><strong>Ficha de Avaliação</strong></h2>
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
                    <th>Opção</th>
               </tr>
          </thead>
          <?php
          for ($i = 0; $i < count($VarListaAlunos); $i++) {
               ?>
               <tbody border="solid 1px" bordercolor="#FFFFFF">
                    <tr>
                         <td><?php echo $VarListaAlunos [$i]['codigo_paciente']; ?></td>
                         <td><?php echo $VarListaAlunos [$i]['nome']; ?></td>
                         <td><?php echo $VarListaAlunos [$i]['cpf']; ?></td>
                         <td><?php echo $VarListaAlunos [$i]['data_nascimento']; ?></td>
                         <td><a href="#" onclick="javascript:confirmar(<?= $VarListaAlunos[$i]['codigo_paciente']; ?>)" title="Apagar" ><img src="img/apagar.png" /></a>

                              <a href="?pagina=editar_alunos&id=<?php echo $VarListaAlunos[$i]['codigo_paciente']; ?>"  title="Visualizar"><img src="img/visualizar.png" /></a>

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
