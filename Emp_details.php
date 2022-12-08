<?php include('db_connect.php'); 
?>
<style type="text/css">
	.file-upload-field {
    cursor: pointer !important;
    padding: 14px 20px;
    background: #fff;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    margin: 10px auto;
    z-index: 20;
  width: 100%;
    border-radius: 10px;
}
.img-upload {
    position: absolute;
    width: 55px;
    top: 35px;
    height: 53px;
    background: #fff;
    right: 0px;
}
#check_input {position: relative;
    top: 9px;
    width: 20px;
    height: 30px;}
 .pt_check {
    padding: 23px 5px;
    position: relative;
    top: 15px;
}
</style>
<div class="container-fluid">
<form class="uploadform" action="upload_from.php" method="post" id="uploadform" enctype="multipart/form-data">

<div class="container-fluid"> 
	<div class="col-lg-12">
		<div class="row"> 
			<!-- Table Panel -->
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">

						<div class="row">
							<div class="col-md-2">Employee:</div>
							<div class="col-md-3" >
								<input type="hidden" name="emp_name" id="emp_name">
								<select name="Employee_id" class="custom-select browser-default cand select2" id="Employee_id">
									<option value=" ">Select</option> 
									<?php 
									$res=$conn->query("SELECT * FROM `manage_application`  WHERE 1"); 
									while($row=$res->fetch_assoc()){ ?> 
										<option value="<?php echo $row['umique_id']; ?>"><?php echo $row['umique_id']; ?></option>
									<?php }
									?> 
								</select>
							</div>
							<?php  ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container-fluid new" style="display: none;"> 
	<div class="col-lg-12">
		<div class="row"> 
			<!-- Table Panel -->
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<?php 
									$res=$conn->query("SELECT * FROM `Emp_details`  WHERE umique_id='' "); 
									$row=$res->fetch_assoc(); ?> 
						<div class="row">
							<div class="container">
									<input type="hidden" name="action" value="upload_data">
									<div class="row">
											<div class="col-lg-4">
											<div class="form-group">
											PAN Card Number:
											<div class="file-upload-wrapper" data-text="Select your file!">
													<input type="text" name="pancdNum" class="form-control"  id="pancdNum"
								                    placeholder="Enter PAN Number ">

											</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-group">
											Aadhar Card:
											<div class="file-upload-wrapper" data-text="Select your file!">
												<input name="aadhar" data-attr="aadimg" type="file" class="file-upload-field" value="" onchange="readURL(this);" id="aadhar">
												      <img src="#" name="img" class="img-upload" id="aadimg">
											</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-group">
											Pan Card:
											<div class="file-upload-wrapper" data-text="Select your file!">
												<input name="pancd" data-attr="pancd1" type="file" class="file-upload-field" value=""  onchange="readURL(this);" id="pancd">
												 <img src="#" name="img" class="img-upload" id="pancd1">
											</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-group">
											10th:
											<div class="file-upload-wrapper" data-text="Select your file!">
												<input name="tenth" data-attr="tenth1" type="file" class="file-upload-field" value=""  onchange="readURL(this);" id="tenth">
												 <img src="#" name="img" class="img-upload" id="tenth1">
											</div>
											</div>
										</div>
										
										<div class="col-lg-4">
											<div class="form-group">
											12th:
											<div class="file-upload-wrapper" data-text="Select your file!">
												<input name="twelth" data-attr="twelth1" type="file" class="file-upload-field" value="" onchange="readURL(this);" id="twelth">
												 <img src="#" name="img" class="img-upload" id="twelth1">
											</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-group">
											Highest Qualifications
											<div class="file-upload-wrapper" data-text="Select your file!">
												<input name="degree" data-attr="degree1" type="file" class="file-upload-field" value="" onchange="readURL(this);" id="degree">
												 <img src="#" name="img" class="img-upload" id="degree1">
											</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-group">
											Cancel Check:
											<div class="file-upload-wrapper" data-text="Select your file!">
												<input name="cCheck" data-attr="cCheck1" type="file" class="file-upload-field" value="" onchange="readURL(this);" id="cCheck">
												 <img src="#" name="img" class="img-upload" id="cCheck1">
											</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-group">
											Pay slip/ Bank Statement
											<div class="file-upload-wrapper" data-text="Select your file!">
												<input name="BStatement" data-attr="BStatement1" type="file" class="file-upload-field" value="" onchange="readURL(this);" id="BStatement">
												 <img src="#" name="img" class="img-upload" id="BStatement1">
											</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-group">
											Relieving Experience
											<div class="file-upload-wrapper" data-text="Select your file!">
												<input name="rel_exp" data-attr="rel_exp1" type="file" class="file-upload-field" value="" onchange="readURL(this);" id="rel_exp">
												 <img src="#" name="img" class="img-upload" id="rel_exp1">
											</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-group">
										   Photograph
											<div class="file-upload-wrapper" data-text="Select your file!">
												<input name="passport_img" data-attr="passport_img1" type="file" class="file-upload-field" value="" onchange="readURL(this);" id="passport_img">
												 <img src="#" name="img" class="img-upload" id="passport_img1">
											</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-group pt_check">
												<input type="checkbox" id="check_input" name="police_verification" value="1">
										    Police Verification 
												
												 
											</div>
											</div>
										
											<div class="col-lg-4">
											<div class="form-group pt_check">
												<input type="checkbox" id="check_input"  name="hr_verification" value="1">
										    HR Verification 
												
												 
											</div>
											</div>
										</div>
									 </div>
									</div>
									<div class="row">
										<div class="col-lg-12 text-center">
											<button type="submit" class="btn btn-primary mr-30" value="Submit">Submit</button> 
										</div>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 
</form>
</div>
<script>
	$('.cand').on('change',function(){ 
		$('.new').show();
	})

</script>
<script type="text/javascript">
    function readURL(input) {
    	var id=input.getAttribute('data-attr');
        if (input.files && input.files[0]) {
            var reader = new FileReader();
           

            reader.onload = function (e) {
                $('#'+id).attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#Employee_id').on('change',function(){ 
	     var Employee_id=$('#Employee_id').val(); 
	     const myArray = Employee_id.split("-"); 
	     $('#emp_name').val(myArray[0]);
    })
</script>