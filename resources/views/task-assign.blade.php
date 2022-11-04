<!-- Header -->
@include('header')
<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/ui-lightness/jquery-ui.css" />
<link rel="stylesheet" href="{{ URL::to('public/assets') }}/plugins/jstree/dist/themes/default/style.min.css" />


<!-- Left side column. contains the logo and sidebar -->
@include('navigation')

<!-- Content Wrapper. Contains page content -->
<section class="content-wrapper">


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Assign Developers to Task</h1>
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
                    <div class="box-body row">

                        <div class="col-xs-6">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h1 class="panel-title">Tasks</h1>
                                </div>
                                <div id="" class="panel-body box-container">
                                    <div id="jstree"></div>
                                </div>
                            </div>

                        </div>

                        <div class="col-xs-6">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h1 class="panel-title">Task Details</h1>
                                </div>
                                <div id="" class="panel-body box-container">

                                    <form id="task-info" action="/action_page.php">

                                        <div class="form-group clearfix row">

                                            <div class="col-xs-6">
                                                <label for="exampleInputPassword1">Task ID</label>
                                                <input type="text" class="form-control" id="task-id" placeholder="" readonly="">
                                            </div>

                                            <div class="col-xs-6">
                                                <div class="col-xs-12">
                                                    <label for="exampleInputPassword1">Status</label>
                                                </div>

                                                <div class="col-xs-6">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="task-status" id="task-status-comp" value="option1" checked>
                                                            complete
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="task-status" id="task-status-pending" value="option2">
                                                            Pending
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>



                                        <div class="form-group clearfix row">

                                            <div class="col-xs-9">
                                                <label for="exampleInputPassword1">Task Name</label>
                                                <input type="text" data-source="" class="form-control" id="task-name" placeholder="" >
                                            </div>

                                            <div class="col-xs-3">
                                                <label for="exampleInputPassword1">Estimate time</label>
                                                <input type="text" class="form-control" id="task-est-time" placeholder="" >
                                            </div>

                                        </div>

                                        <div class="form-group clearfix">
                                            <label for="exampleFormControlTextarea1e">Description</label>
                                            <textarea class="form-control" id="task-desc" rows="3"></textarea>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label for="exampleFormControlTextarea1e">Comments</label>
                                            <textarea class="form-control" id="task-comments" rows="3"></textarea>
                                        </div>


                                        <div class="form-group clearfix row">
                                            <div class="col-xs-6">
                                                <label for="exampleInputPassword1">Spend time</label>
                                                <input type="text" class="form-control" id="task-spend-time" placeholder="" >
                                            </div>

                                            <div class="col-xs-6">
                                                <label for="exampleInputPassword1">Deadline</label>
                                                <input type="text" class="form-control" id="task-deadline" placeholder="" >
                                            </div>
                                        </div>

                                        <div class="form-group clearfix row">
                                            <div class="col-xs-8"></div>
                                            <div class="col-xs-4">
                                                <button type="button" id="task-update-btn" class="btn btn-primary">Submit</button>
                                                <button type="reset" class="btn btn-danger">Reset</button>
                                            </div>
                                        </div>

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






    <div class="container-fluid">
        <div class="row">

            <div class="col-xs-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 class="panel-title">Developer assigned other tasks in this project</h1>
                    </div>
                    <div id="container0" class="panel-body box-container">
                        <ul class="list-group assigned-project-list">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                create UI mockups - PRJ-1010
                                <span class="badge badge-primary badge-pill">2018/01/04 - 2016/01/10</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Contact us form development - PRJ-1010
                                <span class="badge badge-primary badge-pill">2018/01/04 - 2016/01/20</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                fix home page slider - PRJ-1015
                                <span class="badge badge-primary badge-pill">2016/01/20 - 2016/02/12</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xs-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 class="panel-title">Project Enrolled Developers</h1>
                    </div>
                    <div id="container1" class="panel-body box-container">

                        <div itemid="itm-1" class="btn btn-default box-item clearfix">
                            <div class="" style="margin-top: 7px;float: left;">Item 1</div>
                            <div class="" style="float: right;">
                                <button type="button" class="emp-pro-check btn btn-info" style="float:right">Check Assigned Tasks</button>
                            </div>
                            <input type="hidden" name="item[]" value="item1" />
                        </div>

                        <div itemid="itm-2" class="btn btn-default box-item clearfix">
                            <div class="" style="margin-top: 7px;float: left;">Item 2</div>
                            <div class="" style="float: right;">
                                <button type="button" class="emp-pro-check btn btn-info" style="float:right">Check Assigned Projects</button>
                            </div>
                            <input type="hidden" name="item[]" value="item2" />
                        </div>


                        <div itemid="itm-3" class="btn btn-default box-item clearfix">
                            <div class="" style="margin-top: 7px;float: left;">Item 3</div>
                            <div class="" style="float: right;">
                                <button type="button" class="emp-pro-check btn btn-info" style="float:right">Check Assigned Projects</button>
                            </div>
                            <input type="hidden" name="item[]" value="item3" />
                        </div>

                        <div itemid="itm-4" class="btn btn-default box-item clearfix">
                            <div class="" style="margin-top: 7px;float: left;">Item 4</div>
                            <div class="" style="float: right;">
                                <button type="button" class="emp-pro-check btn btn-info" style="float:right">Check Assigned Projects</button>
                            </div>
                            <input type="hidden" name="item[]" value="item4" />
                        </div>

                        <div itemid="itm-5" class="btn btn-default box-item clearfix">
                            <div class="" style="margin-top: 7px;float: left;">Item 5</div>
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
                        <h1 class="panel-title">Task Assigned Developers</h1>
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
    </div>




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
        //display: block;
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


