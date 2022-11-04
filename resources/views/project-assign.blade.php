<!-- Header -->
@include('header')
<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/ui-lightness/jquery-ui.css" />

<?php
// generate a random string of a particular length
function random_string($length) {
    return substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, $length);
}

?>
?>

<!-- Left side column. contains the logo and sidebar -->
@include('navigation')

<!-- Content Wrapper. Contains page content -->
<section class="content-wrapper">


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Assign Developers To Project</h1>
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">



                    <div class="box-header">
                        <div class="">

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

                        <div class="row" style="margin-bottom: 15px;">

                            <div class="col-xs-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h1 class="panel-title">Developer Enrolled Other Projects</h1>
                                    </div>
                                    <div id="container0" class="panel-body box-container">
                                        <ul class="list-group assigned-project-list">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Project1
                                                <span class="badge badge-primary badge-pill">2018/01/01 - 2018/02/01</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Project2
                                                <span class="badge badge-primary badge-pill">2018/01/25 - 2018/03/01</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Project3
                                                <span class="badge badge-primary badge-pill">2018/02/01 - 2018/04/11</span>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                            <div class="col-xs-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h1 class="panel-title">Developer List</h1>
                                    </div>
                                    <div id="container1" class="panel-body box-container">

                                        <div id="item-1" itemid="itm-1" class="btn btn-default box-item clearfix">
                                            <div class="" style="margin-top: 7px;float: left;">employee 1</div>
                                            <div class="" style="float: right;">
                                                <button type="button" class="emp-pro-check btn btn-info" style="float:right">Check Assigned Projects</button>
                                            </div>
                                            <input type="hidden" name="item[]" value="item1" />
                                        </div>

                                        <div id="item-2" itemid="itm-2" class="btn btn-default box-item clearfix">
                                            <div class="" style="margin-top: 7px;float: left;">employee 2</div>
                                            <div class="" style="float: right;">
                                                <button type="button" class="emp-pro-check btn btn-info" style="float:right">Check Assigned Projects</button>
                                            </div>
                                            <input type="hidden" name="item[]" value="item2" />
                                        </div>


                                        <div id="item-3" itemid="itm-3" class="btn btn-default box-item clearfix">
                                            <div class="" style="margin-top: 7px;float: left;">employee 3</div>
                                            <div class="" style="float: right;">
                                                <button type="button" class="emp-pro-check btn btn-info" style="float:right">Check Assigned Projects</button>
                                            </div>
                                            <input type="hidden" name="item[]" value="item3" />
                                        </div>

                                        <div id="item-4" itemid="itm-4" class="btn btn-default box-item clearfix">
                                            <div class="" style="margin-top: 7px;float: left;">employee 4</div>
                                            <div class="" style="float: right;">
                                                <button type="button" class="emp-pro-check btn btn-info" style="float:right">Check Assigned Projects</button>
                                            </div>
                                            <input type="hidden" name="item[]" value="item4" />
                                        </div>

                                        <div id="item-5" itemid="itm-5" class="btn btn-default box-item clearfix">
                                            <div class="" style="margin-top: 7px;float: left;">employee 5</div>
                                            <div class="" style="float: right;">
                                                <button type="button" class="emp-pro-check btn btn-info" style="float:right">Check Assigned Projects</button>
                                            </div>
                                            <input type="hidden" name="item[]" value="item5" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h1 class="panel-title">Project Enrolled Developers</h1>
                                    </div>
                                    <form action="" method="post">
                                        <div id="container2" class="panel-body box-container"></div>

                                        <!-- <input type="hidden" name="item[]" value="item1" />
                                        <input type="hidden" name="item[]" value="item2"  />
                                        <input type="hidden" name="item[]" value="item3" />
                                        <input type="hidden" name="item[]" value="item4" />
                                        <input type="hidden" name="item[]" value="item5" /> -->

                                        <button type="submit" class="btn btn-default assign-emp">Submit</button>
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div><!-- /.box-body -->

                </div>
                <!-- /.box -->
            </div>






            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

</section>




<style>

    /*.list-group.panel > .list-group-item {*/
    /*border-bottom-right-radius: 4px;*/
    /*border-bottom-left-radius: 4px*/
    /*}*/
    /*.list-group-submenu {*/
    /*margin-left:20px;*/
    /*}*/
    /*.list-group-item{*/
    /*width:96%;*/
    /*border:0px;*/
    /*display: block;*/
    /*float: left;*/
    /*}*/
    /*.acc-item-wrapper{*/
    /*border:1px solid #000;*/


    /*}*/


    .nopadding {
        padding:0px;
    }
    .categorylink {
        display: block;
        padding: 12px 10px;
        text-decoration: none;
        float: left;
        width: 94%;

    }
    .categoryupdate {
        display: block;
        padding: 10px 4px;
        text-decoration: none;
        float: right;
        width: 3%;
        border-radius: 0px;

    }
    .deletelink {
        display: block;
        padding: 10px 4px;
        text-decoration: none;
        float: right;
        width: 3%;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 0px;

    }

    .panel-title{
        /*height: 20px;*/
        display:block;

        font-size: 14px;
    }

    .panel-default > .panel-heading {
        color: #333;
        background-color: #f5f5f5;
        border-color: #ddd;
    }
    .docmgCategoryBlock{
        padding: 10px 10px;
    }

    .btn{
        display: block;
    }


    .box-container {
    //height: 200px;
    }

    .box-item {
        width: 100%;
        z-index: 1000
    }

    .box-container{
        min-height: 500px;
    }
    .assign-emp{
        bottom: 35px;
        right: 30px;
        position : absolute;
    }
</style>


@include('footer')

<script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

<!-- DataTables -->
<script src="{{ URL::to('public/assets') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ URL::to('public/assets') }}/plugins/datatables/dataTables.bootstrap.min.js"></script>

<!-- AdminLTE App -->
<script src="{{ URL::to('public/assets') }}/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::to('public/assets') }}/js/demo.js"></script>
<!-- page script -->
<script>


    $(document).ready(function() {


		$('select.select-project').select2({
			placeholder: "Select a Project",
			allowClear: true
		});




        $('.box-item').draggable({
            cursor: 'move',
            helper: "clone"
        });

        $("#container1").droppable({
            drop: function(event, ui) {
                var itemid = $(event.originalEvent.target).attr("itemid");
                console.log(itemid);
                $('.box-item').each(function() {
                    if ($(this).attr("itemid") === itemid) {
                        $(this).appendTo("#container1");
                    }
                });
                console.log('drop to 1');
                event.stopPropagation();
            },
            drag: function( event, ui ) {
                console.log('ready1');
            }
        });

        $("#container2").droppable({
            drop: function(event, ui) {
				console.log("event");
				console.log(event);

            	var itemid = $(event.originalEvent.target).attr("itemid");
                console.log(itemid);


				//event.originalEvent.target   //ff

                $('.box-item').each(function() {
                    if ($(this).attr("itemid") === itemid) {
                        $(this).appendTo("#container2");
                    }
                });
                console.log('drop to 2');
                event.stopPropagation();
            },
            drag: function( event, ui ) {
                console.log('ready2');
            },
            over: function(event,ui){
                console.log('over');
            },
            out: function(event,ui){
                console.log('out');
            },
        });


        $('.emp-pro-check').click(function(event){
            console.log('show emp assigned other tasks');
            event.stopPropagation();
        });

    });
</script>










</body>
</html>
