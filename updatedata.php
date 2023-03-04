<?php
require 'connection.php';
if($_GET['submit'])
{
$id=$_GET['id'];
$task = $_GET['work'];
$duedate = $_GET['date'];
$sql = "UPDATE plan SET task='$task',
duedate = '$duedate'
where id= '$id'";
$data = mysqli_query($conn,$sql);
if ($data)
{
echo "record update successfully";

?>
<META HTTP-EQUIV="refresh" CONTENT="0; URL=http://localhost/compproject/gpt2.php">
<?php

}

else
{
echo " record not updated ";
}

}

?>

