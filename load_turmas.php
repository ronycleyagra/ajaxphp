<?php
include("conn.php");
$valor = $_GET['nome'];
$sql = mysql_query(utf8_decode("select t.id as idturma, d.nome as nomedisciplina from turma t, disciplina d where t.id_disciplina = d.id order by d.nome;"));
$result = mysql_fetch_array($sql);
if(count($result) == 1){
    echo "<font size='4' color=red><br>NÃO HÁ TURMAS CADASTRADAS!</font>";
}else{
    $text = "<form>"
            . "<select style='font-size: 20px;' onchange='javascript: load_matriculas(this.value);'>"
            . "<option value='00'>---</option>"
            . "<option value='".$result['idturma']."'>".utf8_encode($result['nomedisciplina'])."</option>";
    while ($row = mysql_fetch_array($sql)) {
        $text .= "<option value='".$row['idturma']."'>".utf8_encode($row['nomedisciplina'])."</option>";
    }
    $text .= "</select></form>";
    echo $text;
}