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

 function AddOffer($conn,$table,$title,$offer,$date)   
 {
 $result = $conn->query("INSERT INTO $table VALUES('','$title','$offer','$date')");
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

function SearchMenu($conn,$table,$category)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE category='". $category."'");
    return $result;
}

function GetMenuByCategory($conn,$table, $category)
{
 $result = $conn->query("SELECT * FROM  $table WHERE category='$category'");
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

function UpdateMenu($conn,$table,$category,$foodname,$price,$description,$picture)
{
    $sql = "UPDATE $table SET  foodname='$foodname', price = '$price', description='$description', picture='$picture' WHERE category='$category'";

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


function DeleteMenu($conn,$table, $category){
    $result = $conn->query("DELETE FROM $table WHERE category= '$category'");
    return $result;
}

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>