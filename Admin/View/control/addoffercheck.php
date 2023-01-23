<?php
include('model/db.php');


 $error="";

if (isset($_POST['add'])) {
    if (empty($_POST['title']) || empty($_POST['offer']) || empty($_POST['date'])) {
        $error = "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();
// $target_destination="../file/".$_FILES['pimage']['name'];

$userQuery=$connection->AddOffer($conobj,"dashboard",$_POST['title'],$_POST['offer'],$_POST['date']);
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