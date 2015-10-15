<?php
$VarRelProfessor = $clsProfessor->RelProfessor();
?>
<h2><strong>Relatório de Professores</strong></h2>
<a href="?pagina=cadastrar_alunos"><input type="submit" value="Cadastrar" class="btncadastrar" style="float:right" /></a>
<br/><br/>
<form method="post" name="consultaraluno" id="consultarfisio">
    <!-- <input type="text" class="form-control" placeholder="Consultar Fisioterapeuta" id="pesquisar" name="pesquisar">
     <br/>-->
     <table width="100%"  border="1" bordercolor="#CCCCCC" style="border-collapse:collapse;" cellpadding="0" cellspacing="0" id="tbl_relatorio" >
          <thead>
               <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Tel. Celular</th>
                    <th>Endereço</th>
                    <th>Bairro</th>
                    <th>Crefito</th>
               </tr>
          </thead>
          <?php
          for ($i = 0; $i < count($VarRelProfessor); $i++) {
               ?>
               <tbody border="solid 1px" bordercolor="#FFFFFF">
                    <tr>
                         <td><?php echo $VarRelProfessor [$i]['codigo_professor']; ?></td>
                         <td><?php echo $VarRelProfessor [$i]['nome']; ?></td>
                         <td><?php echo $VarRelProfessor [$i]['telefone_celular']; ?></td>
                         <td><?php echo $VarRelProfessor [$i]['endereco']; ?></td>
                         <td><?php echo $VarRelProfessor [$i]['bairro']; ?></td>
                         <td><?php echo $VarRelProfessor [$i]['crefito']; ?></td>
                        
                    </tr>
               </tbody>

               <?php
          }
          ?>

     </table>
     <br/>
     Total de <strong><?php echo count($VarRelProfessor); ?></strong> Professores.
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
