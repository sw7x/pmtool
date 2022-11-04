<!-- Header -->
@include('header')
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/flick/jquery-ui.css">

<!-- Left side column. contains the logo and sidebar -->
@include('navigation')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Create timesheet</h1>

    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <form class="form-horizontal">

                    <div class="box">

                        <div class="clearfix form-group" style="margin-bottom: 15px;">



                            <div class="col-xs-6"></div>

                            <div class="col-xs-3"></div>

                            <div class="col-xs-3">
                                <label for="sel1">Select Week:</label>
                                <input style="width: 100%;height:34px;" type="text" id="week_ww_yyyy">
                            </div>

                        </div>


                        <table class="table table-bordered table-hover timesheetTable" id="tab_logic">
                            <thead>
                            <tr >
                                <th class="text-center">Project</th>
                                <th class="text-center">Task</th>
                                <th class="text-center">Monday(min)</th>
                                <th class="text-center">Tuesday(min)</th>
                                <th class="text-center">Wednesday(min)</th>
                                <th class="text-center">Thursday(min)</th>
                                <th class="text-center">Friday(min)</th>

                            </tr>
                            </thead>
                            <tbody>


                            <tr id='addr0'>
                                <td style="width: 240px;">
                                    <select class="form-control select2 proj-select" style="width: 100%;">
                                        <option></option>
                                        <option>PRJ-1010</option>
                                        <option>PRJ-122</option>
                                        <option>PRJ-126</option>
                                        <option>PRJ-124</option>
                                        <option>PRJ-125</option>
                                    </select>
                                </td>
                                <td style="width: 240px;">
                                    <select class="form-control select2 task-select" style="width: 100%;">
                                        <option></option>
                                        <option>Task-1010-11</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </td>
                                <td><input type="text" name='name0'  placeholder='' class="form-control"/></td>
                                <td><input type="text" name='name0'  placeholder='' class="form-control"/></td>
                                <td><input type="text" name='name0'  placeholder='' class="form-control"/></td>
                                <td><input type="text" name='name0'  placeholder='' class="form-control"/></td>
                                <td><input type="text" name='name0'  placeholder='' class="form-control"/></td>
                            </tr>

                            </tbody>
                        </table>

                    </div><!-- /.box -->

                    <div class="clearfix">
                        <a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
                        <a id="add_row" class="btn btn-default pull-right" style="margin-right: 10px;">Add Row</a>
                    </div>
                    <br>
                    <div class="clearfix">
                        <button type="submit" class="btn btn-default btn-primary" style="color:#fff;float:right;">Submit</button>
                    </div>

                </form>


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

    $('.task-select').select2({
        placeholder: "Select a Task",
        allowClear: false
    });


    $('.proj-select').select2({
        placeholder: "Select a Project",
        allowClear: false
    });



    (function ( $ ) {
        $( "#week_ww_yyyy" ).weekpicker();
    } )(jQuery)

	$(document).ready(function(){
		var i=1;

		$("#add_row").click(function(){

			var newRow = $('#addr0').clone().attr('id', 'addr' + i);

			$('.timesheetTable tbody').append(newRow);

			i++;
		});


		$("#delete_row").click(function(){
			if(i>1){
				$("#addr"+(i-1)).remove();
				i--;
			}
		});

	});







</script>
</body>
</html>
