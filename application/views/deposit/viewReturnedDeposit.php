<div id="page-wrapper">
	<div class="container-fluid">
		<h1 class="page-header">Deposit History</h1>
	</div>
	<div class="container">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<th><h4><strong>Member ID</strong></h4></th>
					<th><h4><strong>Name</h4></strong></th>
					<th><h4><strong>Contact</h4></strong></th>
					<th><h4><strong>Deposit Amount</strong></h4></th>
					<th><h4><strong>Deposit Date</strong></h4></th>
					<th><h4><strong>Return Date</strong></h4></th>
				</thead>
				<tbody>
					<?php if($returnDeposit=='No records found')
						echo "<h2>No records were found</h2>";
						else{
							
							foreach($returnDeposit->result_array() as $d){
								echo "<tr class='odd gradeX'>";
								echo "<td>".$d['member_id']."</td>";
								echo "<td>".$d['first_name']." ".$d['last_name']."</td>";
								echo "<td>".$d['contact_1']."<br>".$d['email']."</td>";
								echo "<td>".$d['amount']."</td>";
								echo "<td>".date('d-m-Y', strtotime($d['date']))."</td>";
								echo "<td>".date('d-m-Y', strtotime($d['return_on']))."</td>";
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