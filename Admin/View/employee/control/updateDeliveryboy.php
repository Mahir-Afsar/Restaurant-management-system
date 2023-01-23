<?php
    include('model/db.php');


    $errorinfo="";
    // $radio1=$radio2=$radio3="";
    $tname=$email=$dob=$address=$phone=$shift=$availability="";

    if (isset($_POST['update'])) {
        if (empty($_POST['tname']) || empty($_POST['email'])) {
            $errorinfo = "Input given is invalid";
        }
        else
        {
            $connection = new db();
            $conobj=$connection->OpenCon();
            $userQuery=$connection->updateDeliveryboy($conobj,"deliveryman",$_POST['tname'],$_POST['email'],$_POST['address'],$_POST['phone'],$_POST['dob'],$_POST['shift'],$_POST['availability']);
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

            $userQuery1=$connection->SearchDeliveryBoy($conobj,"deliveryman",$_POST["srch_username"]);

            if ($userQuery1->num_rows!=null) {
                if ($userQuery1->num_rows > 0) {
                    while($row = $userQuery1->fetch_assoc()) {
                    $tname = $row["tname"];
                    $email=$row["email"];
                    $address=$row["address"];
                    $phone =$row["phone"];              
                    $dob =$row["dob"];
                    $shift =$row["shift"];
                    $availability =$row["availability"];
                    // if( $row["gender"]=="female" )
                    // { $radio1="checked"; }
                    // else if($row["gender"]=="male")
                    // { $radio2="checked"; }
                    // else{$radio3="checked";}  
                    // } 
                }
            }else{
                $errorinfo= "No result found";
            }
        
        }
    }
    
    if (isset($_POST['delete'])) {
    
        $connection = new db();
        $conobj=$connection->OpenCon();
        $tname= $_POST['tname'];
        $userQuery2=$connection->DeleteOrder($conobj,"deliveryman",$tname);
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
    }

?>