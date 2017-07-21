<?php
require_once ("hf/header.php");
?>
<?php
require_once ("backend/models/cliente.php");
?>             

            <div class="row">
                <div class="col-lg-12">
                    <table class="table">
                           <thead>
                               <tr>
                                   <th>ID</th>
                                   <th>Nome Fantasia</th>
                                   <th>Razao Social</th>
                                   <th>Cnpj</th>
                                   <th>Empresa Atendente</th>
                                   <th>Setor</th>
                                   <th>Função</th>
                                   <th>Ramo de Atividade</th>
                                   <th>Data de Cadastro</th>
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
          <a href="#" class="btn trev_azul trev_azul_f btn-plus-table">
            <span class=" glyphicon glyphicon-plus trev_branco"></span>
          </a>
                </div>
            </div>
<?php
require_once ("hf/footer.php");

?>