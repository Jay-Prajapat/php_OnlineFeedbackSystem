<?php
include("configASL.php");
$id=$_GET['del'];
mysql_query("delete from faculty where id='$id'");
?>
<script type="text/javascript">
alert("Successfully deleted");
window.location='manageFaculty.php';
</script>
