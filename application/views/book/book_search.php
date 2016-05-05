<?php
/**
 * Created by PhpStorm.
 * User: thadaninilesh
 * Date: 25/6/15
 * Time: 1:21 PM
 */
?>
<!--<script src="<?php echo JS . "jquery-1.7.1.min.js"; ?>"></script>
<script src="<?php echo JS . "jquery-ui-1.8.17-custom-min.js"; ?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#branch").change(function(){
			var branch=$("#branch").val();
			$.ajax({
				type:"post",
				url:"http://localhost/lms/index.php/book/get_topic",
				data:"branch="+branch,
				success:function(data){
				$("#topic").html(data);
			}
			});
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#topic").change(function(){
			var topic=$("#topic").val();
			$.ajax({
				type:"post",
				url:"http://localhost/lms/index.php/book/get_author",
				data:"topic="+topic,
				success:function(data){
				$("#author").html(data);
			}
			});
		});
	});
</script>
-->
<div class="row">
	<div class="col-sm-12">
		<h1 class="page-header" style="margin-top: 10px">Search Book</h1>
	</div>
	<!--col-sm-12 -->
</div>

<?php if(isset($submit)){
	echo $success;
	}
	else{
		$bookid = array(
			"name" => "bookid",
			"id" => "bookid",
			"placeholder" => "Enter Book ID",
			"maxlength" => "10",
			"class" => "form-control element-width-3",
			"title" => "Enter Book ID",
			"autocomplete" => "off"
		);
		$type1 = array(
			"name" => "type",
			"id" => "type",
			"value" => "Educational",
			'checked' => TRUE,
			'class' => 'radio-inline'
		);
		$type2  = array(
			"name" => "type",
			"id" => "type",
			"value" => "Novel",
			'class' => 'radio-inline',
			'checked' => FALSE
		);
		$type3 = array(
			"name" => "type",
			"id" => "type",
			"value" => "Magazine",
			'checked' => FALSE,
			'class' => 'radio-inline'
		);

		$title = array(
			"id" => "title",
			"name" => "title",
			"placeholder" => "Book Title",
			"maxlength" => "50",
			"class" => "form-control element-width-3",
			"title" => "Title",
			"autocomplete" => "off"
		);

		$submit = array(
			'name' => 'submit',
			'id' => 'submit',
			'value' => 'Search Book',
			'class' => 'btn btn-primary btn-lg btn-block'
		);

		echo form_open('searchdatabase_control/book_search');

?>

<div class="row">
	<div class="col-sm-4">
		<?php
			echo form_label("Book Type&nbsp;","type");
			echo br();
			echo form_label("Educational &nbsp;&nbsp;","type1");
			echo form_radio($type1);
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo form_label("Novel &nbsp;&nbsp;","type2");
			echo form_radio($type2);
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo form_label("Magazine &nbsp;&nbsp;","type3");
			echo form_radio($type3);
		?>
	</div>
	<div class="col-sm-8">
		<?php echo form_label('Book Title','title');
			echo form_input($title);
		?>
	</div>
</div>

<div class="row">
	<div class="col-sm-6">
		<?php echo form_label('Book ID:','bookid');
			echo form_input($bookid);
		?>
	</div>

	<div class="col-sm-6">
		<?php echo form_label('Branch:','branch'); ?>
		<select class="form-control" name="branch" id="branch">
			<option value>Please Select Branch</option>
			<?php foreach($branch->result_array() as $bran){
				extract($bran);
				echo "<option value='".$branch_id."' >".$branch_name."</option>";
			} ?>
		</select>
	</div>


</div>

<div class="row">
	<div class="col-sm-6">
		<?php echo form_label('Topic:','topic'); ?>
		<select class="form-control" name="topic" id="topic">
			<option value>Please select a topic</option>
			<?php foreach($topic->result_array() as $top){
				extract($top);
				echo "<option value='".$topic_id."'>".$topic_name."</option>";
			} ?>
		</select>
	</div>

	<div class="col-sm-6">
		<?php echo form_label('Author:','author'); ?>
		<select class="form-control" name="author" id="author">
			<option value>Please select an Author</option>
			<?php foreach($author->result_array() as $auth){
				extract($auth);
				echo "<option value='".$author_id."'>".$author_name."</option>";
			} ?>
		</select>
	</div>
</div>

<div class="row">
	<div class="col-sm-6">
		<?php echo form_label('Publications:','publication'); ?>
		<select class="form-control" name="publication" id="publication">
			<option value>Please select a publication</option>
			<?php foreach($publication->result_array() as $pub){
				extract($pub);
				echo "<option value='".$p_id."'>".$publication_name."</option>";
			} ?>
		</select>
	</div>

	<div class="col-sm-6">
		<?php echo form_label('Purchase Date:','date'); ?>
		<input type="date" name="date" id="date" class="form-control">
	</div>
</div>

<div class="row">
	<div class="col-sm-offset-3 col-sm-6">
		<div class="form-group">
			<?php
				echo br(1);
				echo form_submit($submit);
			?>
		</div>
	</div>
</div>

<?php
	echo form_close();
	}
?>
</div>