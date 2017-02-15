
<div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="col-xs-2 align">
				</div>
				<div class="col-xs-8 align" style="background-color: #FAFAFA; border:thin solid #ccc;padding: 1%;">

										<label for="search">Search Parent</label><input type="text" class="form-control" id="search" name="search" placeholder="Search parent..."><br/>
                    <table class="table table-bordered col-xs-12 table-sm table">
                        <thead>
                        <tr class="align bg-primary">
                            <th class="align" colspan="6" style="font-weight: bolder;font-size: 20px !important;">List of Parents</th>
                        </tr>
                    </thead>
                    <tbody id="showdata">

                    </tbody>
                    </table>
                </div>
                <div class="col-xs-2 align">
				</div>
            </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        getParents();
        function getParents(){
            $.ajax({
                type : 'ajax',
                url : 'getParents',
                dataType : 'json',

                success : function(a){

                    var html = '';
                    for(var i=0; i < a.length; i++){
                        html += '<tr>' +
                                '<td>' + a[i].fname + ' ' + a[i].lname +'</td>' +
                                '<td>' + a[i].email +'</td>' +
                                '</tr>';
                    }
                    $('#showdata').html(html);
                },
                error : function(){

                }
            });
        }

	 $( "#search" ).autocomplete({
		 close: function(event, ui){
			 var parent = $(this).val();
			 fetchParents();
		 },
		 source: 'fetchParents'
	 });

	 function fetchParents(){
		 $.ajax({
			 type: 'ajax',
			 url: 'fetchParents',
			 method: 'post',
			 data: {'parent': parent},
			 dataType: 'json',
			 success: function(data){

			 }
		 });
	 }

		});

</script>
