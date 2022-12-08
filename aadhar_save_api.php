<?php 
session_start();
include('db_connect.php');
include('./auth.php'); 
if (isset($_GET["action"]))               {$action=$_GET["action"];}
elseif (isset($_POST["action"]))     {$action=$_POST["action"];}  
if (isset($_GET["aadhaar_card"]))               {$aadhaar_card=$_GET["aadhaar_card"];}
elseif (isset($_POST["aadhaar_card"]))     {$aadhaar_card=$_POST["aadhaar_card"];}

if (isset($_GET["employee_name"]))               {$employee_name=$_GET["employee_name"];}
elseif (isset($_POST["employee_name"]))     {$employee_name=$_POST["employee_name"];}

if (isset($_GET["ContactNumber"]))               {$ContactNumber=$_GET["ContactNumber"];}
elseif (isset($_POST["ContactNumber"]))     {$ContactNumber=$_POST["ContactNumber"];}

if (isset($_GET["country_Code"]))               {$country_Code=$_GET["country_Code"];}
elseif (isset($_POST["country_Code"]))     {$country_Code=$_POST["country_Code"];}

if (isset($_GET["Reference_Name_1"]))               {$Reference_Name_1=$_GET["Reference_Name_1"];}
elseif (isset($_POST["Reference_Name_1"]))     {$Reference_Name_1=$_POST["Reference_Name_1"];}

if (isset($_GET["Reference_Number_1"]))               {$Reference_Number_1=$_GET["Reference_Number_1"];}
elseif (isset($_POST["Reference_Number_1"]))     {$Reference_Number_1=$_POST["Reference_Number_1"];}

if (isset($_GET["Reference_Name_2"]))               {$Reference_Name_2=$_GET["Reference_Name_2"];}
elseif (isset($_POST["Reference_Name_2"]))     {$Reference_Name_2=$_POST["Reference_Name_2"];}

if (isset($_GET["Reference_Number_2"]))               {$Reference_Number_2=$_GET["Reference_Number_2"];}
elseif (isset($_POST["Reference_Number_2"]))     {$Reference_Number_2=$_POST["Reference_Number_2"];}

if (isset($_GET["pancdNum"]))               {$pancdNum=$_GET["pancdNum"];}
elseif (isset($_POST["pancdNum"]))     {$pancdNum=$_POST["pancdNum"];}

$aadharimg=$_FILES['aadhar']['name'];
$aadhar_tmp=$_FILES['aadhar']['tmp_name'];

$pancd=$_FILES['pancd']['name'];
$pancd_tmp=$_FILES['pancd']['tmp_name'];

$tenth=$_FILES['tenth']['name'];
$tenth_tmp=$_FILES['tenth']['tmp_name'];

$twelth=$_FILES['twelth']['name'];
$twelth_tmp=$_FILES['twelth']['tmp_name'];

$degree=$_FILES['degree']['name'];
$degree_tmp=$_FILES['degree']['tmp_name'];

$cCheck=$_FILES['cCheck']['name'];
$cCheck_tmp=$_FILES['cCheck']['tmp_name'];

$BStatement=$_FILES['BStatement']['name'];
$BStatement_tmp=$_FILES['BStatement']['tmp_name'];

$rel_exp=$_FILES['rel_exp']['name'];
$rel_exp_tmp=$_FILES['rel_exp']['tmp_name'];

$passport_img=$_FILES['passport_img']['name'];
$passport_img_tmp=$_FILES['passport_img']['tmp_name'];



if($action=='aadhaar_card_submit')
{
     $sql="SELECT * FROM manage_application where aadhar_card='$aadhaar_card'";
     $query=mysqli_query($conn,$sql);
     $val=mysqli_num_rows($query);

     if($val>0)
     {
     	echo "exist";
     }else
     {
     	echo "Not";
     }
}



if($action=='save_application')
{    
    $sql="SELECT * FROM manage_application where contact_no='$ContactNumber'";
    $query=mysqli_query($conn,$sql);
    $val=mysqli_num_rows($query);

    if($val>0)
    {
     echo "Not";
}else{
     $uniqueid=$employee_name."-".rand(100,100000);
     $insert="INSERT INTO `manage_application`(`aadhar_card`, `employee_name`, `contact_no`, `employee_location`, `reference_name_1`, `reference_n0_1`, `reference_name_2`, `reference_n0_2`, `umique_id`) VALUES ('$aadhaar_card','$employee_name','$ContactNumber','$country_Code','$Reference_Name_1','$Reference_Number_1','$Reference_Name_2','$Reference_Number_2','$uniqueid')";
     if(mysqli_query($conn,$insert))
     {
          echo "inserted";
     }else
     {
          echo "Not";
     }
}

}

if($action=='upload_img')
{
     $loc="pictures/";

     echo $insert="INSERT INTO `Emp_details`(`pancard_no`, `aadhar_card_no`,`pancd`, `10th`, `12th`, `highest_qualification`, `cancel_check`, `pay_bank`, `relieving_experience`, `photograph`) VALUES ('$pancdNum','$aadharimg','$pancd','$tenth','$twelth','$degree','$cCheck','$BStatement','$rel_exp','$passport_img')";

     if(mysqli_query($conn,$insert))
     {
          echo "Inserted";
     }
     else
     {
          echo "Not Inserted";
     }
     
}

?>