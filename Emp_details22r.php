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
								<select name="Employee_id" class="custom-select browser-default cand " id="position_filter">
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
												<input name="aadhar" type="file" class="file-upload-field" value="" onchange="readURL(this);" id="aadhar">
												      <img src="#" name="img" class="img-upload" id="aadimg">
											</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-group">
											Pan Card:
											<div class="file-upload-wrapper" data-text="Select your file!">
												<input name="pancd" type="file" class="file-upload-field" value="" id="pancd">
											</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-group">
											10th:
											<div class="file-upload-wrapper" data-text="Select your file!">
												<input name="tenth" type="file" class="file-upload-field" value="" id="tenth">
											</div>
											</div>
										</div>
										
										<div class="col-lg-4">
											<div class="form-group">
											12th:
											<div class="file-upload-wrapper" data-text="Select your file!">
												<input name="twelth" type="file" class="file-upload-field" value="" id="twelth">
											</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-group">
											Highest Qualifications
											<div class="file-upload-wrapper" data-text="Select your file!">
												<input name="degree" type="file" class="file-upload-field" value="" id="degree">
											</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-group">
											Cancel Check:
											<div class="file-upload-wrapper" data-text="Select your file!">
												<input name="cCheck" type="file" class="file-upload-field" value="" id="cCheck">
											</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-group">
											Pay slip/ Bank Statement
											<div class="file-upload-wrapper" data-text="Select your file!">
												<input name="BStatement" type="file" class="file-upload-field" value="" id="BStatement">
											</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-group">
											Relieving Experience
											<div class="file-upload-wrapper" data-text="Select your file!">
												<input name="rel_exp" type="file" class="file-upload-field" value="" id="rel_exp">
											</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-group">
										   Photograph
											<div class="file-upload-wrapper" data-text="Select your file!">
												<input name="passport_img" type="file" class="file-upload-field" value="" id="passport_img">
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
        if (input.files && input.files[0]) {
            var reader = new FileReader();
           

            reader.onload = function (e) {
                $('#aadimg').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>