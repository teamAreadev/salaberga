<?php
session_start();


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/icone_salaberga.png" type="image">
  <meta name="description" content="">
  <title>Index</title>
  
  <style type="text/css">
  
  #menu-9{
    height: 12%;
    background-color: rgb(239, 239, 239);;
  }

  #features6-a{
    background-color: rgb(139, 139, 139);
    height: 58%;
  }

  #contacts1-b{
    background-color: rgb(46, 46, 46);
    padding-top: 40px;
    padding-bottom: 60px;
    height: 30%;
  }

  #text_cad{
    color: white;
    font-family: raleway;
    font-size: 18px;
    font-weight:bold;
    letter-spacing: 3px;
    }

  #btn_cad{
    font-family: raleway;
    font-weight:bold;
    padding-right: 95px;
    padding-left: 95px;
  }



  #optModal{
    font-size: 20px;
    width: 100%;
    height: 30px;
    padding-left: 10px;
    font-weight: bold;
  }


  #inputModal3{
    width: 100%;
    height: 30px;
    padding-left: 10px;
    font-size: 14px;
    font-weight: bold;
   
  }

  #separador1{
    width: 840px;
    height: 50px;
    margin-top: 50px;
    margin-bottom: -3px;
  }
  #separador2{
    width: 840px;
    height: 50px;
    margin-top: 10px;
    margin-bottom: 3px;
  }
  #separador3esquerda{
    width: 206px;
    height: 50px;
    float: left;
    margin-right: 5.3px;
  }
  #separador3direita{
    width: 206px;
    height: 50px;
    float: left;
  }
  #separador4esquerda{
    width: 86px;
    height: 50px;
    float: left;
    margin-right: 4.5px;  
  }
  #separador4direita{
    width: 101px;
    height: 50px;
    float: left;
  }

  #separadorBtn{
    width: 840px;
    height: 50px;
    margin-top: 20px;
  }


#btn1{
  width: 100%;  
}

#separador{
  height: 5px;
  width: 100%;
}

</style><!--INÍCIO DO MENU CADASTRAR-->
 <script type="text/javascript">    
   function mascara(data){ 
if(data.value.length == 2)
     data.value = data.value + '/' ; //quando começamos a digitar, o script irá inserir um parênteses no começo do campo.
if(data.value.length == 5)
     data.value = data.value + '/' ; //quando começamos a digitar, o script irá inserir um parênteses no começo do campo.
}

   function fone(fone){ 
if(fone.value.length == 1)
     fone.value =  '(' + fone.value ; //quando começamos a digitar, o script irá inserir um parênteses no começo do campo.
if(fone.value.length == 3)
     fone.value = fone.value + ')' ; //quando começamos a digitar, o script irá inserir um parênteses no começo do campo.
if(fone.value.length == 9)
     fone.value = fone.value + '-' ; //quando começamos a digitar, o script irá inserir um parênteses no começo do campo.
}
    </script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/et-line-font-plugin/style.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>

  

  
