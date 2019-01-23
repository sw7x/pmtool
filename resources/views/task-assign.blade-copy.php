<!-- Header -->
@include('header')


<!-- Left side column. contains the logo and sidebar -->
@include('navigation')

<!-- Content Wrapper. Contains page content -->
<section class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Tables - task assign
            <small>advanced tables</small>
        </h1>
<!--        <ol class="breadcrumb">-->
<!--            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>-->
<!--            <li><a href="#">Tables</a></li>-->
<!--            <li class="active">Data tables</li>-->
<!--        </ol>-->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">


                <!-- Chat box -->
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
                <!-- /.box (chat box) -->



            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->



    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="panel panel-default stage1" style="margin-bottom:5px;">
                    <!--clickable div 1-->
                    <div class="panel-heading nopadding">
                        <h4 class="clearfix panel-title h4-188">
                            <a class="collapsed categorylink category1" data-parent="accordion" data-toggle="collapse" href="#collapse188" id="aaabbb">ssdsdsdsdsd</a>
                            <a class="btn btn-primary btn-xs categoryupdate" data-categoryname="ssdsdsdsdsd" data-cid="188" data-target="" data-title="category-update" data-toggle="modal" href=""><span class="fa fa-link"></span></a>
                            <a class="btn btn-danger deletelink" data-deletecat="188" href="#"><span aria-hidden="true" class="glyphicon glyphicon-remove"></span></a>
                        </h4>

                    </div><!--collapsable div 1-->
                    <div class="panel-collapse collapse level1" id="collapse188">
                        <div class="panel-body">
                            <!---->
                            <div class="panel-group" id="accordion1">
                                <div class="panel panel-default stage2" style="margin-bottom:5px;">
                                    <!--clickable div 2-->
                                    <div class="panel-heading nopadding">
                                        <h4 class="clearfix  panel-title h4-200">
                                            <a class="collapsed1 categorylink category2" data-parent="accordion1" data-toggle="collapse" href="#collapse200">sdasdada</a>
                                            <a class="btn btn-primary btn-xs categoryupdate" data-categoryname="sdasdada" data-cid="200" data-target="" data-title="category-update" data-toggle="modal" href=""><span class="fa fa-link"></span></a>
                                            <a class="btn btn-danger deletelink" data-deletecat="200" href="#"><span aria-hidden="true" class="glyphicon glyphicon-remove"></span></a>
                                        </h4>

                                    </div><!--collapsable div 2-->
                                    <div class="panel-collapse collapse level2" id="collapse200">
                                        <div class="panel-body">
                                            <!---->
                                            <div class="panel-group" id="accordion2"></div><!-- .panel-group -->
                                            <!---->
                                        </div>
                                    </div>
                                </div><!-- .panel -->
                                <div class="panel panel-default stage2" style="margin-bottom:5px;">
                                    <!--clickable div 2-->
                                    <div class="panel-heading nopadding">
                                        <h4 class="clearfix panel-title h4-213">
                                            <a class="collapsed1 categorylink category2" data-parent="accordion1" data-toggle="collapse" href="#collapse213">asasasas</a>
                                            <a class="btn btn-primary btn-xs categoryupdate" data-categoryname="asasasas" data-cid="213" data-target="" data-title="category-update" data-toggle="modal" href=""><span class="fa fa-link"></span></a>
                                            <a class="btn btn-danger deletelink" data-deletecat="213" href="#"><span aria-hidden="true" class="glyphicon glyphicon-remove"></span></a>
                                        </h4>

                                    </div><!--collapsable div 2-->
                                    <div class="panel-collapse collapse level2" id="collapse213">
                                        <div class="panel-body">
                                            <!---->
                                            <div class="panel-group" id="accordion2"></div><!-- .panel-group -->

                                            <div class="panel panel-default stage3" style="margin-bottom:5px;">
                                                <!--clickable div 2-->
                                                <div class="panel-heading nopadding">
                                                    <h4 class="clearfix  panel-title h4-2133">
                                                        <a class="collapsed1 categorylink category3" data-parent="accordion1" data-toggle="collapse" href="#collapse299">EEE</a>
                                                        <a class="btn btn-primary  btn-xs categoryupdate" data-categoryname="asasasas" data-cid="213" data-target="" data-title="category-update" data-toggle="modal" href="">
                                                            <span class="fa fa-link"></span>
                                                        </a>
                                                        <a class="btn btn-danger deletelink" data-deletecat="299" href="#">
                                                            <span aria-hidden="true" class="glyphicon glyphicon-remove"></span>
                                                        </a>
                                                    </h4>

                                                </div><!--collapsable div 2-->
                                                <div class="panel-collapse collapse level3" id="collapse299">
                                                    <div class="panel-body">
                                                        <!---->
                                                        <div class="panel-group" id="accordion2"></div><!-- .panel-group -->
                                                        <!---->
                                                    </div>
                                                </div>
                                            </div><!-- .panel -->



                                            <!---->
                                        </div>
                                    </div>
                                </div><!-- .panel -->
                            </div><!-- .panel-group -->
                            <!---->
                        </div>
                    </div>
                </div><!-- .panel -->


            </div>
        </div>
    </section>









    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="panel panel-default stage1" style="margin-bottom:5px;">
                    <!--clickable div 1-->
                    <div class="panel-heading nopadding">
                        <h4 class="clearfix panel-title h4-188">
                            <a class="collapsed categorylink category1" data-parent="accordion" data-toggle="collapse" href="#collapse1889" id="aaabbb">project</a>
                            <a class="btn btn btn-danger btn-xs categoryupdate" data-categoryname="ssdsdsdsdsd" data-cid="188" data-target="" data-title="category-update" data-toggle="modal" href=""><span class="glyphicon glyphicon-pencil"></span></a>
                            <a class="deletelink" data-deletecat="188" href="#"><span aria-hidden="true" class="glyphicon glyphicon-remove"></span></a>
                        </h4>

                    </div><!--collapsable div 1-->
                    <div class="panel-collapse collapse level1" id="collapse1889">
                        <div class="panel-body">
                            <!---->
                            <div class="panel-group" id="accordion1">
                                <div class="panel panel-default stage2" style="margin-bottom:5px;">
                                    <!--clickable div 2-->
                                    <div class="panel-heading nopadding">
                                        <h4 class="clearfix  panel-title h4-200"><a class="collapsed1 categorylink category2" data-parent="accordion1" data-toggle="collapse" href="#collapse2001">activity1</a>
                                            <a class="btn btn btn-danger btn-xs categoryupdate" data-categoryname="sdasdada" data-cid="200" data-target="" data-title="category-update" data-toggle="modal" href=""><span class="glyphicon glyphicon-pencil"></span></a>
                                            <a class="deletelink" data-deletecat="200" href="#"><span aria-hidden="true" class="glyphicon glyphicon-remove"></span></a>
                                        </h4>

                                    </div><!--collapsable div 2-->

                                </div><!-- .panel -->
                                <div class="panel panel-default stage2" style="margin-bottom:5px;">
                                    <!--clickable div 2-->
                                    <div class="panel-heading nopadding">
                                        <h4 class="clearfix panel-title h4-213">
                                            <a class="collapsed1 categorylink category2" data-parent="accordion1" data-toggle="collapse" href="#collapse2131">activity2</a>
                                            <a class="btn btn btn-danger btn-xs categoryupdate" data-categoryname="asasasas" data-cid="213" data-target="" data-title="category-update" data-toggle="modal" href=""><span class="glyphicon glyphicon-pencil"></span></a>
                                            <a class="deletelink" data-deletecat="213" href="#"><span aria-hidden="true" class="glyphicon glyphicon-remove"></span></a>
                                        </h4>

                                    </div><!--collapsable div 2-->

                                </div><!-- .panel -->
                            </div><!-- .panel-group -->
                            <!---->
                        </div>
                    </div>
                </div><!-- .panel -->


            </div>
        </div>
    </section>





    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">



                <!--max-height:500px;overflow:scroll;overflow-x: hidden;-->
                <div class="" style="" data-userid="47">
                    <div class="" style="width:100%">
                        <div class="panel-group" id="accordion0">

                            <div class="panel panel-default level1">

                                <div class="panel-heading nopadding panel-headinglevel1">
                                    <h4 class="clearfix panel-title" style="width:100%;">
                                        <a class="collapsed categorylink" data-toggle="collapse" href="#collapse3">pc</a>
                                        <button type="button" class="btn btn-default btn-danger btn-sm docmgCategoryBlock pull-right" data-categoryid="3"><span class="glyphicon glyphicon-lock"></span></button>

                                        <a class="btn btn-primary btn-xs categoryupdate" data-categoryname="ssdsdsdsdsd" data-cid="188" data-target="" data-title="category-update" data-toggle="modal" href=""><span class="fa fa-link"></span></a>
                                        <a class="btn btn-danger deletelink" data-deletecat="188" href="#"><span aria-hidden="true" class="glyphicon glyphicon-remove"></span></a>




                                        <!--<button type="button" class="btn btn-default btn-danger btn-xs docmgCategoryBlock" data-categoryid=""><span class="glyphicon glyphicon-lock"></span></button>-->
                                        <div class="clear"></div>
                                    </h4>
                                </div>

                                <div id="collapse3" class="panel-collapse collapse panel-collapselevel1">
                                    <div class="panel-body">
                                        <div class="panel-group" id="accordion2">

                                            <table class="userdoclist display table table-striped table-bordered table-hover">

                                            </table>
                                            <div class="panel panel-default level2">

                                                <div class="panel-heading nopadding panel-headinglevel2">
                                                    <h4 class="clearfix panel-title" style="width:100%;">
                                                        <a class="collapsed categorylink" data-toggle="collapse" href="#collapse9">asus</a>
                                                        <button type="button" class="btn btn-default btn-danger btn-sm docmgCategoryBlock pull-right" data-categoryid="9"><span class="glyphicon glyphicon-lock"></span></button>

                                                        <!--<button type="button" class="btn btn-default btn-danger btn-xs docmgCategoryBlock" data-categoryid=""><span class="glyphicon glyphicon-lock"></span></button>-->
                                                        <div class="clear"></div>
                                                    </h4>
                                                </div>

                                                <div id="collapse9" class="panel-collapse collapse panel-collapselevel2">
                                                    <div class="panel-body">
                                                        <div class="panel-group" id="accordion2">

                                                            <table class="userdoclist display table table-striped table-bordered table-hover">

                                                            </table>
                                                            <div class="panel panel-default level3">

                                                                <div class="panel-heading nopadding panel-headinglevel3">
                                                                    <h4 class="clearfix panel-title" style="width:100%;">
                                                                        <a class="collapsed categorylink" data-toggle="collapse" href="#collapse25">asus1</a>
                                                                        <button type="button" class="btn btn-default btn-danger btn-sm docmgCategoryBlock pull-right" data-categoryid="25"><span class="glyphicon glyphicon-lock"></span></button>

                                                                        <!--<button type="button" class="btn btn-default btn-danger btn-xs docmgCategoryBlock" data-categoryid=""><span class="glyphicon glyphicon-lock"></span></button>-->
                                                                        <div class="clear"></div>
                                                                    </h4>
                                                                </div>

                                                                <div id="collapse25" class="panel-collapse collapse panel-collapselevel3">
                                                                    <div class="panel-body">
                                                                        <div class="panel-group" id="accordion2">

                                                                            <table class="userdoclist display table table-striped table-bordered table-hover">

                                                                                <tr class="info">
                                                                                    <th>Document name</th>
                                                                                    <th>Block</th>
                                                                                    <th>Delete</th>
                                                                                    <th>Update</th>
                                                                                <tr>
                                                                                <tr class="doc__90 active">
                                                                                    <td>sfs</td>

                                                                                    <td>

                                                                                        <button class="btn btn-danger btn-xs block_docmanage" data-docid="90"><span class="glyphicon glyphicon-lock"></span></button>
                                                                                    </td>

                                                                                    <td><button class="btn btn-danger btn-xs deleteDocmanage" data-docid="90"><span class="glyphicon glyphicon-trash"></span></button></td>

                                                                                    <td><button class="btn btn-primary btn-xs doc_rename" data-title="Rename" data-docrenameid="90" ><span class="glyphicon glyphicon-pencil"></span></button></td>
                                                                                </tr>
                                                                                <!--</table>-->
                                                                            </table>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> <!-- .panel -->



                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- .panel -->



                                        </div>
                                    </div>
                                </div>
                            </div> <!-- .panel -->


                        </div> <!-- .panel-group -->
                    </div> <!-- .container -->
                </div>





            </div>
        </div>
    </section>






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
	$(function () {
		$("#example1").DataTable();
		$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false
		});
	});
</script>
</body>
</html>