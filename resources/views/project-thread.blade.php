<!-- Header -->
@include('header')


<!-- Left side column. contains the logo and sidebar -->
@include('navigation')

<!-- Content Wrapper. Contains page content -->
<section class="content-wrapper">


    <!-- Content Header (Page header)-->
    <section class="content-header">
        <h1>Project Thread</h1>
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

                        <div class="box box-success">
                            <div class="box-header">
                                <i class="fa fa-comments-o"></i>

                                <h3 class="box-title">Chat</h3>

                                <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                                    <div class="btn-group" data-toggle="btn-toggle">
                                        <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                                        </button>
                                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body chat" id="chat-box">
                                <!-- chat item -->
                                <div class="item">
                                    <img src="{{ URL::to('public/assets') }}/img/user4-128x128.jpg" alt="user image" class="online">

                                    <p class="message">
                                        <a href="#" class="name">
                                            <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
                                            Mike Doe
                                        </a>
                                        I would like to meet you to discuss the latest news about
                                        the arrival of the new theme. They say it is going to be one the
                                        best themes on the market
                                    </p>
                                    <div class="attachment">
                                        <h4>Attachments:</h4>

                                        <p class="filename">
                                            Theme-thumbnail-image.jpg
                                        </p>

                                        <div class="pull-right">
                                            <button type="button" class="btn btn-primary btn-sm btn-flat">Open</button>
                                        </div>
                                    </div>
                                    <!-- /.attachment -->
                                </div>
                                <!-- /.item -->
                                <!-- chat item -->
                                <div class="item">
                                    <img src="{{ URL::to('public/assets') }}/img/user3-128x128.jpg" alt="user image" class="offline">

                                    <p class="message">
                                        <a href="#" class="name">
                                            <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                                            Alexander Pierce
                                        </a>
                                        I would like to meet you to discuss the latest news about
                                        the arrival of the new theme. They say it is going to be one the
                                        best themes on the market
                                    </p>
                                </div>
                                <!-- /.item -->
                                <!-- chat item -->
                                <div class="item">
                                    <img src="{{ URL::to('public/assets') }}/img/user2-160x160.jpg" alt="user image" class="offline">

                                    <p class="message">
                                        <a href="#" class="name">
                                            <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>
                                            Susan Doe
                                        </a>
                                        I would like to meet you to discuss the latest news about
                                        the arrival of the new theme. They say it is going to be one the
                                        best themes on the market
                                    </p>
                                </div>
                                <!-- /.item -->
                            </div>
                            <!-- /.chat -->
                            <div class="box-footer">
                                <div class="input-group">
                                    <input class="form-control" placeholder="Type message...">

                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
                                    </div>
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

</style>













@include('footer')


<!-- DataTables -->
<script src="{{ URL::to('public/assets') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ URL::to('public/assets') }}/plugins/datatables/dataTables.bootstrap.min.js"></script>

<!-- AdminLTE App -->
<script src="{{ URL::to('public/assets') }}/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::to('public/assets') }}/js/demo.js"></script>
<!-- page script -->
<script>

	$('select.select-project').select2({
		placeholder: "Select a state",
		allowClear: true
	});

</script>
</body>
</html>