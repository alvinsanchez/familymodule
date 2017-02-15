
<input id="myID" type="hidden" value="<?php echo $id ?>" />
<input type="hidden" id="famid" value="<?php echo $famid ?>"/>
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
			}
		});
	}

	function loadFamilyMembers(){
		var famid = $('#famid').val();
		var myID = $('#myID').val();
		$.ajax({
			type: 'ajax',
			url: 'loadFamilyMembers',
			method: 'post',
			data: {'famid': famid, 'myID' : myID},
			dataType: 'json',
			success: function(data){
				var values = '';
				var i;
				for(i=0;i<data.length;i++){
					if(data[i].relationship == "Mother"){
						values += '<a href="#" data-value="'+data[i].id+'" class="list-group-item member">'+data[i].fname+" "+data[i].lname+'<font class="pull-right">Mother</font></a>';
					}
					if(data[i].relationship == "Father"){
						values += '<a href="#" data-value="'+data[i].id+'" class="list-group-item member">'+data[i].fname+" "+data[i].lname+'<font class="pull-right">Father</font></a>';
					}
					if(data[i].relationship == "Guardian"){
						values += '<a href="#" data-value="'+data[i].id+'" class="list-group-item member">'+data[i].fname+" "+data[i].lname+'<font class="pull-right">Guardian</font></a>';
					}
				}
				$('#list').html("<a href='#' class='list-group-item active'>Family</a>"+values);
			}
		});
	}

		$('#list').on('click','.member', function(){
			var memberID = $(this).data('value');
			var famid = $('#famid').val();

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

		});
	});
</script>
