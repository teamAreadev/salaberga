<?php
$c = $_GET['c'];

      switch ($c) {
        case 1:
          $curso = "ENFERMAGEM";
        break;
        case 2:
          $curso = "INFORMÁTICA";
        break;
        case 3:
          $curso = "MEIO AMBIENTE";
        break;
        case 4:
          $curso = "EDIFICAÇÕES";
        break;
      }

      
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">

  <meta name="author" content="">
  <title>SEEPS - 2018</title>
    <link rel="shortcut icon" href="../assets/images/icone_salaberga.png" type="image">
<!-- Bootstrap core CSS-->
  <link href="css_table/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="css_table/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="css_table/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css_table/css/sb-admin.css" rel="stylesheet">
</head>
<body>

                      <div class="navbar-brand">
                        <center>
                        <img src="../assets/images/ImagemX.png" alt="" style="width: 220px; height: 80px;">
                        </center>
                        
                    </div>


<?php
        $pdo = new PDO("mysql:host=localhost;dbname=id3996761_2018_eeep","id3996761_2018_eeep","eeepsalaberga");


      $sqlPuCota="select * from candidato 
      inner join nota
      on candidato.id_candidato  = nota.candidato_id_candidato and candidato.id_curso1_fk =:c and nota.publica =1 and candidato.bairro=1 order by nota.media desc; 
      ";
      $consultaPuCota = $pdo->prepare($sqlPuCota);
      $consultaPuCota->BindValue(':c',$c);
      $consultaPuCota->execute();
        $dadosPuCota = $consultaPuCota->fetchAll();
        $countPuCota = count($dadosPuCota);


      $sqlPuSemCota="select * from candidato 
      inner join nota
      on candidato.id_candidato  = nota.candidato_id_candidato and candidato.id_curso1_fk =:c and nota.publica =1 and candidato.bairro=0 order by nota.media desc; 
      ";
      $consultaPuSemCota = $pdo->prepare($sqlPuSemCota);
      $consultaPuSemCota->BindValue(':c',$c);
      $consultaPuSemCota->execute();
        $dadosPuSemCota = $consultaPuSemCota->fetchAll();
        $countPuSemCota = count($dadosPuSemCota);


      $sqlPrCota="select * from candidato 
      inner join nota
      on candidato.id_candidato  = nota.candidato_id_candidato and candidato.id_curso1_fk =:c and nota.publica =0 and candidato.bairro=1 order by nota.media desc; 
      ";
      $consultaPrCota = $pdo->prepare($sqlPrCota);
      $consultaPrCota->BindValue(':c',$c);
      $consultaPrCota->execute();
        $dadosPrCota = $consultaPrCota->fetchAll();
        $countPrCota = count($dadosPrCota);

      $sqlPrSemCota="select * from candidato 
      inner join nota
      on candidato.id_candidato  = nota.candidato_id_candidato and candidato.id_curso1_fk =:c and nota.publica =0 and candidato.bairro=0 order by nota.media desc; 
      ";
      $consultaPrSemCota = $pdo->prepare($sqlPrSemCota);
      $consultaPrSemCota->BindValue(':c',$c);
      $consultaPrSemCota->execute();
        $dadosPrSemCota = $consultaPrSemCota->fetchAll();
        $countPrSemCota = count($dadosPrSemCota);



            $contPuCota=1;
            foreach($dadosPuCota as $indPuCota => $valoresPuCota){
              $arrayPuCota[$contPuCota]['n'] = $valoresPuCota['nome'];
              $arrayPuCota[$contPuCota]['m'] = $valoresPuCota['media'];
              $contPuCota++;
            }

            $contPuSemCota=1;
            foreach($dadosPuSemCota as $indPuSemCota => $valoresPuSemCota){
              $arrayPuSemCota[$contPuSemCota]['n'] = $valoresPuSemCota['nome'];
              $arrayPuSemCota[$contPuSemCota]['m'] = $valoresPuSemCota['media'];
              $contPuSemCota++;
            }

            $contPrCota=1;
            foreach($dadosPrCota as $indPrCota => $valoresPrCota){
              $arrayPrCota[$contPrCota]['n'] = $valoresPrCota['nome'];
              $arrayPrCota[$contPrCota]['m'] = $valoresPrCota['media'];
              $contPrCota++;
            }

            $contPrSemCota=1;
            foreach($dadosPrSemCota as $indPrSemCota => $valoresPrSemCota){
              $arrayPrSemCota[$contPrSemCota]['n'] = $valoresPrSemCota['nome'];
              $arrayPrSemCota[$contPrSemCota]['m'] = $valoresPrSemCota['media'];
              $contPrSemCota++;
            }



            if($countPuCota > 11){
              $sobraPuCota = 0;    
              $contsPuCota = 12;    
            }else{
              $sobraPuCota = 11-$countPuCota;
              $contsPuCota = ($countPuCota+$sobraPuCota)+1;    
            }

            if(($countPrCota+$sobraPuCota) > 4){
              $sobraPrCota = 0;    
              $contsPrCota = $countPrCota+1;    
            }else{
              $sobraPrCota = 4-$countPrCota;
              $contsPrCota = ($countPrCota+$sobraPuCota)+1;    
            }




            if($countPuSemCota > 25){
              $sobraPuSemCota = 0;    
              $contsPuSemCota = 31;    
            }else{
              $sobraPuSemCota = 25-$countPuSemCota;
              $contsPuSemCota = ($countPuSemCota+$sobraPuSemCota)+1;    
            }

            if($countPrSemCota+$countPuSemCota > 6){
              $sobraPrSemCota = 0;    
              $contsPrSemCota = 7;    
            }else{
              $sobraPrSemCota = 6-$countPrSemCota;
              $contsPrSemCota = ($countPrSemCota+$sobraPrSemCota)+1;    
            }
