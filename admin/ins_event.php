<?php session_start();

if(!isset($_SESSION['admin_id'])){
    header("location:index.php");
    }
?>
<?php 

include("inc/db.php");

$event_name=$_POST['event_name'];
$event_date=$_POST['event_date'];
$event_venue=$_POST['event_venue'];
$fn=$_FILES['event_image']['name'];
$buf=$_FILES['event_image']['tmp_name'];
move_uploaded_file($buf,"../event_photo/".$fn);

$ins="INSERT INTO events SET event_name='$event_name',event_date='$event_date',event_venue='$event_venue',event_image='$fn'";

$con->query($ins);

header("location:list-event.php");


?>