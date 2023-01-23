<?php
    include('model/db.php');


    $errorinfo="";
    // $radio1=$radio2=$radio3="";
    $cname=$email=$dob=$address=$order=$price="";

    if (isset($_POST['update'])) {
        if (empty($_POST['cname']) || empty($_POST['email'])) {
            $errorinfo = "Input given is invalid";
        }
        else
        {
            $connection = new db();
            $conobj=$connection->OpenCon();
            $userQuery=$connection->UpdateOrderList($conobj,"orderlist",$_POST['cname'],$_POST['email'],$_POST['address'],$_POST['order'],$_POST['price'],$_POST['dob']);
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

            $userQuery1=$connection->SearchOrderList($conobj,"orderlist",$_POST["srch_username"]);

            if ($userQuery1->num_rows!=null) {
                if ($userQuery1->num_rows > 0) {
                    while($row = $userQuery1->fetch_assoc()) {
                    $cname = $row["cname"];
                    $email=$row["email"];
                    $address=$row["address"];
                    $order =$row["order"];
                    $price=$row["price"];
                    $dob =$row["dob"];
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
}
        
    
if (isset($_POST['delete'])) {
    
    $connection = new db();
    $conobj=$connection->OpenCon();
    $cname= $_POST['cname'];
    $userQuery2=$connection->DeleteOrder($conobj,"orderlist",$cname);
    if($userQuery2==TRUE)
    {
        echo "Delete successful"; 
    }
    else
    {
        echo "could not delete";    
    }

    $connection->CloseCon($conobj);
    
 
    if (isset($_POST['delete'])) {
    
        $connection = new db();
        $conobj=$connection->OpenCon();
        $cname= $_POST['cname'];
        $userQuery2=$connection->DeleteOrder($conobj,"orderlist",$cname);
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