<?php
 
// get database connection
include_once 'database.php';
 
// instantiate user object
include_once 'user.php';
 
$database = new Database();
$db = $database->getConnection();
 
$user = new User($db);
 
// set user property values
$user->username = $_POST['username'];
$user->password = base64_encode($_POST['password']);
$user->created = date('Y-m-d H:i:s');
 
// create the user
if($user->signup()){
    header('location: index1.php');
	exit();
}
else{
    $user_arr=array(
        "status" => false,
        "message" => "Username already exists!"
    );
}
?>
