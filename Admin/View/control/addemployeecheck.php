<?php
include('model/db.php');


 $error="";

if (isset($_POST['add'])) {
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['address']) || empty($_POST['position'])) {
        $error = "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();
// $target_destination="../file/".$_FILES['pimage']['name'];

$userQuery=$connection->AddEmployee($conobj,"employee",$_POST['name'],$_POST['email'],$_POST['address'],$_POST['position'],$_POST['password'],$_POST['dob'],$_POST['gender']);
if($userQuery==TRUE)
{
    // if (move_uploaded_file($_FILES["pimage"]["tmp_name"],  $target_destination)) {
    //     echo "file upload done";
    //   }
    // else{
    //     echo "file not upload";
    // } 
    echo "add successful"; 
}
else
{
    echo "could not add";    
}
$connection->CloseCon($conobj);

}
}


?>