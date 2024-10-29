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
          $curso = "ADMINISTRAÇÃO";
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
  <title>SEEPS - 2021</title>
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
          <i class="fa fa-table">&nbsp;&nbsp;<?php echo "CLASSIFICADOS - ".$curso; ?>
</i> </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>CH</th>
                  <th>NOME</th>
                  <th>CURSO</th>
                  <th>SEGMENTO</th>
                  <th>MÉDIA</th>
                </tr>
              </thead>
              <tbody>
                <tr style="height: 20px;">
<?php
$pdo = new PDO("mysql:host=localhost;dbname=u750204740_seeps","u750204740_seeps","Gl311426!@##");
//$pdo = new PDO("mysql:host=localhost;dbname=id10902219_selesal_2021","root","");

    try{
      $sql="select * from candidato 
      inner join nota
      on candidato.id_candidato  = nota.candidato_id_candidato and id_curso1_fk = :c and candidato.classificado=1 order by nota.media desc; 
      ";
      $consulta = $pdo->prepare($sql);
      $consulta->BindValue(':c',$c);
      $consulta->execute();


        $r=1;

        $dados = $consulta->fetchAll();
            foreach($dados as $valor => $d){
              $a = $d['id_curso1_fk'];
              switch ($a) {
              case 1:
                $curso = "ENFERMAGEM";
              break;
              case 2:
                $curso = "INFORMÁTICA";
              break;
              case 3:
                $curso = "ADMINISTRAÇÃO";
              break;
              case 4:
                $curso = "EDIFICAÇÕES";
              break;
              }


              $b = $d['publica'];
              switch ($b) {
              case 0:
                $curso2 = "PRIVADA";
              break;
              case 1:
                $curso2 = "PUBLICA";
              break;
              }


              if($d['bairro']>0){
              echo '<td>'.$r.'</td>';
              echo '<td>'.strToUpper($d['nome']).'  - <span style="background-color:black; color:white;" >&nbsp;&nbsp;COTISTA&nbsp;&nbsp;</span></td>';
              echo '<td>'.strToUpper($curso).'</td>';
              echo '<td>'.strToUpper($curso2).'</td>';
              echo '<td>'.$d['media'].'</td></tr>';

              }elseif($d['situacao']<1){
              echo '<td>'.$r.'</td>';
              echo '<td>'.strToUpper($d['nome']).'  - <span style="background-color:black; color:white;" >&nbsp;&nbsp;COTA ESPECIAL&nbsp;&nbsp;</span></td>';
              echo '<td>'.strToUpper($curso).'</td>';
              echo '<td>'.strToUpper($curso2).'</td>';
              echo '<td>'.$d['media'].'</td></tr>';

              }else{
              echo '<td>'.$r.'</td>';
              echo '<td>'.strToUpper($d['nome']);
              echo '<td>'.strToUpper($curso).'</td>';
              echo '<td>'.strToUpper($curso2).'</td>';
              echo '<td>'.$d['media'].'</td></tr>';
              }




              $r++;
}
          }catch(PDOException $erro){
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
    
    
    <!-- TIRAR O ENTRIES DA TABELA-->
    
    <!-- Bootstrap core JavaScript
    <script src="css_table/vendor/jquery/jquery.min.js"></script>
    <script src="css_table/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    -->
    
    <!-- Core plugin JavaScript
    <script src="css_table/vendor/jquery-easing/jquery.easing.min.js"></script>
        -->

    
    <!-- Page level plugin JavaScript
    <script src="css_table/vendor/datatables/jquery.dataTables.js"></script>
    <script src="css_table/vendor/datatables/dataTables.bootstrap4.js"></script>
    -->


    <!-- Custom scripts for all pages
    <script src="css_table/js/sb-admin.min.js"></script>
    -->
    
    <!-- Custom scripts for this page
    <script src="css_table/js/sb-admin-datatables.min.js"></script>
    -->
    
    
    
     </div>
</body>

</html>
