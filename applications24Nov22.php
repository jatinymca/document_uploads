<?php include('db_connect.php');
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
						<th scope="col">Highest Qualification</th>
						<th scope="col">Play slip</th>
						<th scope="col">Photograph</th>
						<th scope="col">Relieving Experience</th>
						<th scope="col">action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td data-label="Account">krishna yadav</td>
						<td data-label="Account"><i class="fa fa-check" aria-hidden="true" style="color:#0858f7;"></i></td>
						<td data-label="Account"><i class="fa fa-times" aria-hidden="true" style="color: red;"></i></td>
						<td data-label="Account"><i class="fa fa-check" aria-hidden="true" style="color:#0858f7;"></i></td>
						<td data-label="Account"><i class="fa fa-times" aria-hidden="true" style="color: red;"></i></td>
						<td data-label="Account"><i class="fa fa-check" aria-hidden="true" style="color:#0858f7;"></i></td>
						<td data-label="Account"><i class="fa fa-times" aria-hidden="true" style="color: red;"></i></td>
						<td data-label="Account"><i class="fa fa-check" aria-hidden="true" style="color:#0858f7;"></i></td>
						<td><div class="mc-table-action"><a class="material-icons view" title="View" href="#"><i class="fa-solid fa-eye"></i></a><a class="material-icons edit" title="Edit" href="#/product-upload"><i class="fa-sharp fa-solid fa-pen"></i></a></div></td>

												
					</tr>
					<tr>
					<td data-label="Account">krishna yadav</td>
						<td data-label="Account"><i class="fa fa-check" aria-hidden="true" style="color:#0858f7;"></i></td>
						<td data-label="Account"><i class="fa fa-times" aria-hidden="true" style="color: red;"></i></td>
						<td data-label="Account"><i class="fa fa-check" aria-hidden="true" style="color:#0858f7;"></i></td>
						<td data-label="Account"><i class="fa fa-times" aria-hidden="true" style="color: red;"></i></td>
						<td data-label="Account"><i class="fa fa-check" aria-hidden="true" style="color:#0858f7;"></i></td>
						<td data-label="Account"><i class="fa fa-times" aria-hidden="true" style="color: red;"></i></td>
						<td data-label="Account"><i class="fa fa-check" aria-hidden="true" style="color:#0858f7;"></i></td>
						<td><div class="mc-table-action"><a class="material-icons view" title="View" href="#"><i class="fa-solid fa-eye"></i></a><a class="material-icons edit" title="Edit" href="#/product-upload"><i class="fa-sharp fa-solid fa-pen"></i></a></div></td>
						
					</tr>
					<tr>
						<td data-label="Account">krishna yadav</td>
						<td data-label="Account"><i class="fa fa-check" aria-hidden="true" style="color:#0858f7;"></i></td>
						<td data-label="Account"><i class="fa fa-times" aria-hidden="true" style="color: red;"></i></td>
						<td data-label="Account"><i class="fa fa-check" aria-hidden="true" style="color:#0858f7;"></i></td>
						<td data-label="Account"><i class="fa fa-times" aria-hidden="true" style="color: red;"></i></td>
						<td data-label="Account"><i class="fa fa-check" aria-hidden="true" style="color:#0858f7;"></i></td>
						<td data-label="Account"><i class="fa fa-times" aria-hidden="true" style="color: red;"></i></td>
						<td data-label="Account"><i class="fa fa-check" aria-hidden="true" style="color:#0858f7;"></i></td>
						<td><div class="mc-table-action"><a class="material-icons view" title="View" href="#"><i class="fa-solid fa-eye"></i></a><a class="material-icons edit" title="Edit" href="#/product-upload"><i class="fa-sharp fa-solid fa-pen"></i></a></div></td>
					</tr>
					<tr>
					<td data-label="Account">krishna yadav</td>
						<td data-label="Account"><i class="fa fa-check" aria-hidden="true" style="color:#0858f7;"></i></td>
						<td data-label="Account"><i class="fa fa-times" aria-hidden="true" style="color: red;"></i></td>
						<td data-label="Account"><i class="fa fa-check" aria-hidden="true" style="color:#0858f7;"></i></td>
						<td data-label="Account"><i class="fa fa-times" aria-hidden="true" style="color: red;"></i></td>
						<td data-label="Account"><i class="fa fa-check" aria-hidden="true" style="color:#0858f7;"></i></td>
						<td data-label="Account"><i class="fa fa-times" aria-hidden="true" style="color: red;"></i></td>
						<td data-label="Account"><i class="fa fa-check" aria-hidden="true" style="color:#0858f7;"></i></td>
						<td><div class="mc-table-action"><a class="material-icons view" title="View" href="#"><i class="fa-solid fa-eye"></i></a><a class="material-icons edit" title="Edit" href="#/product-upload"><i class="fa-sharp fa-solid fa-pen"></i></a></div></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<style>
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
</style>
<script>

	$("#new_application").click(function(){
		uni_modal("New Application","manage_application.php","mid-large")
	}) 
</script>