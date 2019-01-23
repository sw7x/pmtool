<!-- Header -->
@include('header')


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


                        <table class="table table-bordered table-hover timesheetTable" id="tab_logic">
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


                            <tr id='addr0'>
                                <td>
                                    <select class="form-control">
                                        <option>PRJ wwww wwww wwww -123</option>
                                        <option>PRJ-122</option>
                                        <option>PRJ-126</option>
                                        <option>PRJ-124</option>
                                        <option>PRJ-125</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control">
                                        <option>wwww cwwww wwww 1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </td>
                                <td><input type="text" name='name0'  placeholder='Name' class="form-control"/></td>
                                <td><input type="text" name='name0'  placeholder='Name' class="form-control"/></td>
                                <td><input type="text" name='name0'  placeholder='Name' class="form-control"/></td>
                                <td><input type="text" name='name0'  placeholder='Name' class="form-control"/></td>
                                <td><input type="text" name='name0'  placeholder='Name' class="form-control"/></td>
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
