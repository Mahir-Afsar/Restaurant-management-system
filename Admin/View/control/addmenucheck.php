<?php
include('model/db.php');


 $error="";

if (isset($_POST['add'])) {
    if (empty($_POST['category']) || empty($_POST['foodname']) || empty($_POST['price']) || empty($_POST['description']) || empty($_FILES['picture']['name'])) {
        $error = "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();
$target_destination="file/".$_FILES['picture']['name'];

$userQuery=$connection->AddMenu($conobj,"menu",$_POST['category'],$_POST['foodname'],$_POST['price'],$_POST['description'],$target_destination);
if($userQuery==TRUE)
{
    if (move_uploaded_file($_FILES["picture"]["tmp_name"],  $target_destination)) {
        echo "file upload done";
      }
    else{
        echo "file not upload";
    } 
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