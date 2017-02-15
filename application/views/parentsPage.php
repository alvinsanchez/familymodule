
<?php
	echo $id;


?>

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
			<center><label>&nbsp;</label></center>
		</div>
			<div class="tab-content">
				<div id="showdata" class="panel-body tab-pane fade in active" >
					<div id="page-content-wrapper">
            <div class="container-fluid">
    <section class="container">
        <div class="container-page" id="conset">

         </section>
        </div>
        </div>
				</div>
			</div>
		</div>
	</div>

</div>
