<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);

$stud_id  = $data['stud_id'];
$name = $data['name'];
$age = $data['age'];
$city = $data['city'];
$roll_no = $data['roll_no'];


include "config.php";

$sql = "UPDATE students SET name = '{$name}', age = {$age}, city = '{$city}' ,roll_no = 
{$roll_no}  WHERE stud_id = {$stud_id}";

if(mysqli_query($conn, $sql)){
	echo json_encode(array('message' => 'Student Record Updated.', 'status' => true));
}else{
  echo json_encode(array('message' => 'Student Record Not Updated.', 'status' => false));
}


?>
