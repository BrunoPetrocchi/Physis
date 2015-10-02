<h2><strong>Cadastrar Presença</strong></h2>
<a href="?pagina=alunos"><input type="submit" value="Voltar" class="btncadastrar" id="btnvoltar" style="float:right" /></a>
<br/> <br/>

<script type="text/javascript" src="js/scripts.js"></script>

<form method="post" class="form-horizontal" name="cadalunos" id="cadalunos" action="?pagina=acaopresenca&acao=cadastrar">
     <div class="row">
          <div class="col-md-2">
               <label for="codigo">C&oacute;digo</label>
               <input type="text" class="form-control" id="codigo" name="codigo" placeholder="0" readonly>
          </div>
          <div class="col-md-10">
               <label for="nome">Nome Aluno</label>
               <select class="form-control" id="aluno" name="aluno">
                    <option value="">Selecione</option>
                    <?php
                    $VarListaPresenca = $clsPresenca->ConsultaProfessorPresenca();
                    for ($i = 0; $i < count($VarListaPresenca); $i++) {
                         ?>
                         <option value="<?php echo $VarListaPresenca [$i]['codigo_paciente']; ?>">
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
               <input type="text" class="form-control" id="datepicker" name="datepicker" placeholder="Informe a Data da Presença">
          </div>   
           <div class="col-md-4">
               <label for="datepicker">Hora da Entrada</label>
               <input type="text" class="form-control" id="entrada" name="entrada" placeholder="Informe a hora da entrada">
          </div>  
          <div class="col-md-4">
               <label for="datepicker">Hora da Saida</label>
               <input type="text" class="form-control" id="saida" name="saida" placeholder="Informe a hora da saida">
          </div> 
     </div>     
     <br/>
     <div id="botoes" >
          <div class="col-md-4">
               <input type="submit"  class="btn btn-success" id="btnsalvar" name="salvar" value="Salvar"/>              
          </div>


     </div>

</form>