
<input id="myID" type="hidden" value="<?php echo $id ?>" />
<input type="hidden" id="famid" value="<?php echo $famid ?>"/>
<input type="hidden" id="position" value="<?php echo $position ?>"/>
	<div class="col-md-3">
		<div class="container-fluid" style="border: thin solid #ccc; background-color:#FAFAFA;padding:5%;">
			<div class="col-md-5">
				<img src="<?php echo base_url() ?>assets/images/user.png" class="img-responsive img-thumbnail" alt="">
			</div>
			<div class="col-md-7">
				<label for="name" id="name"></label><br/>
				<label for="relationship" id="relationship"></label>
			</div>
		</div><br/>

		<div class="list-group" id="list">


		</div>
	</div>
	<div class="col-md-9" id="details" style="border: thin solid #ccc; background-color:#FAFAFA;padding:1%;border-radius: 4px;">

	</div>
<script>
	$(document).ready(function(){
		loadSelectedID();
		loadFamilyMembers();

	function loadSelectedID(){
		var myID = $('#myID').val();
		$.ajax({
			type: 'ajax',
			url: 'loadSelectedID',
			method: 'post',
			data: {'myID': myID},
			dataType: 'json',
			success: function(data){
				$('#name').text(data.fname+" "+data.lname);
				$('#relationship').text(data.relationship);

				var details = '<label>First name</label>'+
											'<input type="text" class="form-control" readonly value="'+data.fname+'"/><br/>'+
											'<label>Last name</label>'+
											'<input type="text" class="form-control" readonly value="'+data.lname+'"/><br/>'+
											'<label>Email</label>'+
											'<input type="text" class="form-control" readonly value="'+data.email+'"/><br/>';
				$('#details').html(details);
			}
		});
	}

	function loadFamilyMembers(){
		var famid = $('#famid').val();
		var myID = $('#myID').val();
		var position = $('#position').val();
		$.ajax({
			type: 'ajax',
			url: 'loadFamilyMembers',
			method: 'post',
			data: {'famid': famid, 'myID' : myID},
			dataType: 'json',
			success: function(data){
				var Mother = Father = Guardian = 0;
				var x;
				var y;
				var z;
				var values = '';


				if(position == "Father"){
					Father = 2;
				}
				else if(position == "Mother"){
					Mother = 2;
				}
				else{
					Guardian = 2;
				}

				for(i=0;i<data.length;i++){
					if(data[i].relationship == "Mother"){
						Mother = 1;
						x = i;
					}
					if(data[i].relationship == "Father"){
						Father = 1;
						y = i;
					}
					if(data[i].relationship == "Guardian"){
						Guardian = 1;
						z = i;
					}
				}


				if(Father == "1"){
					values += '<a href="#" data-value="'+data[y].id+'" class="list-group-item member"><b>'+data[y].fname+" "+data[y].lname+'<font class="pull-right">Father</b></font></a>';
				}
				else if(Father == "0"){
					values += '<a href="#" data-value="0 Father"  class="list-group-item member">Add Father <span class="glyphicon glyphicon-plus pull-right"></span></a>';
				}

				if(Mother == "1"){
					values += '<a href="#" data-value="'+data[x].id+'" class="list-group-item member"><b>'+data[x].fname+" "+data[x].lname+'<font class="pull-right">Mother<b/></font></a>';
				}
				else if(Mother == "0"){
					values += '<a href="#" data-value="0 Mother"  class="list-group-item member">Add Mother <span class="glyphicon glyphicon-plus pull-right"></span></a>';
				}

				if(Guardian == "1"){
					values += '<a href="#" data-value="'+data[z].id+'" class="list-group-item member"><b>'+data[z].fname+" "+data[z].lname+'<font class="pull-right">Guardian<b/></font></a>';
				}
				else if(Guardian == "0"){
					values += '<a href="#" data-value="0 Guardian"  class="list-group-item member">Add Guardian<span class="glyphicon glyphicon-plus pull-right"></span></a>';
				}


				$('#list').html("<a href='#' class='list-group-item active'>Family</a>"+values);
			},
		});
	}

		$('#list').on('click','.member', function(){
			var dataVal = $(this).data('value');
			var string = dataVal.toString().split(" ");
			var memberID = string[0];
			var relationship = string[1];
			var famid = $('#famid').val();
			var addDetails = '';
			if(memberID == "0"){
			 addDetails = '<form id="familyForm" method="post">'+
			 							'<div class="alert alert-info form-control" role="alert">Add '+relationship+'</div><hr/>'+
			 							'<label>First name</label>'+
											'<input type="text" name="firstname" class="form-control"/><br/>'+
										'<label>Last name</label>'+
											'<input type="text" name="lastname" class="form-control""/><br/>'+
										'<label>Email</label>'+
											'<input type="text" name="email" class="form-control""/><br/>'+
											'<input type="hidden" name="relationship" value="'+relationship+'"/>'+
											'<input type="hidden" name="familyID" value="'+famid+'"/>'+
											'<button type="button" id="addRelative" class="btn btn-primary">Submit</button>'+
											'</form>';
				$('#details').html(addDetails);
			}
			else{
				$.ajax({
					type: 'ajax',
					url: 'getlistID',
					method: 'post',
					data: {'memberID' : memberID, 'famid': famid},
					dataType: 'json',
					success: function(data){
						var details = '<label>First name</label>'+
													'<input type="text" class="form-control" readonly value="'+data.fname+'"/><br/>'+
													'<label>Last name</label>'+
													'<input type="text" class="form-control" readonly value="'+data.lname+'"/><br/>'+
													'<label>Email</label>'+
													'<input type="text" class="form-control" readonly value="'+data.email+'"/><br/>';

						$('#details').html(details);
					}
				});
			}


		});

		$('#details').on('click','#addRelative', function(){
			$.ajax({
				type: 'ajax',
				url: 'addFamilyMember',
				method: 'post',
				data: $('#familyForm').serialize(),
				dataType: 'json',
				success: function(data){
					loadSelectedID();
					loadFamilyMembers();
				}
			});
		});
	});
</script>
