<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin | Recruitment Management System</title>
 	

<?php include('./header.php'); ?>
<?php include('./db_connect.php'); ?>
<?php 
session_start();
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");

?>

</head>
<style>
	body{
		width: 100%;
	    height: calc(100%);
	    /*background: #007bff;*/
	}
	main#main{
		width:100%;
		height: calc(100%);
		background:white;
	}
	#login-right{
		position: absolute;
		right:0;
		width:100%;
		height: calc(100%);
		background:white;
		display: flex;
		align-items: center;
	}
	
	#login-right .card{
		margin: auto;
		z-index: 1
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		border-radius: 10px;
	}

	.logo {
    margin: auto;
    font-size: 5rem;
    background: white;
    padding: 0.2em 0.5em;
    border-radius: 50% 50%;
    color: #000000b3;
    z-index: 10;
    display: flex;
    justify-content: center;
    align-items: center;
}
div#login-right::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: calc(100%);
    height: calc(100%);
    /*background: #000000e0;*/
    background-color: #21D4FD;
	background-image: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);
}

.card-body{
	width: 100%;

}

.form-control{
	width: 330px;
    border: none;
    border-bottom: 1px solid lightgrey;
    border-radius: 0;
    margin-bottom: 40px;
    outline: none;
}

.login-form input[type = "text"]:focus{
	border: none; 
}

.login-form input[type = "password"]:focus {
 	border: none;
 }



</style>

<body>


  <main id="main" class=" bg-dark">
  	

  		<div id="login-right">
  			<div class="card">
  				<div class="card-body">
  						<div class="logo">
			  				<span class="fa fa-hands-helping"></span>
			  			</div>
  					<form id="login-form" >
  						<div class="form-group">
  							<!-- <label for="username" class="control-label">Username</label> -->
  							<input type="text" id="username" name="username" class="form-control" placeholder="Username">
  						</div>
  						<div class="form-group">
  							<!-- <label for="password" class="control-label">Password</label> -->
  							<input type="password" id="password" name="password" class="form-control" placeholder="Password">
  						</div>
  						<center><button class="btn-sm btn-block btn-wave btn-primary">Login</button></center>
  					</form>
  				</div>
  			</div>
  		</div>
   

  </main>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>
<script>
	$('#login-form').submit(function(e){
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.href ='index.php?page=home';
				}else if(resp == 2){
					location.href ='voting.php';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
</script>	
</html>