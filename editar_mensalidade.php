<h2><strong>Editar Mensalidade</strong></h2>
<a href="?pagina=mensalidade"><input type="submit" value="Voltar" class="btncadastrar" id="btnvoltar" style="float:right" /></a>
<br/> <br/>
<?php
     $VarConsultarMensalidadeId = $clsMensalidade -> ConsultarMensalidadeId($_GET['id']);     
?>
<script type="text/javascript" src="js/scripts.js"></script>

<form method="post" class="form-horizontal" name="frmmensalidade" id="frmmensalidade" action="?pagina=acaomensalidade&acao=editar&id=<?php echo $VarConsultarMensalidadeId [0]['codigo_mensalidade']; ?>">
     <div class="row">
          <div class="col-md-2">
               <label for="codigo">C&oacute;digo</label>
               <input type="text" class="form-control" id="codigo" name="codigo" placeholder="0" readonly value="<?php echo $VarConsultarMensalidadeId[0]['codigo_mensalidade']; ?>">
          </div>
          <div class="col-md-10">
               <label for="alunos">Aluno</label>
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
          <div class="col-md-4">
               <label for="mensalidade">Valor Mensalidade</label>
               <input type="text" class="form-control" id="mensalidade" name="mensalidade" value="<?php echo $VarConsultarMensalidadeId [0]['valor_mensalidade']; ?>">
          </div>
          <div class="col-md-4">
               <label for="parcela">Parcela</label>
               <input type="text" class="form-control" id="parcela" name="parcela" value="<?php echo $VarConsultarMensalidadeId[0]['parcela']; ?>">
          </div>
          <div class="col-md-4">
               <label for="datepicker">Data Vencimento</label>
               <input type="text" class="form-control" id="datepicker" name="datepicker" value="<?php echo $VarConsultarMensalidadeId[0]['data_vencimento']; ?>">
          </div>

     </div>
     <br/>
     <div class="row">

          <div class="col-md-4">
               <label for="pagamento">Pagamento</label>
                <select class="form-control" id="pagamento" name="pagamento">
                    <?php
                    // $VarConsultaPermissao = $clsProfessor->ConsultarPermissao();
                    // for ($i = 0; $i < count($VarProfessorId); $i++) {
                    ?>
                    <?php
                    if ($VarConsultarMensalidadeId [0]['situacao_pagamento'] == 1) {
                         $selected = 'selected="selected"';
                    } else {
                         $selected = '';
                    }
                    ?>
                    <option value="1" <?= $selected ?>> Pago</option>
                    <?php
                    if ($VarConsultarMensalidadeId [0]['situacao_pagamento'] == 0) {
                         $selected = 'selected="selected"';
                    } else {
                         $selected = '';
                    }
                    ?>
                    <option value="0" <?= $selected ?>>Pendente</option>

                    <?php
                    //}
                    ?>
               </select>
          </div>
          
               <div class="col-md-4">
                    <label for="datepicker1">Data Pagamento</label>
                    <input type="text" class="form-control" id="datepicker1" name="datepicker1" value="<?php echo $VarConsultarMensalidadeId[0]['data_pagamento']; ?>">
               </div>            
                 

          <div class="col-md-4">
               <label for="professor">Professor</label>
               <select class="form-control" id="professor" name="professor">
                    <option value="">Selecione</option>
                    <?php
                    $VarConsultaProfessor = $clsProfessor->ConsultarProfessor();
                    for ($i = 0; $i < count($VarConsultaProfessor); $i++) {
                         ?>
                         <option value="<?php echo $VarConsultaProfessor [$i]['codigo_professor']; ?>" <?php echo $VarConsultaProfessor [$i]['codigo_professor'] == $VarConsultarMensalidadeId [0]['codigo_professor'] ? 'selected="selected"' : '' ?>>
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