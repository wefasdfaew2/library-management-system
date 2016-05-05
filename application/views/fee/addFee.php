<script src="<?php echo JS . "jquery-1.7.1.min.js"; ?>"></script>
<script src="<?php echo JS . "jquery-ui-1.8.17-custom-min.js"; ?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#memberType").change(function(){
			var type=$("#memberType").val();
			if(type=='expired'){
				$.ajax({
					type:"post",
					url:"http://localhost/lms/index.php/fee/getExpiredList",
					data:"type="+type,
					success:function(data){
						$("#dueList").html(data);
					}
				});
			}
			else if(type=='new'){
				$.ajax({
					type:"post",
					url:"http://localhost/lms/index.php/fee/getNewList",
					data:"type="+type,
					success:function(data){
						$("#dueList").html(data);
					}
				});
			}
		});
	});
</script>

<div id="page-wrapper">
	<div class="container-fluid">
		<h1 class="page-header">
			Add Fees
		</h1>
	</div>

	<div class="container">
		<div class="row">
			<form action="<?php echo URL.'index.php/fee/addFee'; ?>" method="POST" role="form">
				<div class="row">
					<div class="col-md-4 col-xs-12">
						<div class="form-group">
							<label for="memberType">Select Type *</label>
							<select class="form-control" name="memberType" id="memberType">
								<option>Please select a value</option>
								<option value="expired">Renew account</option>
								<option value="new">New Member</option>
							</select>
						</div>
					</div>
					<div class="col-md-4 col-xs-12">
						<div class="form-group">
							<label for="dueList">Select member *</label>
							<select class="form-control" name="dueList" id="dueList">
								<option>Please select a value</option>
							</select>
						</div>
					</div>
					<div class="col-md-4 col-xs-12">
						<div class="form-group">
							<label for="amount">Amount *</label>
							<input class="form-control" name="amount" id="amount" type="text" required/>
						</div>
					</div>
					<div class="col-md-4 col-xs-12">
						<div class="form-group">
							<label for="date">Start Date *</label>
							<input class="form-control" name="date" id="date" type="date" required/>
						</div>
					</div>
					<div class="col-md-4 col-xs-12">
						<div class="form-group">
							<label for="period">Period *</label>
							<input class="form-control" name="period" id="period" type="text" required/>
						</div>
					</div>
					<div class="col-md-4 col-xs-12">
						<div class="form-group">
							<label for="booklet">Booklet No *</label>
							<input class="form-control" name="booklet" id="booklet" type="text" required/>
						</div>
					</div>
					<div class="col-md-4 col-xs-12">
						<div class="form-group">
							<label for="receipt">Receipt No *</label>
							<input class="form-control" name="receipt" id="receipt" type="text" required/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-offset-2">
						<div class="col-md-4 col-xs-12">
							<button class="btn btn-success btn-block" name="submitFee" type="submit">Add Received Fees</button>
						</div>
						<div class="col-md-4 col-xs-12">
							<button class="btn btn-default btn-block btn-outline" name="resetsubmitFee" type="reset">Reset form</button>
						</div>
					</div>
				</div>


			</form>
		</div>
	</div>
</div>