<script src="{{ URL::to('public/assets') }}/plugins/jstree/dist/jstree.js"></script>










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


	$(document).ready(function() {

		$('.box-item').draggable({
			cursor: 'move',
			helper: "clone"
		});

		$("#container1").droppable({
			drop: function(event, ui) {
				var itemid = $(event.originalEvent.toElement).attr("itemid");
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
				var itemid = $(event.originalEvent.toElement).attr("itemid");
				console.log(itemid);
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


	function demo_rename() {
		var ref = $('#jstree').jstree(true),
			sel = ref.get_selected();
		if(!sel.length) { return false; }
		sel = sel[0];
		ref.edit(sel);
	}


	function demo_delete() {
		var ref = $('#jstree').jstree(true),
			sel = ref.get_selected();
		if(!sel.length) { return false; }
		ref.delete_node(sel);
	}


	function demo_create() {
		var ref = $('#jstree').jstree(true),
			sel = ref.get_selected();
		if(!sel.length) { return false; }
		sel = sel[0];
		sel = ref.create_node(sel, {"type":"file"});
		if(sel) {
			ref.edit(sel);
		}
	}



	window.onload=function(){
		$(function() {
			var i=3;
			var data = [{
				"id": "p1",
				"parent": "#",
				"text": "Parent-1"
			}, {
				"id": "p2",
				"parent": "#",
				"text": "Parent-2"
			}, {
				"id": "c1",
				"parent": "p2",
				"text": "Child 1"
			}, {
				"id": "c2",
				"parent": "p2",
				"text": "Child 2"
			}, ];

            var data = [{
                "id": "p1",
                "parent": "#",
                "text": "Create wireframes"
            }, {
                "id": "p2",
                "parent": "#",
                "text": "Ui development"
            }, {
                "id": "c1",
                "parent": "p2",
                "text": "create PSD"
            }, {
                "id": "c2",
                "parent": "p2",
                "text": "Child 2"
            }, {
                    "id": "cc1",
                    "parent": "c2",
                    "text": "Child 23"
                },







            ];


			$("#jstree").jstree({
				"core": {
					"check_callback": true,
					"data": data
				},

// 				'plugins': ["contextmenu"],
// 				'contextmenu': {
// 					'items': customMenu
// 				}



			}).on('create_node.jstree', function(e, data) {
				console.log('saved');
				var level=data.node.parents.length;
				console.log(level);

			}).on("select_node.jstree", function(event, node,data) {

				var selected = node.instance.get_selected();
				alert(selected);




			});


// 			function customMenu(node) {
// 				//debugger
// 				//Show a different label for renaming files and folders
// 				var tree = $('#jstree').jstree(true);
// 				var ID = $(node).attr('id');
// 				if (ID == "j1_1") {
// 					return items = {};
// 				}
// 				var $mynode = $('#' + ID);
// 				var renameLabel;
// 				var deleteLabel;
// 				var folder = false;
// 				if ($mynode.hasClass("jstree-closed") || $mynode.hasClass("jstree-open")) { //If node is a folder
// 					renameLabel = "Rename Folder";
// 					deleteLabel = "Delete Folder";
// 					folder = true;
// 				} else {
// 					renameLabel = "Rename File";
// 					deleteLabel = "Delete File";
// 				}
// 				var items = {
// 					"rename": {
// 						"label": renameLabel, //Different label (defined above) will be shown depending on node type
// 						"action": function (obj) {
// 						alert('ggg')
//                         }
// 					},
// 					"delete": {
// 						"label": deleteLabel,
// 						"action": function (obj) {
//
// 							tree.delete_node([node]);
// 						}
// 					}
// 				};
//
// 				return items;
// 			}










			$('#btnCreateParent').click(function() {

				$('#ddd').modal('show');



				$('#jstree').jstree().create_node('#', {
					"id": "p" + i,
					"text": "Parent-"+ i,
					"li_attr" : { "class" : "parent" },
				}, "last", function() {
					alert("Parent created");
				});

				// $('#jstree').jstree().create_node('p2', {
				//     "id": "c3",
				//     "text": "Child 3"
				// }, "last", function() {
				//     alert("Child created");
				// });
				i++;
			});

			$('#btnCreateChild').click(function() {
				var parentid = $("#jstree").jstree().get_selected()[0]
				console.log(parentid);

				if($('#' + parentid).hasClass('parent')){
					$('#jstree').jstree().create_node(parentid, {
						"id": parentid + "c3",
						"text": "Child 3",
						"li_attr" : { "class" : "child" },
					}, "last", function() {
						alert("Child created");
					});
				}else{
					alert("error");
				}



			});
		});

	}


	var taskinfoFormStatus = true;

		$(".update-task-info").click(function (event) {


			$("#task-info :input").prop("disabled", taskinfoFormStatus);
			$("#task-info :button").prop("disabled", taskinfoFormStatus);
			$("#task-info :checkbox").prop("disabled", taskinfoFormStatus);


			taskinfoFormStatus = (taskinfoFormStatus == true) ? false : true;


		});

</script>










</body>
</html>
