<?php


if(isset($SESION['email'])){
        header('Location: index2.php');
}



Class Usuario {



	public function logout(){
		session_start();
		session_destroy();
		header('Location: index.php');
	}

	public function logar($email, $senha){
$pdo = new PDO("mysql:host=localhost;dbname=u750204740_seeps","u750204740_seeps","Gl311426!@##");
		try{
			$status='1';
			$sql="SELECT * FROM usuario WHERE email= :email and senha= :senha and status= :status;";
			$consulta = $pdo->prepare($sql);
			$consulta->BindValue(':email',$email);
			$consulta->BindValue(':senha',$senha);
			$consulta->BindValue(':status',$status);
			$consulta->execute();
			
			if($consulta->rowCount()>0){
				session_start();
				$_SESSION['email'] = $email;
				header('Location: inicio.php');
			}else{
				header('Location: index.php');
			}
		}catch(PDOException $erro){
			ECHO '<script>alert('.$erro.');</script>';
		}
	}





}








?>
