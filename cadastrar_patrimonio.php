<h2><strong>Cadastrar Patrimônio</strong></h2>
<a href="?pagina=patrimonio"><input type="submit" value="Voltar" class="btncadastrar" id="btnvoltar" style="float:right" /></a>
<br/> <br/>

<script type="text/javascript" src="js/scripts.js"></script>

<form method="post" class="form-horizontal" name="frmcadpatrimonio" id="frmcadpatrimonio" action="?pagina=acaopatrimonio&acao=cadastrar">
     <div class="row">
          <div class="col-md-2">
               <label for="codigo">C&oacute;digo</label>
               <input type="text" class="form-control" id="codigo" name="codigo" placeholder="0" readonly>
          </div>
          <div class="col-md-10">
               <label for="nome">Descrição do  Aparelho</label>
               <input type="text" class="form-control" id="nome" name="nome" placeholder="Infome a descrição do aparelho" >
          </div>
     </div>
     <br/>
     <div class="row">
          <div class="col-md-4">
               <label for="quantidade">Quantidade</label>
               <input type="text" class="form-control" id="quantidade" name="quantidade" placeholder="Informe a quantidade">
          </div>
          <div class="col-md-4">
               <label for="valor">Valor Un. Aparelho</label>
               <input type="text" class="form-control" id="valor" name="valor" placeholder="Informe o valor unitário">
          </div>
          <div class="col-md-4">
               <label for="datepicker">Data Aquisição.</label>
               <input type="text" class="form-control" id="datepicker" name="datepicker" placeholder="Informe a Data de Nascimento">
          </div>
     </div>
     <br/>
     <div class="row">
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