<?php
$VarListaPatrimonio = $clsPatrimonio->ConsultaPatrimonio();

?>
<h2><strong>Patrimônio</strong></h2>
<a href="?pagina=cadastrar_patrimonio"><input type="submit" value="Cadastrar" class="btncadastrar" style="float:right" /></a>
<br/><br/>
<form method="post" name="consultarpatrimonio" id="consultarpatrimonio">
    <!-- <input type="text" class="form-control" placeholder="Consultar Fisioterapeuta" id="pesquisar" name="pesquisar">
     <br/>-->
     <table width="100%"  border="1" bordercolor="#CCCCCC" style="border-collapse:collapse;" cellpadding="0" cellspacing="0" id="tbl_relatorio" >
          <thead>
               <tr>
                    <th>Código</th>
                    <th>Aparelho</th>
                    <th>Quantidade</th>
                    <th>Opção</th>
               </tr>
          </thead>
          <?php
          for ($i = 0; $i < count($VarListaPatrimonio); $i++) {
               ?>
               <tbody border="solid 1px" bordercolor="#FFFFFF">
                    <tr>
                         <td><?php echo $VarListaPatrimonio [$i]['codigo_patrimonio']; ?></td>
                         <td><?php echo $VarListaPatrimonio [$i]['descricao']; ?></td>
                         <td><?php echo $VarListaPatrimonio [$i]['quantidade']; ?></td>
                         <td><a href="#" onclick="javascript:confirmar(<?= $VarListaPatrimonio[$i]['codigo_patrimonio']; ?>)" title="Apagar" ><img src="img/apagar.png" /></a>

                              <a href="?pagina=editar_patrimonio&id=<?php echo $VarListaPatrimonio[$i]['codigo_patrimonio']; ?>"  title="Visualizar"><img src="img/visualizar.png" /></a>

                         </td>
                    </tr>
               </tbody>

               <?php
          }
          ?>

     </table>
     <br/>
     Total de <strong><?php echo count($VarListaPatrimonio); ?></strong> Patrimônios Ativos.
     <br/>
</form>
<script type="text/javascript">
     function confirmar(codigo_patrimonio) { // pode ser qualquer nome
          if (confirm("Deseja Realmente Excluir?")) {
               window.location = "?pagina=acaopatrimonio&acao=excluir&id=" + codigo_patrimonio; // pode ser qualquer nome
               return true;
          } else {
               return false;
          }
     }
</script>
