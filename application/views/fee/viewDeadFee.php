<div id="page-wrapper">
	<div class="container-fluid">
		<h1 class="page-header">Fee History</h1>
	</div>
	<div class="container">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<th><h4><strong>Member ID</strong></h4></th>
					<th><h4><strong>Name</h4></strong></th>
					<th><h4><strong>Contact</h4></strong></th>
					<th><h4><strong>Fee</strong></h4></th>
					<th><h4><strong>Start</strong></h4></th>
					<th><h4><strong>End</strong></h4></th>
				</thead>
				<tbody>
					<?php if($deadFee=='No records found')
						echo "<h2>No records were found</h2>";
						else{
							foreach($deadFee->result_array() as $dead){
								echo "<tr class='odd gradeX'>";
								echo "<td>".$dead['member_id']."</td>";
								echo "<td>".$dead['first_name']." ".$dead['last_name']."</td>";
								echo "<td>".$dead['contact_1']."<br>".$dead['email']."</td>";
								echo "<td>".$dead['amount']."</td>";
								echo "<td>".$dead['start_date']."</td>";
								echo "<td>".$dead['end_date']."</td>";
								echo "</tr>";
							}
						}
					 ?>
				</tbody>
			</table>
			<hr>
			<div class="col-sm-offset-1" style="font-size: 1.3em; letter-spacing: 3px; text-decoration: none">
				<?php echo $this->pagination->create_links();?>
			</div>
			<hr>
		</div>
	</div>
</div>