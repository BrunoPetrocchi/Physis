
<?php
     $VarEditarPresenca=$clsPresenca->ConsultarPresencaId($_GET['id']);
?>
<h2><strong>Editar Presença</strong></h2>
<a href="?pagina=presenca"><input type="submit" value="Voltar" class="btncadastrar" id="btnvoltar" style="float:right" /></a>
<br/> <br/>

<script type="text/javascript" src="js/scripts.js"></script>

<form method="post" class="form-horizontal" name="editarpresenca" id="editarpresenca" action="?pagina=acaopresenca&acao=editar&id=<?php echo $VarEditarPresenca [0]['codigo_presenca']  ?>">
     <div class="row">
          <div class="col-md-2">
               <label for="codigo">C&oacute;digo</label>
               <input type="text" class="form-control" id="codigo" name="codigo" value="<?php echo $VarEditarPresenca [0]['codigo_presenca']  ?>" readonly>
          </div>
          <div class="col-md-10">
               <label for="nome">Nome Aluno</label>
               <select class="form-control" id="aluno" name="aluno">
                    <option value="">Selecione</option>
                    <?php
                    $VarListaPresenca = $clsPresenca->ConsultaPacientePresenca();
                    for ($i = 0; $i < count($VarListaPresenca); $i++) {
                         ?>
                         <option value="<?php echo $VarListaPresenca [$i]['codigo_paciente']; ?>"<?php echo $VarListaPresenca [$i]['codigo_paciente'] == $VarEditarPresenca [0]['codigo_paciente'] ? 'selected="selected"' : '' ?>>
                              <?php echo $VarListaPresenca [$i]['nome']; ?>
                         </option>
                         <?php
                    }
                    ?>
               </select>
          </div>
     </div>
     <br/>     
     <div class="row">
          <div class="col-md-4">
               <label for="datepicker">Data da Presença</label>
               <input type="text" class="form-control" id="datepicker" name="datepicker" value="<?php echo $VarEditarPresenca [0]['data_entrada'];  ?>">
          </div>   
           <div class="col-md-4">
               <label for="datepicker">Hora da Entrada</label>
               <input type="text" class="form-control" id="entrada" name="entrada" value="<?php echo $VarEditarPresenca [0]['hentrada'] ; ?>">
          </div>  
          <div class="col-md-4">
               <label for="datepicker">Hora da Saida</label>
               <input type="text" class="form-control" id="saida" name="saida" value="<?php echo $VarEditarPresenca [0]['hsaida'] ; ?>">
          </div> 
     </div>     
     <br/>
     <div id="botoes" >
          <div class="col-md-4">
               <input type="submit"  class="btn btn-success" id="btnsalvar" name="salvar" value="Salvar"/>              
          </div>


     </div>

</form>