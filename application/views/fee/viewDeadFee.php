<div id="page-wrapper">
	<h1 class="page-header">Fee History</h1>
	<div class="container">
		<div class="table-responsive">
			<table class="table table-hover table-bordered">
				<thead>
					<th>Member ID</th>
					<th>Name</th>
					<th>Contact</th>
					<th>Fee</th>
					<th>Start</th>
					<th>End</th>
				</thead>
				<tbody>
					<?php if($deadFee=='No records found')
						echo "<h2>No records were found</h2>";
						else{
							foreach($deadFee->result_array() as $active){
								echo "<td>".$dead['member_id']."</td>";
								echo "<td>".$dead['first_name']." ".$dead['last_name']."</td>";
								echo "<td>".$dead['contact_1']."<br>".$dead['email']."</td>";
								echo "<td>".$dead['amount']."</td>";
								echo "<td>".$dead['start_date']."</td>";
								echo "<td>".$dead['end_date']."</td>";
							}
						}
					 ?>
				</tbody>
			</table>
			<div class="col-sm-offset-19" style="font-size: 1.3em; letter-spacing: 3px; text-decoration: none">
				<?php echo $this->pagination->create_links();?>
			</div>
		</div>
	</div>
</div>