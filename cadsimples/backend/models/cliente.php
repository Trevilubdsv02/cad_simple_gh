<?php

class selects{ //todos os selects
    
         public function select_cli(){ //select de clientes

$result = mysqli_query ($_SESSION["link"],"
select clientes.id,
clientes.nome_fantasia,
clientes.razao_social,
clientes.cnpj,
empresas.nome_empresas,
id_setor,
funcoes.nome_funcoes,
ramo_atividades.nome_ramos,
DATE_FORMAT(data_cadastro, '%d/%m/%Y ') as data_cadastro
from clientes
INNER JOIN empresas ON clientes.id_empresa = empresas.id
inner join funcoes on clientes.id_funcao = funcoes.id
inner join ramo_atividades on clientes.id_ramo_atividade = ramo_atividades.id
order by 'id'");

$lines = mysqli_num_rows($result);

while ($lines = mysqli_fetch_assoc ($result)) {
    echo "<tr>";
    echo "<td>".$lines['id']."</td>";
    echo "<td>".$lines['nome_fantasia']."</td>";
    echo "<td>".$lines['razao_social']."</td>";
    echo "<td>".$lines['cnpj']."</td>";
    echo "<td>".$lines['nome_empresas']."</td>";
    echo "<td>".$lines['id_setor']."</td>";
    echo "<td>".$lines['nome_funcoes']."</td>";
    echo "<td>".$lines['nome_ramos']."</td>";
    echo "<td>".$lines['data_cadastro']."</td>";
    echo "<td> <a href='form_clientes.php?id=".$lines['id']."' class='btn trev_azul_f'> <span class ='glyphicon glyphicon-pencil trev_branco'></span> </a></td>";
    echo "</tr>";
    }

}            

}

?>
