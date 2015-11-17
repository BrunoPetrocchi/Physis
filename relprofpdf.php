<?php
include_once ("config/conexao.php");
include_once ("config/mysqlmanager.php");
$db = new MysqlManager();
include ("classe/classProfessor.php");
$clsProfessor = new Professores();
require_once("dompdf/dompdf_config.inc.php");
$VarRelProfessor = $clsProfessor->RelProfessor();
$html = '<html><header></header><body>';
$html .= '
     <h2>Relatorio de Professores</h2>
 <table width="100%"  border="1" bordercolor="#CCCCCC" style="border-collapse:collapse;" cellpadding="0" cellspacing="0" id="tbl_relatorio" >
<tr>
<th>Código</th>
<th>Nome</th>
<th>Tel. Celular</th>
<th>Endereço</th>
<th>Bairro</th>
<th>Crefito</th>
</tr>
';
for ($i = 0; $i < count($VarRelProfessor); $i++) {
     $html .= '
               <tr>
               <td>'.$VarRelProfessor [$i]['codigo_professor'].'</td>
               <td>'.$VarRelProfessor [$i]['nome'].'</td>
               <td>'.$VarRelProfessor [$i]['telefone_celular'].'</td>
               <td>'.$VarRelProfessor [$i]['endereco'].'</td>
               <td>'.$VarRelProfessor [$i]['bairro'].'</td>
               <td>'.$VarRelProfessor [$i]['crefito'].'</td>
               </tr>
     ';	  
}
$html .= '</table></body></html>';
$dompdf = new DOMPDF();
$dompdf-> load_html($html);
$dompdf-> render();
$dompdf-> stream(time()."pilates.pdf");