</head>
<body>
<section id="menu-9">

    <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">
                    <div class="navbar-brand">
                        <a href="#" class="navbar-logo"><img src="assets/images/ImagemX.png" alt=""></a>
                    </div>
                </div>
                
                <div class="mbr-table-cell">
                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>




                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">



                      <li class="nav-item dropdown open">
                        <a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="" aria-expanded="true">
                          RESULTADO
                        </a>
                          <div class="dropdown-menu">
                              <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="" aria-expanded="false" data-toggle="dropdown-submenu">
                                  ENFERMAGEM
                                </a>
                                  <div class="dropdown-menu dropdown-submenu">
                                    <a class="dropdown-item" href="#">
                                      PÚBLICA
                                    </a>
                                    <a class="dropdown-item" href="#">
                                      PRIVADA
                                    </a>
                                  </div>
                                </div>
                            <div class="dropdown">
                            <a class="dropdown-item dropdown-toggle" href="" aria-expanded="false" data-toggle="dropdown-submenu">
                            INFORMÁTICA
                            </a>
                              <div class="dropdown-menu dropdown-submenu">
                                    <a class="dropdown-item" href="#">
                                  PÚBLICA
                                </a>
                                    <a class="dropdown-item" href="#">
                                  PRIVADA
                                </a>
                              </div>
                            </div>


                            <div class="dropdown">
                            <a class="dropdown-item dropdown-toggle" href="" aria-expanded="false" data-toggle="dropdown-submenu">
                            ADMINISTRAÇÃO
                            </a>
                              <div class="dropdown-menu dropdown-submenu">
                                    <a class="dropdown-item" href="#">
                                  PÚBLICA
                                </a>
                                    <a class="dropdown-item" href="#">
                                  PRIVADA
                                </a>
                              </div>
                            </div>


                            <div class="dropdown">
                            <a class="dropdown-item dropdown-toggle" href="" aria-expanded="false" data-toggle="dropdown-submenu">
                            EDIFICAÇÕES
                            </a>
                              <div class="dropdown-menu dropdown-submenu">
                                    <a class="dropdown-item" href="#">
                                  PÚBLICA
                                </a>
                                    <a class="dropdown-item" href="#">
                                  PRIVADA
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        
                        <li class="nav-item nav-btn">
                          <a id="btn_cad" href="#modal-container-773975" role="button" class="nav-link btn btn-info" data-toggle="modal">        
                            ATUALIZAR
                          </a>
                        </li>

                        <li class="nav-item nav-btn">
                          <a class="nav-link btn btn-danger " href="logout.php">
                            SAIR
                          </a>
                        </li>
                        
                        
                </ul>
                
                
                
                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">



                      <li class="nav-item dropdown open">
                        <a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="" aria-expanded="true">
                          RELATORIOS
                        </a>
                          <div class="dropdown-menu">
                              <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="" aria-expanded="false" data-toggle="dropdown-submenu">
                                  ENFERMAGEM
                                </a>
                                  <div class="dropdown-menu dropdown-submenu">
                                    <a class="dropdown-item" href="relatorios/relatorioCurso.php?p=1&c=1">
                                      PÚBLICA - GERAL
                                    </a>
                                    <a class="dropdown-item" href="relatorios/relatorioCurso.php?p=0&c=1">
                                      PRIVADA - GERAL
                                    </a>
                                    <a class="dropdown-item" href="relatorios/relatorio2.php?c=1&p=1&b=0">
                                      PÚBLICA - AC
                                    </a>
                                    <a class="dropdown-item" href="relatorios/relatorio2.php?c=1&p=0&b=0">
                                      PRIVADA - AC
                                    </a>
                                    <a class="dropdown-item" href="relatorios/relatorio2.php?c=1&p=1&b=1">
                                      PÚBLICA - COTA
                                    </a>
                                    <a class="dropdown-item" href="relatorios/relatorio2.php?c=1&p=0&b=1">
                                      PRIVADA - COTA
                                    </a>

                                  </div>
                                </div>
                            <div class="dropdown">
                            <a class="dropdown-item dropdown-toggle" href="" aria-expanded="false" data-toggle="dropdown-submenu">
                            INFORMÁTICA
                            </a>
                              <div class="dropdown-menu dropdown-submenu">
                                    <a class="dropdown-item" href="relatorios/relatorioCurso.php?p=1&c=2">
                                      PÚBLICA - GERAL
                                    </a>
                                    <a class="dropdown-item" href="relatorios/relatorioCurso.php?p=0&c=2">
                                      PRIVADA - GERAL
                                    </a>
                                    <a class="dropdown-item" href="relatorios/relatorio2.php?c=2&p=1&b=0">
                                      PÚBLICA - AC
                                    </a>
                                    <a class="dropdown-item" href="relatorios/relatorio2.php?c=2&p=0&b=0">
                                      PRIVADA - AC
                                    </a>
                                    <a class="dropdown-item" href="relatorios/relatorio2.php?c=2&p=1&b=1">
                                      PÚBLICA - COTA
                                    </a>
                                    <a class="dropdown-item" href="relatorios/relatorio2.php?c=2&p=0&b=1">
                                      PRIVADA - COTA
                                    </a>
                              </div>
                            </div>


                            <div class="dropdown">
                            <a class="dropdown-item dropdown-toggle" href="" aria-expanded="false" data-toggle="dropdown-submenu">
                            ADMINISTRAÇÃO
                            </a>
                              <div class="dropdown-menu dropdown-submenu">
                                    <a class="dropdown-item" href="relatorios/relatorioCurso.php?p=1&c=3">
                                      PÚBLICA - GERAL
                                    </a>
                                    <a class="dropdown-item" href="relatorios/relatorioCurso.php?p=0&c=3">
                                      PRIVADA - GERAL
                                    </a>
                                    <a class="dropdown-item" href="relatorios/relatorio2.php?c=3&p=1&b=0">
                                      PÚBLICA - AC
                                    </a>
                                    <a class="dropdown-item" href="relatorios/relatorio2.php?c=3&p=0&b=0">
                                      PRIVADA - AC
                                    </a>
                                    <a class="dropdown-item" href="relatorios/relatorio2.php?c=3&p=1&b=1">
                                      PÚBLICA - COTA
                                    </a>
                                    <a class="dropdown-item" href="relatorios/relatorio2.php?c=3&p=0&b=1">
                                      PRIVADA - COTA
                                    </a>
                               </div>
                            </div>


                            <div class="dropdown">
                            <a class="dropdown-item dropdown-toggle" href="" aria-expanded="false" data-toggle="dropdown-submenu">
                            EDIFICAÇÕES
                            </a>
                              <div class="dropdown-menu dropdown-submenu">
                                    <a class="dropdown-item" href="relatorios/relatorioCurso.php?p=1&c=4">
                                      PÚBLICA - GERAL
                                    </a>
                                    <a class="dropdown-item" href="relatorios/relatorioCurso.php?p=0&c=4">
                                      PRIVADA - GERAL
                                    </a>
                                    <a class="dropdown-item" href="relatorios/relatorio2.php?c=4&p=1&b=0">
                                      PÚBLICA - AC
                                    </a>
                                    <a class="dropdown-item" href="relatorios/relatorio2.php?c=4&p=0&b=0">
                                      PRIVADA - AC
                                    </a>
                                    <a class="dropdown-item" href="relatorios/relatorio2.php?c=4&p=1&b=1">
                                      PÚBLICA - COTA
                                    </a>
                                    <a class="dropdown-item" href="relatorios/relatorio2.php?c=4&p=0&b=1">
                                      PRIVADA - COTA
                                    </a>
                               </div>
                            </div>
                          </div>
                        </li>
                        

                        
                        
                </ul>
                        
                        
                          <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon">
                          
                        </div>
                    </button>
                </div>
                
            </div>
        </div>
    </nav>

