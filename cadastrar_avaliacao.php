<h2><strong>Cadastrar Avaliação</strong></h2>
<a href="?pagina=avaliacao"><input type="submit" value="Voltar" class="btncadastrar" id="btnvoltar" style="float:right" /></a>
<br/> <br/>

<script type="text/javascript" src="js/scripts.js"></script>

<form method="post" class="form-horizontal" name="cadalunos" id="cadalunos" action="?pagina=acaoalunos&acao=cadastrar">
     <div class="row">
          <div class="col-md-2">
               <label for="codigo">C&oacute;digo</label>
               <input type="text" class="form-control" id="codigo" name="codigo" placeholder="0" readonly>
          </div>
          <div class="col-md-10">
               <label for="alunos">Alunos</label>
               <select class="form-control" id="alunos" name="alunos">
                    <option value="">Selecione</option>
                    <?php
                    $VarConsultaAluno = $clsAlunos->ConsultarAlunos();
                    for ($i = 0; $i < count($VarConsultaAluno); $i++) {
                         ?>
                         <option value="<?php echo $VarConsultaAluno [$i]['codigo_paciente']; ?>"<?php echo $VarConsultaAluno [$i]['codigo_paciente'] == $VarConsultarMensalidadeId [0]['codigo_paciente'] ? 'selected="selected"' : '' ?>>
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
          <div class="col-md-8">
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
          <div class="col-md-4">
               <label for="datepicker">Data</label>
               <input type="text" class="form-control" id="datepicker" name="datepicker" placeholder="Informe a data">
          </div>
     </div>
     <br/><br/>
     <h3>Anaminese</h3>
     <br/><br/>
     <div class="row">
          <div class="col-md-12">
               <label for="rg">Queixa Principal:</label>
               <input type="text" class="form-control" id="queixa" name="queixa" placeholder="Informe a queixa principal">
          </div>
     </div>
     <br/>
     <div class="row">
          <div class="col-md-12">
               <label for="cpf">História da Moléstia atual: </label>
               <input type="text" class="form-control" id="matual" name="matual" placeholder="Informe a Moléstia atual">
          </div>
     </div>
     <br/>
     <div class="row">
          <div class="col-md-12">
               <label for="rg">História da Moléstia Pregressa: </label>
               <input type="text" class="form-control" id="mprogessa" name="mprogessa" placeholder="Informe a Moléstia Pregressa"> 
          </div>
     </div>
     <br/>
     <div class="row">
          <div class="col-md-12">
               <label for="rg">Medicamentos utilizados:  </label>
               <input type="text" class="form-control" id="medicamentos" name="medicamentos" placeholder="Informe o Medicamento utilizado"> 
          </div>
     </div>
     <br/><br/>
     <h3>Exame Físico</h3>
     <br/><br/>
     <div class="row">
          <div class="col-md-4">
               <label for="rg">Peso:  </label>
               <input type="text" class="form-control" id="peso" name="peso" placeholder="Informe o Peso"> 
          </div>
          <div class="col-md-4">
               <label for="rg">Altura:  </label>
               <input type="text" class="form-control" id="altura" name="altura" placeholder="Informe o Altura"> 
          </div>
          <div class="col-md-4">
               <label for="rg">IMC:  </label>
               <input type="text" class="form-control" id="imc" name="imc"  placeholder="0" readonly> 
          </div>
     </div>
     <br/><br/>
     <strong>Circunferência abdominal </strong>
     <br/><br/>
     <div class="row">
          <div class="col-md-4">
               <label for="umbigo">Umbigo:  </label>
               <input type="text" class="form-control" id="umbigo" name="umbigo" > 
          </div>
          <div class="col-md-4">
               <label for="altura">5cm a cima:  </label>
               <input type="text" class="form-control" id="altura" name="altura"> 
          </div>
          <div class="col-md-4">
               <label for="abaixo">5 cm abaixo:  </label>
               <input type="text" class="form-control" id="abaixo" name="abaixo" > 
          </div>
     </div>
     <br/><br/>
     <strong>Dados Vitais</strong>
     <br/><br/>
     <div class="row">
          <div class="col-md-4">
               <label for="arterial">Pressão Arterial:  </label>  
               <div class="input-group">                   
                    <input type="text" class="form-control" aria-describedby="sizing-addon2">
                    <span class="input-group-addon" id="arterial" name="arterial">mmHg</span>
               </div>
          </div>
          <div class="col-md-4">
               <label for="cardiaca">Frequência Cardíaca:  </label>  
               <div class="input-group">                   
                    <input type="text" class="form-control" aria-describedby="sizing-addon2">
                    <span class="input-group-addon" id="cardiaca" name="cardiaca">bpm</span>
               </div>
          </div>
          <div class="col-md-4">
               <label for="respiratoria">Frequência Respiratória:  </label>  
               <div class="input-group">                   
                    <input type="text" class="form-control" aria-describedby="sizing-addon2">
                    <span class="input-group-addon" id="respiratoria" name="respiratoria">rpm</span>
               </div>
          </div>          
     </div>
     <br/>
     <div class="row">
          <div class="col-md-4">
               <label for="temperatura">Temperatura:  </label>  
               <div class="input-group">                   
                    <input type="text" class="form-control" aria-describedby="sizing-addon2">
                    <span class="input-group-addon" id="temperatura" name="temperatura">ºC</span>
               </div>
          </div>
     </div>
     <br/>
     <div class="row">
          <div class="col-md-12">
               <label for="dolorosos">Presença de Pontos Dolorosos:  </label>  
               <textarea class="form-control" name="dolorosos" rows="3"></textarea> </div>
     </div>
     <br/><br/>
     <h3>Exame de Movimentação</h3>
     <br/><br/>     
     <div class="row">
          <div class="col-md-4">
               <label for="ruidos">Ruídos Articulares: </label>
               <select class="form-control" id="ruidos" name="ruidos">
                    <option value="">Selecione</option>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
               </select>
          </div>
          <div class="col-md-8">
               <label for="local">Local:</label>
               <input type="text" class="form-control" id="local" name="local" placeholder="Informe o local do Ruido Articulares">
          </div>
     </div>
     <br/>
     <div class="row">
          <div class="col-md-4">
               <label for="movimento">Dor ao movimento: </label>
               <select class="form-control" id="permissao" name="movimento">
                    <option value="">Selecione</option>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
               </select>
          </div>
          <div class="col-md-8">
               <label for="dorlocal">Local:</label>
               <input type="text" class="form-control" id="dorlocal" name="dorlocal" placeholder="Informe o local da Dor">
          </div>
     </div>
     <br/>
     <div class="row">
          <div class="col-md-4">
               <label for="repouso">Dor em repouso: </label>
               <select class="form-control" id="permissao" name="permissao">
                    <option value="">Selecione</option>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
               </select>
          </div>
          <div class="col-md-8">
               <label for="localrepouso">Local:</label>
               <input type="text" class="form-control" id="localrepouso" name="localrepouso" placeholder="Informe o local da Dor em Repouso">
          </div>
     </div>
     <br/><br/>
     <h3>Avaliação Postural</h3>
     <br/><br/>
     <div class="row">
          <div class="col-md-12">
               <textarea class="form-control" name="postural" rows="3"></textarea> </div>
     </div>
     <br/><br/>
     <h3>Objetivos Fisioterapeuiticos</h3>
     <br/><br/>
     <textarea class="form-control" name="objetivos"rows="3"></textarea>
<br/><br/>
<div id="botoes" >
     <div class="col-md-4">
          <input type="submit"  class="btn btn-success" id="btnsalvar" name="salvar" value="Salvar"/>              
     </div>
</div>
</form>