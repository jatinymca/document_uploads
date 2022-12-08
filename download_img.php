 <?php 
include('db_connect.php');
include('./auth.php'); 

if (isset($_GET["image_id"]))               {$image_id=$_GET["image_id"];}
elseif (isset($_POST["image_id"]))     {$image_id=$_POST["image_id"];} 
  
$file = $image_id;
echo $file;
 
   header('Content-type: octet/stream');
 header('Content-disposition: attachment; filename='.$file.';');
 header('Content-Length: '.filesize($file));
 readfile($file);
  
?>