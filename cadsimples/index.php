<?php
require_once ("backend/funcoes.php");
?>         
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="<?php call_js()?>bootstrap.min.js"></script>     
<script src="<?php call_js()?>jsneed.js"></script>
<link href="<?php call_css()?>bootstrap.min.css" rel="stylesheet">
<link href="<?php call_css()?>design.css" rel="stylesheet">
    
<title>Tabela de Clientes</title>
<div id="page-login">
      <div id="content" class="container-fluid container-ssf container-frescuras">
              <div class="form-group row">
                 <h1 class="trev_amarelo trev-text trev-margin-left">
                 <span class="font-align font-size-25 visible-xs">Trevilub</span>
                 <span class="font-align font-size-35 visible-sm">Trevilub</span>
                 <span class="font-align font-size-40 visible-md">Trevilub</span>
                 <span class="font-align font-size-50 visible-lg">Trevilub</span>         
                 </h1>
              </div>
              <div class="form-group row margin-top-5">
                 <div class="col-xs-12">
                 <span class="font-size-35 visible-xs"><label for="txt_user">Usuário:</label></span>
                 <span class="font-size-25 visible-sm"><label for="txt_user">Usuário:</label></span>
                 <span class="font-size-20 visible-md"><label for="txt_user">Usuário:</label></span>
                 <span class="font-size-20 visible-lg"><label for="txt_user">Usuário:</label></span>  
                    <input class="form-control input-lg" id="txt_user" type="text">
                 </div>
               </div>
               <div class="form-group row">
                 <div class="col-xs-12">
                 <span class="font-size-35 visible-xs"><label for="txt_password">Senha:</label></span>
                 <span class="font-size-25 visible-sm"><label for="txt_password">Senha:</label></span>
                 <span class="font-size-20 visible-md"><label for="txt_password">Senha:</label></span>
                 <span class="fo     nt-size-20 visible-lg"><label for="txt_password">Senha:</label></span> 
                    <input class="form-control input-lg" id="txt_password" type="text">
                 </div>
              </div>
              <div class="form-group row margin-top-5">
                <div class="col-xs-12">
                  <a href="tabela_clientes.php" class="btn btn-default btn-lg col-xs-12 trev_branco trev_azul_f">
                    <span class="font-size-20">Entrar</span>
                  </a>
                </div>
              </div>
<?php
require_once ("hf/footer.php");
?>