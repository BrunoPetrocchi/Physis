<h2><strong>Editar Alunos</strong></h2>
<a href="?pagina=alunos"><input type="submit" value="Voltar" class="btncadastrar" id="btnvoltar" style="float:right" /></a>
<br/> <br/>

<script type="text/javascript" src="js/scripts.js"></script>

<?php
     $varAlunosId = $clsAlunos ->ConsultarAlunosId($_GET['id']);
?>

<form method="post" class="form-horizontal" name="frmalunos" id="frmalunos" action="?pagina=acaoalunos&acao=editar&id=<?php echo $varAlunosId [0]['codigo_paciente'] ?>">
     <div class="row">
          <div class="col-md-2">
               <label for="codigo">C&oacute;digo</label>
               <input type="text" class="form-control" id="codigo" name="codigo" placeholder="0" readonly value="<?php echo $varAlunosId [0]['codigo_paciente'] ;?>">
          </div>
          <div class="col-md-10">
               <label for="nome">Nome Aluno</label>
               <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $varAlunosId [0]['nome'] ;?>">
          </div>
     </div>
     <br/>
     <div class="row">
          <div class="col-md-4">
               <label for="rg">Estado Civil</label>
               <input type="text" class="form-control" id="estado_civil" name="estado_civil" value="<?php echo $varAlunosId [0]['estado_civil'] ;?>">
          </div>
          <div class="col-md-4">
               <label for="cpf">CPF</label>
               <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $varAlunosId [0]['cpf'] ;?>">
          </div>
          <div class="col-md-4">
              <label for="rg">RG</label>
               <input type="text" class="form-control" id="rg" name="rg" value="<?php echo $varAlunosId [0]['rg'] ;?>"> 
          </div>
     </div>
     <br/>
     <div class="row">
          <div class="col-md-4">
               <label for="datepicker">Data Nasc.</label>
               <input type="text" class="form-control" id="datepicker" name="datepicker" value="<?php echo $varAlunosId [0]['data_nascimento'] ;?>" >
          </div>
          <div class="col-md-4">
               <label for="rg">Telefone Fixo</label>
               <input type="text" class="form-control" id="fixo" name="fixo" value="<?php echo $varAlunosId [0]['telefone_fixo'] ;?>">
          </div>
          <div class="col-md-4">
               <label for="celular">Telefone Celular</label>
               <input type="text" class="form-control" name="celular" id="celular" value="<?php echo $varAlunosId [0]['telefone_celular'] ;?>">
          </div>
     </div>
     <br/>
     <div class="row">
          <div class="col-md-4">
               <label for="uf">UF</label>
               <select type="text" class="form-control" id="estado" name="estado" value="<?php echo $varAlunosId [0]['uf'] ;?>" ></select>
          </div>
          <div class="col-md-4">
               <label for="cidade">Cidade</label>
               <select type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $varAlunosId [0]['cidade'] ;?>"></select>
          </div>
          <div class="col-md-4">
               <label for="endereco">Endere&ccedil;o</label>
               <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $varAlunosId [0]['endereco'] ;?>">
          </div>

     </div>
     <br/>
     <div class="row">
          <div class="col-md-4">
               <label for="numero">N&uacute;mero</label>
               <input type="text" class="form-control" id="numero" name="numero" value="<?php echo $varAlunosId [0]['numero'] ;?>">
          </div>
          <div class="col-md-4">
               <label for="bairro">Bairro</label>
               <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo $varAlunosId [0]['bairro'] ;?>">
          </div>
          <div class="col-md-4">
               <label for="cep">CEP</label>
               <input type="text" class="form-control" id="cep" name="cep" value="<?php echo $varAlunosId [0]['cep'] ;?>">
          </div>
     </div>
     <div class="row">
          <div class="col-md-4">
               <br/>
               <label for="atual">Profissão Atual</label>
               <input type="text" class="form-control" id="atual" name="atual" value="<?php echo $varAlunosId [0]['profissao_atual'] ;?>">
          </div>
          <div class="col-md-4">
               <br/>
               <label for="anterior">Profissão Anterior</label>
               <input type="text" class="form-control" id="anterior" name="anterior" value="<?php echo $varAlunosId [0]['profissao_anterior'] ;?>">
          </div>
          <div class="col-md-4">
               <br/>
               <label for="legal">Responsável Legal</label>
               <input type="text" class="form-control" id="legal" name="legal" value="<?php echo $varAlunosId [0]['responsavel_legal'] ;?>" >
          </div>
     </div>
     
     <div class="row">
          <br/>
          <div class="col-md-4">
               <label for="professor">Professor</label>
               <select class="form-control" id="professor" name="professor">
                    <option value="">Selecione</option>
                    <?php
                    $VarConsultaProfessor = $clsProfessor->ConsultarProfessor();
                    for ($i = 0; $i < count($VarConsultaProfessor); $i++) {
                         ?>
                         <option value="<?php echo $VarConsultaProfessor [$i]['codigo_professor']; ?>" <?php echo $VarConsultaProfessor [$i]['codigo_professor'] == $varAlunosId [0]['codigo_professor'] ? 'selected="selected"' : '' ?>>
                              <?php echo $VarConsultaProfessor [$i]['nome']; ?>
                         </option>
                         <?php
                    }
                    ?>
               </select>
          </div>
     </div>

     <div class="row">
          <br/>
          <div class="col-md-8">
               <label for="observacao">Observação</label>
               <textarea class="form-control" rows="3" id="observacao" name="observacao"><?php echo $varAlunosId [0]['observacao']; ?></textarea>
          </div>
     </div>
     <br/>
     <div id="botoes" >
          <div class="col-md-4">
               <input type="submit"  class="btn btn-success" id="btnsalvar" name="salvar" value="Salvar"/>              
          </div>


     </div>

</form>