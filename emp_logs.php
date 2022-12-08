<?php 

include('db_connect.php');
include('./auth.php'); 

		if (isset($_GET["action"]))					{$action=$_GET["action"];}
        elseif (isset($_POST["action"]))	{$action=$_POST["action"];}

        if($action=='fetch_empdetails')
        {
			    $sql="SELECT * FROM Emp_details where aadhar_card_no!=''";
			    $que=mysqli_query($conn,$sql);
			    $aadhar='';
			    $pancd='';
			    $tenth='';
			    $twelth='';
			    $degree='';
			    $cCheck='';
			    $BSataement='';
			    $rel_exp='';

			    while ($row=mysqli_fetch_array($que)) {
			    	$user=$row['umique_id'];
			    	$aadhar=$row['aadhar_card_no'];
			    	$pancd=$row['pancd'];
			    	$tenth=$row['10th'];
			    	$twelth=$row['12th'];
			    	$degree=$row['highest_qualification'];
			    	$cCheck=$row['cancel_check'];
			    	$BSataement=$row['pay_bank'];
			    	$rel_exp=$row['relieving_experience'];
			    	$photograph1="uploads/".$row['photograph'];
			    	$police_verification=$row['police_verification'];
			    	$hr_verification=$row['hr_verification'];

			    	
			    	if($row['photograph']=='')
			    	{
			    		$photograph1.='img404.jfif';
			    	}

			    	if($aadhar=='')
			    	{
			    		$aadhar="fa fa-times";
			    	}else
			    	{
			    		$aadhar="fa fa-check";
			    	}
			    	if($pancd=='')
			    	{
			    		$pancd="fa fa-times";
			    	}else
			    	{
			    		$pancd="fa fa-check";
			    	}
			    	if($tenth=='')
			    	{
			    		$tenth="fa fa-times";
			    	}else
			    	{
			    		$tenth="fa fa-check";
			    	}
			    	if($twelth=='')
			    	{
			    		$twelth="fa fa-times";
			    	}else
			    	{
			    		$twelth="fa fa-check";
			    	}
			    	if($degree=='')
			    	{
			    		$degree="fa fa-times";
			    	}else
			    	{
			    		$degree="fa fa-check";
			    	}
			    	if($cCheck=='')
			    	{
			    		$cCheck="fa fa-times";
			    	}else
			    	{
			    		$cCheck="fa fa-check";
			    	}
			    	if($BSataement=='')
			    	{
			    		$BSataement="fa fa-times";
			    	}else
			    	{
			    		$BSataement="fa fa-check";
			    	}
			    	if($rel_exp=='')
			    	{
			    		$rel_exp="fa fa-times";
			    	}else
			    	{
			    		$rel_exp="fa fa-check";
			    	}
			    	if($row['photograph']=='')
			    	{
			    		$photograph="fa fa-times";
			    	}else
			    	{
			    		$photograph="fa fa-check";
			    	}
			    		if($police_verification=='0')
			    	{
			    		$police_verification="fa fa-times";
			    	}else
			    	{
			    		$police_verification="fa fa-check";
			    	}
			    		if($hr_verification=='0')
			    	{
			    		$hr_verification="fa fa-times";
			    	}else
			    	{
			    		$hr_verification="fa fa-check";
			    	}


			    	$html="<tr><td data-label='Account'>".$user."<div class='userImage' style='display:none; height:40px; width:60px;'><img src='".$photograph1."'></img></div></td>
							<td data-label='Aadharcd'><i class='".$aadhar."' aria-hidden='true'></i></td>
							<td data-label='pancd'><i class='".$pancd."' aria-hidden='true'></i></td>
							<td data-label='cCheck'><i class='".$cCheck."' aria-hidden='true'></i></td>
							<td data-label='tenth'><i class='".$tenth."' aria-hidden='true' ></i></td>
							<td data-label='twelth'><i class='".$twelth."' aria-hidden='true'></i></td>
							<td data-label='degree'><i class='".$degree."' aria-hidden='true' ></i></td>
							<td data-label='BSataement'><i class='".$BSataement."' aria-hidden='true' ></i></td>
							<td data-label='BSataement'><i class='".$photograph."' aria-hidden='true' ></i></td>
							<td data-label='rel_exp'><i class='".$rel_exp."' aria-hidden='true' ></i></td>
							<td data-label='rel_exp'><i class='".$police_verification."' aria-hidden='true' ></i></td>
							<td data-label='rel_exp'><i class='".$hr_verification."' aria-hidden='true' ></i></td>
							</tr>";
			    echo $html;
			    }

		}	 


?>