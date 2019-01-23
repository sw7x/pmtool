<!-- Header -->
@php
    $page = 'project-list';
    $menu = 'project-Manage';

    // generate a random string of a particular length
    function random_string($length) {
        return substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, $length);
    }
@endphp





@include('header')


<!-- Left side column. contains the logo and sidebar -->
@include('navigation')





<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header)-->
    <section class="content-header">
        <h1>Project Profile Management</h1>
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">

                    <div class="box-header row">
                        <div class="col-md-3"><label for="sel1">Select Project:</label></div>
                        <div class="col-md-9">
                            <div class="projectSelect clearfix form-group" style="margin-bottom: 15px;"></div>
                        </div>
                    </div>


                    <!-- /.box-header -->
                    <div class="box-body">


                        <table id="projectList" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Budget(s)</th>
                                <th>Deadline</th>
                                <th>Type</th>
                                <th>Client</th>
                                <th>Update</th>
                                <th>Delete</th>


                            </tr>
                            </thead>
                            <tbody>

                            @for ($i = 0; $i < 30; $i++)


                            <tr>
                                <td>PRJ-{{ $i }}</td>
                                <td>project {{ $i }}</td>
                                <td>Rs 50000</td>
                                <td>2018/01/{{ $i }}</td>
                                <td>Local</td> 
                                <td><?php echo random_string(3); ?> </td>
                                <td  align="center">
                                    <button class="btn btn-primary btn-xs proj-update" data-updateid="">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </button>
                                </td>


                                <td  align="center">
                                    <button class="btn btn btn-danger btn-xs proj-delete" data-title="Delete">
                                        <span class="glyphicon glyphicon-remove-sign"></span>
                                    </button>
                                </td>
                            </tr>
                            @endfor






                        </table>

                    </div><!-- /.box-body -->

                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



<div class="modal fade" tabindex="-1" role="dialog" id="projdelmodal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!--start-----modal for add users-->

<div class="modal fade" id="add-modal">
    <div class="modal-dialog" style="width:800px;">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal" type="button">×</button>

                <h4 class="modal-title" id="myModalLabel">Create Project</h4>


                @if(count($errors) > 0)
                    <div>
                        <ul>
                            @foreach($errors->all() as $error)
                                {{ $error }}kkk
                            @endforeach
                        </ul>
                    </div>
                @endif


            </div>

            <div class="modal-body clearfix">
                <form action="{{route ('project.create')}}" method="post" id="createProjectForm">
                                        
                    <div class="form-group clearfix">
                        
                        <div class="col-xs-2">
                        <label for="exampleInputPassword1">Project ID</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" readonly="">
                        </div>
                        
                        <div class="col-xs-10">
                            <label for="exampleInputPassword1">Project Name</label>
                            <input type="text" class="form-control" id="projectName" placeholder="project name" name="projName">
                        </div>
                    </div>

                    {{--<input type="hidden" value="{{csrf_token ()}}" name="csrf-token">--}}
                    {{csrf_field ()}}


                    <div class="form-group clearfix">
                        <div class="col-xs-6">
                            <label for="exampleFormControlTextarea1">Assigned Project Manager</label>
                            <select class="form-control" id="sel1" name="projectPmId">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>                   
                    
                        <div class="col-xs-6">
                            <label for="exampleFormControlTextarea1">Client</label>
                            <select class="form-control" id="sel1" name="projectClientId">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>                   
                    </div>

                    <div class="form-group clearfix">
                        <div class="col-xs-2" style="margin-top: 10px;"><label for="">Locality</label></div>
                        <div class="col-xs-10">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="projectNationality" id="natinality1" value="local" checked>
                                    Local
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="projectNationality" id="natinality2" value="foreign">
                                    Foreign
                                </label>
                            </div>
                        </div>    
                    </div>  




                    <div class="form-group clearfix">
                        
                        <div class="col-xs-12">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" id="projectDescription" rows="3" name="description"></textarea>
                        </div>


                   </div>


                    <div class="form-group clearfix">
                        
                        <div class="col-xs-6">
                            <label for="exampleFormControlTextarea1">Budget</label>
                            <input type="text" class="form-control" name="projectBudget" id="budget" aria-describedby="emailHelp" placeholder="Enter Budget">
                        </div>


                        <div class="col-xs-6">
                            <label for="exampleFormControlTextarea1">Deadline</label>
                            <input type="text" class="form-control" name="projectDeadline" id="deadline" aria-describedby="emailHelp" placeholder="Enter Deadline">
                        </div>

                    </div>

                   
                    
                    <div class="form-group clearfix">
                        <div class="col-xs-12">
                                                  
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            
                        </div>
                    </div>
                                   
                </form>
            </div>
        </div>
    </div>
