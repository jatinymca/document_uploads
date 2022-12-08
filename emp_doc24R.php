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
  form > .textbox {
  outline: 0;
  height: 42px;
  width: 244px;
  line-height: 42px;
  padding: 0 16px;
  background-color: rgba(255, 255, 255, 0.8);
  color: #212121;
  border: 0;
  float: left;
  -webkit-border-radius: 4px 0 0 4px;
  border-radius: 4px 0 0 4px;
}

form > .textbox:focus {
  outline: 0;
  background-color: #FFF;
}

form > .button {
  outline: 0;
  background: none;
  background-color: rgba(38, 50, 56, 0.8);
  float: left;
  height: 42px;
  width: 42px;
  text-align: center;
  line-height: 42px;
  border: 0;
  color: #FFF;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: 16px;
  text-rendering: auto;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
  -webkit-transition: background-color .4s ease;
  transition: background-color .4s ease;
  -webkit-border-radius: 0 4px 4px 0;
  border-radius: 0 4px 4px 0;
}

form > .button:hover {
  background-color: rgba(0, 150, 136, 0.8);
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
              <div class="col-md-6">
                <div class="row">
							<div class="col-md-5">Employee:</div>
							<div class="col-md-6" >
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
             <div class="col-md-6">
            <form method="post" style="float: right;" id='searchForm'>
              <input type="text" class="textbox" id="userSearch" placeholder="Search">
              <input title="Search" value="" type="button" class="button"  onclick="user_search();">
            </form>
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


 function user_search(){
  var pancard_no=$('#userSearch').val();
//  alert(userName);
  $.ajax({                                      
      url: 'upload_from.php?action=user_getData',              
      type: "post",          
      data: {pancard_no:pancard_no},
      dataType: 'html',                
      success: function(data){ 
          $('#get_emp_data').html(data); 
          document.getElementById("searchForm").reset();
          },
  });
 }


</script>
