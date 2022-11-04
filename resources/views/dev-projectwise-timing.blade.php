<!-- Header -->
@include('header')


<!-- Left side column. contains the logo and sidebar -->
@include('navigation')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Developer Projectwise Timing</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">



                    <div class="box">


                        <div class="box-body">
                            <div class="clearfix form-group" style="margin-bottom: 15px;">

                                <div class="row">
                                    <div class="col-xs-2">
                                        <label for="sel1">Select Designation:</label>
                                        <select class="form-control" style="float:left">
                                            <option value="">All</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-2">
                                        <label for="sel1">Select Employee:</label>
                                        <select class="form-control" style="float:left">
                                            <option value="">All</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-5">
                                        <label for="sel1">Select Project:</label>
                                        <select class="form-control" style="float:left">
                                            <option value="">All</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-3">
                                        {{--<label for="sel1">Submit to View Project Wise Timing</label>--}}
                                        <button type="submit" class="form-control btn btn-default btn-primary" style="color:#fff;float:right;">Submit</button>
                                    </div>
                                </div>
                            </div>








                            <table class="table table-bordered table-hover timesheetTable" id="TimesheetTable">
                                <thead>
                                <tr >
                                    <th class="text-center">Task</th>
                                    <th class="text-center">Time</th>

                                </tr>
                                </thead>
                                <tbody>
                                    @for ($i = 0; $i < 30; $i++)
                                    <tr id='addr0'>
                                        <td>Task-1010-{{ $i }}</td>
                                        <td>{{ $i }}0min</td>

                                    </tr>
                                    @endfor
                                </tbody>


                                <tfoot>
                                <tr>
                                    <th>qq</th>
                                    <th></th>

                                </tr>
                                </tfoot>
                            </table>





                        </div><!-- /.box-body -->

                    </div><!-- /.box -->







            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->



</div><!-- /.content-wrapper -->












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


	$(function () {
		var TimesheetTable = $("#TimesheetTable").DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": true,
			"ordering": false,
			"info": true,
			"autoWidth": false,
			"columns": [
				{ "searchable": true },
                { "searchable": false },

            ],
			"language": {
				"search": "Filter Tasks:"
			},
			"initComplete": function (settings, json) {


				this.api().columns().every(function () {
					var column = this;
					$(column.footer()).html('Sum: ' + 'ddd');

// 					var sum = column
// 						.data()
// 						.reduce(function (a, b) {
// 							a = parseInt(a, 10);
// 							if(isNaN(a)){ a = 0; }
//
// 							b = parseInt(b, 10);
// 							if(isNaN(b)){ b = 0; }
//
// 							return a + b;
// 						});
//
// 					$(column.footer()).html('Sum: ' + sum);
				});
			}

		});



		var TimesheetTable2 = $("#TimesheetTable2").DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": true,
			"ordering": false,
			"info": true,
			"autoWidth": false,
			"columns": [
				{ "searchable": true },
				{ "searchable": false },
				{ "searchable": true },

			],
			"language": {
				"search": "Filter Tasks:"
			},
			"initComplete": function (settings, json) {


				this.api().columns().every(function () {
					var column = this;
					$(column.footer()).html('Sum: ' + 'ddd');

// 					var sum = column
// 						.data()
// 						.reduce(function (a, b) {
// 							a = parseInt(a, 10);
// 							if(isNaN(a)){ a = 0; }
//
// 							b = parseInt(b, 10);
// 							if(isNaN(b)){ b = 0; }
//
// 							return a + b;
// 						});
//
// 					$(column.footer()).html('Sum: ' + sum);
				});
			}

		});

	});










	var table = $('#ticketTable').DataTable({

	});







</script>
</body>
</html>
