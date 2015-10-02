<?php
$VarListaPresenca = $clsPresenca->ConsultarPresenca();
?>
<h2><strong>Controle de Presença</strong></h2>
<a href="?pagina=cadastrar_presenca"><input type="submit" value="Cadastrar" class="btncadastrar" style="float:right" /></a>
<br/><br/>
<form method="post" name="consultarpresenca" id="consultarpresenca">
    <!-- <input type="text" class="form-control" placeholder="Consultar Fisioterapeuta" id="pesquisar" name="pesquisar">
     <br/>-->
     <table width="100%"  border="1" bordercolor="#CCCCCC" style="border-collapse:collapse;" cellpadding="0" cellspacing="0" id="tbl_relatorio" >
          <thead>
               <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Data da Presença</th>
                    <th>Opções</th>
               </tr>
          </thead>
          <?php
          for ($i = 0; $i < count($VarListaPresenca); $i++) {
               ?>
               <tbody border="solid 1px" bordercolor="#FFFFFF">
                    <tr>
                         <td style="text-align: right">
                         <?php echo $VarListaPresenca [$i]['codigo_presenca']; ?></td>
                         <td><?php echo $VarListaPresenca [$i]['nome']; ?></td>
                         <td style="text-align: center">
                         <?php echo $VarListaPresenca [$i]['data_entrada']; ?></td>
                         <td><a href="#" onclick="javascript:confirmar(<?= $VarListaPresenca[$i]['codigo_presenca']; ?>)" title="Apagar" ><img src="img/apagar.png" /></a>

                              <a href="?pagina=editar_presenca&id=<?php echo $VarListaPresenca[$i]['codigo_presenca']; ?>"  title="Visualizar"><img src="img/visualizar.png" /></a>

                         </td>
                    </tr>
               </tbody>

               <?php
          }
          ?>

     </table>
     <br/>
     Total de <strong><?php echo count($VarListaPresenca); ?></strong> Presenças Ativas.
     <br/>
</form>
<script type="text/javascript">
     function confirmar(codigo_presenca) { // pode ser qualquer nome
          if (confirm("Deseja Realmente Excluir?")) {
               window.location = "?pagina=acaopresenca&acao=excluir&id=" + codigo_presenca; // pode ser qualquer nome
               return true;
          } else {
               return false;
          }
     }
</script>