</div>










@include('footer')






<!-- DataTables -->
<script src="{{ URL::to('public/assets') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ URL::to('public/assets') }}/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="{{ URL::to('public/assets') }}/plugins/datatables/dataTables.buttons.min.js"></script>



<!-- AdminLTE App -->
<script src="{{ URL::to('public/assets') }}/js/app.min.js"></script>




<!-- AdminLTE for demo purposes -->
<script src="{{ URL::to('public/assets') }}/js/demo.js"></script>

<!-- AdminLTE App -->
<script src="{{ URL::to('public/assets') }}/js/1script.js"></script>


<!-- page script -->
<script>
	$('#projectList').on('init.dt', function() {
		$('.add-project')
			//.attr('data-toggle', 'modal')
			//.attr('data-target', '#addProjectModal');
	});





	$(function () {
		var projTable = $("#projectList").DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": true,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"dom": 'Bfrtip',
			"buttons": [
				{
					text: 'Add Project',
					action: function ( e, dt, node, config ) {
						//$('#addProjectModal').modal('show');
						$('#add-modal').modal('show');
						//	alert( 'Button activated' );
					},
					className: 'add-project'
				}
			]
		});


        $('.proj-delete').on('click',function (event) {
			$('#projdelmodal').modal('show');
		});


		$('.proj-update').on('click',function (event) {
			$('#add-modal').modal('show');
		});




        //project Select Dropdown
        $("#projectList thead th").each( function ( i ) {

			if(i === 0){

				var select = $('<select class="selectProject select2 form-control" style="float:right"><option value="">All</option></select>')
					.appendTo($('.projectSelect'))
                    .select2({
						placeholder: "Select a state",
						allowClear: true
					})
                    .on( 'change', function () {
						projTable.column( i )
							.search( $(this).val() )
							.draw();
					});

				    /*
                    $('select.selectProject').select2({
                        placeholder: "Select a state",
                        allowClear: true
                    });
                    */

				projTable.column(0).data().unique().sort().each(function (d, j) {
					select.append('<option value="' + d + '">' + d + '</option>')
				});
			}
		});


	});



	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('#createProjectForm [name="csrf-token"]').val(),
		}
	});



	$('#-createProjectForm button[type="submit"]').on('click',function (event) {

        console.log();
		alert();
		event.preventDefault();

        var formAction = $("#createProjectForm").attr('action');
        alert(formAction);


		projectName        = $("#createProjectForm [name='projectName']").val();
		projectPmId        = $("#createProjectForm [name='projectPmId']").val();
		projectClientId    = $("#createProjectForm [name='projectClientId']").val();
		projectNationality  = $("#createProjectForm [name='projectNationality']").val();
		projectDescription = $("#createProjectForm [name='projectDescription']").val();
		projectBudget      = $("#createProjectForm [name='projectBudget']").val();
		projectDeadline    = $("#createProjectForm [name='projectDeadline']").val();


		$.ajax({

			url : formAction,
			type : 'POST',
			data : {
				projectName : projectName,
                projectPmId : projectPmId ,
                projectClientId : projectClientId,
				projectNationality : projectNationality,
                projectDescription : projectDescription,
                projectBudget : projectBudget,
                projectDeadline : projectDeadline,


			},
			dataType:'json',
			beforeSend:function(data) {

			},
			success : function(data) {
				alert('Data: '+data);
			},
			error : function(request,error)
			{
				alert("Request: "+JSON.stringify(request));
			}
		});

	});

</script>





</body>
</html>
