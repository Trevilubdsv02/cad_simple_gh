<?php
require_once ("hf/header.php");
?>
<?php
require_once ("backend/models/cliente.php");
?>             
<title>Tabela de Clientes</title>
<div id="page-wrapper">
      <div id="content" class="container-fluid container-ssf container-frescuras">
            <div class="row">
                <div class="table-responsive">
                    <table class="table">
                           <thead>
                               <tr>
                                   <th>ID</th>
                                   <th>Nome Fantasia</th>
                                   <th>Razao Social</th>
                                   <th>Cnpj</th>
                                   <th>Emp. Atendente</th>
                                   <th>Setor</th>
                                   <th>Função</th>
                                   <th>Ramo Atividade</th>
                                   <th>Data Cadastro</th>
                                   <th></th>
                               </tr>
                           </thead>
                           
                           <tbody>
                             <tr>
                                <?php                          
                                 $function = new selects();
                                 $var = $function->select_cli();
                                ?>                            
                             </tr>
 
                              
                           </tbody>
                                                   
                    </table>
          <a href="form_clientes.php" class="btn trev_azul trev_azul_f btn-plus-table">
            <span class=" glyphicon glyphicon-plus trev_branco"></span>
          </a>
                </div>
            </div>
<?php
require_once ("hf/footer.php");

?>