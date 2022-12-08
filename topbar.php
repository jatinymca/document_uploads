<style>
	.logo {
    font-size: 20px;
    background: white;
    padding: 7px 10px;
    border-radius: 50% 50%;
    color: #000000b3;
    margin-right: 10px;
}

.main{
      display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}

.left{
  display: flex;
    justify-content: flex-start;
    align-items: center;
}
.right{
  display: flex;
  justify-content: flex-end;
  align-items: center;
}

.recmnt{
  color: #fff;
}


</style>

<nav class="navbar navbar-light bg-primary px-0">
  <div class="container-fluid px-0">
  	<div class="col-lg-12 main">
  		<div class="col-md-6 left">
  			<div class="logo">
  				<span class="fa fa-hands-helping"></span>
  			</div>
        <span class="recmnt">Recruitment Management System</span>
         <!-- <large><b></b></large> -->
  		</div>
    <!--   <div class="col-md-4 float-left text-white">
       
      </div> -->
	  	<div class="col-md-6 right text-white">
	  		<a href="ajax.php?action=logout" class="text-white"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i></a>
	    </div>
    </div>
  </div>
  
</nav>