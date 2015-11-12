<?php
include_once ("config/conexao.php");
include_once ("config/mysqlmanager.php");
$db = new MysqlManager();
include ("classe/classAlunos.php");
$clsAlunos = new Alunos();
require_once("dompdf/dompdf_config.inc.php");
$VarRelAlunos = $clsAlunos->RelAlunos();
$html = '<html><header></header><body>';
$html .= '
 <table width="100%"  border="1" bordercolor="#CCCCCC" style="border-collapse:collapse;" cellpadding="0" cellspacing="0" id="tbl_relatorio" >
    <tr>
    <th>Código Mensalidade</th>
    <th>Usuário Cad.</th>
    <th>Data Cad.</th>
    <th>Usuario Exclusão</th>
    <th>Data Exclusão</th>
  </tr>
';
for ($i = 0; $i < count($VarRelAlunos); $i++) {
     $html .= '
               <tr>
               <td>'.$VarRelAlunos [$i]['codigo_paciente'].'</td>
               <td>'.$VarRelAlunos [$i]['aluno'].'</td>
               <td>'.$VarRelAlunos [$i]['telefone_celular'].'</td>
               <td>'.$VarRelAlunos [$i]['endereco'].'</td>
               <td>'.$VarRelAlunos [$i]['bairro'].'</td>
               </tr>
     ';	  
}
$html .= '</table></body></html>';
$dompdf = new DOMPDF();
$dompdf-> load_html($html);
$dompdf-> render();
$dompdf-> stream(time()."pilates.pdf");
