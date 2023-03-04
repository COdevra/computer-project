<?php
require "connection.php";
$id = $_GET['id'];
$sql = "DELETE from plan where id = '$id'";
$data = mysqli_query($conn,$sql);
if($data)
{
?>
<META HTTP-EQUIV="refresh" CONTENT="0;URL=http://localhost/compproject/gpt2.php">
<?php
}
else{
echo "sorry , deleted process failed";
}
?>