</section>

<section class="engine"><a rel="external" href="#"></a></section>
<section class="mbr-cards mbr-section mbr-section-nopadding mbr-after-navbar" id="features6-a">

    

    <div class="mbr-cards-row row">
        <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
              <div class="card cart-block">
                  <div class="card-img"><a  class="etl-icon icon-genius mbr-iconfont mbr-iconfont-features3"></a></div>
                  <div class="card-block">
                    <h4 class="card-title">ENFERMAGEM</h4>
                    
                    <p id="text_cad" class="card-text">CADASTRAR CANDIDATO</p>
                        <div class="card-btn">
                          
                          <a id="btn_cad" href="#modal-container-743975"  role="button" class="nav-link btn btn-danger" data-toggle="modal">
                            PÚBLICA    
                          </a><br>
                          <a id="btn_cad" href="#modal-container-74" role="button" class="nav-link btn btn-danger" data-toggle="modal">        
                            PRIVADA
                          </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img"><a  class="mbri-laptop mbr-iconfont mbr-iconfont-features3"></a></div>
                    <div class="card-block">
                        <h4 class="card-title">INFORMÁTICA</h4>
                        
                        <p id="text_cad" class="card-text">CADASTRAR CANDIDATO<br></p> 
                        <div class="card-btn">
                          <a id="btn_cad" href="#modal-container-743975" role="button" class="nav-link btn btn-info" data-toggle="modal">        
                            PÚBLICA
                          </a><br>
                          <a id="btn_cad" href="#modal-container-74" role="button" class="nav-link btn btn-info" data-toggle="modal">        
                            PRIVADA
                          </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img"><a class="mbri-globe-2 mbr-iconfont mbr-iconfont-features3"></a></div>
                    <div class="card-block">
                        <h4 class="card-title">ADMINISTRAÇÃO</h4>
                        
                        <p id="text_cad" class="card-text">CADASTRAR CANDIDATO<br></p>
                        <div class="card-btn">
                          <a id="btn_cad" href="#modal-container-743975" role="button" class="nav-link btn btn-success" data-toggle="modal">        
                            PÚBLICA
                          </a><br>
                          <a id="btn_cad" href="#modal-container-74" role="button" class="nav-link btn btn-success" data-toggle="modal">        
                            PRIVADA
                          </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img"><a  class="mbri-home mbr-iconfont mbr-iconfont-features3"></a></div>
                    <div class="card-block">
                        <h3 class="card-title">EDIFICAÇÕES</h3>
                        
                        <p id="text_cad" class="card-text">CADASTRAR CANDIDATO<br></p>  
                        <div class="card-btn">
                          <a id="btn_cad" href="#modal-container-743975" role="button" class="nav-link btn btn-secondary" data-toggle="modal" name="edi_pub" value="edi_pub">        
                            PÚBLICA
                          </a><br>
                          <a id="btn_cad" href="#modal-container-74" role="button" class="nav-link btn btn-secondary" data-toggle="modal">        
                            PRIVADA
                          </a>
                        </div>
                </div>
            </div>
        </div> 
    </div>
