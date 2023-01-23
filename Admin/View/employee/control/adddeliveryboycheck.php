<?php
include('model/db.php');


 $error="";

if (isset($_POST['add'])) {
    if (empty($_POST['tname']) || empty($_POST['email']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['dob']) || empty($_POST['shift']) || empty($_POST['availability'])) {
        $error = "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();
// $target_destination="../file/".$_FILES['pimage']['name'];

$userQuery=$connection->AddDeliveryBoy($conobj,"deliveryman",$_POST['tname'],$_POST['email'],$_POST['address'],$_POST['phone'],$_POST['dob'],$_POST['shift'],$_POST['availability']);
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