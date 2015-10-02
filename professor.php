<script language="javascript">
     $(document).ready(function () {
          $("#pesquisar").keyup(function () {
               if ($(this).val().length >= 3) {
                    if ($(this).val().length != "") {
                         $("#tbl_relatorio tbody>tr").hide();
                         $("#tbl_relatorio td:contains-ci('" + $(this).val() + "')").parent("tr").show();
                    } else {
                         $("#tbl_relatorio tbody>tr").show();
                    }
               } else {
                    $("#tbl_relatorio tbody>tr").show();
               }
          });
     });
     $.extend($.expr[":"], {
          "contains-ci": function (elem, i, match, array) {
               return (elem.textContent || elem.innerText || $(elem).text() || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
          }
     });
</script>

<?php
$VarListaProfessor = $clsProfessor->ConsultarProfessor();
?>
<h2><strong>Fisioterapeutas</strong></h2>
<a href="?pagina=cadastrar_professor"><input type="submit" value="Cadastrar" class="btncadastrar" style="float:right" /></a>
<br/><br/>
<form method="post" name="consultarfisio" id="consultarfisio">
    <!-- <input type="text" class="form-control" placeholder="Consultar Fisioterapeuta" id="pesquisar" name="pesquisar">
     <br/>-->
     <table width="100%"  border="1" bordercolor="#CCCCCC" style="border-collapse:collapse;" cellpadding="0" cellspacing="0" id="tbl_relatorio" >
          <thead>
               <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Crefito</th>
                    <th>Opção</th>
               </tr>
          </thead>
          <?php
          for ($i = 0; $i < count($VarListaProfessor); $i++) {
               ?>
               <tbody border="solid 1px" bordercolor="#FFFFFF">
                    <tr>
                         <td><?php echo $VarListaProfessor [$i]['codigo_professor']; ?></td>
                         <td><?php echo $VarListaProfessor [$i]['nome']; ?></td>
                         <td><?php echo $VarListaProfessor [$i]['cpf']; ?></td>
                         <td><?php echo $VarListaProfessor [$i]['crefito']; ?></td>
                         <td><a href="#" onclick="javascript:confirmar(<?= $VarListaProfessor[$i]['codigo_professor']; ?>)" title="Apagar" ><img src="img/apagar.png" /></a>

                              <a href="?pagina=editar_professor&id=<?php echo $VarListaProfessor[$i]['codigo_professor']; ?>"  title="Visualizar"><img src="img/visualizar.png" /></a>
                              <?php
                              if ($VarListaProfessor [$i]['status'] == 1) {
                                   ?>
                                   <a  id="inativo" title="Fisioterapeuta Inativo"><img src="img/Inativar.png" /></a>
                                        <?php
                                   }
                                   ?>

                         </td>
                    </tr>
               </tbody>

               <?php
          }
          ?>

     </table>
     <br/>
     Total de <strong><?php echo count($VarListaProfessor); ?></strong> Fisioterapeutas Ativos.
     <br/>
</form>
<script type="text/javascript">
     function confirmar(codigo_professor) { // pode ser qualquer nome
          if (confirm("Deseja Realmente Excluir?")) {
               window.location = "?pagina=acaoprofessor&acao=excluir&id=" + codigo_professor; // pode ser qualquer nome
               return true;
          } else {
               return false;
          }
     }
</script>
