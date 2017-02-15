<div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="col-xs-2 align">
				</div>
				<div class="col-xs-8 align" style="background-color: #FAFAFA; border:thin solid #ccc;padding: 1%;">



										<input type="text" class="form-control" id="search" name="search" placeholder="Search parent..."><br/>


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
                                '<td><a href="parentsPage?famid='+a[i].familyid +'&id='+a[i].id+'" data-a="'+ a[i].familyid +'">' + a[i].fname + ' ' + a[i].lname +'</a></td>' +
                                '<td>' + a[i].email +'</td>' +

                                '</tr>';
                    }
                    $('#showdata').html(html);
                },
                error : function(){

                }
            });
        }
        // $(document).on('click', 'a', function(){

        //     var a = $(this).data('a');
        //     alert(a);
        // });


		});

        $('#search').on('keyup' , function(){
            var search = $(this).val()

             $.ajax({
                type : 'post',
                url : 'searchParents',
                data : {'search' : search},
                dataType : 'json',

                success : function(a){
                     var html = '';
                    if(a.message=='No data found'){
                         html += '<tr colspan="2">' +
                                '<td class="text-center">' + a.message +'</td>' +
                                '</tr>';
                         $('#showdata').html(html);
                    }
                    else{

                    for(var i=0; i < a.length; i++){
                        html += '<tr>' +

                                '<td><a href=""parentsPage?id='+a[i].familyid +'"" data-a="'+ a[i].familyid +'">' + a[i].fname + ' ' + a[i].lname +'</a></td>' +
                                '<td>' + a[i].email +'</td>' +

                                '<td><a href="parentsPage?id='+a[i].familyid +'" data-a="'+ a[i].familyid +'">' + a[i].fname + ' ' + a[i].lname +'</a></td>' +
                                '<td>' + a[i].email +'</td>' +


                                '</tr>';
                    }
                    $('#showdata').html(html);
                    }

                },
                error : function(){

                }
            });

        });
</script>
