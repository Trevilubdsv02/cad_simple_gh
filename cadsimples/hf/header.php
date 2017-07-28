<?php require_once ("backend/conexao.php") ?> 
<?php require_once ("backend/funcoes.php") ?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
      </style>
      <link href="<?php call_css()?>bootstrap.min.css" rel="stylesheet">
      <link href="<?php call_css()?>design.css" rel="stylesheet">
      

  </head>
  <body>
  
<div id="wrapper">
        <!--Menu-->

<nav class="navbar navbar-azul navbar-borders navbar-fixed-top navbar-measures navbar-zzindex" >
  <div class="container-fluid navbar-measures">
    <div class="navbar-header navbar-measures">
        <!-- itens menu TOP -->
        
       <div class="div-fmt2 navbar-marginup-items">
          <a href="#" class="btn btn-menu-color trev_azul" id="menu-toglle">
            <span class="glyphicon glyphicon-menu-hamburger"></span>
          </a>
        </div>
        <div class="div-fmt navbar-marginup-items">
             <h2 class="navbar-text navbar-right navbar-marginbot-items trev_amarelo trev-text trev-margin-left">TREVILUB</h2>
        </div>
          <!-- / -->
     
    </div>
  </div>
</nav>
  <!-- / -->

     
           <!-- Side Bar -->
             <div id="sidebar-wrapper" class="zz-dex1">
                <div class="sidebar-ul">
                    <ul class="sidebar-nav">
                        <li><a href="index.php" class=""> <span  class="glyphicon glyphicon-th-list sidebar-icons"></span> Tabela</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php call_page()?>form_clientes.php"><span  class="glyphicon glyphicon-user sidebar-icons"></span> Cadastro</a></li>
                    </ul>
                </div>
              </div>
            <!-- / -->

            

   
  
