<h2><strong>Cadastrar Mensalidade</strong></h2>
<a href="?pagina=mensalidade"><input type="submit" value="Voltar" class="btncadastrar" id="btnvoltar" style="float:right" /></a>
<br/> <br/>

<script type="text/javascript" src="js/scripts.js"></script>

<form method="post" class="form-horizontal" name="frmmensalidade" id="frmmensalidade" action="?pagina=acaomensalidade&acao=cadastrar">
     <div class="row">
          <div class="col-md-2">
               <label for="codigo">C&oacute;digo</label>
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
                              <?php echo $VarConsultaAluno [$i]['aluno']; ?>
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
               <label for="mensalidade">Valor Mensalidade</label>
               <input type="text" class="form-control" id="mensalidade" name="mensalidade" placeholder="Informe o valor da mensalidade">
          </div>
          <div class="col-md-4">
               <label for="parcela">Parcela</label>
               <input type="text" class="form-control" id="parcela" name="parcela" placeholder="Informe a parcela">
          </div>
          <div class="col-md-4">
               <label for="datepicker">Data Vencimento</label>
               <input type="text" class="form-control" id="datepicker" name="datepicker" placeholder="Informe a data do vencimento">
          </div>

     </div>
     <br/>
     <div class="row">

          <div class="col-md-4">
               <label for="pagamento">Pagamento</label>
               <select class="form-control" name="pagamento" id="pagamento" value="Selecione">
                    <option value="">Selecione</option>
                    <option value="1">Pago</option>
                    <option value="2">Pendente</option>
               </select>
          </div>
          
               <div class="col-md-4">
                    <label for="datepicker1">Data Pagamento</label>
                    <input type="text" class="form-control" id="datepicker1" name="datepicker1" placeholder="Informe a data do pagamento">
               </div>            
                 

          <div class="col-md-4">
               <label for="professor">Professor</label>
               <select class="form-control" id="professor" name="professor">
                    <option value="">Selecione</option>
                    <?php
                    $VarConsultaProfessor = $clsProfessor->ConsultarProfessor();
                    for ($i = 0; $i < count($VarConsultaProfessor); $i++) {
                         ?>
                         <option value="<?php echo $VarConsultaProfessor [$i]['codigo_professor']; ?>">
                              <?php echo $VarConsultaProfessor [$i]['nome']; ?>
                         </option>
                         <?php
                    }
                    ?>
               </select>
          </div>
     </div>
     <br/>
     <div id="botoes" >
          <div class="col-md-4">
               <input type="submit"  class="btn btn-success" id="btnsalvar" name="salvar" value="Salvar"/>              
          </div>


     </div>

</form>