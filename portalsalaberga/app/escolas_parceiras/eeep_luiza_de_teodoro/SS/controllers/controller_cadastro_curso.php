<?php 

if(isset($_POST['cadastrar_curso']) && isset($_POST['nome_curso']) && !empty($_POST['nome_curso'])){

    $nome_curso = $_POST['nome_curso'];
    require_once('../models/deletar_cadastrar_curso.php');
    cadastrar_curso($nome_curso);

}else{

    header('location:../views/inicio.php');
}
?>