<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

$data_arr = json_decode(file_get_contents("php://input"), true);

$email = $data_arr['email'];
$password = $data_arr['password']; 

include_once  "config.php";

$sql = "SELECT * FROM register WHERE email = '$email' and password = '$password'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	echo json_encode(array('message' => 'login Record Inserted.', 'status' => true));

}else{

 echo json_encode(array('message' => 'login Record Not Inserted.', 'status' => false));
 
}
?>
