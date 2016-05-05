        <div id="page-wrapper">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h1 class="page-header">Edit User</h1>
                </div>
                <!-- /.col-md-12 col-sm-12 -->
            </div>
<?php
            foreach ($edit->result_array() as $detailing);
{

            $member_id = array(
                'id' => 'member_id',
                'name' => 'member_id',
                'value' => $detailing['member_id'],
                'class' => 'form-control element-width-3',
                'title' => 'Member ID',
                'readonly' => TRUE
            );
            $first_name = array(
                "id" => "first_name",
                "name" => "first_name",
                "value" => $detailing['first_name'],//"value" => $fetchrow['first_name'];
                "placeholder" => "Firstname",
                "maxlength" => "50",
                "class" => "form-control element-width-3",
                "title" => "Enter First Name",
                "autocomplete" => "off"
            );

            $last_name = array(
                "id" => "last_name",
                "name" => "last_name",
                "value" => $detailing['last_name'],
                "placeholder" => "Lastname",
                "maxlength" => "50",
                "class" => "form-control element-width-3",
                "title" => "Enter Last Name",
                "autocomplete" => "off"
            );

            $middle_name = array(
                "id" => "middle_name",
                "name" => "middle_name",
                "value" => $detailing['middle_name'],
                "placeholder" => "Middle name",
                "maxlength" => "50",
                "class" => "form-control element-width-3",
                "title" => "Enter Middle Name",
                "autocomplete" => "off"
            );

            $email = array(
                "id" => "email",
                "name" => "email",
                "value" => $detailing['email'],
                "placeholder" => "myself@example.com",
                "maxlength" => "50",
                "class" => "form-control element-width-3",
                "title" => "Enter Email",
                "autocomplete" => "off"
            );

            $address_1 = array(
                "id" => "address_1",
                "name" => "address_1",
                "value" => $detailing['address_building'],
                "placeholder" => "Building",
                "maxlength" => "100",
                "class" => "form-control element-width-3",
                "title" => "Enter Building",
                "autocomplete" => "off"
            );

            $address_2 = array(
                "id" => "address_2",
                "name" => "address_2",
                "value" => $detailing['address_street'],
                "placeholder" => "Street Address",
                "maxlength" => "100",
                "class" => "form-control element-width-3",
                "title" => "Enter Street Address",
                "autocomplete" => "off"
            );

            $city = array(
                "id" => "city",
                "name" => "city",
                "value" => $detailing['address_city'],
                "placeholder" => "Enter city / town",
                "maxlength" => "100",
                "class" => "form-control element-width-3",
                "title" => "Enter City",
                "autocomplete" => "off"
            );

            $pincode = array(
                "id" => "pincode",
                "name" => "pincode",
                "value" => $detailing['address_pin'],
                "placeholder" => "Eg. 400001",
                "maxlength" => "100",
                "class" => "form-control element-width-3",
                "title" => "Enter Pincode",
                "autocomplete" => "off"
            );

            $contact_1 = array(
                "id" => "contact_1",
                "name" => "contact_1",
                "value" => $detailing['contact_1'],
                "type" => "tel",
                "placeholder" => "Eg. 09876543210",
                "maxlength" => "20",
                "class" => "form-control element-width-3",
                "title" => "Enter mobile",
                "autocomplete" => "off"
            );

            $contact_2 = array(
                "id" => "contact_2",
                "name" => "contact_2",
                "value" => $detailing['contact_2'],
                "placeholder" => "Eg. 022-23456789",
                "maxlength" => "20",
                "class" => "form-control element-width-3",
                "title" => "Enter Residence",
                "autocomplete" => "off"
            );
            
            if('Male' == $detailing['gender']){
                $gender1 = array(
                    "name" => "gender",
                    "id" => "gender",
                    "value" => "Male",
                    'checked' => TRUE,
                    'class' => 'radio-inline'
                );
                $gender2  = array(
                    "name" => "gender",
                    "id" => "gender",
                    "value" => "Female",
                    'class' => 'radio-inline',
                    'checked' => FALSE
                );
            }
            else{
                $gender1 = array(
                    "name" => "gender",
                    "id" => "gender",
                    "value" => "Male",
                    'checked' => FALSE,
                    'class' => 'radio-inline'
                );
                $gender2  = array(
                    "name" => "gender",
                    "id" => "gender",
                    "value" => "Female",
                    'class' => 'radio-inline',
                    'checked' => TRUE
                );
            }

			$current_year = array(
				"id" => "current_year",
				"name" => "current_year",
				"value" => $detailing['current_year'],
				"placeholder" => "Current year",
				"class" => "form-control element-width-3",
				"title" => "Current Academic year",
				"autocomplete" => "off"
			);

            $company = array(
                "id" => "company",
                "name" => "company",
                "value" => $detailing['company'],
                "placeholder" => "Enter Company Name",
                "maxlength" => "100",
                "class" => "form-control element-width-3",
                "title" => "Company name",
                "autocomplete" => "off"
            );
            
            $designation = array(
                "id" => "designation",
                "name" => "designation",
                "value" => $detailing['designation'],
                "placeholder" => "Designation",
                "maxlength" => "100",
                "class" => "form-control element-width-3",
                "title" => "Designation",
                "autocomplete" => "off"
            );
            
            $domain_of_work = array(
                "id" => "domain_of_work",
                "name" => "domain_of_work",
                "value" => $detailing['domain_of_work'],
                "placeholder" => "Work Domain",
                "maxlength" => "100",
                "class" => "form-control element-width-3",
                "title" => "Work Domain",
                "autocomplete" => "off"
            );

            $update = array(
                'name' => 'update',
                'id' => 'update',
                'value' => 'Update',
                'class' => 'btn btn-success btn-lg btn-block'
            );
            echo validation_errors();
            echo form_open('member/edit_member');
            ?>
            <div class="col-sm-4">
                <div class="form-group">
                    <?php
                    echo form_label("Id","member_id");
                    echo form_input($member_id);
                    ?>
                </div>
            </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-4">
                <div class="form-group">
                    <?php
                        echo form_label("Firstname &nbsp;*","first_name");
                        echo form_input($first_name);
                    ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?php
                        echo form_label("Middlename &nbsp;*","middle_name");
                        echo form_input($middle_name);
                    ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?php
                        echo form_label("Lastname &nbsp;*","last_name");
                        echo form_input($last_name);
                    ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?php
                        echo form_label("E-mail &nbsp;*","email");
                        echo form_input($email);
                    ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?php
                        echo form_label("Mobile &nbsp;*","mobile");
                        echo form_input($contact_1);
                    ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?php
                        echo form_label("Residence","residence");
                        echo form_input($contact_2);
                    ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?php
                        echo form_label("Gender&nbsp;*","gender");
                        echo br();
                        echo form_label("Male &nbsp;&nbsp;","gender1");
                        echo form_radio($gender1);
                        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo form_label("Female &nbsp;&nbsp; ","gender2");
                        echo form_radio($gender2);
                    ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?php
                    echo form_label("Date of Birth&nbsp;*","dob");
                    ?>
                    <input type="date" name="date_of_birth" id="dob" class="form-control" value=<?php echo $detailing['date_of_birth']; ?>>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?php echo form_label("Blood Group","blood_group"); ?>
                    <select class="form-control" id="blood_group" name="blood_group">
                    <?php
                        //$bloodgroup = mysql_query("SELECT * FROM bloodgroup");
                        $sql = "SELECT * FROM bloodgroup";
                        $query = $this->db->query($sql);
                        foreach($query->result_array() as $d){
                                            $data = $d['blood_name'];
											$bg = $d['blood_id'];
							?>
                                            <option value="<?php echo $bg; ?>" <?php if($bg == $detailing['blood_group']) { echo "selected"; } ?>><?php echo $data; ?> </option>
                        <?php } ?>

                    </select>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <?php
                        echo form_label("Address 1 &nbsp;*","address_1");
                        echo form_input($address_1);
                    ?>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <?php
                        echo form_label("Address 2 &nbsp;*","address_2");
                        echo form_input($address_2);
                    ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?php
                        echo form_label("City&nbsp*","city");
                        echo form_input($city);
                    ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?php echo form_label("State&nbsp;*","state"); ?>
                    <select class="form-control" id="state" name="state">
                    <?php
                        $sql = "SELECT * FROM state";
                        $st = $this->db->query($sql);
                        foreach($st->result_array() as $sta){
                            $stat = $sta['state_name'];
							$statid = $sta['state_id'];
							?>
                                            <option value="<?php  echo $statid; ?>" <?php if($statid == $detailing['address_state']) { echo "selected"; } ?>><?php echo $stat; ?> </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?php
                        echo form_label("Pincode &nbsp;*","pincode");
                        echo form_input($pincode);
                    ?>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <?php echo form_label("Branch","branch"); ?>
                    <select class="form-control" id="branch" name="branch">
                    <?php
                        $sql = "SELECT * FROM branch";
                        $query = $this->db->query($sql);
                        
                            foreach($query->result_array() as $row){
                                $br = $row['branch_name'];
                            
				$brid = $row['b_id'];
                    ?>
                                <option value="<?php echo $brid; ?>" <?php if($brid == $detailing['branch']) { echo "selected"; } ?>><?php echo $br; ?> </option>
                        <?php } ?>         
                    </select>
                </div>
            </div>
		<div class="col-sm-3">
                    <div class="form-group">
			<?php
                            echo form_label("Current year&nbsp","current_year");
                            echo form_input($current_year);
			?>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <?php echo form_label("College","college"); ?>
                        <select class="form-control" id="college" name="college">
                        <?php
                            $sql = "SELECT * FROM college";
                            $query = $this->db->query($sql);
                            foreach($query->result_array() as $row){
                                $col = $row['college_name'];
                                $colid = $row['college_id'];
                        ?>
                                <option value="<?php echo $colid; ?>"<?php if($colid == $detailing['college']) { echo "selected"; } ?>><?php echo $col; ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <?php echo form_label("University","university"); ?>
                    <select class="form-control" id="university" name="university">
                    <?php
                        $sql = "SELECT * FROM university";
                        $query = $this->db->query($sql);
                        foreach($query->result_array() as $uni){
                            $univ = $uni['university_name'];
							$univid = $uni['university_id'];
							?>
                            <option value="<?php echo $univid; ?>"<?php if($univid == $detailing['university']) { echo "selected"; } ?>><?php echo $univ; ?> </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <?php
                    echo form_label("Year of Passing&nbsp;*","yop");
                    ?>
                    <input type="month" name="year_of_passing" id="yop" class="form-control" value="<?php echo $detailing['year_of_passing']; ?>">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <?php
                    echo form_label("Type&nbsp;*","type");
                    ?>
                    <select class="form-control" id="type" name="type">
                    <option value="Student" <?php if('Student' == $detailing['type']) { echo "selected"; } ?> >Student</option>
                    <option value="Working" <?php if('Working' == $detailing['type']) { echo "selected"; } ?> >Working</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <?php
                        echo form_label("Status&nbsp;*","status");
                    ?>
                    <select class="form-control" name="status" id="status">
                    <?php
                        $sql = "SELECT * FROM status";
                        $query = $this->db->query($sql);
                        foreach($query->result_array() as $act){
                            $acti = $act['status_name'];
							$data= $act['status_id']; ?>
                            <option value="<?php echo $acti; ?>" <?php if($data == $detailing['status']) { echo "selected"; } ?>><?php echo $acti; ?> </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <?php
                        echo form_label("Course","course");
                    ?>
                    <select class="form-control" name="course" id="course">
                        <option value="Degree" <?php if('Degree' == $detailing['course']) { echo "selected"; } ?>>Degree</option>
                        <option value="Diploma" <?php if('Diploma' == $detailing['course']) { echo "selected"; } ?>>Diploma</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-header">Working Professional</h3>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <?php
                    echo form_label("Company","company");
                    echo form_input($company);
                ?>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <?php
                    echo form_label("Designation","designation");
                    echo form_input($designation);
                ?>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <?php
                    echo form_label("Domain of Work","domain_of_work");
                    echo form_input($domain_of_work);
                ?>
            </div>
        </div>
        <?php echo br(5);?>
        <div class="col-sm-offset-3 col-sm-6">
            <div class="form-group">
                <?php
                    echo form_submit($update);
                ?>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
               <?php
                echo form_close();
                        }

               ?>
            </div>
        </div>
        </div>
</div>