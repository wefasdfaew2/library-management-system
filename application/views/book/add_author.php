<?php
	/**
	 * Created by PhpStorm.
	 * User: thadaninilesh
	 * Date: 25/6/15
	 * Time: 01:40 AM
	 */
	$auth = array(
		'name' => 'newauthor',
		'id' => 'newauthor',
		'placeholder' => 'Enter Author',
		"maxlength" => "15",
		"class" => "form-control element-width-3",
		"title" => "New Author",
		"autocomplete" => "off"
	);
	$submit = array(
		'name' => 'submit',
		'id' => 'submit',
		'value' => 'Submit',
		'class' => 'btn btn-outline btn-success btn-block'
	);
	echo form_open('book/add_author');
?>
<div class="row">
	<div class="col-sm-12">
		<h1 class="page-header" style="margin-top: 10px">Add Author</h1>
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
		<?php echo form_label('Topic:','newtopic'); ?>
		<select class="form-control" name="newtopic" id="newtopic">
			<option value>Please Select Topic</option>
			<?php foreach($topic->result_array() as $top){
				extract($top);
				echo "<option value='".$topic_id."' >".$topic_name."</option>";
			} ?>
		</select>
		<?php
			echo form_label("Author:","newauthor");
			echo form_input($auth);
			echo br();
			echo form_submit($submit);
			echo form_close();
		?>
	</div>
</div>