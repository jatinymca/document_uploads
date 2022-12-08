<?php include 'db_connect.php'  
?>
<style type="text/css">
	.flex {
		display: flex;
	}
	.mr-30 {
		margin-left: 17px;
	}
	.new {
		display: none;
	}
	.Reference {
		width: 100%;

	</style>
	<div class="container-fluid">
		<form id="manage-application" name="manage-application"> 
			<div class="row form-group my-3">
				<div class="col-md-12">


					<div class="row">
						<div class="col-md-12"> 
							<div class="form-group">
								<label for="aadhaar card">Aadhaar Card </label>
								<div class="flex">
									<input type="Number" class="form-control" name="aadhaar_card" id="aadhaar_card"
									placeholder="Aadhaar Card "   required>

									<button type="submit" form="form1" id="aadhaar_card" class="btn btn-primary mr-30"    value="Submit" onclick="confirmSubmit()">Submit</button> 
								</div>
							</div>

						</div>
						<div class="new">
							<div class="row ">
								<div class="col-md-4">
									<div class="form-group">
										<label for="EmployeeName">Employee name</label>
										<input type="type" class="form-control" name="employee_name" id="employee_name"
										aria-describedby="Employee" required placeholder="Employee name">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="ContactNumber">Contact Number</label>
										<input type="type" class="form-control" name="Contact_Number" id="ContactNumber"
										placeholder="Contact Number" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="Employee location">Employee location </label>
										<select name="country_Code" id="country_Code" class="form-control" required>
											<option data-countryCode="Employeelocation" value="" Selected>Employee location</option>
											<option data-countryCode="Citi_Collection" value="Citi Collection">Citi Collection</option>
											<option data-countryCode="DI_Management" value="DI Management">DI Management</option>

										</select>
									</div>
								</div>
								<div class="Reference">
									<div class="col-md-12">
										<fieldset>
											<legend>Reference 1</legend>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="ReferenceName">Reference Name</label>
														<input type="type" name="Reference_Name_1" class="form-control" id="Reference_Name_1"
														placeholder="Reference Name">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="ReferenceNumber">Reference Number</label>
														<input type="type" name="Reference_Number_1" class="form-control" id="Reference_Number_1"
														placeholder="Reference Number">
													</div>
												</div>
											</fieldset>
										</div>
									</div>
								</div>
								<div class="Reference">
									<div class="col-md-12">
										<h4>Reference 2</h4>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="ReferenceName">Reference Name</label>
													<input type="type" class="form-control" name="Reference_Name_2" id="Reference_Name_2"
													placeholder="Reference Name">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="ReferenceNumber">Reference Number</label>
													<input type="type" class="form-control" name="Reference_Number_2" id="Reference_Number_2"
													placeholder="Reference Number">
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
			function displayfname(input,_this) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();
					reader.onload = function (e) {
						console.log(input.files[0].name)
						_this.siblings('label').html(input.files[0].name);
					}

					reader.readAsDataURL(input.files[0]);
				}
			}
			$(document).ready(function(){
				$('.select2').select2({
					width:"100%",
					placeholder:'Please select here'
				})

				$("#manage-application").validate({    
					rules: {
						aadhaar_card: "required",  

					}, 
					messages: {
						firstname: "Enter aadhaar_card",
						// contact: "Enter contact no",
						// email: "Enter Valid Email ID",
						// position_id:" please select position",
						// address:" Enter your current address"
					},

					submitHandler: function(form) {
						start_load();
						var aadhaar_card= document.getElementById('aadhaar_card').value;
						var employee_name= document.getElementById('employee_name').value;
						var ContactNumber= document.getElementById('ContactNumber').value;
						var country_Code= document.getElementById('country_Code').value;
						var Reference_Name_1= document.getElementById('Reference_Name_1').value;
						var Reference_Number_1= document.getElementById('Reference_Number_1').value;
						var Reference_Name_2= document.getElementById('Reference_Name_2').value;
						var Reference_Number_2= document.getElementById('Reference_Number_2').value;
						$.ajax({
							data:{ aadhaar_card:aadhaar_card,employee_name:employee_name,ContactNumber:ContactNumber,country_Code:country_Code,Reference_Name_1:Reference_Name_1,Reference_Number_1:Reference_Number_1,Reference_Name_2:Reference_Name_2,Reference_Number_2:Reference_Number_2},
							url:'aadhar_save_api.php?action=save_application',
							method: 'POST',
							type: 'POST',
							error:err=>{
								console.log(err)
							},
							success:function(data){
								if(data =='inserted'){
									alert_toast('Application successfully submitted.','success')
									setTimeout(function(){
										location.reload()
									},1000)
								}
								if(data =='Not'){
									alert_toast('Application Already Inserted.','danger')
									setTimeout(function(){
										location.reload()
									},1000)
								}
								else{
									alert_toast('Application Not Submitted.','Error')
									setTimeout(function(){
										location.reload()
									},1000)
								}
							}
						})
					}
				});

			});






		</script>
		<script>
			// $('.cand' ).on('click',function(){ 
			// 	$('.new').show();
			// 	$('.cand').hide();
			// })


			 
					function confirmSubmit() 
					{ 

						var re16digit = /^\d{16}$/

						if (document.getElementById("aadhaar_card").value == "" ||
							isNaN(document.getElementById("aadhaar_card").value) ||
							(document.getElementById("aadhaar_card").value.search(re16digit) == -1)) {
							alert("Aadhaar  Card number must be a numeric value. or 16 digit");
						document.getElementById("aadhaar_card").focus();
						return false;
					}
				 else{
					var aadhaar_card=$('#aadhaar_card').val(); 
						$.ajax({
							data: { aadhaar_card: $('#aadhaar_card').val() },
							url:'aadhar_save_api.php?action=aadhaar_card_submit',
							method: 'POST',
							type: 'POST',
							error:err=>{
								console.log(err)
							},
							success:function(resp){
								if(resp == "exist"){
									alert_toast('Employe Exist.','warning')
								}else if(resp == "Not"){
									alert_toast('Welcoming New Employee.','success')
									$('.new').show();
									$('.cand').hide();
								}

							}
						});  
					}

					 
				}
			</script>