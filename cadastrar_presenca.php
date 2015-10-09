<h2><strong>Cadastrar Presença</strong></h2>
<a href="?pagina=alunos"><input type="submit" value="Voltar" class="btncadastrar" id="btnvoltar" style="float:right" /></a>
<br/> <br/>

<script type="text/javascript" src="js/scripts.js"></script>

<form method="post" class="form-horizontal" name="cadalunos" id="cadalunos" action="?pagina=acaopresenca&acao=cadastrar">
     <div class="row">
          <div class="col-md-2">
               <label for="codigo">Código</label>
               <input type="text" class="form-control" id="codigo" name="codigo" placeholder="0" readonly>
          </div>
           <div class="col-md-10">
               <label for="alunos">Aluno</label>
              <select class="form-control" id="alunos" name="alunos">
                    <option value="">Selecione</option>
                    <?php
                    $VarConsultaAluno = $clsAlunos->ConsultarAlunos();
                    for ($i = 0; $i < count($VarConsultaAluno); $i++) {
                         ?>
                         <option value="<?php echo $VarConsultaAluno [$i]['codigo_paciente']; ?>">
                              <?php echo $VarConsultaAluno [$i]['nome']; ?>
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