<?php
include_once ("config/conexao.php");
include_once ("config/mysqlmanager.php");
$db = new MysqlManager();
include ("classe/classLog.php");
$clsLog = new Log();
require_once("dompdf/dompdf_config.inc.php");
$VarRellog = $clsLog->RelLog();
$html = '<html><header></header><body>';
$html .= '
     <h2>Relatorio de Log Mensalidades</h2>
 <table width="100%"  border="1" bordercolor="#CCCCCC" style="border-collapse:collapse;" cellpadding="0" cellspacing="0" id="tbl_relatorio" >
<tr>
<th>Professor</th>
<th>Mensalidade</th>
<th>Data Alteração</th>
<th>Aluno</th>
<th>Apagado</th>
<th>Usuário</th>
</tr>
';
for ($i = 0; $i < count($VarRellog); $i++) {
     $html .= '
               <tr>
               <td>'.$VarRellog [$i]['PROFESSOR'].'</td>
               <td>'.$VarRellog [$i]['codigo_mensalidade'].'</td>
               <td>'.date('d/m/Y - h:i:s ' , $VarRellog [$i]['data_alteracao']).'</td>
               <td>'.$VarRellog [$i]['ALUNO'].'</td>
               <td>'.$VarRellog [$i]['regapagado'].'</td>
               <td>'.$VarRellog [$i]['regusuario'].'</td>
               </tr>
     ';	  
}
$html .= '</table></body></html>';
$dompdf = new DOMPDF();
$dompdf-> load_html($html);
$dompdf-> render();
$dompdf-> stream(time()."pilates.pdf");
