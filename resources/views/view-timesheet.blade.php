<!-- Header -->
@include('header')
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/flick/jquery-ui.css">

<!-- Left side column. contains the logo and sidebar -->
@include('navigation')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>View Timesheet</h1>

    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">



                    <div class="box">


                        <div class="box-body">



                            <div class="clearfix form-group" style="margin-bottom: 15px;">

                                <div class="col-xs-3">
                                    <label for="sel1">Select Designation:</label>
                                    <select class="form-control" style="float:left">
                                        <option value="">All</option>
                                    </select>
                                </div>

                                <div class="col-xs-3">
                                    <label for="sel1">Select employee:</label>
                                    <select class="form-control" style="float:left">
                                        <option value="">All</option>
                                    </select>
                                </div>

                                <div class="col-xs-3">
                                    <label for="sel1">Select Week:</label>
                                    <input style="width: 100%;height:34px;" type="text" id="week_ww_yyyy">
                                </div>

                                <div class="col-xs-3">
                                    <label for="sel1">Submit to View Timesheet</label>
                                    <button type="submit" class="form-control btn btn-default btn-primary" style="color:#fff;float:right;">Submit</button>
                                </div>
                            </div>








                            <table class="table table-bordered table-hover timesheetTable" id="wTimesheetTable">
                                <thead>
                                <tr >
                                    <th class="text-center">Project</th>
                                    <th class="text-center">Task</th>
                                    <th class="text-center">Monday</th>
                                    <th class="text-center">Tuesday</th>
                                    <th class="text-center">Wednesday</th>
                                    <th class="text-center">Thursday</th>
                                    <th class="text-center">Friday</th>

                                </tr>
                                </thead>
                                <tbody>
                                    @for ($i = 0; $i < 10; $i++)
                                    <tr id='addr0'>
                                        <td>PRJ1{{ $i }}</td>
                                        <td>Task{{ $i }}</td>
                                        <td>{{ $i }}0min</td>
                                        <td>{{ $i }}0min</td>
                                        <td>{{ $i }}0min</td>
                                        <td>{{ $i }}0min</td>
                                        <td>{{ $i }}0min</td>
                                    </tr>
                                    @endfor
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th></th>
                                        <th>Total Time</th>
                                        <th>8:00</th>
                                        <th>8:00</th>
                                        <th>8:10</th>
                                        <th>7:50</th>
                                        <th>8:20</th>
                                    </tr>
                                </tfoot>

                            </table>

                        </div><!-- /.box-body -->

                    </div><!-- /.box -->

                    <div class="clearfix">
                        <button type="submit" class="btn btn-default btn-primary" style="color:#fff;float:right;">Approve</button>
                    </div>

                    <div class="panel panel-success">
                        <div class="panel-heading">Approved</div>
                        <div class="panel-body">2018/01/01</div>
                    </div>





            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->



</div><!-- /.content-wrapper -->












@include('footer')



<script src="{{ URL::to('public/assets') }}/plugins/jQueryUI/jquery-ui.js"></script>


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





<script src="{{ URL::to('public/assets') }}/js/jquery.weekpicker.js"></script>




<!-- page script -->
<script>






	(function ( $ ) {
		$( "#week_ww_yyyy" ).weekpicker();
	} )(jQuery)













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
                { "searchable": false },
                { "searchable": false },
                { "searchable": false },
                { "searchable": false },
				{ "searchable": false },
            ],
			"language": {
				"search": "Filter Tasks:"
			}

		});

	});







</script>
</body>
</html>
