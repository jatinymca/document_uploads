
<style>
</style>
<nav id="sidebar" class='mx-lt-5 bg-primary' >
		
		<div class="sidebar-list">

				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
				<a href="index.php?page=applications" class="nav-item nav-applications"><span class='icon-field'><i class="fa fa-user-tie"></i></span> Applications</a>	
				<a href="index.php?page=Emp_details" class="nav-item Emp_details"><span class='icon-field'><i class="fa fa-user-tie"></i></span> Document Upload</a>	

				<a href="index.php?page=emp_doc" class="nav-item Emp_details"><span class='icon-field'><i class="fa fa-user-tie"></i></span> Documents</a>	
				
				<?php if($_SESSION['login_type'] == 1): ?>
			
				
			<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
