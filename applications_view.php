<?php 
include 'db_connect.php';
  
$application = $conn->query("SELECT  a.*,v.position FROM application a inner join vacancy v on v.id = a.position_id where a.rand_id=".$_GET['id'])->fetch_array();
foreach($application as $k => $v){
	$$k = $v;
}
       $fname = explode('_',$resume_path);
       unset($fname[0]);
       $fname = implode("",$fname);

      
?> 
<?php include('db_connect.php');?>
<?php
$qry = $conn->query("SELECT * FROM vacancy ");
	while($row=$qry->fetch_assoc()){
		$pos[$row['id']] = $row['position'];
	}
	$$pid = 'all';
	if(isset($_GET['pid']) && $_GET['pid'] >= 0){
		$pid = $_GET['pid'];
	}
	$position_id = 'all';
	if(isset($_GET['position_id']) && $_GET['position_id'] >= 0){
		$position_id = $_GET['position_id'];
	}
?>
<div class="container-fluid">
	
	<div class="col-lg-12">
		<div class="row">

			<!-- Table Panel -->
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<div class="row">
							<div class="col-lg-12">
								<span><large><b>Applicant Information</b></large></span>
								 <button class="float-right btn btn-primary"><a href="download.php?id=<?php echo $_GET['id']; ?>" target="_blank" style="color: white;">Download Resume</a></button>
							 
							</div>
						</div>
						
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-lg-12">
								<table class="table table-bordered table-hover dataTable no-footer ">
									<tr>
										<th>Applied for :-</th>
										<td colspan=""><?php echo $position ?></td>
										<th>Notice Period </th>
										<td ><?php echo $dojoining ?></td>
										<th> Created-date </th>
										<td ><?php echo $date_created ?></td>
									</tr>
									<tr>
										<th>Name</th>
										<td><?php echo ucwords($firstname.' '.$middlename.''.$lastname) ?></td>
										<th>Gender</th>
										<td><?php echo $gender ?></td>
									    <th>Experience</th>
										<td><?php echo $experience ?></td>
										
									 </tr>
									<tr>
										<th>Address</th> 
										<td colspan="2"><?php echo $address ?></td>
										<th>Contact</th> 
										<td colspan="2"><?php echo $contact ?></td> 
									</tr>
									
									<tr>
										<th>Current Salary</th>
										<td colspan="2"><?php echo $csalary ?></td>
										<th>Expected Salary</th>
										<td colspan="2"><?php echo $esalary ?></td>
									</tr>

									<tr>
									 	<th>Cover Letter</th>
										<td colspan="2" ><?php echo !empty($cover_letter) ? str_replace("\n","<br>",html_entity_decode($cover_letter)) : 'None'; ?> </td> 
										<th>Source</th>
										<td colspan="2"><?php echo $source ." - ". $Comment_source ?></td>
										 

									</tr>
									<tr style="background: aliceblue;">
										<th>Next Round </th>
										<td colspan="2"><?php echo $nextview ?></td>
										<th>Next Round Timming</th>
										<td colspan="2"><?php if($nextinterview ==''){echo "";}else{
										echo date('d-M-Y H:i:s',strtotime($nextinterview));}?></td>
									</tr>	 
								</table>
							</div>
						</div>
						 
						 
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<div class="row">
							<div class="col-lg-12">
								<span><large><b>Application Feedback</b></large></span>
                               <button class="btn btn-sm btn-info feedback_application" type="button" data-id="<?php echo $rand_id ?>" style="position: relative; float: right;">Feedback</button>
									
							 </div>
						</div>
						
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-lg-12">
								<table class="table table-bordered table-hover dataTable no-footer ">
									<tr>
										<th>Time</th>
										<th>Feedback status</th>
										<th>Final Status</th>
										<th>Interview (Start | End )</th>
										<th>Feedback</th>
										<th>USER</th>
										 
									</tr>
								  <?php  
								  $userid=$_GET['id'];
							           $qry=$conn->query("SELECT  * FROM `feedback` where feedback_id='$userid' ORDER BY `ID` DESC ");
							           $c=1; 
							             while($result=$qry->fetch_array()) { 
							             $start=$result['interview_stime'];
							             $end=$result['interview_etime'];
							             ?>
            			                 <tr>
            			                 	<td><?php echo date('d-M-Y H:i:s', strtotime($result['feedback_time'])); ?></td>
            			                 	<!-- <td><?php //echo $result['status']." -- ".$result['fStatus']; ?></td> -->
            			                 	<td><?php echo $result['status']; ?></td>
            			                 	<td><?php echo $result['fStatus']; ?></td>
            			                 	<td ><?php echo date('H:i:s',strtotime($start))." | ".date('H:i:s',strtotime($end));?></td>
            			                 	<td style="word-break: break-all;"><?php echo $result['feedback_text']; ?></td>
            			                 	<td><?php echo $result['user_name']; ?></td>
            			                 </tr>
									  <?php $c=$c+1; }  ?>
								</table>
							</div>
						</div>
						 
						 
					</div>
				</div>
			</div>
			<!-- <div class="col-lg-4">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-12 form-group">
								<button class="btn-block btn-sm btn filter_status" type="button" data-id="all">All</button>
							</div>
						</div>
						<?php foreach ($stat_arr as $key => $value): ?>
						<div class="row">
							<div class="col-md-12 form-group">
								<button class="btn-block btn-sm btn filter_status" type="button" data-id="<?php echo $key ?>" ><?php echo $value ?></button>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div> -->
			<!-- Table Panel -->
		</div>
	</div>	

</div>
<style>
	
	td{
		vertical-align: middle !important;
	}
	td p{
		margin: unset
	}
	img{
		max-width:100px;
		max-height: :150px;
	}

	.modal-content{
		top: 33px;
	}
</style>
<script>
	$('.filter_status').each(function(){
		if($(this).attr('data-id') == '<?php echo $pid ?>')
			$(this).addClass('btn-primary')
		else
			$(this).addClass('btn-info')

	})
	// $('table').dataTable()
	 $("#new_application").click(function(){
		 
	 })
	

$(document).ready(function () {
    $('#ttable').DataTable({
        pagingType: 'full_numbers',
    });
});

    
	$(".edit_application").click(function(){
		uni_modal("Edit Application","manage_application.php?id="+$(this).attr('data-id'),"mid-large")
	})
	// $(".view_application").click(function(){
	// 	uni_modal("Applicant Information","view_application.php?id="+$(this).attr('data-id'),"mid-large")
	// })
	$(".feedback_application").click(function(){
		uni_modal("Feedback Form","feedback_application.php?id="+$(this).attr('data-id'),"mid-large")
	})
	$('.delete_application').click(function(){
		_conf("Are you sure to delete this Applicant?","delete_application",[$(this).attr('data-id')])
	})
	function displayImg(input,_this) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
        	$('#cimg').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
$('.filter_status').click(function(){
	location.href = "index.php?page=applications&pid="+$(this).attr('data-id')+'&position_id=<?php echo $position_id ?>'
})
$('#position_filter').change(function(){
	location.href = "index.php?page=applications&position_id="+$(this).val()+'&pid=<?php echo $pid ?>'
})
	function delete_application($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_application',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>