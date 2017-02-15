<input id="accountType" type="hidden" value="" />


<div class="container-fluid">
	<div class="col-md-3">
		<div class="panel panel-default" style="width:100%; height:auto">
			<div class="panel-default name_box">
				<div class="grumpy-image-wrapper col-md-5">

				</div>
				<div class="col-md-6 acct_name"></div>
			</div>

			<div class="panel-body" style="padding:0;">
				<label class="col-md-4 font-normal"> Name: </label>
				<label class="col-md-7 font-normal"></label>
			</div>
			<div class="panel-body" style="padding:0;">
				<label class="col-md-8 font-normal"> Relationship to Student:</label>
				<label class="col-md-4 font-normal"></label>
			</div>
			<div class="panel-body" style="padding:0;">
				<label class="col-md-4 font-normal"></label>
				<label class="col-md-7 font-normal"></label>
			</div>
			<hr/>

			<div id="adminStudTask">
				<label style="display:block; background:#01579B;padding: 10px;color:#FFF">List of Family</label>
				<div class="btn-group-vertical center-block">
					<ul>
                        <li style="list-style: none;">Father</li>
                        <li style="list-style: none;">Mother</li>
                        <li style="list-style: none;">Guardidan</li>
                    </ul>
        			<button class="btn btn-info">Add Parent/Guardian</button>
    			</div>

			</div>

		</div>
	</div>
	<div class="col-md-9">
		<div class="panel panel-default" style="width:100%; height:auto" >
		<div class="well well-sm align">
			<center><label>Add Parent/Guardian</label></center>
		</div>
			<div class="tab-content">
				<div id="showdata" class="panel-body tab-pane fade in active" >
					<div id="page-content-wrapper">
            <div class="container-fluid">
    <section class="container">
        <div class="container-page" id="conset">
            <div class="col-md-8">
                <h4 class="dark-grey">User Information</h4>
                <div class="form-group col-lg-6">
                    <label>First Name</label>
                    <input type="" name="fname" class="form-control" id="fname" value="">
                </div>
                <div class="form-group col-lg-6">
                    <label>Last Name</label>
                    <input type="" name="lname" class="form-control" id="lname" value="">
                </div>
                <div class="form-group col-lg-12">
                    <label>Username</label>
                    <input type="" name="user" class="form-control" id="user" value="">
                </div>

                <div class="form-group col-lg-6">
                    <label>Password</label>
                    <input type="password" name="pass" class="form-control" id="pass" value="">
                </div>

                <div class="form-group col-lg-6">
                    <label>Confirm Password</label>
                    <input type="password" name="conpass" class="form-control" id="conpass" value="">
                </div>

                <div class="form-group col-lg-6">
                    <label>Email Address</label>
                    <input type="" name="email" class="form-control" id="email" value="">
                </div>
            </div>
            <div class="col-md-8">
                <h4 class="dark-grey">Department</h4>
                <div class="form-group col-lg-6">
                <label style="font-weight: bolder;">Select Department</label>
                <select id="selCat" class="form-control">
                <option value="0" selected hidden>Select Category</option>
                        <option value="1">Academic</option>
                        <option value="2">Non Academic</option>
                        <option value="3">Technical</option>
                </select>
                </div>
                <div class="form-group col-lg-6">
                    <label style="font-weight: bolder;">Select Department</label>
                    <select class="form-control selDept" id="dept" name="selDept">
                    </select>
                </div>
              <div style="display: none;" class="alert alert-success form-group col-lg-12"></div>
                <div>
                <div class="form-group col-lg-12">
                    <button type="submit" class="btn btn-primary pull-right register" id="register">Register</button>
                </div>
            </div>


            <!--  -->
            </div>
         </section>
        </div>
        </div>
				</div>
			</div>
		</div>
	</div>

</div>