?>




  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
<!--      <ol class="breadcrumb">
        <li class="breadcrumb-item active" style="font-size: 30px;">
          <?php echo $curso.' / '.$tipo; ?>
        </li>
      </ol>
-->      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table">&nbsp;&nbsp;<?php echo $curso.' / RESULTADO FINAL >>>>>> PÚBLICA'; ?>
</i> </div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>CH</th>
                  <th>NOME</th>
                  <th>ORIGEM / TIPO</th>
                  <th>CURSO</th>
                </tr>
              </thead>
              <tbody>

<?php

  
            for ($i=1; $i < $contsPuSemCota; $i++) { 
              if($arrayPuSemCota[$i]['n'] != ""){
              $nome = strToUpper($arrayPuSemCota[$i]['n']);
              $media = strToUpper($arrayPuSemCota[$i]['m']);
              echo '<tr><td height="20" width="30">'.$i.'</td>';
              echo '<td>'.$nome.'</td>';
              echo '<td width="160">PÚBLICA</td>';
              echo '<td width="160">'.strToUpper($curso).'</td></tr>';
              }
            }

?>

              </tbody>
            </table>
          </div>
    </div>



  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
<!--      <ol class="breadcrumb">
        <li class="breadcrumb-item active" style="font-size: 30px;">
          <?php echo $curso.' / '.$tipo; ?>
        </li>
      </ol>
-->      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table">&nbsp;&nbsp;<?php echo $curso.' / RESULTADO FINAL >>>>>> PÚBLICA'; ?>
</i> </div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>CH</th>
                  <th>NOME</th>
                  <th>ORIGEM / TIPO</th>
                  <th>CURSO</th>
                </tr>
              </thead>
              <tbody>

?>
<?php


            for ($i=1; $i < $contsPuCota; $i++) { 
              if($arrayPuCota[$i]['n'] != ""){
              $nome = strToUpper($arrayPuCota[$i]['n']);
              $media = strToUpper($arrayPuCota[$i]['m']);
              echo '<tr><td height="20" width="30">'.$i.'</td>';
              echo '<td>'.$nome.'</td>';
              echo '<td width="160">PÚBLICA COTA</td>';
              echo '<td width="160">'.strToUpper($curso).'</td></tr>';
            }
          }


?>


              </tbody>
            </table>
          </div>
    </div>



  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
<!--      <ol class="breadcrumb">
        <li class="breadcrumb-item active" style="font-size: 30px;">
          <?php echo $curso.' / '.$tipo; ?>
        </li>
      </ol>
-->      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table">&nbsp;&nbsp;<?php echo $curso.' / RESULTADO FINAL >>>>>> PÚBLICA'; ?>
</i> </div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>CH</th>
                  <th>NOME</th>
                  <th>ORIGEM / TIPO</th>
                  <th>CURSO</th>
                </tr>
              </thead>
              <tbody>

<?php



            for ($i=1; $i < 8; $i++) { 
              if($arrayPrSemCota[$i]['n'] != ""){
              $nome = strToUpper($arrayPrSemCota[$i]['n']);
              $media = strToUpper($arrayPrSemCota[$i]['m']);
              echo '<tr><td height="20" width="30">'.$i.'</td>';
              echo '<td>'.$nome.'</td>';
              echo '<td width="160">PRIVADA</td>';
              echo '<td width="160">'.strToUpper($curso).'</td></tr>';
            }
          }



?>


              </tbody>
            </table>
          </div>
    </div>



  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
<!--      <ol class="breadcrumb">
        <li class="breadcrumb-item active" style="font-size: 30px;">
          <?php echo $curso.' / '.$tipo; ?>
        </li>
      </ol>
-->      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table">&nbsp;&nbsp;<?php echo $curso.' / RESULTADO FINAL >>>>>> PÚBLICA'; ?>
</i> </div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>CH</th>
                  <th>NOME</th>
                  <th>ORIGEM / TIPO</th>
                  <th>CURSO</th>
                </tr>
              </thead>
              <tbody>

<?php


            for ($i=1; $i < $contsPrCota; $i++) { 
              if($arrayPrCota[$i]['n'] != ""){
              $nome = strToUpper($arrayPrCota[$i]['n']);
              $media = strToUpper($arrayPrCota[$i]['m']);
              echo '<tr><td height="20" width="30">'.$i.'</td>';
              echo '<td>'.$nome.'</td>';
              echo '<td width="160">PRIVADA COTA</td>';
              echo '<td width="160">'.strToUpper($curso).'</td></tr>';
            }
          }


?>


           </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Atualizado hoje</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Salaberga 2018</small>
        </div>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript-->
    <!-- Core plugin JavaScript-->
    <script src="css_table/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="css_table/vendor/datatables/jquery.dataTables.js"></script>
    <script src="css_table/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="css_table/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="css_table/js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
