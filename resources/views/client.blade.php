<!-- Header -->
@include('header')


<!-- Left side column. contains the logo and sidebar -->
@include('navigation')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header)-->
    <section class="content-header">
        <h1>Client Management</h1>
    </section>

<?php
//var_dump ($errors->all());
//echo '<br><br>';
//var_dump (session()->getOldInput());
?>




    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">




                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="clientTable" class="table table-bordered table-striped">
                            <thead>
                            <tr>

                                <th>Name</th>
                                <th>Description</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < 30; $i++)
                                <tr>

                                    <td>cleint{{ $i }}</td>
                                    <td>cleint description  {{ $i }}</td>
                                    <td>abc{{ $i }}@gmail.com</td>
                                    <td>121212121</td>


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
                            
                        </table>
                    </div>
                    <!-- /.box-body -->
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





    <!--start-----modal for add users-->

    <div class="modal fade" id="client-modal">
        <div class="modal-dialog" style="width:800px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" type="button">×</button>

                    <h4 class="modal-title" id="myModalLabel">Insert Client</h4>
                </div>

                <div class="modal-body clearfix">
                    <form action="/client/create" method="post" id="createClientForm">


                        <div class="form-group clearfix">

                            <div class="col-xs-2">
                                <label for="exampleInputPassword1">Client ID</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" readonly="">
                            </div>

                            <div class="col-xs-10">
                                <label for="exampleInputPassword1">Name</label>
                                <input name="client-name" type="text" class="form-control" id="exampleInputPassword1" placeholder="" value="{{ old('client-name') }}">
                                {{Request::old('client-name')}}
                                <span class="error text-danger"></span>
                            </div>
                        </div>

                        <div class="form-group clearfix">
                            <div class="col-xs-12">
                                <label for="exampleFormControlTextarea1">Address</label>
                                <input name="client-address" class="form-control" id="exampleFormControlTextarea1e" rows="3">{{ old('client-address') }}</input>
                                <span class="error text-danger">{{ $errors->first('client-address') }}</span>
                            </div>
                        </div>

                        <div class="form-group clearfix">

                            <div class="col-xs-6">
                                <label for="exampleFormControlTextarea1">Description</label>
                                <textarea name="client-description" class="form-control" id="exampleFormControlTextarea1e" rows="3">{{ old('client-description') }}</textarea>
                                <span class="error text-danger">{{ $errors->first('client-description') }}</span>
                            </div>


                            <div class="col-xs-6">
                                <label for="exampleFormControlTextarea1">Comments</label>
                                <textarea name="client-comments" class="form-control" id="exampleFormControlTextarea1e" rows="3">{{ old('client-comments') }}</textarea>
                                <span class="error text-danger">{{ $errors->first('client-comments') }}</span>
                            </div>

                        </div>


                        <div class="form-group clearfix">
                            <div class="col-xs-10">
                                <label for="exampleFormControlTextarea1">Phone</label>
                            </div>

                            <div class="col-xs-1">
                                <label for="exampleFormControlTextarea1">Delete</label>
                            </div>

                        </div>

                        <div class="phoneNumbersDiv">
                            <div class="form-group clearfix phoneNumbers-form-group" id="">
                                <div class="col-xs-10">
                                    <input type="text" class="form-control" name="client-phone[]" id="phone0" placeholder="" value="{{ old('client-phone[]') }}" >
                                    <span class="error text-danger">{{ $errors->first('client-phone[]') }}</span>
                                </div>

                                <div class="col-xs-1">
                                    <button class="btn btn btn-danger btn-xs delete-tp-number" data-title="Delete">
                                        <span class="glyphicon glyphicon-remove-sign"></span>
                                    </button>
                                </div>

                            </div>
                        </div>

                        <div class="form-group clearfix">
                            <div class="col-xs-12">
                                <label for="exampleFormControlTextarea1">Add Phone Number</label>&nbsp;&nbsp;
                                <button class="btn btn-primary btn-xs add-phone-number" data-updateid="">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </button>
                            </div>
                        </div>


                        <div class="form-group clearfix">
                            <div class="col-xs-10">
                                <label for="exampleInputEmail1">Email address</label>
                            </div>

                            <div class="col-xs-1">
                                <label for="exampleFormControlTextarea1">Delete</label>
                            </div>

                        </div>


                        <div class="EmailDiv">
                            <div class="form-group clearfix email-form-group" id="">
                                <div class="col-xs-10">
                                    <input type="email" class="form-control" name="client-email[]" id="email0" placeholder="Enter email" value="{{ old('client-email[]') }}">
                                    <span class="error text-danger">{{ $errors->first('client-email[]') }}</span>
                                </div>

                                <div class="col-xs-1">
                                    <button class="btn btn btn-danger btn-xs delete-email" data-title="Delete">
                                        <span class="glyphicon glyphicon-remove-sign"></span>
                                    </button>
                                </div>

                            </div>
                        </div>

                        <div class="form-group clearfix">
                            <div class="col-xs-12">
                                <label for="exampleFormControlTextarea1">Add Email</label>&nbsp;&nbsp;
                                <button class="btn btn-primary btn-xs add-email" data-updateid="">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </button>
                            </div>
                        </div>

                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                        <div class="form-group clearfix">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-danger">reset</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>



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








@include('footer')


<!-- DataTables -->
<script src="{{ URL::to('public/assets') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ URL::to('public/assets') }}/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="{{ URL::to('public/assets') }}/plugins/datatables/dataTables.buttons.min.js"></script>




<!-- AdminLTE App -->
<script src="{{ URL::to('public/assets') }}/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::to('public/assets') }}/js/demo.js"></script>
<!-- page script -->
<script>
	$(function () {
		var clientTable = $("#clientTable").DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": true,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"dom": 'Bfrtip',
			"buttons": [
				{
					text: 'Add Client',
					action: function ( e, dt, node, config ) {
						//$('#addProjectModal').modal('show');
						$('#client-modal').modal('show');
						//	alert( 'Button activated' );
					},
					className: 'add-client'
				}
			]
		});

		var i=1;


		$(".add-phone-number").click(function(event){

			var newRow    = $('.phoneNumbers-form-group:first').clone();
			var textfield = newRow.find( '#phone0' ).attr('id', 'phone' + i);

			textfield.attr('id', 'phone' + i);
			textfield.val('');


			$('.phoneNumbersDiv').append(newRow);

			i++;
			event.preventDefault();
		});


		$(document).on("click",".delete-tp-number",function(event) {
			if($('.phoneNumbers-form-group').length > 1){
                $(this).closest('.phoneNumbers-form-group').remove();
			}
			event.preventDefault();
		});


        var j=1;


        $(".add-email").click(function(event){

            var newRow    = $('.email-form-group:first').clone();
            var textfield = newRow.find( '#email0' ).attr('id', 'email' + j);

            textfield.attr('id', 'email' + j);
            textfield.val('');


            $('.EmailDiv').append(newRow);

            j++;
            event.preventDefault();
        });


        $(document).on("click",".delete-email",function(event) {
            if($('.email-form-group').length > 1){
                $(this).closest('.email-form-group').remove();
            }
            event.preventDefault();
        });


	});





    $('.proj-delete').on('click',function (event) {
    	alert();
        $('#addProjectModal').modal('show');
    });


    $('.proj-update').on('click',function (event) {
        $('#add-modal').modal('show');
    });



</script>
</body>
</html>
