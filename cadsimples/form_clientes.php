   
<?php
require_once ("hf/header.php");
?>

<?php 
if ($_GET['id']== null){
    echo "<title> CADASTRO </title>";
}
else {
    echo "<title> ATT</title>";
} ?>

<?php
require_once ("backend/models/cliente.php");
?>             

        <div class="row">
               
                <div class="col-lg-12 nav-padding">
                   
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a href="#home">Ref. Comercial</a></li>
                        <li><a href="#menu1">Dados Empresa</a></li>
                        <li><a href="#menu2">Dados Pedido</a></li>
                        <li><a href="#menu3">Info. Adicional</a></li>
                    </ul>

          <div class="tab-content">
   
            <div id="home" class="tab-pane fade in active">
               <div class="container-fluid">  <!--container de campos formulario   -->
                 <form action="" class=""> 
                    <div class="row">
                     <!--Campos do formulario    -->
                        <div class="form-group row">
                          <div class="col-xs-12">
                            <label for="txt_person_name">Nome Pessoa</label>
                            <input class="form-control" id="txt_person_name" type="text">
                          </div>
                         </div>
                         
                        <div class="form-group row">
                          <div class="col-xs-8 padding-right-5">
                            <label for="txt_contat">Contato</label>
                            <input class="form-control" id="txt_contat" type="text">
                          </div>
                        
                           <div class="col-xs-4 padding-left-5"> <!--Select  -->
                               <label for="sel_contat_type">Tipo Contato</label>
                                <select class="form-control input-md padding-left-5" id="sel_contat_type">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                         </div>
                            <div class="form-group row">
                           <div class="col-xs-12 nav-padding"> <!-- Aba para a referencia bancaria -->
                               <div class="panel panel-primary no-margin-bottom">
                                   <div data-toggle="collapse" href="#collapse0" class="panel-heading cursor-pointer">
                                       <h1 class="panel-title">
                                           <a class="panel-links" data-toggle="collapse" href="#collapse0"> Referência Bancária <span class="glyphicon glyphicon-chevron-down pull-right"></span></a>
                                       </h1>
                                  </div>

                                   <div id="collapse0" class="panel-collapse collapse">
                                       <div class="panel-body">
                                    <!--Formulario Referencia bancaria/collapse  -->
                                           <form class="">
                                             <div class="form-group row">
                                              <div class="col-xs-12">
                                                <label for="txt_favored_name">Nome Favorecido</label>
                                                <input class="form-control" id="txt_favored_name" type="text">
                                              </div>
                                             </div>
                                             <div class="form-group row">
                                              <div class="col-xs-4 padding-right-5">
                                                <label for="txt_bank">Banco</label>
                                                <input class="form-control" id="txt_bank" type="text">
                                              </div>
                                              <div class="col-xs-3 padding-leftright-5">
                                                <label for="txt_agency">Agência</label>
                                                <input class="form-control" id="txt_agency" type="text">
                                              </div>
                                              <div class="col-xs-5 padding-left-5">
                                                <label for="txt_account">Conta Corrente</label>
                                                <input class="form-control" id="txt_account" type="text">
                                              </div>                                                                                            
                                             </div>
                                             <div class="form-group row">
                                              <div class="col-xs-12">
                                                <label for="txt_favored_name">Nome Favorecido Secundário</label>
                                                <input class="form-control" id="txt_favored_name" type="text">
                                                <p class="help-block">Caso haja duas contas bancárias.</p>
                                              </div>
                                             </div>                                             
                                             <div class="form-group row">
                                              <div class="col-xs-4 padding-right-5">
                                                <label for="txt_bank">Banco Secundário</label>
                                                <input class="form-control" id="txt_bank" type="text">
                                                <p class="help-block">Caso haja duas contas bancárias.</p>
                                              </div>
                                              <div class="col-xs-3 padding-leftright-5">
                                                <label for="txt_agency">Agência Secundária</label>
                                                <input class="form-control" id="txt_agency" type="text">
                                                <p class="help-block">Caso haja duas contas bancárias.</p>
                                              </div>
                                              <div class="col-xs-5 padding-left-5">
                                                <label for="txt_account">Conta Corrente Secundária</label>
                                                <input class="form-control" id="txt_account" type="text">
                                                <p class="help-block">Caso haja duas contas bancárias.</p>
                                               </div>                                                                                            
                                             </div>  
                                             <div class="form-group row no-margin-bottom">
                                                 <div class="col-xs-12">
                                                  <label  for="txt_account">Observações</label>                                           
                                                  <textarea class="form-control no-resize" rows="4" cols="50" maxlength="200"></textarea>
                                                 </div>
                                             </div>                                           
                                           </form>
                                    <!--//Formulario Referencia bancaria/collapse  -->
                                       </div>
                                   </div>
                                </div>
                           </div> <!-- //Aba para a referencia bancaria -->
                        </div>
                     </div>
                  </form>
                </div>
            </div>
    
                <div id="menu1" class="tab-pane fade">
                  <h3>Menu 1</h3>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <div id="menu2" class="tab-pane fade">
                  <h3>Menu 2</h3>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>

                <div id="menu3" class="tab-pane fade">
                  <h3>Menu 3</h3>
                  <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
    
          </div>
       
       
            </div>
    </div>
    

<?php
require_once ("hf/footer.php");

?>