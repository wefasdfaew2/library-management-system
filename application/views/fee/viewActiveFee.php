<div id="page-wrapper">
	<h1 class="page-header">Members with Active Account</h1>
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
					<?php if($activeFee=='No records found')
						echo "<h2>No records were found</h2>";
						else{
							foreach($activeFee->result_array() as $active){
								echo "<td>".$active['member_id']."</td>";
								echo "<td>".$active['first_name']." ".$active['last_name']."</td>";
								echo "<td>".$active['contact_1']."<br>".$active['email']."</td>";
								echo "<td>".$active['amount']."</td>";
								echo "<td>".$active['start_date']."</td>";
								echo "<td>".$active['end_date']."</td>";
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