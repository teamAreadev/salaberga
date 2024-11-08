<?php
$c = $_GET['c'];
$p = $_GET['p'];

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

      switch ($p) {
        case 0:
          $tipo = "PRIVADA";
        break;
        case 1:
          $tipo = "PÚBLICA";
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
                  <th>MÉDIA</th>
                </tr>
              </thead>
              <tbody>

<?php
$pdo = new PDO("mysql:host=localhost;dbname=id10902219_selesal_2021","root","");

      $sql2="select * from candidato 
      inner join nota
      on candidato.id_candidato  = nota.candidato_id_candidato and candidato.id_curso1_fk =:c and nota.publica =1 and candidato.bairro=1 order by nota.media desc; 
      ";
      $consulta2 = $pdo->prepare($sql2);
      $consulta2->BindValue(':c',$c);
      $consulta2->execute();
        $dados2 = $consulta2->fetchAll();
        $count2 = count($dados2);




//COTA PÚBLICA
      $sqlb="select * from candidato 
      inner join nota
      on candidato.id_candidato  = nota.candidato_id_candidato and candidato.id_curso1_fk =:c and nota.publica =1 and candidato.bairro=0 order by nota.media desc; 
      ";
      $consultaa = $pdo->prepare($sqlb);
      $consultaa->BindValue(':c',$c);
      $consultaa->execute();
        $dadosa = $consultaa->fetchAll();
        $counta = count($dadosa);


            $s=1;
            foreach($dadosa as $valora => $aa){
              $d[$s]['n'] = $aa['nome'];
              $d[$s]['m'] = $aa['media'];
              $s++;
            }


          $contPubl = 26+(11-$count2);
            for ($i=1; $i < $contPubl; $i++) { 
              $nome = strToUpper($d[$i]['n']);
              $media = strToUpper($d[$i]['m']);
              echo '<tr><td height="20" width="30">'.$i.'</td>';
              echo '<td>'.$nome.'</td>';
              echo '<td width="160">PÚBLICA       </td>';
              echo '<td width="160">'.strToUpper($curso).'</td>';
              echo '<td width="40">'.$media.'</td></tr>';
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
          <i class="fa fa-table">&nbsp;&nbsp;<?php echo $curso.' / RESULTADO FINAL >>>>>> PÚBLICA / COTA'; ?>
</i> </div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>CH</th>
                  <th>NOME</th>
                  <th>ORIGEM / TIPO</th>
                  <th>CURSO</th>
                  <th>MÉDIA</th>
                </tr>
              </thead>
              <tbody>
<?php






            $s2=1;
            foreach($dados2 as $valor2 => $a2){
              $d2[$s2]['n'] = $a2['nome'];
              $d2[$s2]['m'] = $a2['media'];
              $s2++;
            }


          if($count2>11){
          $contPublCota = 12;            
          }else{
          $contPublCota = $count2+1;
          }



              for ($i=1; $i < $contPublCota; $i++) { 
                $nome2 = strToUpper($d2[$i]['n']);
                $media2 = strToUpper($d2[$i]['m']);
              echo '<tr><td height="20" width="30">'.$i.'</td>';
              echo '<td>'.$nome2.'</td>';
              echo '<td width="160">PÚBLICA / COTA</td>';
              echo '<td width="160">'.strToUpper($curso).'</td>';
              echo '<td width="40">'.$media2.'</td></tr>';
            }



?>




              </tbody>
            </table>
          </div>
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
          <i class="fa fa-table">&nbsp;&nbsp;<?php echo $curso.' / RESULTADO FINAL >>>>>> PRIVADA'; ?>
</i> </div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>CH</th>
                  <th>NOME</th>
                  <th>ORIGEM / TIPO</th>
                  <th>CURSO</th>
                  <th>MÉDIA</th>
                </tr>
              </thead>
              <tbody>

<?php
$pdo = new PDO("mysql:host=localhost;dbname=id10902219_selesal_2021","id10902219_adminselesal_2021","Gl31261410!@##");


      $sql2="select * from candidato 
      inner join nota
      on candidato.id_candidato  = nota.candidato_id_candidato and candidato.id_curso1_fk =:c and nota.publica =0 and candidato.bairro=1 order by nota.media desc; 
      ";
      $consulta2 = $pdo->prepare($sql2);
      $consulta2->BindValue(':c',$c);
      $consulta2->execute();
        $dados2 = $consulta2->fetchAll();
        $count2 = count($dados2);




//COTA PÚBLICA
      $sqlb="select * from candidato 
      inner join nota
      on candidato.id_candidato  = nota.candidato_id_candidato and candidato.id_curso1_fk =:c and nota.publica =0 and candidato.bairro=0 order by nota.media desc; 
      ";
      $consultaa = $pdo->prepare($sqlb);
      $consultaa->BindValue(':c',$c);
      $consultaa->execute();
        $dadosa = $consultaa->fetchAll();
        $counta = count($dadosa);








            $s=1;
            foreach($dadosa as $valora => $aa){
              $d[$s]['n'] = $aa['nome'];
              $d[$s]['m'] = $aa['media'];
              $s++;
            }

          if($count2>4){
            $contPubl = 7;            
          }else{
            $contPubl = 7+(4-$count2);
          }

            for ($i=1; $i < $contPubl; $i++) { 
              $nome = strToUpper($d[$i]['n']);
              $media = strToUpper($d[$i]['m']);
              echo '<tr><td height="20" width="30">'.$i.'</td>';
              echo '<td>'.$nome.'</td>';
              echo '<td width="160">PRIVADA       </td>';
              echo '<td width="160">'.strToUpper($curso).'</td>';
              echo '<td width="40">'.$media.'</td></tr>';
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
          <i class="fa fa-table">&nbsp;&nbsp;<?php echo $curso.' / RESULTADO FINAL >>>>>> PRIVADA / COTA'; ?>
</i> </div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>CH</th>
                  <th>NOME</th>
                  <th>ORIGEM / TIPO</th>
                  <th>CURSO</th>
                  <th>MÉDIA</th>
                </tr>
              </thead>
              <tbody>
<?php






            $s2=1;
            foreach($dados2 as $valor2 => $a2){
              $d2[$s2]['n'] = $a2['nome'];
              $d2[$s2]['m'] = $a2['media'];
              $s2++;
            }


          if($count2>4){
          $contPublCota = 5;            
          }else{
          $contPublCota = $count2+1;
          }



              for ($i=1; $i < $contPublCota; $i++) { 
                $nome2 = strToUpper($d2[$i]['n']);
                $media2 = strToUpper($d2[$i]['m']);
              echo '<tr><td height="20" width="30">'.$i.'</td>';
              echo '<td>'.$nome2.'</td>';
              echo '<td width="160">PRIVADA / COTA</td>';
              echo '<td width="160">'.strToUpper($curso).'</td>';
              echo '<td width="40">'.$media2.'</td></tr>';
            }



?>




              </tbody>
            </table>
                            <div class="card-footer small text-muted">Atualizado hoje</div>
          </div>
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
