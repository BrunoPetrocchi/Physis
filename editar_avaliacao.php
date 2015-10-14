<h2><strong>Cadastrar Avaliação</strong></h2>
<a href="?pagina=avaliacao"><input type="submit" value="Voltar" class="btncadastrar" id="btnvoltar" style="float:right" /></a>
<br/> <br/>

<script type="text/javascript" src="js/scripts.js"></script>

<?php
$VarConsultaAvaliacao = $clsAvaliacao ->ConsultaFichaAvaliacao ($_GET['id']);


?>


<form method="post" class="form-horizontal" name="cadalunos" id="cadalunos" action="?pagina=acaoavaliacao&acao=cadastrar&id=<?php echo $VarConsultaAvaliacao [0]['codigo_fichaavaliacao']; ?>">
     <div class="row">
          <div class="col-md-2">
               <label for="codigo">Código</label>
               <input type="text" class="form-control" id="codigo" name="codigo" value="<?php echo $VarConsultaAvaliacao [0]['codigo_fichaavaliacao']; ?>" readonly>
          </div>
          <div class="col-md-10">
               <label for="alunos">Alunos</label>
               <select class="form-control" id="alunos" name="alunos">
                    <option value="">Selecione</option>
                    <?php
                    $VarConsultaAluno = $clsAlunos->ConsultarAlunos();
                    for ($i = 0; $i < count($VarConsultaAluno); $i++) {
                         ?>
                         <option value="<?php echo $VarConsultaAluno [$i]['codigo_paciente']; ?>"<?php echo $VarConsultaAluno [$i]['codigo_paciente'] == $VarConsultaAvaliacao [0]['codigo_paciente'] ? 'selected="selected"' : '' ?>>
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
                         <option value="<?php echo $VarConsultaProfessor [$i]['codigo_professor']; ?>"<?php echo $VarConsultaProfessor [$i]['codigo_professor'] == $VarConsultaAvaliacao [0]['codigo_professor'] ? 'selected="selected"' : '' ?>>
                              <?php echo $VarConsultaProfessor [$i]['nome']; ?>
                         </option>
                         <?php
                    }
                    ?>
               </select>
          </div>
          <div class="col-md-4">
               <label for="datepicker">Data</label>
               <input type="text" class="form-control" id="datepicker" name="datepicker" value="<?php echo $VarConsultaAvaliacao [0]['periodo']; ?>">
          </div>
     </div>
     <br/><br/>
     <h3>Anaminese</h3>
     <br/><br/>
     <div class="row">
          <div class="col-md-12">
               <label for="qprincipal">Queixa Principal:</label>
               <input type="text" class="form-control" id="qprincipal" name="qprincipal"  value="<?php echo $VarConsultaAvaliacao [0]['queixa_principal']; ?>">
          </div>
     </div>
     <br/>
     <div class="row">
          <div class="col-md-12">
               <label for="matual">História da Moléstia atual: </label>
               <input type="text" class="form-control" id="matual" name="matual" value="<?php echo $VarConsultaAvaliacao [0]['molestia_atual']; ?>">
          </div>
     </div>
     <br/>
     <div class="row">
          <div class="col-md-12">
               <label for="rg">História da Moléstia Pregressa: </label>
               <input type="text" class="form-control" id="mprogessa" name="mprogessa" value="<?php echo $VarConsultaAvaliacao [0]['molestia_progressa']; ?>">
          </div>
     </div>
     <br/>
     <div class="row">
          <div class="col-md-12">
               <label for="rg">Medicamentos utilizados:  </label>
               <input type="text" class="form-control" id="medicamentos" name="medicamentos" value="<?php echo $VarConsultaAvaliacao [0]['medicamento']; ?>">
          </div>
     </div>
     <br/><br/>
     <h3>Exame Físico</h3>
     <br/><br/>
     <div class="row">
          <div class="col-md-4">
               <label for="peso">Peso:  </label>
               <input type="text" class="form-control" id="peso" name="peso" value="<?php echo $VarConsultaAvaliacao [0]['peso']; ?>">
          </div>
          <div class="col-md-4">
               <label for="altura:">Altura  </label>
               <input type="text" class="form-control" id="altura" name="altura" value="<?php echo $VarConsultaAvaliacao [0]['altura']; ?>">
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
               <input type="text" class="form-control" id="umbigo" name="umbigo" value="<?php echo $VarConsultaAvaliacao [0]['umbigo']; ?>" > 
          </div>
          <div class="col-md-4">
               <label for="cima">5cm a cima:  </label>
               <input type="text" class="form-control" id="cima" name="cima" value="<?php echo $VarConsultaAvaliacao [0]['umbigo_cima']; ?>" > 
          </div>
          <div class="col-md-4">
               <label for="abaixo">5 cm abaixo:  </label>
               <input type="text" class="form-control" id="abaixo" name="abaixo" value="<?php echo $VarConsultaAvaliacao [0]['umbigo_baixo']; ?>">  
          </div>
     </div>
     <br/><br/>
     <strong>Dados Vitais</strong>
     <br/><br/>
     <div class="row">
          <div class="col-md-4">
               <label for="rg">Pressão Arterial:  </label>  
               <div class="input-group">                   
                    <input type="text" class="form-control" name="arterial" aria-describedby="sizing-addon2" value="<?php echo $VarConsultaAvaliacao [0]['pressao']; ?>" >
                    <span class="input-group-addon" id="sizing-addon2">mmHg</span>
               </div>
          </div>
          <div class="col-md-4">
               <label for="rg">Frequência Cardíaca:  </label>  
               <div class="input-group">                   
                    <input type="text" class="form-control"  name="cardiaca" aria-describedby="sizing-addon2" value="<?php echo $VarConsultaAvaliacao [0]['freq_cardiaca']; ?>" >
                    <span class="input-group-addon" id="sizing-addon2">bpm</span>
               </div>
          </div>
          <div class="col-md-4">
               <label for="rg">Frequência Respiratória:  </label>  
               <div class="input-group">                   
                    <input type="text" class="form-control" name="respiratoria" aria-describedby="sizing-addon2" value="<?php echo $VarConsultaAvaliacao [0]['freq_respiratoria']; ?>" >
                    <span class="input-group-addon" id="sizing-addon2">rpm</span>
               </div>
          </div>          
     </div>
     <br/>
     <div class="row">
          <div class="col-md-4">
               <label for="rg">Temperatura:  </label>  
               <div class="input-group">                   
                    <input type="text" class="form-control" name="temperatura" aria-describedby="sizing-addon2" value="<?php echo $VarConsultaAvaliacao [0]['temperatura']; ?>" >
                    <span class="input-group-addon" id="sizing-addon2">ºC</span>
               </div>
          </div>
     </div>
     <br/>
     <div class="row">
          <div class="col-md-12">
               <label for="rg">Presença de Pontos Dolorosos:  </label>  
               <textarea class="form-control" name="dolorosos" rows="3"><?php echo $VarConsultaAvaliacao [0]['ponto_doloroso']; ?></textarea> </div>
     </div>
     <br/><br/>
     <h3>Exame de Movimentação</h3>
     <br/><br/>     
     <div class="row">
          <div class="col-md-4">
               <label for="ruido">Ruídos Articulares: </label>
               <select class="form-control" id="ruido" name="ruido">
                    <?php
                    if ($VarConsultaAvaliacao [0]['ruido'] == 1) {
                         $selected = 'selected="selected"';
                    } else {
                         $selected = '';
                    }
                    ?>
                    <option value="1" <?= $selected ?>> Sim</option>
                    <?php
                    if ($VarConsultaAvaliacao [0]['ruido'] == 0) {
                         $selected = 'selected="selected"';
                    } else {
                         $selected = '';
                    }
                    ?>
                    <option value="0" <?= $selected ?>>Não</option>

                    <?php
                    //}
                    ?>
               </select>
          </div>
          <div class="col-md-8">
               <label for="localruido">Local:</label>
               <input type="text" class="form-control" id="localruido" name="localruido" value="<?php echo $VarConsultaAvaliacao [0]['local_ruido']; ?>">
          </div>
     </div>
     <br/>
     <div class="row">
          <div class="col-md-4">
               <label for="movimento">Dor ao movimento: </label>
               <select class="form-control" id="movimento" name="movimento">
                    <?php
                    if ($VarConsultaAvaliacao [0]['movimento'] == 1) {
                         $selected = 'selected="selected"';
                    } else {
                         $selected = '';
                    }
                    ?>
                    <option value="1" <?= $selected ?>> Sim</option>
                    <?php
                    if ($VarConsultaAvaliacao [0]['movimento'] == 0) {
                         $selected = 'selected="selected"';
                    } else {
                         $selected = '';
                    }
                    ?>
                    <option value="0" <?= $selected ?>>Não</option>

                    <?php
                    //}
                    ?>
               </select>
          </div>
          <div class="col-md-8">
               <label for="lmovimento">Local:</label>
               <input type="text" class="form-control" id="lmovimento" name="lmovimento" value="<?php echo $VarConsultaAvaliacao [0]['local_movimentacao']; ?>">
          </div>
     </div>
     <br/>
     <div class="row">
          <div class="col-md-4">
               <label for="repouso">Dor em repouso: </label>
               <select class="form-control" id="repouso" name="repouso">
                    <?php
                    if ($VarConsultaAvaliacao [0]['repouso'] == 1) {
                         $selected = 'selected="selected"';
                    } else {
                         $selected = '';
                    }
                    ?>
                    <option value="1" <?= $selected ?>> Sim</option>
                    <?php
                    if ($VarConsultaAvaliacao [0]['repouso'] == 0) {
                         $selected = 'selected="selected"';
                    } else {
                         $selected = '';
                    }
                    ?>
                    <option value="0" <?= $selected ?>>Não</option>

                    <?php
                    //}
                    ?>
               </select>
          </div>
          <div class="col-md-8">
               <label for="localrepouso">Local:</label>
               <input type="text" class="form-control" id="localrepouso" name="localrepouso" value="<?php echo $VarConsultaAvaliacao [0]['local_repouso']; ?>">
          </div>
     </div>
     <br/><br/>
     <h3>Avaliação Postural</h3>
     <br/>
     <div class="row">
          <div class="col-md-12">
               <textarea class="form-control" id="descpostural" name="descpostural" rows="3"><?php echo $VarConsultaAvaliacao [0]['postural']; ?></textarea> </div>
     </div>
     <br/><br/>
     <h3>Objetivos Fisioterapeuiticos</h3>
     <br/>
     <div class="row">
          <div class="col-md-12">
               <textarea class="form-control"  id="descfisio" name="descfisio" rows="3"><?php echo $VarConsultaAvaliacao [0]['desc_objetivos']; ?></textarea>
          </div>
     </div>
     
     <br/><br/>
     <div id="botoes" >
          <div class="col-md-4">
               <input type="submit"  class="btn btn-success" id="btnsalvar" name="salvar" value="Salvar"/>              
          </div>
     </div>
     
</form>