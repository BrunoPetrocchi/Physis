<h2><strong>Editar Patrimônio</strong></h2>
<a href="?pagina=patrimonio"><input type="submit" value="Voltar" class="btncadastrar" id="btnvoltar" style="float:right" /></a>
<br/> <br/>
<?php
$VarConsultaPatrimonio = $clsPatrimonio->ConsultarPatrimonioId($_GET['id'])
?>
<script type="text/javascript" src="js/scripts.js"></script>

<form method="post" class="form-horizontal" name="editarpatrimonio" id="editarpatrimonio" action="?pagina=acaopatrimonio&acao=editar&id=<?php echo $VarConsultaPatrimonio[0]['codigo_patrimonio']; ?>">
     <div class="row">
          <div class="col-md-2">
               <label for="codigo">C&oacute;digo</label>
               <input type="text" class="form-control" id="codigo" name="codigo" value="<?php echo $VarConsultaPatrimonio [0]['codigo_patrimonio']; ?>" readonly >
          </div>
          <div class="col-md-10">
               <label for="nome">Descrição do  Aparelho</label>
               <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $VarConsultaPatrimonio [0]['descricao']; ?>" >
          </div>
     </div>
     <br/>
     <div class="row">
          <div class="col-md-4">
               <label for="quantidade">Quantidade</label>
               <input type="text" class="form-control" id="quantidade" name="quantidade" value="<?php echo $VarConsultaPatrimonio [0]['quantidade']; ?>">
          </div>
          <div class="col-md-4">
               <label for="valor">Valor Un. Aparelho</label>
               <input type="text" class="form-control" id="valor" name="valor" value="<?php echo $VarConsultaPatrimonio [0]['valor']; ?>">
          </div>
          <div class="col-md-4">
               <label for="datepicker">Data Aquisição.</label>
               <input type="text" class="form-control" id="datepicker" name="datepicker" value="<?php echo $VarConsultaPatrimonio [0]['data']; ?>">
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
                         <option value="<?php echo $VarConsultaProfessor [$i]['codigo_professor']; ?>"<?php echo $VarConsultaProfessor [$i]['codigo_professor'] == $VarConsultaPatrimonio [0]['codigo_professor'] ? 'selected="selected"' : '' ?>>
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