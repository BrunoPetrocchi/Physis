<h2><strong>Cadastrar Avaliação</strong></h2>
<a href="?pagina=avaliacao"><input type="submit" value="Voltar" class="btncadastrar" id="btnvoltar" style="float:right" /></a>
<br/> <br/>

<script type="text/javascript" src="js/scripts.js"></script>
<?php
$peso ;

$altura;        
?>


<form method="post" class="form-horizontal" name="cadalunos" id="cadalunos" action="?pagina=acaoavaliacao&acao=cadastrar">
     <div class="row">
          <div class="col-md-2">
               <label for="codigo">Código</label>
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
               <label for="qprincipal">Queixa Principal:</label>
               <input type="text" class="form-control" id="qprincipal" name="qprincipal" placeholder="Informe a queixa principal">
          </div>
     </div>
     <br/>
     <div class="row">
          <div class="col-md-12">
               <label for="matual">História da Moléstia atual: </label>
               <input type="text" class="form-control" id="matual" name="matual" placeholder="Informe a Moléstia atual">
          </div>
     </div>
     <br/>
     <div class="row">
          <div class="col-md-12">
               <label for="rg">História da Moléstia Pregressa: </label>
               <input type="text" class="form-control" id="mprogessa" name="mprogessa" placeholder="Informe o RG"> 
          </div>
     </div>
     <br/>
     <div class="row">
          <div class="col-md-12">
               <label for="rg">Medicamentos utilizados:  </label>
               <input type="text" class="form-control" id="medicamentos" name="medicamentos" placeholder="Informe o RG"> 
          </div>
     </div>
     <br/><br/>
     <h3>Exame Físico</h3>
     <br/><br/>
     <div class="row">
          <div class="col-md-4">
               <label for="peso">Peso:  </label>
               <input type="text" class="form-control" id="peso" name="peso" placeholder="Informe o RG"> 
          </div>
          <div class="col-md-4">
               <label for="altura:">Altura  </label>
               <input type="text" class="form-control" id="altura" name="altura" placeholder="Informe o RG"> 
          </div>
          <div class="col-md-4">
               <label for="imc">IMC:  </label>
               <input type="text" class="form-control" id="imc" name="imc" readonly> 
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
               <label for="cima">5cm a cima:  </label>
               <input type="text" class="form-control" id="cima" name="cima" > 
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
               <label for="rg">Pressão Arterial:  </label>  
               <div class="input-group">                   
                    <input type="text" class="form-control" name="arterial" aria-describedby="sizing-addon2">
                    <span class="input-group-addon" id="sizing-addon2">mmHg</span>
               </div>
          </div>
          <div class="col-md-4">
               <label for="rg">Frequência Cardíaca:  </label>  
               <div class="input-group">                   
                    <input type="text" class="form-control"  name="cardiaca" aria-describedby="sizing-addon2">
                    <span class="input-group-addon" id="sizing-addon2">bpm</span>
               </div>
          </div>
          <div class="col-md-4">
               <label for="rg">Frequência Respiratória:  </label>  
               <div class="input-group">                   
                    <input type="text" class="form-control" name="respiratoria" aria-describedby="sizing-addon2">
                    <span class="input-group-addon" id="sizing-addon2">rpm</span>
               </div>
          </div>          
     </div>
     <br/>
     <div class="row">
          <div class="col-md-4">
               <label for="rg">Temperatura:  </label>  
               <div class="input-group">                   
                    <input type="text" class="form-control" name="temperatura" aria-describedby="sizing-addon2">
                    <span class="input-group-addon" id="sizing-addon2">ºC</span>
               </div>
          </div>
     </div>
     <br/>
     <div class="row">
          <div class="col-md-12">
               <label for="rg">Presença de Pontos Dolorosos:  </label>  
               <textarea class="form-control" name="dolorosos" rows="3"></textarea> </div>
     </div>
     <br/><br/>
     <h3>Exame de Movimentação</h3>
     <br/><br/>     
     <div class="row">
          <div class="col-md-4">
               <label for="ruido">Ruídos Articulares: </label>
               <select class="form-control" id="ruido" name="ruido">
                    <option value="">Selecione</option>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
               </select>
          </div>
          <div class="col-md-8">
               <label for="localruido">Local:</label>
               <input type="text" class="form-control" id="localruido" name="localruido" placeholder="Informe a queixa principal">
          </div>
     </div>
     <br/>
     <div class="row">
          <div class="col-md-4">
               <label for="movimento">Dor ao movimento: </label>
               <select class="form-control" id="movimento" name="movimento">
                    <option value="">Selecione</option>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
               </select>
          </div>
          <div class="col-md-8">
               <label for="lmovimento">Local:</label>
               <input type="text" class="form-control" id="lmovimento" name="lmovimento" placeholder="Informe a queixa principal">
          </div>
     </div>
     <br/>
     <div class="row">
          <div class="col-md-4">
               <label for="repouso">Dor em repouso: </label>
               <select class="form-control" id="repouso" name="repouso">
                    <option value="">Selecione</option>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
               </select>
          </div>
          <div class="col-md-8">
               <label for="localrepouso">Local:</label>
               <input type="text" class="form-control" id="localrepouso" name="localrepouso" placeholder="Informe a queixa principal">
          </div>
     </div>
     <br/><br/>
     <h3>Avaliação Postural</h3>
     <br/>
     <div class="row">
          <div class="col-md-12">
               <textarea class="form-control" id="descpostural" name="descpostural" rows="3"></textarea> </div>
     </div>
     <br/><br/>
     <h3>Objetivos Fisioterapeuiticos</h3>
     <br/>
     <div class="row">
          <div class="col-md-12">
               <textarea class="form-control"  id="descfisio" name="descfisio" rows="3"></textarea>
          </div>
     </div>
     <br/><br/>
     <div id="botoes" >
          <div class="col-md-4">
               <input type="submit"  class="btn btn-success" id="btnsalvar" name="salvar" value="Salvar"/>              
          </div>
     </div>
</form>