<?php
include 'dbconnect.php';

$id=$_GET['id'];

$sql=mysqli_query($conn,"DELETE FROM admin WHERE id='$id'") or die(mysqli_error($conn));

if ($sql) {
	?>
	<script type="text/javascript">window.alert('One record deleted');</script>
	<?php
	header("refresh:0;url=admin_table.php");
} else {
	?>
	<script type="text/javascript">window.alert('No record deleted');</script>
	<?php
	header("refresh:0;url=admin_table.php");
}

?>