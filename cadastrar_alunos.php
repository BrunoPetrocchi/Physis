<h2><strong>Cadastrar Alunos</strong></h2>
<a href="?pagina=alunos"><input type="submit" value="Voltar" class="btncadastrar" id="btnvoltar" style="float:right" /></a>
<br/> <br/>

<script type="text/javascript" src="js/scripts.js"></script>

<form method="post" class="form-horizontal" name="cadalunos" id="cadalunos" action="?pagina=acaoalunos&acao=cadastrar">
     <div class="row">
          <div class="col-md-2">
               <label for="codigo">C&oacute;digo</label>
               <input type="text" class="form-control" id="codigo" name="codigo" placeholder="0" readonly>
          </div>
          <div class="col-md-10">
               <label for="nome">Nome Aluno</label>
               <input type="text" class="form-control" id="nome" name="nome" placeholder="Infome Nome do Aluno" >
          </div>
     </div>
     <br/>
     <div class="row">
          <div class="col-md-4">
               <label for="rg">Estado Civil</label>
               <input type="text" class="form-control" id="estado_civil" name="estado_civil" placeholder="Informe o Estado Civil">
          </div>
          <div class="col-md-4">
               <label for="cpf">CPF</label>
               <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Informe o CPF">
          </div>
          <div class="col-md-4">
              <label for="rg">RG</label>
               <input type="text" class="form-control" id="rg" name="rg" placeholder="Informe o RG"> 
          </div>
     </div>
     <br/>
     <div class="row">
          <div class="col-md-4">
               <label for="datepicker">Data Nasc.</label>
               <input type="text" class="form-control" id="datepicker" name="datepicker" placeholder="Informe a Data de Nascimento">
          </div>
          <div class="col-md-4">
               <label for="rg">Telefone Fixo</label>
               <input type="text" class="form-control" id="fixo" name="fixo" placeholder="Informe o Telefone Fixo">
          </div>
          <div class="col-md-4">
               <label for="celular">Telefone Celular</label>
               <input type="text" class="form-control" name="celular" id="celular" placeholder="Informe o Telefone Celular">
          </div>
     </div>
     <br/>
     <div class="row">
          <div class="col-md-4">
               <label for="uf">UF</label>
               <select type="text" class="form-control" id="estado" name="estado" placeholder="Informe o Estado"></select>
          </div>
          <div class="col-md-4">
               <label for="cidade">Cidade</label>
               <select type="text" class="form-control" id="cidade" name="cidade" placeholder="Informe a Cidade"></select>
          </div>
          <div class="col-md-4">
               <label for="endereco">Endere&ccedil;o</label>
               <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Informe o Endere&ccedil;o">
          </div>

     </div>
     <br/>
     <div class="row">
          <div class="col-md-4">
               <label for="numero">N&uacute;mero</label>
               <input type="text" class="form-control" id="numero" name="numero" placeholder="Informe o Numero">
          </div>
          <div class="col-md-4">
               <label for="bairro">Bairro</label>
               <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Informe o Bairro">
          </div>
          <div class="col-md-4">
               <label for="cep">CEP</label>
               <input type="text" class="form-control" id="cep" name="cep" placeholder="Informe o CEP">
          </div>
     </div>
     <div class="row">
          <div class="col-md-4">
               <br/>
               <label for="atual">Profissão Atual</label>
               <input type="text" class="form-control" id="atual" name="atual" placeholder="Informe a Profissão Atual">
          </div>
          <div class="col-md-4">
               <br/>
               <label for="anterior">Profissão Anterior</label>
               <input type="text" class="form-control" id="anterior" name="anterior" placeholder="Informe a Profissão Anterior">
          </div>
          <div class="col-md-4">
               <br/>
               <label for="legal">Responsável Legal</label>
               <input type="text" class="form-control" id="legal" name="legal" placeholder="Infome o Responsável Legal">
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
                         <option value="<?php echo $VarConsultaProfessor [$i]['codigo_professor']; ?>">
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
               <label for="numero">Observação</label>
               <textarea class="form-control" rows="3" id="observacao" name="observacao"><?php echo $VarProfessorId[0]['observacao']; ?></textarea>
          </div>
     </div>
     <br/>
     <div id="botoes" >
          <div class="col-md-4">
               <input type="submit"  class="btn btn-success" id="btnsalvar" name="salvar" value="Salvar"/>              
          </div>


     </div>

</form>