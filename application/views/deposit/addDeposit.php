<div id="page-wrapper">
	<div class="container-fluid">
		<h1 class="page-header">
			Add received deposit
		</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<form method="POST" action="<?php echo URL . "index.php/deposit/addDeposit"; ?>">
					<div class="row">

						<div class="form-group col-md-12">
							<label for="member_id">Select Member *</label>
							<select class="form-control" name="member_id" id="member_id" required>
			                    <option value="">Select Member</option>
			                    <?php foreach($member->result_array() as $m){
			                        extract($m);
			                        echo "<option value='".$member_id."' >".$first_name.' '.$middle_name.' '.$last_name."</option>";
			                    } ?>
		                	</select>
		                	<p class="help-block">Select the member whose deposit is to be added</p>
						</div>

						<div class="form-group col-md-3 col-sm-6 col-xs-12">
							<label for="amount">Amount *</label>
							<input class="form-control" type="text" name="amount" id="amount" required placeholder="Enter the amount" />
						</div>

						<div class="form-group col-md-3 col-sm-6 col-xs-12">
							<label for="date">Date *</label>
							<input class="form-control" type="date" name="date" id="date" required placeholder="Enter the date of reception" />
						</div>

						<div class="form-group col-md-3 col-sm-6 col-xs-12">
							<label for="booklet">Booklet No *</label>
							<input class="form-control" type="text" name="booklet" id="booklet" required placeholder="Enter the Booklet No" />
						</div>

						<div class="form-group col-md-3 col-sm-6 col-xs-12">
							<label for="receipt">Receipt No *</label>
							<input class="form-control" type="text" name="receipt" id="receipt" required placeholder="Enter the Receipt No" />
						</div>

					</div>

					<div class="row">
						
						<div class="form-group col-md-offset-3 col-md-6 col-sm-12">
							<button class="btn btn-block btn-success" type="submit" name="submitDeposit">Add Deposit</button>
						</div>

					</div>
				</form>
			</div>
		</div>
	</div>

</div>