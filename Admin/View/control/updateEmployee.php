<?php
    include('model/db.php');


    $errorinfo="";
    $radio1=$radio2=$radio3="";
    $firstname=$email=$dob=$address=$position=$password="";

    if (isset($_POST['update'])) {
        if (empty($_POST['name']) || empty($_POST['email'])) {
            $errorinfo = "Input given is invalid";
        }
        else
        {
            $connection = new db();
            $conobj=$connection->OpenCon();
            $userQuery=$connection->UpdateEmployee($conobj,"employee",$_POST['name'],$_POST['email'],$_POST['address'],$_POST['position'],$_POST['password'],$_POST['dob'],$_POST['gender']);
            if($userQuery==TRUE)
            {
                $errorinfo= "Update successful"; 
            }
            else
            {
                $errorinfo= "Could not update";    
            }
            $connection->CloseCon($conobj);

        }
    }
        
    if(isset($_POST['search'])){
        if (empty($_POST['srch_username'])) {
            $errorinfo = "Please provide a username";
        }else{
            
            $connection = new db();
            $conobj=$connection->OpenCon();

            $userQuery1=$connection->SearchEmployee($conobj,"employee",$_POST["srch_username"]);

            if ($userQuery1->num_rows!=null) {
                if ($userQuery1->num_rows > 0) {
                    while($row = $userQuery1->fetch_assoc()) {
                    $name = $row["name"];
                    $email=$row["email"];
                    $address=$row["address"];
                    $position =$row["position"];
                    $password =$row["password"];
                    $dob =$row["dob"];
                    if( $row["gender"]=="female" )
                    { $radio1="checked"; }
                    else if($row["gender"]=="male")
                    { $radio2="checked"; }
                    else{$radio3="checked";}  
                    } 
                }
            }else{
                $errorinfo= "No result found";
            }
        
        }
    }
    
    if (isset($_POST['delete'])) {
    
        $connection = new db();
        $conobj=$connection->OpenCon();
        $name= $_POST['name'];
        $userQuery2=$connection->DeleteEmployee($conobj,"employee",$name);
        if($userQuery2==TRUE)
        {
            echo "Delete successful"; 
        }
        else
        {
            echo "could not delete";    
        }
    
        $connection->CloseCon($conobj);
        
     
        }

?>