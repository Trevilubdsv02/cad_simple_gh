<?php
require_once ("hf/header.php");
?>
<?php
require_once ("backend/funcoes.php");
?>             

            <div class="row">
                <div class="col-lg-12">
                    <table class="table">
                           <thead>
                               <tr>
                                   <th>ID</th>
                                   <th>DIA_SM</th>
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
                </div>
            </div>
<?php
require_once ("hf/footer.php");

?>