<div id="page-wrapper">
	<div class="container-fluid">
		<h1 class="page-header">Members with Active Account</h1>
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
					<?php if($activeFee=='No records found')
						echo "<h2>No records were found</h2>";
						else{
							
							foreach($activeFee->result_array() as $active){
								echo "<tr class='odd gradeX'>";
								echo "<td>".$active['member_id']."</td>";
								echo "<td>".$active['first_name']." ".$active['last_name']."</td>";
								echo "<td>".$active['contact_1']."<br>".$active['email']."</td>";
								echo "<td>".$active['amount']."</td>";
								echo "<td>".$active['start_date']."</td>";
								echo "<td>".$active['end_date']."</td>";
								echo "</tr>";
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