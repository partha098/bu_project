<?php session_start(); 
if(!isset($_SESSION['admin_id'])){
    header("location:index.php");
    }
?>
<?php 

include("inc/db.php");

$id=$_POST['id'];

$title=$_POST['title'];

if(isset($_FILES['gimg']['name']) && $_FILES['gimg']['name']!=""){
$fn=$_FILES['gimg']['name'];
$buf=$_FILES['gimg']['tmp_name'];
move_uploaded_file($buf,"../gallery/".$fn);

$upd="UPDATE gallery SET title='$title',image='$fn' WHERE image_id='$id'";
}else{
    $upd="UPDATE gallery SET title='$title' WHERE image_id='$id'";

}
$con->query($upd);

header("location:list-gallery.php");


?>