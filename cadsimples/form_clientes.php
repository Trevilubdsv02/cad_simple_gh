<?php
require_once ("hf/header.php");
require_once ("backend/models/cliente.php");
?>
<div></div>
<?php if_title_cadatt()?>
                   <!-- Pagina -->
  <div id="page-wrapper">
      <div id="content" class="container-fluid container-ssf container-frescuras">
        <div class="row">
                <div class="col-md-12 col-xs-12 nav-padding">
                      <ul class="nav nav-tabs "> <!--TABS MENU -->
                        <li class="col-md-3 col-xs-3 active"><a class="icon-align-auto" href="#referencia_comercial">
                        <span class="glyphicon glyphicon-usd icon-size-26"></span>
                        <span class="hidden-sx">Ref. Comercial</span></a></li> 
                        <li class="col-md-3 col-xs-3" ><a class="icon-align-auto" href="#dados_empresa">
                        <span class="glyphicon glyphicon-home icon-size-26"></span>
                        <span class="hidden-sx">Dados Empresa</span></a></li> 
                        <li class="col-md-3 col-xs-3"><a class="icon-align-auto" href="#dados_pedido">
                        <span class="glyphicon glyphicon-shopping-cart icon-size-26"></span>
                        <span class="hidden-sx">Dados Pedido</span></a></li> 
                        <li class="col-md-3 col-xs-3"><a class="icon-align-auto margin-right-0" href="#informacao_adicional">
                        <span class="glyphicon glyphicon-asterisk icon-size-26"></span>
                        <span class="hidden-sx">Info. Adicional</span></a></li> 
                   </ul> <!-- TABS MENU -->
    
          <div class="tab-content"> <!-- TAB CONTENT -->
   
            <div id="referencia_comercial" class="tab-pane fade in active"> <!-- TAB REFERENCIA COMERCIAL  -->
               <div class="container-fluid">  <!--container de campos formulario   -->
                 <form action="" class=""> 
                    <div class="row">
                     <!--Campos do formulario    -->
                        <div class="form-group row margin-top-5">
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
                                    <option>E-mail</option>
                                    <option>Telefone</option>
                                    <option>Skype</option>
                                    <option>Telefone Corporativo</option>
                                    <option>Rádio</option>
                                    <option>Ramal</option>
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
                                                <label for="txt_favored_name_secondary">Nome Favorecido Secundário</label>
                                                <input class="form-control" id="txt_favored_name_secondary" type="text">
                                                <p class="help-block">Caso haja duas contas bancárias.</p>
                                              </div>
                                             </div>                                             
                                             <div class="form-group row">
                                              <div class="col-xs-4 padding-right-5">
                                                <label for="txt_bank_secondary">Banco Secundário</label>
                                                <input class="form-control" id="txt_bank_secondary" type="text">
                                                <p class="help-block">Caso haja duas contas bancárias.</p>
                                              </div>
                                              <div class="col-xs-3 padding-leftright-5">
                                                <label for="txt_agency_secondary">Agência Secundária</label>
                                                <input class="form-control" id="txt_agency_secondary" type="text">
                                                <p class="help-block">Caso haja duas contas bancárias.</p>
                                              </div>
                                              <div class="col-xs-5 padding-left-5">
                                                <label for="txt_account_secondary">Conta Corrente Secundária</label>
                                                <input class="form-control" id="txt_account_secondary" type="text">
                                                <p class="help-block">Caso haja duas contas bancárias.</p>
                                               </div>                                                                                            
                                             </div>  
                                             <div class="form-group row no-margin-bottom">
                                                 <div class="col-xs-12">
                                                  <label  for="txta_observations">Observações</label>                                           
                                                  <textarea id="txta_observations" class="form-control no-resize" rows="4" cols="50" maxlength="200"></textarea>
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
            </div> <!--//TAB REFERENCIA COMERCIAL   -->
                <div id="dados_empresa" class="tab-pane fade"> <!-- TAB DADOS EMPRESA  -->
                   <div class="container-fluid">  <!--container de campos formulario   -->
                     <form action="" class=""> 
                       <div class="row">
                           <div class="form-group row margin-top-5">  
                            <div class=" col-xs-12">                
                               <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                                  <input type="text" class="form-control input-md" disabled placeholder="Enviar Imagem">
                                  <span class="input-group-btn">
                                    <button class="browse btn btn-primary input-md trev_azul_claro" type="button"><i class="glyphicon glyphicon-search"></i> Procurar</button>
                                  </span>
                               </div>
                             </div>  
                        </div>                         
                        <div class="form-group row ">  
                            <div class="padding-right-5 col-xs-6"> 
                                <label for="txt_social_name">Razão Social</label>
                                <input class="form-control" id="txt_social_name" type="text">
                            </div>  
                            <div class="padding-left-5 col-xs-6"> 
                                <label for="txt_social_name_previous">Razão Social Anterior</label>
                                <input class="form-control" id="txt_social_name_previous" type="text">
                            </div> 
                        </div>
                        <div class="form-group row "> <!--l3   --> 
                        <div class="col-xs-6 padding-right-5">
                                <label for="txt_flag">Bandeira</label>
                                <input class="form-control" id="txt_flag" type="text">
                        </div>
                        <div class="col-xs-6 padding-left-5">
                                <label for="sel_client_type">Tipo Cliente</label>
                                <select class="form-control input-md padding-left-5" id="sel_client_type">
                                    <option>Preencher no banco</option>
                                    <option>Preencher no banco</option>
                                    <option>Preencher no banco</option>
                                </select>
                        </div>
                        </div>
                        <div class="form-group row "> <!--l4   --> 
                        <div class="col-xs-4 padding-right-5">
                                <label for="sel_trevilub_company">Trevilub Empresa</label>
                                <select class="form-control input-md padding-left-5" id="sel_trevilub_company">
                                    <option>Americana</option>
                                    <option>Vale</option>
                                </select>
                        </div>
                        <div class="col-xs-4 padding-leftright-5">
                                <label for="sel_visit_frequency">Frequência da Visita</label>
                                <select class="form-control input-md padding-left-5" id="sel_visit_frequency">
                                    <option>A Cada X Dias</option>
                                    <option>A Cada Y Dias</option>
                                    <option>A Cada Z Dias</option>
                                </select>
                        </div>
                        <div class="col-xs-4 padding-left-5">
                                <label for="sel_visit_day">Dia da Visita</label>
                                <select class="form-control input-md padding-left-5" id="sel_visit_day">
                                    <option>Domingo</option>
                                    <option>Segunda</option>
                                    <option>Terça</option>
                                    <option>Quarta</option>
                                    <option>Quinta</option>
                                    <option>Sexta</option>
                                    <option>Sábado</option>
                                </select>
                        </div>
                        </div>
                        <div class="form-group row "> <!--l5   --> 
                        <div class="col-xs-6 padding-right-5">
                                <label for="txt_cnpj">CNPJ</label>
                                <input class="form-control" id="txt_cnpj" type="text">
                        </div>
                        <div class="col-xs-6 padding-left-5">
                                <label for="txt_state_registration">Inscrição Estadual</label>
                                <input class="form-control" id="txt_state_registration" type="text">
                        </div>
                        </div>
                        <div class="form-group row "> <!--l6   --> 
                        <div class="col-xs-6 padding-right-5 ">
                                <label for="txt_service_branch">Ramo Atendimento</label>
                                <input class="form-control" id="txt_service_branch" type="text">
                        </div>
                        <div class="col-xs-6 padding-left-5">
                                <label for="sel_function">Função</label>
                                <select class="form-control input-md padding-left-5" id="sel_function">
                                    <option>Inclusão (Reativação)</option>
                                    <option>Alteração</option>
                                    <option>Reativação</option>
                                    <option>Atualização</option>
                                    <option>Inativar</option>
                                    <option>Exclusão</option>
                                </select>
                        </div>
                        </div>
                        <div class="form-group row "> <!--l8   --> 
                        <div class="col-xs-6 padding-right-5">
                                <label for="sel_state">Estado</label>
                                <select class="form-control input-md padding-right-5" id="sel_state">
                                    <option>Java when</option>
                                </select>
                        </div>
                        <div class="col-xs-6 padding-left-5">
                                <label for="sel_city">Cidade</label>
                                <select class="form-control input-md padding-left-5" id="sel_city">
                                    <option>Java when2</option>
                                </select>
                        </div>
                        </div>
                        <div class="form-group row "> <!--l9  --> 
                        <div class="col-xs-12">
                                <label for="txt_company_neighborhood">Bairro</label>
                                <input class="form-control" id="txt_company_neighborhood" type="text">
                        </div>
                        </div>
                        <div class="form-group row "> <!--l10  --> 
                        <div class="col-sm-10 col-xs-9 padding-right-5">
                                <label for="txt_company_address">Endereço</label>
                                <input class="form-control" id="txt_company_address" type="text">
                        </div>
                        <div class="col-sm-2 col-xs-3 padding-left-5">
                                <label for="txt_company_number">Número</label>
                                <input class="form-control" id="txt_company_number" type="text">
                        </div>
                        </div>
                        <div class="form-group row "> <!--l11  --> 
                        <div class="col-xs-12">
                                <label for="txt_referency_point">Ponto de Referência</label>
                                <input class="form-control" id="txt_referency_point" type="text">
                        </div>
                        </div>
                        <div class="form-group row "> <!--l12 --> 
                        <div class="col-xs-12">
                                <label for="txt_onwer_name">Nome do Proprietário</label>
                                <input class="form-control" id="txt_enwer_name" type="text">
                        </div>
                        </div>
                        <div class="form-group row "> <!--l13  --> 
                        <div class="col-xs-6 padding-right-5">
                                <label for="txt_company_phone">Telefone</label>
                                <input class="form-control" id="txt_company_phone" type="text">
                        </div>
                        <div class="col-xs-6 padding-left-5">
                                <label for="txt_company_cellphone">Celular</label>
                                <input class="form-control" id="txt_company_cellphone" type="text">
                        </div>
                        </div>
                        <div class="form-group row "> <!--l15  --> 
                        <div class="col-xs-12">
                                <label for="txt_company_email">E-Mail</label>
                                <input class="form-control" id="txt_company_email" type="text">
                        </div>
                        </div>
                        <div class="form-group row "> <!--l16  --> 
                        <div class="col-xs-12">
                                <label for="txt_company_site">Site da Empresa</label>
                                <input class="form-control" id="txt_company_site" type="text">
                        </div>
                        </div>
                        <div class="form-group row "> <!--l17  --> 
                        <div class="col-xs-12">
                                <label for="txt_company_email_fiscal">E-Mail Nota Fiscal Eletronica</label>
                                <input class="form-control" id="txt_company_email_fiscal" type="text">
                        </div>
                        </div>
                    </div>
                     </form>  
                    </div>  
                </div> <!-- //TAB DADOS EMPRESA  -->
                <div id="dados_pedido" class="tab-pane fade"> <!-- TAB DADOS PEDIDO  -->
               <div class="container-fluid">  <!--container de campos formulario   -->
                 <form action="" class=""> 
                    <div class="row">
                            <div class="form-group row margin-top-5"><!-- Aba para PEDIDO -->
                           <div class="col-xs-12 nav-padding"> <!-- Aba para PEDIDO -->
                               <div class="panel panel-primary no-margin-bottom">
                                   <div data-toggle="collapse" href="#collapse_pedido" class="panel-heading cursor-pointer">
                                       <h1 class="panel-title">
                                           <a class="panel-links" data-toggle="collapse" href="#collapse_pedido"> Pedido <span class="glyphicon glyphicon-chevron-down pull-right"></span></a>
                                       </h1>
                                  </div>
                                   <div id="collapse_pedido" class="panel-collapse collapse">
                                       <div class="panel-body">
                                    <!--Formulario PEDIDO/collapse  -->
                                           <form class="">
                                               <div class="form-group row">  
                                                   <div class="col-xs-3 padding-right-5">
                                                       <label for="txt_request_id">ID</label>
                                                       <input class="form-control" id="txt_request_id" type="text">
                                                   </div>
                                                   <div class="col-xs-9 padding-left-5">
                                                       <label for="txt_request_seller">Nome Vendedor</label>
                                                       <input class="form-control" id="txt_request_seller" type="text">
                                                   </div>
                                               </div>
                                               <div class="form-group row">  
                                                   <div class="col-xs-6 padding-right-5">
                                                       <label for="txt_request_id">Budget Faturamento</label>
                                                       <input class="form-control" id="txt_request_revenue" type="text">
                                                   </div>
                                                   <div class="col-xs-6 padding-left-5">
                                                       <label for="txt_request_id">Budget G1</label>
                                                       <input class="form-control" id="txt_request_g1" type="text">
                                                   </div>
                                               </div>
                                               <div class="form-group row no-margin-bottom"> 
                                                   <div class="col-xs-7 padding-right-5">
                                                       <label for="txt_request_id">Valor Pedido</label>
                                                       <input class="form-control" id="txt_request_g1" type="text">
                                                       <p class="help-block">Não colocar centavos.</p>
                                                   </div>
                                                   <div class="col-xs-5 padding-leftright-5">
                                                      <label for="sel_cons_loco">Constatação Loco</label>
                                                       <select class="form-control input-md padding-left-5" id="sel_cons_loco">
                                                           <option>Sim</option>
                                                           <option>Não</option>
                                                       </select>
                                                   </div>
                                                   <div class="col-xs-2 padding-left-5">
                                                   </div>                                                   
                                               </div>
                                           </form>
                                    <!--//Formulario PEDIDO/collapse  -->
                                       </div>
                                   </div>
                                </div>
                           </div> <!-- //Aba para PEDIDO -->
                        </div> <!-- //Aba para PEDIDO -->
                            <div class="form-group row"><!-- Aba para ENTREGA PEDIDO -->
                           <div class="col-xs-12 nav-padding"> <!-- Aba para ENTREGA PEDIDO -->
                               <div class="panel panel-primary no-margin-bottom">
                                   <div data-toggle="collapse" href="#collapse_pedido_entrega" class="panel-heading cursor-pointer">
                                       <h1 class="panel-title">
                                           <a class="panel-links" data-toggle="collapse" href="#collapse_pedido_entrega"> Entrega <span class="glyphicon glyphicon-chevron-down pull-right"></span></a>
                                       </h1>
                                  </div>
                                   <div id="collapse_pedido_entrega" class="panel-collapse collapse">
                                       <div class="panel-body">
                                    <!--Formulario ENTREGA PEDIDO/collapse  -->
                                           <form class="">
                                            <div class="form-group row">
                                               <div class="col-xs-9 padding-right-5">
                                                <label for="txt_delivery_addres">Endereço</label>
                                                <input class="form-control" id="txt_delivery_addres" type="text">
                                               </div>
                                               <div class="col-xs-3 padding-left-5">
                                                <label for="txt_delivery_number">Número</label>
                                                <input class="form-control" id="txt_delivery_number" type="text">
                                               </div>
                                             </div>
                                            <div class="form-group row">
                                               <div class="col-xs-12">
                                                <label for="txt_delivery_neighborhood">Bairro</label>
                                                <input class="form-control" id="txt_delivery_neighborhood" type="text">
                                               </div>
                                            </div>
                                           <div class="form-group row no-margin-bottom">  
                                            <div class="col-xs-8 padding-right-5"> <!--Select  -->
                                              <label for="sel_delivery_city">Cidade</label>
                                               <select class="form-control input-md padding-left-5" id="sel_delivery_city">
                                                   <option> <!-- select cidades --> </option>
                                               </select>
                                            </div>
                                              <div class="col-xs-4 padding-left-5">
                                               <label for="txt_delivery_cep">CEP</label>
                                               <input class="form-control" id="txt_delivery_cep" type="text">
                                              </div>
                                           </div>
                                         </form>
                                    <!--//Formulario ENTREGA PEDIDO/collapse  -->
                                       </div>
                                   </div>
                                </div>
                           </div> <!-- //Aba para ENTREGA PEDIDO -->
                        </div> <!-- //Aba para ENTREGA PEDIDO -->
                            <div class="form-group row"><!-- Aba para COBRANÇA PEDIDO -->
                           <div class="col-xs-12 nav-padding"> <!-- Aba para COBRANÇA PEDIDO -->
                               <div class="panel panel-primary no-margin-bottom">
                                   <div data-toggle="collapse" href="#collapse_pedido_cobranca" class="panel-heading cursor-pointer">
                                       <h1 class="panel-title">
                                           <a class="panel-links" data-toggle="collapse" href="#collapse_pedido_cobranca"> Cobrança
                                            <span class="glyphicon glyphicon-chevron-down pull-right"></span> </a>
                                       </h1>
                                  </div>
                                   <div id="collapse_pedido_cobranca" class="panel-collapse collapse">
                                       <div class="panel-body">
                                    <!--Formulario COBRANÇA PEDIDO/collapse  -->
                                           <form class="">
                                            <div class="form-group row">
                                               <div class="col-xs-9 padding-right-5">
                                                <label for="txt_collection_addres">Endereço</label>
                                                <input class="form-control" id="txt_collection_addres" type="text">
                                               </div>
                                               <div class="col-xs-3 padding-left-5">
                                                <label for="txt_collection_number">Número</label>
                                                <input class="form-control" id="txt_collection_number" type="text">
                                               </div>
                                             </div>
                                            <div class="form-group row">
                                               <div class="col-xs-12">
                                                <label for="txt_collection_neighborhood">Bairro</label>
                                                <input class="form-control" id="txt_collection_neighborhood" type="text">
                                               </div>
                                            </div>
                                           <div class="form-group row no-margin-bottom">  
                                            <div class="col-xs-8 padding-right-5"> <!--Select  -->
                                              <label for="sel_collection_city">Cidade</label>
                                               <select class="form-control input-md padding-left-5" id="sel_collection_city">
                                                    <option> <!-- select cidades --> </option>
                                               </select>
                                            </div>
                                              <div class="col-xs-4 padding-left-5">
                                               <label for="txt_collection_cep">CEP</label>
                                               <input class="form-control" id="txt_collection_cep" type="text">
                                              </div>
                                           </div>
                                         </form>
                                    <!--//Formulario COBRANÇA PEDIDO/collapse  -->
                                       </div>
                                   </div>
                                </div>
                           </div> <!-- //Aba para COBRANÇA PEDIDO -->
                        </div> <!-- //Aba para COBRANÇA PEDIDO -->
                      </div><!--//ROW  -->
                    </form>
                 </div>
            </div> <!-- //TAB DADOS PEDIDO  -->
                <div id="informacao_adicional" class="tab-pane fade"> <!-- TAB INFORMAÇAO ADICIONAL  -->
               <div class="container-fluid">  <!--container de campos formulario   -->
                 <form action="" class=""> 
                    <div class="row">
                        <div class="form-group row margin-top-5">
                            <div class="col-xs-12">
                                <label  for="txta_how_meet">Como Conheceu</label>                                    
                                <select class="form-control input-md padding-left-5" id="sel_contat_type">
                                    <option>Google</option>
                                    <option>Contato Telefonico</option>
                                    <option>Indicação de Amigos</option>
                                    <option>Visita de Vendas</option>
                                    <option>E-Mail de Marketing</option>
                                    <option>Mala Direta</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-12">
                                <label  for="txta_seller_client">Conceito Vendedor da Estrutura do Cliente</label>                                    
                                <textarea id="txta_seller_client" class="form-control no-resize" rows="4" cols="50" maxlength="200"></textarea>
                            </div>
                        </div>
                    </div>
                 </form>
                </div>            
                </div> <!-- //TAB INFORMAÇAO ADICIONAL  -->
          </div><!--//TAB CONTENT  -->
        </div>
    </div>
<?php
require_once ("hf/footer.php");
?>