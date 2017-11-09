<?php
include("conn.php");
$id_turma = $_GET['id_turma'];
$sql = mysql_query(utf8_decode("select a.id as idaluno, a.nome as nomealuno "
        . "from matricula m, aluno a "
        . "WHERE id_turma = '$id_turma' and a.id = m.id_aluno "
        . "order by a.nome"));
$result = mysql_fetch_array($sql);
if(count($result) == 1){
    echo "<font size='4' color='red'><br>NENHUM RESULTADO ENCONTRADO!</font>";
}else{
    $text = 
            "<table width='60%' border='1'>"
            . "<tr>"
            . "<td width='30%' style='font-size: 17px;'><b>ID</b></td>"
            . "<td width='70%' style='font-size: 17px;'><b>NOME</b></td>"
            . "</tr>"
            . "<tr>"
            . "<td style='font-size: 17px;'>".$result['idaluno']."</td>"
            . "<td style='font-size: 17px;'>".utf8_encode($result['nomealuno'])."</td>"
            . "</tr>";
    while ($row = mysql_fetch_array($sql)) {
        $text .= "<tr>"
                . "<td style='font-size: 17px;'>".$row['idaluno']."</td>"
                . "<td style='font-size: 17px;'>".utf8_encode($row['nomealuno'])."</td>"
                . "</tr>";
    }
    $text .= "</table>";
    echo $text;
}