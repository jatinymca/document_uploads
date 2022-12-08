<?php include 'db_connect.php';

 include('auth.php');
 
 ?>
<style>
   @media (min-width: 768px)
.offset-md-3 {
    margin-left: 0%; ! important }
</style>

<div class="containe-fluid">
<!-- 
	<div class="row">
		<div class="col-lg-12">
			
		</div>
	</div> -->

	<div class="row ml-3 mr-3">
			<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
				<?php echo "Welcome back ". $_SESSION['login_name']."!"  ?>
									
				</div>
				<hr>

				
    </div>
	</div>
                <div class="container-fluid">
                    <div class=" container">
                        <div class="col-lg-12 text-center" >
                            <img src="assets/img/wel.png" style="width: 58%;margin: 0px auto !important;position: relative;top: 109px;">
                        </div>
                    </div>
                </div>

</div>
<script>
	
</script>