<?php
include('../model/db.php');

$category = $_POST['category'];

if($category!="")
{
$connection = new db();
$conobj=$connection->OpenCon();

$MyQuery=$connection->GetMenuByCategory($conobj,"menu",$category);



if ($MyQuery->num_rows > 0) {
    echo "<table >
    <tr>
    <th>Category</th>
    <th>Foodname</th>
    <th>Price</th>
    <th>Description</th>
    <th>Picture</th>
    </tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["category"]."</td><td>".$row["foodname"]."</td><td>".$row["price"]."</td><td>".$row["description"]."</td><td><img src=".$row["picture"]." width=10%>"."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
}
else{
  echo "please enter something";
}
?>