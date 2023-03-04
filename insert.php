<?php
require 'connection.php';
if($_GET['submit'])
{
$task = $_GET['work'];
$duedate= $_GET['date'];
if($task!="" && $duedate!="")
{
$sql = "INSERT INTO plan(task,duedate) 
VALUES ('$task','$duedate')";
 $data=mysqli_query($conn,$sql);
if ($data)
{
echo "DATA inserted successfully";
header('Location:gpt2.php'); 
}else{
echo "All fields are required";
}
}
}
?>