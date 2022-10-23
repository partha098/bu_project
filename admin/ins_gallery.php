<?php 

include("inc/db.php");

$title=$_POST['title'];

$fn=$_FILES['gimg']['name'];
$buf=$_FILES['gimg']['tmp_name'];
move_uploaded_file($buf,"../gallery/".$fn);

$ins="INSERT INTO gallery SET title='$title',image='$fn'";

$con->query($ins);

header("location:list-gallery.php");


?>