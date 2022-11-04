<!-- Header -->
@include('header')


<!-- Left side column. contains the logo and sidebar -->
@include('navigation')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header)-->
    <section class="content-header">
        <h1>User Management</h1>

    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">

                    <div class="box-body">
                        <?php
                        $emp = array('Dasun Perera',
                            'wimal Ranasinghe',
                            'Saman Prasanna',
                            'Lasantha Rathnayake',
                            'Amila Jayarathna',
                            'Saman Rathnayake',
                            'Vidura Dissanayake',
                            'sam Fernando',
                            'Tharaka Jayathilake',
                            'Amal Perera');

                        ?>
                        <table id="projectList" class="table table-bordered table-striped">
                            <thead>
                            <tr>

                                <th>Name</th>
                                <th>Designation</th>
                                <th>Status</th>
                                <th>Update</th>
                                <th>Delete</th>

                            </tr>
                            </thead>
                            <tbody>

                            @for ($i = 0; $i < 10; $i++)


                                <tr>

                                    <td>{{$emp[$i]}}</td>
                                    <td>Win 95+</td>

                                    <td>Working</td>
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



<div class="modal fade" tabindex="-1" role="dialog" id="addProjectModal">
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

                <h4 class="modal-title" id="myModalLabel">Add User</h4>
            </div>

            <div class="modal-body clearfix">
                <form>
                    
                    
                    <div class="form-group clearfix">
                        
                        <div class="col-xs-2">
                            <label for="exampleInputPassword1">Employee ID</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" readonly="">
                        </div>

                        <div class="col-xs-4">
                            <label for="exampleInputPassword1">Username</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" readonly="">
                        </div>

                        <div class="col-xs-4">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
                        </div>

                        <div class="col-xs-2">
                            <label for="sel1">Work Status</label>
                            <select class="form-control select2" id="work-stat" style="width: 100%;">
                                <option></option>
                                <option>Working</option>
                                <option>Resigned</option>
                            </select>
                        </div>

                    </div>



                    <div class="form-group clearfix">

                        <div class="col-xs-6">
                            <label for="exampleInputPassword1">Name</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" >
                        </div>
                        
                        <div class="col-xs-2">
                            <label for="exampleInputPassword1">Age</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                        </div>

                        <div class="col-xs-4">
                            <label for="exampleFormControlTextarea1">Salary</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                        </div>

                    </div>

                    <div class="form-group clearfix">
                        <div class="col-xs-6">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                            {{--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                        </div>

                        <div class="col-xs-6">
                            <label for="exampleInputPassword1">NIC</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                        </div>
                    </div>

                    <div class="form-group clearfix">
                        <div class="col-xs-12">
                            <label for="">Address</label>
                            <input type="text" class="form-control" id="">
                        </div>
                    </div>
                    
                    <div class="form-group clearfix">
                        <div class="col-xs-4">
                            <label for="exampleFormControlTextarea1">Main Designation</label>
                            <select class="form-control select2" id="main-desig" style="width: 100%;">
                                <option>Select main designation</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>

                        <div class="col-xs-4">
                            <label for="exampleFormControlTextarea1">Sub Designation</label>
                            <select class="form-control select2" id="sub-desig" style="width: 100%;">
                                <option>Select Sub designation</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>

                        <div class="col-xs-4">
                            <label for="exampleInputPassword1">EPF-ETF No</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                        </div>
                    </div>

                    <div class="form-group clearfix">

                    </div>



                    <div class="form-group clearfix">

                        <div class="col-xs-6">
                            <label for="sel1">Education Qualifications</label>
                            <input type="text" class="form-control" id="" placeholder="">
                        </div>

                        <div class="col-xs-6">
                            <label for="exampleFormControlTextarea1">Phone No</label>
                            <input type="text" class="form-control" id="" placeholder="">
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

<!--end-----modal for add users----------------------------->

<div class="modal fade" tabindex="-1" role="dialog" id="projdelmodal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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



	var costTable = $('#costTable').DataTable();

    $('#main-desig').select2({
        placeholder: "Select main designation",
        allowClear: false
    });

    $('#sub-desig').select2({
        placeholder: "Select sub designation",
        allowClear: false
    });

    $('#work-stat').select2({
        placeholder: "Select Status",
        allowClear: false
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
					text: 'Add User',
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






	});







</script>
</body>
</html>
