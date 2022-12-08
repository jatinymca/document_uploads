<?php include('db_connect.php'); 
?>
<style>
  .gallery-image {
    background: #fff;
    margin-top: 11px;
  }
  .gallery-image img {
    height: 250px;
    width: 350px;
    transform: scale(1.0);
    transition: transform 0.4s ease;
  }

  .img-box {
  box-sizing: content-box;
    margin: 10px;
    height: 238px;
    width: 335px;
    overflow: hidden;
    display: inline-block;
    color: white;
    position: relative;
    background-color: white;
  }
  a.download_doc {
     color: #fff;
    position: absolute;
    right: 10px;
    top: 5px !important;
    padding: 5px 9px;
    border-radius: 33px;
  }
  a.edit_doc:hover {
    background: #ee9b00;
    color: #fff;
    border: 0px solid #fff;
}
.caption p {
    margin: 0px !important;
}
  .edit_doc {
    color: #fff;
    position: absolute;
    right: 10px;
    top: -172px !important;
    padding: 5px 9px;
    border-radius: 33px;
    background: #363636cc;
}
  .caption {
    position: absolute;
    bottom: -20px;
    left: 0px;
    opacity: 0.0;
    transition: transform 0.3s ease, opacity 0.3s ease;
    background: #0000008c;
    width: 100%;
    padding: 10px;
  }
a.download_doc:hover {
    background: #ee9b00;
    color: #fff;
    border: 0px solid #fff;
}
.edit_doc {
    color: #fff;
    position: absolute;
    right: 10px;
    top: -172px !important;
    padding: 5px 9px;
    border-radius: 33px;
    background: #363636cc;
}
  .transparent-box {
    height: 250px;
    width: 350px;
    background-color:rgba(0, 0, 0, 0);
    position: static;
    top: 0;
    left: 0;
    transition: background-color 0.3s ease;
  }

  .img-box:hover img { 
    transform: scale(1.1);
  }

  .img-box:hover .transparent-box {
    background-color:rgba(0, 0, 0, 0.5);
  }

  .img-box:hover .caption {
    transform: translateY(-20px);
    opacity: 1.0;
  }

  .img-box:hover {
    cursor: pointer;
  }
  
.download_doc a {
    position: absolute;
    right: 11px;
    top: 10px;
    color: #fff;
    width: 30px;
}
  .caption > p:nth-child(2) {
    font-size: 0.8em;
  }

  .opacity-low {
    opacity: 0.5;
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
								<select name="Employee_doc" class="custom-select browser-default cand select2"  id="user_doc">
									<option value=" ">Select</option> 
                  <?php 
                  $usql="SELECT * FROM `Emp_details`  WHERE 1";
                  $res=mysqli_query($conn,$usql);
                  while($row=mysqli_fetch_array($res))
                    { ?>
                     <option value="<?php  echo $row['umique_id']; ?>"><?php  echo $row['umique_id']; ?></option> 
                     <?php
                   }
                   ?> 
                 </select>
               </div>
             </div> 
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>

 <div class="container-fluid new" id="get_emp_data"> 
  
</div>

<script type="text/javascript">  

  $('#user_doc').on('change',function(){
    var Employee_id= document.getElementById('user_doc').value; 
       $.ajax({
          url: "upload_from.php?action=get_document",
          type: "POST",
          data:  {Employee_id:Employee_id},  
          dataType:"html",  
          success: function(data)
          {  
            $('#get_emp_data').html(data); 
            }
        }) 
  })

 function edit_document(set){
  $.ajax({
          url: "upload_from.php?action=update_document",
          type: "POST",
          data:  {Employee_id:Employee_id},  
          dataType:"html",  
          success: function(data)
          {  
            $('#get_emp_data').html(data); 
            }
        }) 
 }


</script>
