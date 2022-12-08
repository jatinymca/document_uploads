<?php 
include('db_connect.php');
if(isset($_GET['id'])){
$user = $conn->query("SELECT * FROM users where id =".$_GET['id']);
foreach($user->fetch_array() as $k =>$v){
	$meta[$k] = $v;
}
}
?>
<div class="container-fluid">
	
	<form action="" id="manage-user">
		<input type="hidden" name="id" value="<?php echo isset($meta['id']) ? $meta['id']: '' ?>">
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" class="form-control"  value="<?php echo isset($meta['name']) ? $meta['name']: '' ?>" required>
		</div>
		<div class="form-group">
			<label for="username">Username</label>
			<input type="text" name="username" id="username" class="form-control" value="<?php echo isset($meta['username']) ? $meta['username']: '' ?>" required>
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password"  name="password" id="password" class="form-control" value="<?php echo isset($meta['password']) ? $meta['password']: '' ?>" required>
		</div>
		<div class="form-group">
			<label for="type">User Type</label>
			<select name="type" id="type" class="custom-select">
				<option value="1" <?php echo isset($meta['type']) && $meta['type'] == 1 ? 'selected': '' ?>>Admin</option>
				<option value="2" <?php echo isset($meta['type']) && $meta['type'] == 2 ? 'selected': '' ?>>Staff</option>
			</select>
		</div>
		<div class="form-group">
			<label for="type">Group </label>
			<select name="groupname[]" id="type" class="custom-select browser-default  select2 " multiple="multiple" >
				 			<option value="" > --Select-- </option> 
				<?php 
 					$groupname_array=explode(',', $meta['groupname']);   //string to array 
 					
 					$user = $conn->query("SELECT * FROM `user_group` ");   
 						while($res=$user->fetch_array()){
 					 	$groupname=$res['groupname'];

 					 	if(in_array($groupname, $groupname_array)){
 					 		$selected='selected';

 					 	}else{
 					 		$selected='';
 					 	}
 					    echo "<option value='$groupname' $selected>$groupname</option>";
 														} ?>
			</select>
		</div>
	</form>
</div>
<script>
$(document).ready(function(){
	$('.select2').select2({
		width:"100%",
		placeholder:'Please select here'
	})
  	$("#manage-user").validate({    
				rules: {
				         name    : "required", 
				         username: "required",
				         password: "required",
				         type: "required"
				     }, 
				messages: {
				         name: "Enter  Name",
				         username:"enter username", 
				         type:"select type", 
				     },
				     
				     submitHandler: function(form) {
				    start_load();
							$.ajax({
								url:'ajax.php?action=save_user',
								method:'POST',
								data:$('#manage-user').serialize(),
								success:function(resp){
									if(resp ==1){
										alert_toast("Data successfully saved",'success')
										setTimeout(function(){
										 location.reload()
										},1500)
										
				}
			  }
			})
		  }
      })
   })
 
</script>