</section>

<section class="mbr-section mbr-section-md-padding mbr-footer footer1" id="contacts1-b" >
    
    <div class="container" >
        <div class="row">
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <div><span class="mbri-setting mbr-iconfont mbr-iconfont-contacts1"></span></div>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>SISTEMA</strong><br>Objetiva o cadastro de candidatos pretendentes aos cursos da EEEP Salaberga Torquato Gomes de Matos de acordo com a portaria 1143/2014 datada de 17/11/2014.<br></p>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>REQUISITO</strong><br>Mangtenha o Java Script de seu navegador ativo, pois sua autenticação é feita na referida linguagem, o que o torna mais leve e rápido.<br></p>
            </div>


            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p>
                <font color="#7c7c7c" face="Montserrat, sans-serif" size="3">
                  <span style="letter-spacing: -1px; line-height: 20px;">
                    <strong>
                      SUPORTE
                    </strong>
                    <br>
                  </span>
                </font>
                
                <img src="assets/images/fone-icon.png" style="width:20px;height:20px; margin:0px;" >
                <img src="assets/images/whats-icon.png" style="width:20px;height:20px; margin:0px;">
                          &nbsp;&nbsp;&nbsp;&nbsp;
                <span style="color:white;font-family: Raleway; font-size:18px">
                          (85) 98631 7549
                </span><br>
                <img src="assets/images/email-invert.png" style="width:40px;height:40px; margin-left: -6px;">
                <span style="color:white;font-family: Raleway; font-size:15px">
                otavio.filho@aluno.uece.br
                </span>            
            </p>
            </div>
</footer>
        </div>
    </div>
</section>



  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="assets/viewportChecker/jquery.viewportchecker.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">



























  <!--INICIO DA MODAL ESCOLAS PÚBLICAS >>> CADASTRAR -> CANDIDATO-->
      <div class="modal fade" id="modal-container-743975" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="width: 900px;">
          <div class="modal-content" style="width: 900px; background: black;">
            
          <!--INÍCIO DO CABEÇALHO DA MODAL-->

          <!--FIM DO CABEÇALHO DA MODAL-->

          <!--INICIO DO CORPO DA MODAL-->
            <div class="modal-body" style="width: 900px;">
              <form class="navbar-form" role="search" action="pdoClass/cadastrar.php" method="post">
                <div class="form-group">
                  <div class="modal-header" id="modal-header2">
                      <div class="col-xs-12 text-xs-center">
                       <h3 class="mbr-section-title display-1" style="color: white;">SEEPS 2023</h3>
                      </div>
                       <CENTER><h6 class="mbr-section-title display-4" style="color: white;">ESCOLA PÚBLICA</h6><CENTER>

