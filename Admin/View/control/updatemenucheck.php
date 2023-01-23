<?php
    include('model/db.php');


    $errorinfo="";
    $radio1=$radio2=$radio3="";
    $category=$foodname=$price=$picture=$description=$password="";

    if (isset($_POST['update'])) {
        if (empty($_POST['foodname']) || empty($_POST['price'])) {
            $errorinfo = "Input given is invalid";
        }
        else
        {
            $connection = new db();
            $conobj=$connection->OpenCon();
            $target_destination="file/".$_FILES['picture']['name'];
            $userQuery=$connection->UpdateMenu($conobj,"menu",$_POST['category'],$_POST['foodname'],$_POST['price'],$_POST['description'],$target_destination);
            if($userQuery==TRUE)
            {
                // $errorinfo= "Update successful"; 
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

            $userQuery1=$connection->SearchMenu($conobj,"menu",$_POST["srch_username"]);

            if ($userQuery1->num_rows!=null) {
                if ($userQuery1->num_rows > 0) {
                    while($row = $userQuery1->fetch_assoc()) {
                    $category = $row["category"];
                    $foodname=$row["foodname"];
                    $price=$row["price"];
                    $description =$row["description"];
                    $picture =$row["picture"];
                    // $dob =$row["dob"];
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
        $category= $_POST['category'];
        $userQuery2=$connection->DeleteMenu($conobj,"menu",$category);
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