<?php
$database = new Database();
$db = $database->getConnection();
 
// prepare user object
$user = new User($db);
// set ID property of user to be edited
$user->username = isset($_GET['username']) ? $_GET['username'] : die();
$user->password = base64_encode(isset($_GET['password']) ? $_GET['password'] : die());
// read the details of user to be edited
$stmt = $user->login();

	if($stmt->rowCount() > 0){
				header('location: https://node-red-rdyzx.eu-gb.mybluemix.net/uibuilder/');
				exit();
			}


else{
	header('location: index1.php');
    $user_arr=array(
        "status" => false,
        "message" => "Invalid Username or Password!",
    );
}
?>
