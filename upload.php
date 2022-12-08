<?php
include('db_connect.php'); 
echo  $image=$_FILES['pancd']['name']; 
   $b=$_FILES['pancd']['type']; 
   $c=$_FILES['pancd']['size'];  
   $e=$_FILES['pancd']['tmp_name']; 
   $loc="uploads/";

echo $insert="INSERT INTO `Emp_details`(`pancd_`) VALUES ('$image')";
 $slq=mysqli_query($conn,$insert);

      move_uploaded_file($e,$loc);
?>