<!--TABELA COM AS LINHAS DA MODAL-->
      <div id="separador1">
        <input required type="text"  class="form-control" id="inputModal3" placeholder="NOME" name ="nome" >
      </div>
      
      <div id="separador2">
      <div id="separador3esquerda">
        <input required type="text"  class="form-control"  onkeypress="mascara(this)" maxlength="10" id="inputModal3" placeholder="DATA NASCIMENTO" name ="dn" >
      </div>        
        
        <input required type="hidden" name ="publica" value="1">

      <div id="separador3esquerda">
        <select name="c1" class="form-control" required id="selectLot">
          <option disabled selected style="font-weight: bold">
            <strong>
              CURSO
            </strong>
          </option>     
          <option value=1 id="optModal" style="color: red; font-weight: bold">
            <strong >
              ENFERMAGEM
            </strong>
          </option>
          <option value=2 id="optModal" style="color: blue; font-weight: bold;">
            <strong >
              INFORMÁTICA
            </strong>
          </option>
          <option value=3 id="optModal" style="color: green; font-weight: bold">
            <strong>
              MEIO AMBIENTE
            </strong>
          </option>
          <option value=4 id="optModal" style="color: gray; font-weight: bold">
            <strong>
              EDIFICAÇÕES
            </strong>
          </option>
        </select>
      </div>

  <!--    <div id="separador3esquerda">          
        <select name="c2" class="form-control" required id="selectLot">
          <option disabled selected style="font-weight: bold">
            <strong>
            OPÇÃO DE CURSO 2...
            </strong>          </option>     
          <option value=1 id="optModal" style="color: red; font-weight: bold">
            <strong >
              ENFERMAGEM
            </strong>
          </option>
          <option value=2 id="optModal" style="color: blue; font-weight: bold;">
            <strong >
              INFORMÁTICA
            </strong>
          </option>
          <option value=3 id="optModal" style="color: green; font-weight: bold">
            <strong>
              ADMINISTRAÇÃO
            </strong>
          </option>
          <option value=4 id="optModal" style="color: gray; font-weight: bold">
            <strong>
              EDIFICAÇÕES
            </strong>
          </option>
        </select>
      </div>
