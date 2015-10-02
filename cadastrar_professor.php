<h2><strong>Cadastrar Fisioterapeuta</strong></h2>
<a href="?pagina=professor"><input type="submit" value="Voltar" class="btncadastrar" id="btnvoltar" style="float:right" /></a>
<br/> <br/>
<script type="text/javascript" src="js/scripts.js"></script>

<form method="post" class="form-horizontal" name="frmprofessor" id="frmprofessor" action="?pagina=acaoprofessor&acao=cadastrar">
     <div class="row">
          <div class="col-md-2">
               <label for="codigo">C&oacute;digo</label>
               <input type="text" class="form-control" id="codigo" name="codigo" placeholder="0" readonly>
          </div>
          <div class="col-md-10">
               <label for="nome">Nome Fisioterapeuta</label>
               <input type="text" class="form-control" id="nome" name="nome" placeholder="Infome Nome Professor" >
          </div>
     </div>
     <br/>
     <div class="row">
          <div class="col-md-4">
               <label for="rg">RG</label>
               <input type="text" class="form-control" id="rg" name="rg" placeholder="Informe o RG">
          </div>
          <div class="col-md-4">
               <label for="rg">CPF</label>
               <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Informe o CPF">
          </div>
          <div class="col-md-4">
               <label for="crefito">CREFITO</label>
               <input type="text" class="form-control" id="crefito" name="crefito" placeholder="Informe o CREFITO">
          </div>
     </div>
     <br/>
     <div class="row">
          <div class="col-md-4">
               <label for="datepicker">Data Nasc.</label>
               <input type="text" class="form-control" id="datepicker" name="datepicker">
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
               <label for="email">E-mail</label>
               <input type="text" class="form-control" id="email" name="email" placeholder="Informe o E-mail">
          </div>
          <div class="col-md-4">
               <br/>
               <label for="banco">Dados Banc&aacute;rios</label>
               <input type="text" class="form-control" id="banco" name="banco" placeholder="Infome os dados Bancários">
          </div>
          <div class="col-md-4">
               <br/>
               <label for="permissao">Permiss&atilde;o</label>
               <select class="form-control" id="permissao" name="permissao">
                    <option value="">Selecione</option>
                    <option value="1">Administrador</option>
                    <option value="0">Professor</option>
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