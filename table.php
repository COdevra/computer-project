<?php
$servername="localhost";
$username="root";
$password="";
$database="planner";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
 die("Connection Failed".mysqli_connect_error());
}
// Creating table
$sql="CREATE TABLE plan(
 id int NOT NULL AUTO_INCREMENT,
 task varchar(255)NOT NULL,
 duedate date,
 PRIMARY KEY (id)
 )";
 if(mysqli_query($conn,$sql))
 {
 echo"Table Created Successfully";
 }
 else{
 echo"Error couldn't execute sql".mysqli_error();
 }
 mysqli_close($conn);
?>
