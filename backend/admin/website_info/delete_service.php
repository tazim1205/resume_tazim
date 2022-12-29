<?php 
include('../../../database/connection.php');
$db=new database();
if(isset($_GET['id']))
{
	$id = $_GET['id'];

	// print $id;

	$sql = $db->link->query("DELETE FROM `service` WHERE `id`='$id'");

	if($sql)
	{
		echo "<script>location='view_service.php'</script>";
	}
	else
	{
		echo "<script>location='view_service.php'</script>";
	}
}
?>