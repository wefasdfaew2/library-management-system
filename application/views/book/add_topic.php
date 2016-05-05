<?php
	/**
	 * Created by PhpStorm.
	 * User: thadaninilesh
	 * Date: 25/6/15
	 * Time: 12:18 AM
	 */
	$top = array(
		'name' => 'newtopic',
		'id' => 'newtopic',
		'placeholder' => 'Enter Topic',
		"maxlength" => "15",
		"class" => "form-control element-width-3",
		"title" => "New Topic",
		"autocomplete" => "off"
	);
	$submit = array(
		'name' => 'submit',
		'id' => 'submit',
		'value' => 'Submit',
		'class' => 'btn btn-outline btn-success btn-block'
	);
	echo form_open('book/add_topic');
?>
<div class="row">
	<div class="col-sm-12">
		<h1 class="page-header" style="margin-top: 10px">Add Topic</h1>
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
		<?php echo form_label('Branch:','branch'); ?>
		<select class="form-control" name="newbranch" id="newbranch">
			<option value>Please Select Branch</option>
			<?php foreach($branch->result_array() as $bran){
				extract($bran);
				echo "<option value='".$branch_id."' >".$branch_name."</option>";
			} ?>
		</select>
		<?php
			echo form_label("Topic:","top");
			echo form_input($top);
			echo br();
			echo form_submit($submit);
			echo form_close();
		?>
	</div>
</div>