-->
      <div id="separador3direita">               
        <select name="bairro" class="form-control" required id="selectLot">
          <option disabled selected >
            BAIRRO...
          </option>     
          <option value=1 id="optModal" style="color: green; font-weight: bold">
            <strong>
              OUTRA BANDA
            </strong>
          </option>
          <option value=0 id="optModal" style="color: red; font-weight: bold">
            <strong>
              OUTROS BAIRROS
            </strong>
          </option>
        </select>
        </div>
        </div>

      <div id="separador2">
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="6° - PORT." name ="lp6" >
        </div>
        <div id="separador4esquerda">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="6° - ARTE" name ="ar6" >
        </div>
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="6° - ED. FÍS." name ="ef6" >
        </div>
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="6° - INGLÊS." name ="li6" >
        </div>
        <div id="separador4esquerda">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="6° - MAT." name ="ma6" >
        </div>
        <div id="separador4esquerda">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="6° - CIÊN." name ="ci6" >
        </div>
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="6° - GEO." name ="ge6" >
        </div>
        <div id="separador4direita">
          <input required type="text" class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="6° - HIST." name ="hi6" >
        </div>
        <div id="separador4direita">
          <input required type="text" class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="6° - RELIG." name ="re6" >
        </div>
        </div>



      <div id="separador2">
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="7° - PORT." name ="lp7" >
        </div>
        <div id="separador4esquerda">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="7° - ARTE" name ="ar7" >
        </div>
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="7° - ED. FÍS." name ="ef7" >
        </div>
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="7° - INGLÊS." name ="li7" >
        </div>
        <div id="separador4esquerda">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="7° - MAT." name ="ma7" >
        </div>
        <div id="separador4esquerda">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="7° - CIÊN." name ="ci7" >
        </div>
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="7° - GEO." name ="ge7" >
        </div>
        <div id="separador4direita">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="7° - HIST." name ="hi7" >
        </div>
        <div id="separador4direita">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="7° - RELIG." name ="re7" >
        </div>
        </div>



      <div id="separador2">
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="8° - PORT." name ="lp8" >
        </div>
        <div id="separador4esquerda">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="8° - ARTE" name ="ar8" >
        </div>
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="8° - ED. FÍS." name ="ef8" >
        </div>
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="8° - INGLÊS." name ="li8" >
        </div>
        <div id="separador4esquerda">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="8° - MAT." name ="ma8" >
        </div>
        <div id="separador4esquerda">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="8° - CIÊN." name ="ci8" >
        </div>
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="8° - GEO." name ="ge8" >
        </div>
        <div id="separador4direita">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="8° - HIST." name ="hi8" >
        </div>
        <div id="separador4direita">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="8° - RELIG." name ="re8" >
        </div>
        </div>



      <div id="separador2">
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="9° - PORT." name ="lp9" >
        </div>
        <div id="separador4esquerda">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="9° - ARTE" name ="ar9" >
        </div>
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="9° - ED. FÍS." name ="ef9" >
        </div>
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="9° - INGLÊS." name ="li9" >
        </div>
        <div id="separador4esquerda">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="9° - MAT." name ="ma9" >
        </div>
        <div id="separador4esquerda">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="9° - CIÊN." name ="ci9" >
        </div>
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="9° - GEO." name ="ge9" >
        </div>
        <div id="separador4direita">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="9° - HIST." name ="hi9" >
        </div>
        <div id="separador4direita">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="9° - RELIG." name ="re9" >
        </div>
        </div>
      

                          
                      <div id="separadorBtn">
                        <center>
                          <button type="submit" class="btn btn-success" value="Enviar" id="btn1"><b>CADASTRAR</b></button>                    
                        </center>
                      </div>
                  

</div>


                    
    
                  <!--FIM DA TABELA COM AS LINHAS DA MODAL-->
                </div>                
                
            </form>
            </div>
          <!--FIM DO CORPO DA MODAL-->
          </div>
        </div>
      </div>
<!--FIM DA MODAL >>> CADASTRAR -> CADASTRAR DEMANDA-->






















































  <!--INICIO DA MODAL ESCOLAS PÚBLICAS >>> CADASTRAR -> CANDIDATO-->
      <div class="modal fade" id="modal-container-773975" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="width: 900px;">
          <div class="modal-content" style="width: 900px; background: black;">
            
          <!--INÍCIO DO CABEÇALHO DA MODAL-->

          <!--FIM DO CABEÇALHO DA MODAL-->

          <!--INICIO DO CORPO DA MODAL-->
            <div class="modal-body" style="width: 900px;">
              <form class="navbar-form" role="search" action="pdoClass/atualizar.php" method="post">
                <div class="form-group">
                  <div class="modal-header" id="modal-header2">
                      <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-1" style="color:white;">SEEPS 2023</h3>
                      </div>
                       <CENTER><h6 class="mbr-section-title display-4" style="color:white;">ATUALIZAR CADASTRO</h6><CENTER>

<!--TABELA COM AS LINHAS DA MODAL-->
      <div id="separador1">
      </div>
      
      <div id="separador2">
          <div id="separador3esquerda">
            <input required type="text"  class="form-control"  maxlength="10" id="inputModal3" placeholder="ID" name="id" >
          </div>        
            
          <div id="separador3esquerda">
          </div>

          <div id="separador3direita">               
          </div>
        </div>




      <div id="separador2">
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="PORT." name ="lp" >
        </div>
        <div id="separador4esquerda">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="ARTE" name ="ar" >
        </div>
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="ED. FÍS." name ="ef" >
        </div>
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="INGLÊS." name ="li" >
        </div>
        <div id="separador4esquerda">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="MAT." name ="ma" >
        </div>
        <div id="separador4esquerda">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="CIÊN." name ="ci" >
        </div>
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="GEO." name ="ge" >
        </div>
        <div id="separador4direita">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="HIST." name ="hi" >
        </div>
        <div id="separador4direita">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="RELIG." name ="re" >
        </div>
        </div>
      

                          
                      <div id="separadorBtn">
                        <center>
                          <button type="submit" class="btn btn-success" value="Enviar" id="btn1"><b>ATUALIZAR</b></button>                    
                        </center>
                      </div>
                  

