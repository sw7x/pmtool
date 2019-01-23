<!-- Header -->
@include('header')


<!-- Left side column. contains the logo and sidebar -->
@include('navigation')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header)-->
    <section class="content-header">
        <h1>Cost Invoices</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">


                    <div class="box-header row">
                        <div class="col-md-12">

                            <select class="select-project form-control select2" style="width: 100%;" data-placeholder="Select a Project">
                                <option></option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>

                        </div>
                    </div>


                    <!-- /.box-header -->
                    <div class="box-body">

                        <table id="costTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Description</th>
                                    <th>Income/Cost</th>
                                    <th>Amount</th>
                                    <th>delete</th>
                                    <th>update</th>
                                </tr>
                            </thead>

                            <tbody>

                            @for ($i = 0; $i < 30; $i++)
                                <tr>
                                    <td>2018/07/{{ $i }}</td>
                                    <td>Income is amount ttt der ttt</td>
                                    <td>Income</td>
                                    <td>Rs 20,000</td>

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


                            </tbody>

                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>8:00</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tfoot>

                        </table>





                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="" readonly>
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Calculate Cost</button>
                    </span>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->



        </div><!-- /.row -->






    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->





<div class="modal fade" tabindex="-1" role="dialog" id="addProjectModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
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
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal" type="button">×</button>

                <h4 class="modal-title" id="myModalLabel">Insert User</h4>
            </div>

            <div class="modal-body">
                <form>

                    <div class="form-group clearfix">
                        <div class="col-xs-12">
                            <label for="exampleFormControlInput1">Date</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                    </div>

                    <div class="form-group clearfix">
                        <div class="col-xs-12">
                            <label for="exampleFormControlInput1">Amount</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                    </div>


                    <div class="form-group clearfix">
                        <div class="col-xs-3" style="margin-top: 10px;"><label for="">Invoice Type</label></div>
                        <div class="col-xs-9">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="projectNationality" id="natinality1" value="local" checked>
                                    Income
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="projectNationality" id="natinality2" value="foreign">
                                    Cost
                                </label>
                            </div>
                        </div>
                    </div>



                    <div class="form-group clearfix">
                        <div class="col-xs-12">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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


<script src="{{ URL::to('public/assets') }}/js/script.js"></script>







<!-- page script -->
<script>




    $('select.select-project').select2({
		placeholder: "Select a state",
		allowClear: true
    });

	//Initialize Select2 Elements
	//$(".select2").select2();


	$('#projectList').on('init.dt', function() {
		$('.add-project')
		//.attr('data-toggle', 'modal')
		//.attr('data-target', '#addProjectModal');
	});












	$(function () {
		var costTable = $("#costTable").DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": true,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"dom": 'Bfrtip',
			"buttons": [
				{
					text: 'Add cost',
					action: function ( e, dt, node, config ) {
						//$('#addProjectModal').modal('show');
						$('#add-modal').modal('show');
						//	alert( 'Button activated' );
					},
					className: 'add-project'
				}
			],
			"columns": [
				{ "searchable": true },
				{ "searchable": false },
				{ "searchable": true },
				{ "searchable": true },
				{ "searchable": false },
				{ "searchable": false },
			],
		});

		$('.proj-delete').on('click',function (event) {
			$('#projdelmodal').modal('show');
		});


		$('.proj-update').on('click',function (event) {
			$('#add-modal').modal('show');
		});



		$("#projectList thead th").each( function ( i ) {

			if(i === 0)
			{

				var select = $('<select class="form-control" style="float:right"><option value="">All</option></select>')
					.appendTo( $('.projectSelect'))
					.on( 'change', function () {
						projTable.column( i )
							.search( $(this).val() )
							.draw();
					} );



				projTable.column(0).data().unique().sort().each(function (d, j) {
					select.append('<option value="' + d + '">' + d + '</option>')
				});
			}
		} );




	});








</script>
</body>
</html>
