<?php 
// require '_header.php';
class USER{
	private $db;

	public function __construct($db){

		if (!isset($_SESSION)) {
	session_start();
			}

		if (!isset($_SESSION['user'])) {

			$_SESSION['user']=array();
			
		}
			
			

$this->DB=$db;

}


public function con($user_id){



	$_SESSION['user'][$user_id]= $user_id;	
	$connexion=$this->DB->prepare('SELECT * FROM admin WHERE ID_ADMIN=:ID_ADMIN  ');
 $connexion->execute(array(
'ID_ADMIN' => $user_id
));
$con=$connexion->fetchAll(PDO::FETCH_OBJ);
foreach ($con as $user ) {

	$_SESSION['user']['ID_ADMIN']= $user->ID_ADMIN;
	$_SESSION['user']['USERNAME']= $user->USERNAME;
	



}






return true;


}

 public function decon($user_id){
	unset($_SESSION['user']);
	session_destroy();
	header('location:connexionn.php');

}


}
 





 ?>