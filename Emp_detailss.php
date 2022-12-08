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
	<div class="col-lg-12">
		<div class="row"> 
			<!-- Table Panel -->
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">

						<div class="row">
							<div class="col-md-2">Employee:</div>
							<div class="col-md-3" >
								<select name="" class="custom-select browser-default cand " id="position_filter">
									<option value=" ">Select</option> 
									<?php 
									$res=$conn->query("SELECT * FROM `application`  WHERE status='HIRED'"); 
									while($row=$res->fetch_assoc()){ ?> 
										<option value="<?php  echo $row['firstname'] ."--".$row['rand_id']; ?>"><?php echo $row['firstname'] ."--".$row['rand_id']; ?></option>
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
								<form class="uploadform" action="upload.php"   method="post" enctype="multipart/form-data">
									<div class="row">
									 
										<div class="col-lg-4">
											<div class="form-group">
											Pan Card:
											<div class="file-upload-wrapper" data-text="Select your file!">
												<input name="pancd" type="file" class="file-upload-field" value="" id="pancd">
											</div>
											</div>
										</div>
										 
									</div>
									<div class="row">
										<div class="col-lg-12 text-center">
											<button type="submit"   class="btn btn-primary mr-30" >Submit</button> 
										</div>
									</div>

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 
<script>
	$('.cand').on('change',function(){ 
		$('.new').show();
	})
 
// function upload_data(){
// 	 var uploadform=$('#uploadform').serialize(); 
// 	 var pancd= $('#pancd').val();
// 	 alert(pancd);
// 	 $.ajax({
//             	url: "aadhar_save_api.php?action=upload_img",
//     			type: "POST",
//     			data:  pancd,
//     			contentType: false,
//         	    cache: false,
//     			processData: false,
//     			success: function(data)
//     		    {
    				 
//     		    },
//     		  	error: function(data)
//     	    	{
//     		  	  console.log("error");
//                   console.log(data);
//     	    	}
//     	   });
// }
</script>