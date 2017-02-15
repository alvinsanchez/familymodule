				
<div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="col-xs-2 align">
				</div>
				<div class="col-xs-8 align well">

                    
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
                                '<td><a href="#" data-a="'+ a[i].familyid +'">' + a[i].fname + ' ' + a[i].lname +'</a></td>' +
                                '<td>' + a[i].email +'</td>' +
                               
                                '</tr>';
                    }
                    $('#showdata').html(html);
                },
                error : function(){

                }
            });
        }

        $(document).on('click', 'a', function(){
            
            var a = $(this).data('a');
            alert(a);
        });
        
    });

</script>