</div>


                    
    
                  <!--FIM DA TABELA COM AS LINHAS DA MODAL-->
                </div>                
                
            </form>
            </div>
          <!--FIM DO CORPO DA MODAL-->
          </div>
        </div>
      </div>
<!--FIM DA MODAL >>> CADASTRAR -> CADASTRAR DEMANDA-->
















































































  <!--INICIO DA MODAL ESCOLAS PÚBLICAS >>> CADASTRAR -> CANDIDATO-->
      <div class="modal fade" id="modal-container-74" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="width: 900px;">
          <div class="modal-content" style="width: 900px; background: black;">
            
          <!--INÍCIO DO CABEÇALHO DA MODAL-->

          <!--FIM DO CABEÇALHO DA MODAL-->

          <!--INICIO DO CORPO DA MODAL-->
            <div class="modal-body" style="width: 900px;">
              <form class="navbar-form" role="search" action="pdoClass/cadastrar.php" method="post">
                <div class="form-group">
                  <div class="modal-header" id="modal-header2">
                      <div class="col-xs-12 text-xs-center">
                       <h3 class="mbr-section-title display-1" style="color:white;">SEEPS 2023</h3>
                      </div>
                       <CENTER><h6 class="mbr-section-title display-4" style="color:white;">ESCOLA PRIVADA</h6></CENTER>

<!--TABELA COM AS LINHAS DA MODAL-->
      <div id="separador1">
        <input required type="text"  class="form-control" id="inputModal3" placeholder="NOME" name ="nome" >
      </div>
      
      <div id="separador2">
      <div id="separador3esquerda">
        <input required type="text"  class="form-control"  onkeypress="mascara(this)" maxlength="10" id="inputModal3" placeholder="DATA NASCIMENTO" name ="dn" >
      </div>        
        
        <input required type="hidden" name ="publica" value="0">

      <div id="separador3esquerda">
        <select name="c1" class="form-control" required id="selectLot">
          <option disabled selected >
            <strong >
              CURSO
            </strong >
          </option>     
          <option value=1 id="optModal" style="color: red; font-weight: bold">
            <strong >
              ENFERMAGEM
            </strong>
          </option>
          <option value=2 id="optModal" style="color: blue; font-weight: bold;">
            <strong >
              INFORMÁTICA
            </strong>
          </option>
          <option value=3 id="optModal" style="color: green; font-weight: bold">
            <strong>
              MAIO AMBIENTE
            </strong>
          </option>
          <option value=4 id="optModal" style="color: gray; font-weight: bold">
            <strong>
              EDIFICAÇÕES
            </strong>
          </option>
        </select>
      </div>

 <!--
 <div id="separador3esquerda">          
        <select name="c2" class="form-control" required id="selectLot">
          <option disabled selected >
            <strong >
            OPÇÃO DE CURSO 2...
            </strong >
          </option>     
          <option value=1 id="optModal" style="color: red; font-weight: bold">
            <strong >
              ENFERMAGEM
            </strong>
          </option>
          <option value=2 id="optModal" style="color: blue; font-weight: bold;">
            <strong >
              INFORMÁTICA
            </strong>
          </option>
          <option value=3 id="optModal" style="color: green; font-weight: bold">
            <strong>
              ADMINISTRAÇÃO
            </strong>
          </option>
          <option value=4 id="optModal" style="color: gray; font-weight: bold">
            <strong>
              EDIFICAÇÕES
            </strong>
          </option>
        </select>
      </div>
