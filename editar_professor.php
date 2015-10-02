<?php
//header('Content-Type: text/html; charset=utf-8');

$VarProfessorId = $clsProfessor->ConsultarIdProfessor($_GET['id']);
//echo '<br/>';  print_r($VarProfessorId); echo '<br/>';
?>

<h2><strong>Dados Fisioterapeuta</strong></h2>
<a href="?pagina=professor"><input type="submit" value="Voltar" class="btncadastrar" id="btnvoltar" style="float:right" /></a>
<br/> <br/>

<form method="post" class="form-horizontal" name="frmeditarprofessor" action="?pagina=acaoprofessor&acao=editar&id=<?php echo $VarProfessorId[0]['codigo_professor']; ?>">
     <div class="row">
          <div class="col-md-2">
               <label for="codigo">C&oacute;digo</label>
               <input type="text" class="form-control" id="codigo" name="codigo" value="<?php echo $VarProfessorId[0]['codigo_professor']; ?> " readonly>
          </div>
          <div class="col-md-10">
               <label for="nome">Nome Professor</label>
               <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $VarProfessorId[0]['nome']; ?>" >
          </div>
     </div>
     <br/>
     <div class="row">
          <div class="col-md-4">
               <label for="rg">RG</label>
               <input type="text" class="form-control" id="rg" name="rg" value="<?php echo $VarProfessorId[0]['rg']; ?>">
          </div>
          <div class="col-md-4">
               <label for="cpf">CPF</label>
               <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $VarProfessorId[0]['cpf']; ?>">
          </div>
          <div class="col-md-4">
               <label for="crefito">CREFITO</label>
               <input type="text" class="form-control" id="crefito" name="crefito" value="<?php echo $VarProfessorId[0]['crefito']; ?>">
          </div>
     </div>
     <br/>
     <div class="row">
          <div class="col-md-4">
               <label for="datepicker">Data Nasc.</label>
               <input type="text" class="form-control" id="datepicker" name="datepicker" value="<?php echo $VarProfessorId[0]['data_nascimento']; ?>">
          </div>
          <div class="col-md-4">
               <label for="rg">Telefone Fixo</label>
               <input type="text" class="form-control" id="fixo" name="fixo" value="<?php echo $VarProfessorId[0]['telefone_fixo']; ?>">
          </div>
          <div class="col-md-4">
               <label for="crefito">Telefone Celular</label>
               <input type="text" class="form-control" id="celular" name="celular" value="<?php echo $VarProfessorId[0]['telefone_celular']; ?>" >
          </div>
     </div>
     <br/>
     <div class="row">
          <div class="col-md-4">
               <label for="estado">UF</label>
               <select type="text" class="form-control" id="estado" name="estado" value="<?php echo $VarProfessorId[0]['uf']; ?>"></select>
          </div>
          <div class="col-md-4">

               <label for="endereco">Cidade</label>
               <select type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $VarProfessorId[0]['cidade']; ?>"></select>
          </div>
          <div class="col-md-4">
               <label for="endereco">Endere&ccedil;o</label>
               <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $VarProfessorId[0]['endereco']; ?>">
          </div>

     </div>
     <br/>
     <div class="row">
          <div class="col-md-4">
               <label for="numero">N&uacute;mero</label>
               <input type="text" class="form-control" id="numero" name="numero" value="<?php echo $VarProfessorId[0]['numero']; ?>">
          </div>
          <div class="col-md-4">
               <label for="bairro">Bairro</label>
               <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo $VarProfessorId[0]['bairro']; ?>">
          </div>
          <div class="col-md-4">
               <label for="cep">CEP</label>
               <input type="text" class="form-control" id="cep" name="cep" value="<?php echo $VarProfessorId[0]['cep']; ?>">
          </div>
     </div>
     <div class="row">
          <div class="col-md-4">
               <br/>
               <label for="email">E-mail</label>
               <input type="text" class="form-control" id="email" name="email" value="<?php echo $VarProfessorId[0]['email']; ?>">
          </div>
          <div class="col-md-4">
               <br/>
               <label for="banco">Dados Banc&aacute;rios</label>
               <input type="text" class="form-control" id="banco" name="banco" value="<?php echo $VarProfessorId[0]['banco']; ?>">
          </div>

          <div class="col-md-4">
               <br/>
               <label for="permissao">Permiss&atilde;o</label>

               <select class="form-control" id="permissao" name="permissao">
                    <?php
                    // $VarConsultaPermissao = $clsProfessor->ConsultarPermissao();
                    // for ($i = 0; $i < count($VarProfessorId); $i++) {
                    ?>
                    <?php
                    if ($VarProfessorId [0]['codigo_permissao'] == 1) {
                         $selected = 'selected="selected"';
                    } else {
                         $selected = '';
                    }
                    ?>
                    <option value="1" <?= $selected ?>> Administrador</option>
                    <?php
                    if ($VarProfessorId [0]['codigo_permissao'] == 0) {
                         $selected = 'selected="selected"';
                    } else {
                         $selected = '';
                    }
                    ?>
                    <option value="0" <?= $selected ?>>Professor</option>

                    <?php
                    //}
                    ?>
               </select>
          </div>
     </div>
     <div class="row">
          <br/>
          <div class="col-md-4">
               <label for="status">Status</label>
               <?php
               /*
                 echo "$$$$" . $VarProfessorId [0]['status'];
                 echo '<pre>';
                 print_r($VarProfessorId);
                 echo '<pre>';
                */
               ?>
               <select class="form-control" id="status" name="status">

                    <?php
                    // $VarConsultaPermissao = $clsProfessor->ConsultarPermissao();
                    // for ($i = 0; $i < count($VarProfessorId); $i++) {
                    ?>
                    <?php
                    if ($VarProfessorId [0]['status'] == 1) {
                         $selected = 'selected="selected"';
                    } else {
                         $selected = '';
                    }
                    ?>
                    <option value="1" <?= $selected ?> >Inativo</option>
                    <?php
                    if ($VarProfessorId [0]['status'] == 0) {
                         $selected = 'selected="selected"';
                    } else {
                         $selected = '';
                    }
                    ?>
                    <option value="0" <?= $selected ?> >Ativo</option>

                    <?php
                    //}
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
     <div class="col-md-4">
          <input type="submit"  class="btn btn-success" name="salvar" value="Salvar"/>              
     </div>

     <br/> <br/>

</form>
</div>
