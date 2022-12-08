<?php 
include('db_connect.php');
include('./auth.php'); 

if (isset($_GET["action"]))               {$action=$_GET["action"];}
elseif (isset($_POST["action"]))     {$action=$_POST["action"];} 


if (isset($_GET["Employee_id"]))               {$Employee_id=$_GET["Employee_id"];}
elseif (isset($_POST["Employee_id"]))     {$Employee_id=$_POST["Employee_id"];}

if (isset($_GET["police_verification"]))               {$police_verification=$_GET["police_verification"];}
elseif (isset($_POST["police_verification"]))     {$police_verification=$_POST["police_verification"];}

if (isset($_GET["hr_verification"]))               {$hr_verification=$_GET["hr_verification"];}
elseif (isset($_POST["hr_verification"]))     {$hr_verification=$_POST["hr_verification"];}

if (isset($_GET["emp_name"]))               {$emp_name=$_GET["emp_name"];}
elseif (isset($_POST["emp_name"]))     {$emp_name=$_POST["emp_name"];}

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

if (isset($_GET["userName"]))               {$userName=$_GET["userName"];}
elseif (isset($_POST["userName"]))     {$userName=$_POST["userName"];}

if($action=='upload_data')
{
     $loc="uploads/";

      echo $insert="INSERT INTO `Emp_details`(`employee_name`,`pancard_no`,`umique_id`, `aadhar_card_no`,`pancd`, `10th`, `12th`, `highest_qualification`, `cancel_check`, `pay_bank`, `relieving_experience`, `photograph`,`police_verification`,`hr_verification`) VALUES ('$emp_name','$pancdNum','$Employee_id','$aadharimg','$pancd','$tenth','$twelth','$degree','$cCheck','$BStatement','$rel_exp','$passport_img','$police_verification','$hr_verification')";

     if(mysqli_query($conn,$insert))
     {
         foreach($_FILES as $file){
       //echo $file['name']; 
          $file['tmp_name'].'</br>'; 
          move_uploaded_file($file['tmp_name'], "$loc".$file["name"]);
     }
     header("location:index.php?page=Emp_details");
}
else
{
     echo "Not Inserted";
}

}


