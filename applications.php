<?php 
include('db_connect.php');
include('./auth.php'); 

?>
<style type="text/css">
	.padding_0 th{
		padding: 10px 0px !important;
	} 
	table.dataTable tbody th, table.dataTable tbody td {
		font-size: 11px !important;
	}
	table.dataTable thead th, table.dataTable thead td {
		padding: 10px 86px;
		border-bottom: 1px solid #111;
		font-size: 11px;
	}

.mb-50 {
    margin-bottom: 26px;
}
tbody {
    background: #fff;
}
.edit {
    color: #1a9f53;
    background-color: #ddfbe9;
    font-size: 16px;
    padding: 4px 8px;
    border-radius: 6px;
}
.view {
 color: #be0ee1;
    background-color: #fbe5ff;
    font-size: 16px;
    padding: 4px 6px;
    border-radius: 6px;
    margin-right: 9px;
}

table {
    border: 1px solid #ccc;
    margin: 0;
    width: 100%;
    border-collapse: collapse;
}
.mc-table-head.primary {
    border: none;
    color: #fff;
    background: -webkit-gradient(linear, left bottom, left top, from(var(--primaryHEX)), to(#2b77e5));
    background: linear-gradient(to top, #0858f7, #2b77e5) !important;
}
.mc-table tr td:nth-child(1) {
    font-weight: 600;
    cursor: pointer;
}
	table caption {
		font-size: 1.5em;
		margin: .5em 0 .75em;
	}

	table tr {
		
		border: 1px solid #ddd;
		padding: .35em;
	}

	table th,
	table td {
		padding: .625em;
		text-align: center;
	}

	table th {
	font-size: 12px;
    letter-spacing: .1em;
    text-transform: uppercase;
	}

	@media screen and (max-width: 600px) {
		table {
			border: 0;
		}

		table caption {
			font-size: 1.3em;
		}

		table thead {
			border: none;
			clip: rect(0 0 0 0);
			height: 1px;
			margin: -1px;
			overflow: hidden;
			padding: 0;
			position: absolute;
			width: 1px;
		}

		table tr {
			border-bottom: 3px solid #ddd;
			display: block;
			margin-bottom: .625em;
		}

		table td {
			border-bottom: 1px solid #ddd;
			display: block;
			font-size: .8em;
			text-align: right;
		}

		table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
			content: attr(data-label);
			float: left;
			font-weight: bold;
			text-transform: uppercase;
		}

		table td:last-child {
			border-bottom: 0;
		}
	}




	td{
		vertical-align: middle !important;
	}
	td p{
		margin: unset
	}
	img{
		max-width:100px;
		max-height: :150px;
	}
	.card.mb-50 {
    border-radius: 11px !important;
}
.card-header {
        box-shadow: 0 0.75rem 1.5rem rgb(18 38 63 / 3%);
}
	.modal-content{
		top: 33px;
	}
	.card-header {
    border-radius: 11px !important;
    padding: 15px 20px;
}
	.card_tab {
  box-shadow: 0 0.75rem 1.5rem rgb(18 38 63 / 3%);
    margin-bottom: 24px;
    border-radius: 11px !important;
}
.fa-check
{
	color: #0858f7;
}
.fa-times
{
	color: red;
}
.userImage {
    background: #ffffffb8;
    padding: 5px;
    width: 10% !important;
    height: 87px !important;
    position: absolute;
    left: 95px;
    box-shadow: 2px 0px 7px #000;
    border-radius: 7px;
    margin-top: -69px;
}
.userImage img {
    width: 100%;
    height: 100%;
    overflow: hidden;
}
.mc-table tr td:nth-child(1):hover .userImage {display:block !important;}
</style>
<div class="container-fluid">
	
	<div class="col-lg-12">
		<div class="row">

			<!-- Table Panel -->
			<div class="col-lg-12">
				<div class="card mb-50">
					<div class="card-header">
						<div class="row">
							<div class="col-lg-12">
								<span><large><b>Employee </b></large></span>
								<button class="btn btn-sm btn-block btn-primary btn-sm col-md-2 float-right" type="button" id="new_application"><i class="fa fa-plus"></i> New Applicant</button> 
							</div>
						</div>
						
					</div>

				</div>
			</div> 
			<!-- Table Panel -->
		</div>
	</div>	

</div>
<div class="container-fluid">
	
		<div class="col-lg-12">
			<div class="card_tab">
			<table class="mc-table ">
		
				<thead class="mc-table-head primary">
					<tr>
						<th scope="col">Username</th>
						<th scope="col">Aadhar Card</th>
						<th scope="col">PanCard</th>
						<th scope="col">Cancel Check</th>
						<th scope="col">Tenth</th>
						<th scope="col">Intermediate</th>
						<th scope="col">Highest Qualification</th>
						<th scope="col">Play slip</th>
						<th scope="col">Photograph</th>
						<th scope="col">Relieving Experience</th>
						<th scope="col">Police Verification</th>
						<th scope="col">HR Verification</th>
					</tr>
				</thead>
				<tbody id="get_empDetails">
					
				</tbody>
			</table>
		</div>
	</div>
</div>

<script>

	$("#new_application").click(function(){
		uni_modal("New Application","manage_application.php","mid-large")
	}) 

 $(document).ready(function (){
 	var action='fetch_empdetails';
    $.ajax({                                      
      url: 'emp_logs.php',              
      type: "post",          
      data: {action:action},
      dataType: 'html',                
      success: function(data){ 
          $('#get_empDetails').html(data); 
          },
   });
});
</script>