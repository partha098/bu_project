<?php session_start(); 
if(!isset($_SESSION['admin_id'])){
    header("location:index.php");
    }
?>
<?php 

include("inc/db.php");

$id=$_POST['id'];

$event_name=$_POST['event_name'];
$event_date=$_POST['event_date'];
$event_venue=$_POST['event_venue'];

if(isset($_FILES['event_image']['name']) && $_FILES['event_image']['name']!=""){
$fn=$_FILES['event_image']['name'];
$buf=$_FILES['event_image']['tmp_name'];
move_uploaded_file($buf,"../event_photo/".$fn);
$upd="UPDATE events SET event_name='$event_name',event_date='$event_date',event_venue='$event_venue',event_image='$fn' WHERE event_id='$id'";

}else{

    $upd="UPDATE events SET event_name='$event_name',event_date='$event_date',event_venue='$event_venue' WHERE event_id='$id'";
 
}

$con->query($upd);

header("location:list-event.php");


?>