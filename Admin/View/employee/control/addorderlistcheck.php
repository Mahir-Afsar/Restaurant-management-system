<?php
include('model/db.php');


 $error="";

if (isset($_POST['add'])) {
    if (empty($_POST['cname']) || empty($_POST['email']) || empty($_POST['address']) || empty($_POST['order']) || empty($_POST['price']) || empty($_POST['dob'])) {
        $error = "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();
// $target_destination="../file/".$_FILES['pimage']['name'];

$userQuery=$connection->AddOrderList($conobj,"orderlist",$_POST['cname'],$_POST['email'],$_POST['address'],$_POST['order'],$_POST['price'],$_POST['dob']
);
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