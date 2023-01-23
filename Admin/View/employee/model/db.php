<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "food";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
//  function CheckUser($conn,$table,$username,$password)   //login
//  {
// $result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
//  return $result;
//  }
 
//  function DeleteProduct($conn,$table, $id){
//     $result = $conn->query("DELETE FROM $table WHERE P_id= $id");
//     return $result;
//  }

//  function ShowAll($conn,$table)
//  {
// $result = $conn->query("SELECT * FROM  $table");
//  return $result;
//  }

//  function UpdateUser($conn,$table,$username,$firstname,$email,$gender,$address)
//  {
//      $sql = "UPDATE $table SET firstname='$firstname', email='$email', gender='$gender', address='$address' WHERE username='$username'";

//     if ($conn->query($sql) === TRUE) {
//         $result= TRUE;
//     } else {
//         $result= FALSE ;
//     }
//     return  $result;
//  }

//  function AddUser($conn,$table,$pname,$pdesc,$pcate,$pprice,$pimage)   
//  {
//  $result = $conn->query("INSERT INTO $table VALUES('','$pname','$pdesc','$pcate',$pprice,'$pimage')");
//  return $result;
//  }

 function AddEmployee($conn,$table,$name,$email,$address,$position,$password,$dob,$gender)   
 {
 $result = $conn->query("INSERT INTO $table VALUES('','$name','$email','$address','$position','$password','$dob','$gender')");
 return $result;
 }

 
 function AddMenu($conn,$table,$category,$foodname,$price,$description,$picture)   
 {
 $result = $conn->query("INSERT INTO $table VALUES('$category','$foodname',$price,'$description','$picture')");
 return $result;
 }


 function AddOrderList($conn,$table,$cname,$email,$address,$order,$price,$dob)   
 {
 $result = $conn->query("INSERT INTO $table VALUES('$cname','$email','$address','$order',$price,'$dob')");
 return $result;
 }


 function AddDeliveryBoy($conn,$table,$tname,$email,$address,$phone,$dob,$shift,$availability)   
 {
 $result = $conn->query("INSERT INTO $table VALUES('$tname','$email','$address',$phone,'$dob','$shift','$availability')");
 return $result;
 }

 




//  function ShowAllProduct($conn,$table)
//  {
//  $result = $conn->query("SELECT * FROM  $table");
//  return $result;
//  }

function ShowAllEmployee($conn,$table)
 {
 $result = $conn->query("SELECT * FROM  $table");
 return $result;
 }


 function ShowAllDeliveryBoy($conn,$table)
 {
 $result = $conn->query("SELECT * FROM  $table");
 return $result;
 }

 

//  function SearchProduct($conn,$table,$id)
//  {
//     $result = $conn->query("SELECT * FROM ". $table." WHERE P_id='". $id."'");
//     return $result;
//  }

function SearchEmployee($conn,$table,$name)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE name='". $name."'");
    return $result;
}

function SearchOrderList($conn,$table,$cname)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE cname='". $cname."'");
    return $result;
}

function SearchDeliveryBoy($conn,$table,$tname)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE tname='". $tname."'");
    return $result;
}


//  function UpdateProduct($conn,$table,$id,$pname,$pdesc,$pcate,$pprice)
//  {
//      $sql = "UPDATE $table SET P_Name='$pname', P_Desc='$pdesc', P_Category='$pcate', P_Price='$pprice' WHERE P_id='$id'";

//     if ($conn->query($sql) === TRUE) {
//         $result= TRUE;
//     } else {
//         $result= FALSE ;
//     }
//     return  $result;
//  }

function UpdateEmployee($conn,$table,$name,$email,$address,$position,$password,$dob,$gender)
{
    $sql = "UPDATE $table SET  email='$email', address = '$address', position='$position', password='$password', dob='$dob', gender='$gender' WHERE name='$name'";

    if ($conn->query($sql) === TRUE) { 
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
}

function DeleteEmployee($conn,$table, $name){
    $result = $conn->query("DELETE FROM $table WHERE name= '$name'");
    return $result;
}

function UpdateOrderList($conn,$table,$cname,$email,$address,$order,$price,$dob)
{
    $sql = "UPDATE $table SET  email='$email', address = '$address', order='$order', price='$price', dob='$dob' WHERE cname='$cname'";

    if ($conn->query($sql) === TRUE) { 
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
}

function DeleteOrder($conn,$table, $cname)
{
    $result = $conn->query("DELETE FROM $table WHERE cname= '$cname'");
    return $result;
}


function UpdateDeliveryBoy($conn,$table,$tname,$email,$address,$phone,$dob,$shift,$availability)
{
    $sql = "UPDATE $table SET  email='$email', address = '$address', phone='$phone', dob='$dob', shift='$shift', availability='$availability' WHERE tname='$tname'";

    if ($conn->query($sql) === TRUE) { 
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
}

function DeleteDeliveryBoy($conn,$table, $tname){
    $result = $conn->query("DELETE FROM $table WHERE tname= '$tname'");
    return $result;
}

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>