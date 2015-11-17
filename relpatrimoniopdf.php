<?php
include_once ("config/conexao.php");
include_once ("config/mysqlmanager.php");
$db = new MysqlManager();
include ("classe/classPatrimonio.php");
$clsPatrimonio = new Patrimonio();
require_once("dompdf/dompdf_config.inc.php");
$VarRelPatrimonio = $clsPatrimonio->RelPatrimonio();
$html = '<html><header></header><body>';
$html .= '
     <h2>Relatorio de Patrimonios</h2>
 <table width="100%"  border="1" bordercolor="#CCCCCC" style="border-collapse:collapse;" cellpadding="0" cellspacing="0" id="tbl_relatorio" >
<tr>
<th>Código</th>
<th>Nome do Material</th>
<th>Data Aquis.</th>
<th>Quantidade</th>
<th>Valor</th>
<th>Proprietario</th>
</tr>
';
for ($i = 0; $i < count($VarRelPatrimonio); $i++) {
     $html .= '
               <tr>
               <td>'.$VarRelPatrimonio [$i]['codigo_patrimonio'].'</td>
               <td>'.$VarRelPatrimonio [$i]['descricao'].'</td>
               <td>'.$VarRelPatrimonio [$i]['data'].'</td>
               <td>'.$VarRelPatrimonio [$i]['quantidade'].'</td>
               <td>'.$VarRelPatrimonio [$i]['valor'].'</td>
               <td>'.$VarRelPatrimonio [$i]['nome'].'</td>
               </tr>
     ';	  
}
$html .= '</table></body></html>';
$dompdf = new DOMPDF();
$dompdf-> load_html($html);
$dompdf-> render();
$dompdf-> stream(time()."pilates.pdf");