if($action=='get_document')
{
     $select="SELECT * FROM `Emp_details` where umique_id='$Employee_id'"; 
     $qry=mysqli_query($conn,$select);
     $row = mysqli_fetch_array($qry);  
     $count =mysqli_num_rows($qry);  
     if($count>0){
          
          $html="<div class='col-lg-12'>
          <div class='row'> 
          <!-- Table Panel -->
          <div class='col-lg-12'>
          <div class='gallery-image'>";

          if(!empty($row['aadhar_card_no'])){
               $html.="<div class='img-box'>
               <a data-fancybox='gallery' href='uploads/".$row['aadhar_card_no']."' class='aadhar_card_no'><img src='uploads/".$row['aadhar_card_no']."' id='aadhar_card_no'></a>
               <div class='transparent-box'>
               <div class='caption'> 
               <p>Aadhar Card</p> 
               <a href='uploads/".$row['aadhar_card_no']."' class='download_doc_aadhar download_doc' id='' download><i class='fa-solid fa-download'></i></a> <a href='#' class='edit_doc' id='edit_doc' onclick='edit_document(this);'><i class='fa-solid fa-edit'></i></a>
               </div>
               </div> 
               </div>";}else{ $html.=""; };

               if(!empty($row['pancd'])){
                    $html.="<div class='img-box'>
                    <a data-fancybox='gallery' href='uploads/".$row['pancd']."' class='pancd'><img src='uploads/".$row['pancd']."' id='pancd'></a>
                    <div class='transparent-box'>
                    <div class='caption'>
                    <p>PanCard</p> 
                    <a href='uploads/".$row['pancd']."' class='download_doc_pancd download_doc' id='' download><i class='fa-solid fa-download' download></i></a> <a href='#' class='edit_doc' id='edit_doc' onclick='edit_document(this);'><i class='fa-solid fa-edit'></i></a>
                    </div>
                    </div>
                    </div>";}else{ $html.=""; };


                    if(!empty($row['cancel_check'])){
                         $html.= "<div class='img-box'>
                         <a data-fancybox='gallery' href='uploads/".$row['cancel_check']."' class='cancel_check'><img src='uploads/".$row['cancel_check']."' id='cancel_check'></a>
                         <div class='transparent-box'>
                         <div class='caption'>
                         <p>Cancel Check</p>

                         <a href='uploads/".$row['cancel_check']."' class='download_doc_cancel_check download_doc' id=''><i class='fa-solid fa-download'></i></a>  <a href='#' class='edit_doc' id='edit_doc' onclick='edit_document(this);'><i class='fa-solid fa-edit'></i></a>
                         </div>
                         </div>
                         </div>";}else{ $html.=""; };


                         if(!empty($row['highest_qualification'])){
                              $html.="<div class='img-box'>
                              <a data-fancybox='gallery' href='uploads/".$row['highest_qualification']."' class='highest_qualification'><img src='uploads/".$row['highest_qualification']."' id='highest_qualification'></a>
                              <div class='transparent-box'>
                              <div class='caption'>
                              <p>Highest Qualification</p>

                              <a href='uploads/".$row['highest_qualification']."' dataid='' class='download_doc_highest_qualification download_doc' id='' download><i class='fa-solid fa-download'></i></a>  <a href='#' class='edit_doc' id='edit_doc' onclick='edit_document(this);'><i class='fa-solid fa-edit'></i></a>
                              </div>
                              </div> 
                              </div>";}else{ $html.=""; }; 


                              if(!empty($row['highest_qualification'])){
                                   $html.="<div class='img-box'>
                                   <a data-fancybox='gallery' href='uploads/".$row['pay_bank']."' class='pay_bank'><img src='uploads/".$row['pay_bank']."' id='pay_bank'></a>
                                   <div class='transparent-box'>
                                   <div class='caption'>
                                   <p>Play slip</p>

                                   <a href='uploads/".$row['pay_bank']."' class='download_doc_pay_bank download_doc' id=''><i class='fa-solid fa-download' download></i></a>  <a href='#' class='edit_doc' id='edit_doc' onclick='edit_document(this);'><i class='fa-solid fa-edit'></i></a>
                                   </div>
                                   </div> 
                                   </div>";}else{ $html.=""; }; 

                                   if(!empty($row['highest_qualification'])){
                                        $html.="<div class='img-box'>
                                        <a data-fancybox='gallery' href='uploads/".$row['photograph']."' class='photograph'><img src='uploads/".$row['photograph']."' id='photograph'></a>
                                        <div class='transparent-box'>
                                        <div class='caption'>
                                        <p>Photograph</p> 
                                        <a href='uploads/".$row['photograph']."' class='download_doc_photograph download_doc' id='' download ><i class='fa-solid fa-download'></i></a>  <a href='#' class='edit_doc' id='edit_doc' onclick='edit_document(this);'><i class='fa-solid fa-edit'></i></a>
                                        </div>
                                        </div> 
                                        </div>";}else{ $html.=""; }; 

                                        if(!empty($row['highest_qualification'])){
                                             $html.="<div class='img-box'>
                                             <a data-fancybox='gallery' href='uploads/".$row['relieving_experience']."' class='relieving_experience'><img src='uploads/".$row['relieving_experience']."' id='relieving_experience'></a>
                                             <div class='transparent-box'>
                                             <div class='caption'>
                                             <p>Relieving Experience</p> 
                                             <a href='uploads/".$row['relieving_experience']."' class='download_doc_relieving_experience download_doc' id='' download ><i class='fa-solid fa-download'></i></a>  <a href='#' class='edit_doc' id='edit_doc' onclick='edit_document(this);'><i class='fa-solid fa-edit'></i></a>
                                             </div>
                                             </div> 
                                             </div>";}else{ $html.=""; }; 
                                             $html.="</div>
                                             </div>
                                             </div>
                                             </div>";

                                             echo $html; }
                                        }
     if($action=='user_getData')
     {
          $select="SELECT * FROM `Emp_details` where umique_id='$Employee_id'"; 
     $qry=mysqli_query($conn,$select);
     $row = mysqli_fetch_array($qry);  
     $count =mysqli_num_rows($qry);  
     if($count>0){
          
          $html="<div class='col-lg-12'>
          <div class='row'> 
          <!-- Table Panel -->
          <div class='col-lg-12'>
          <div class='gallery-image'>";

          if(!empty($row['aadhar_card_no'])){
               $html.="<div class='img-box'>
               <a data-fancybox='gallery' href='uploads/".$row['aadhar_card_no']."' class='aadhar_card_no'><img src='uploads/".$row['aadhar_card_no']."' id='aadhar_card_no'></a>
               <div class='transparent-box'>
               <div class='caption'> 
               <p>Aadhar Card</p> 
               <a href='uploads/".$row['aadhar_card_no']."' class='download_doc_aadhar download_doc' id='' download><i class='fa-solid fa-download'></i></a> <a href='#' class='edit_doc' id='edit_doc' onclick='edit_document(this);'><i class='fa-solid fa-edit'></i></a>
               </div>
               </div> 
               </div>";}else{ $html.=""; };

               if(!empty($row['pancd'])){
                    $html.="<div class='img-box'>
                    <a data-fancybox='gallery' href='uploads/".$row['pancd']."' class='pancd'><img src='uploads/".$row['pancd']."' id='pancd'></a>
                    <div class='transparent-box'>
                    <div class='caption'>
                    <p>PanCard</p> 
                    <a href='uploads/".$row['pancd']."' class='download_doc_pancd download_doc' id='' download><i class='fa-solid fa-download' download></i></a> <a href='#' class='edit_doc' id='edit_doc' onclick='edit_document(this);'><i class='fa-solid fa-edit'></i></a>
                    </div>
                    </div>
                    </div>";}else{ $html.=""; };


                    if(!empty($row['cancel_check'])){
                         $html.= "<div class='img-box'>
                         <a data-fancybox='gallery' href='uploads/".$row['cancel_check']."' class='cancel_check'><img src='uploads/".$row['cancel_check']."' id='cancel_check'></a>
                         <div class='transparent-box'>
                         <div class='caption'>
                         <p>Cancel Check</p>

                         <a href='uploads/".$row['cancel_check']."' class='download_doc_cancel_check download_doc' id=''><i class='fa-solid fa-download'></i></a>  <a href='#' class='edit_doc' id='edit_doc' onclick='edit_document(this);'><i class='fa-solid fa-edit'></i></a>
                         </div>
                         </div>
                         </div>";}else{ $html.=""; };


                         if(!empty($row['highest_qualification'])){
                              $html.="<div class='img-box'>
                              <a data-fancybox='gallery' href='uploads/".$row['highest_qualification']."' class='highest_qualification'><img src='uploads/".$row['highest_qualification']."' id='highest_qualification'></a>
                              <div class='transparent-box'>
                              <div class='caption'>
                              <p>Highest Qualification</p>

                              <a href='uploads/".$row['highest_qualification']."' dataid='' class='download_doc_highest_qualification download_doc' id='' download><i class='fa-solid fa-download'></i></a>  <a href='#' class='edit_doc' id='edit_doc' onclick='edit_document(this);'><i class='fa-solid fa-edit'></i></a>
                              </div>
                              </div> 
                              </div>";}else{ $html.=""; }; 


                              if(!empty($row['highest_qualification'])){
                                   $html.="<div class='img-box'>
                                   <a data-fancybox='gallery' href='uploads/".$row['pay_bank']."' class='pay_bank'><img src='uploads/".$row['pay_bank']."' id='pay_bank'></a>
                                   <div class='transparent-box'>
                                   <div class='caption'>
                                   <p>Play slip</p>

                                   <a href='uploads/".$row['pay_bank']."' class='download_doc_pay_bank download_doc' id=''><i class='fa-solid fa-download' download></i></a>  <a href='#' class='edit_doc' id='edit_doc' onclick='edit_document(this);'><i class='fa-solid fa-edit'></i></a>
                                   </div>
                                   </div> 
                                   </div>";}else{ $html.=""; }; 

                                   if(!empty($row['highest_qualification'])){
                                        $html.="<div class='img-box'>
                                        <a data-fancybox='gallery' href='uploads/".$row['photograph']."' class='photograph'><img src='uploads/".$row['photograph']."' id='photograph'></a>
                                        <div class='transparent-box'>
                                        <div class='caption'>
                                        <p>Photograph</p> 
                                        <a href='uploads/".$row['photograph']."' class='download_doc_photograph download_doc' id='' download ><i class='fa-solid fa-download'></i></a>  <a href='#' class='edit_doc' id='edit_doc' onclick='edit_document(this);'><i class='fa-solid fa-edit'></i></a>
                                        </div>
                                        </div> 
                                        </div>";}else{ $html.=""; }; 

                                        if(!empty($row['highest_qualification'])){
                                             $html.="<div class='img-box'>
                                             <a data-fancybox='gallery' href='uploads/".$row['relieving_experience']."' class='relieving_experience'><img src='uploads/".$row['relieving_experience']."' id='relieving_experience'></a>
                                             <div class='transparent-box'>
                                             <div class='caption'>
                                             <p>Relieving Experience</p> 
                                             <a href='uploads/".$row['relieving_experience']."' class='download_doc_relieving_experience download_doc' id='' download ><i class='fa-solid fa-download'></i></a>  <a href='#' class='edit_doc' id='edit_doc' onclick='edit_document(this);'><i class='fa-solid fa-edit'></i></a>
                                             </div>
                                             </div> 
                                             </div>";}else{ $html.=""; }; 
                                             $html.="</div>
                                             </div>
                                             </div>
                                             </div>";

                                             echo $html; }
     }

?>