-->

      <div id="separador3direita">               
        <select name="bairro" class="form-control" required id="selectLot">
          <option disabled selected >
            BAIRRO...
          </option>     
          <option value=1 id="optModal" style="color: green; font-weight: bold">
            <strong>
              OUTRA BANDA
            </strong>
          </option>
          <option value=0 id="optModal" style="color: red; font-weight: bold">
            <strong>
              OUTROS BAIRROS
            </strong>
          </option>
        </select>
        </div>
        </div>

      <div id="separador2">
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="6° - PORT." name ="lp6" >
        </div>
        <div id="separador4esquerda">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="6° - ARTE" name ="ar6" >
        </div>
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="6° - ED. FÍS." name ="ef6" >
        </div>
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="6° - INGLÊS." name ="li6" >
        </div>
        <div id="separador4esquerda">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="6° - MAT." name ="ma6" >
        </div>
        <div id="separador4esquerda">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="6° - CIÊN." name ="ci6" >
        </div>
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="6° - GEO." name ="ge6" >
        </div>
        <div id="separador4direita">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="6° - HIST." name ="hi6" >
        </div>
        <div id="separador4direita">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="6° - RELIG." name ="re6" >
        </div>
        </div>



      <div id="separador2">
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="7° - PORT." name ="lp7" >
        </div>
        <div id="separador4esquerda">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="7° - ARTE" name ="ar7" >
        </div>
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="7° - ED. FÍS." name ="ef7" >
        </div>
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="7° - INGLÊS." name ="li7" >
        </div>
        <div id="separador4esquerda">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="7° - MAT." name ="ma7" >
        </div>
        <div id="separador4esquerda">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="7° - CIÊN." name ="ci7" >
        </div>
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="7° - GEO." name ="ge7" >
        </div>
        <div id="separador4direita">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="7° - HIST." name ="hi7" >
        </div>
        <div id="separador4direita">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="7° - RELIG." name ="re7" >
        </div>
        </div>



      <div id="separador2">
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="8° - PORT." name ="lp8" >
        </div>
        <div id="separador4esquerda">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="8° - ARTE" name ="ar8" >
        </div>
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="8° - ED. FÍS." name ="ef8" >
        </div>
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="8° - INGLÊS." name ="li8" >
        </div>
        <div id="separador4esquerda">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="8° - MAT." name ="ma8" >
        </div>
        <div id="separador4esquerda">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="8° - CIÊN." name ="ci8" >
        </div>
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="8° - GEO." name ="ge8" >
        </div>
        <div id="separador4direita">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="8° - HIST." name ="hi8" >
        </div>
        <div id="separador4direita">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="8° - RELIG." name ="re8" >
        </div>
        </div>



      <div id="separador2">
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="9° - PORT." name ="lp9" >
        </div>
        <div id="separador4esquerda">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="9° - ARTE" name ="ar9" >
        </div>
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="9° - ED. FÍS." name ="ef9" >
        </div>
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="9° - INGLÊS." name ="li9" >
        </div>
        <div id="separador4esquerda">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="9° - MAT." name ="ma9" >
        </div>
        <div id="separador4esquerda">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="9° - CIÊN." name ="ci9" >
        </div>
        <div id="separador4esquerda">
        <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="9° - GEO." name ="ge9" >
        </div>
        <div id="separador4direita">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="9° - HIST." name ="hi9" >
        </div>
        <div id="separador4direita">
          <input required type="text"  class="form-control"  maxlength="4" maxlength="10" id="inputModal3" placeholder="9° - RELIG." name ="re9" >
        </div>
        </div>
      

                          
                      <div id="separadorBtn">
                        <center>
                          <button type="submit" class="btn btn-success" value="Enviar" id="btn1"><b>CADASTRAR</b></button>                    
                        </center>
                      </div>
                  

</div>


                    
    
                  <!--FIM DA TABELA COM AS LINHAS DA MODAL-->
                </div>                
                
            </form>
            </div>
          <!--FIM DO CORPO DA MODAL-->
          </div>
        </div>
      </div>
<!--FIM DA MODAL >>> CADASTRAR -> CADASTRAR DEMANDA-->




  </body>
</html>