<?php session_start(); 
if(!isset($_SESSION['admin_id'])){
    header("location:index.php");
    }
?>
<?php 
include("inc/db.php");
$did=$_GET['id'];

$del="DELETE FROM events WHERE event_id='$did'";
$con->query($del);

header("location:list-event.php");

?>