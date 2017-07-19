<?php

class selects{ //todos os selects
    
         public function select_cli(){ //select de clientes

$result = mysqli_query ($_SESSION["link"],"select * from clientes order by 'id'");

$lines = mysqli_num_rows($result);

while ($lines = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$lines['id']."</td>";
    echo "<td>".$lines['nome_fantasia']."</td>";
    echo "<td>".$lines['razao_social']."</td>";
    echo "<td>".$lines['cnpj']."</td>";
    echo "<td>".$lines['id_empresa']."</td>";
    echo "<td>".$lines['id_setor']."</td>";
    echo "<td>".$lines['id_funcao']."</td>";
    echo "<td>".$lines['id_ramo_atividade']."</td>";
    echo "<td>".$lines['data_cadastro']."</td>";
    echo "</tr>";
    }
}   
}

?>