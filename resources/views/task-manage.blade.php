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
        <h1>Task Management</h1>
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
                    <div class="box-body row">

                        <div class="col-xs-6">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h1 class="panel-title">Tasks</h1>
                                </div>
                                <div id="" class="panel-body box-container">
                                    <div id="jstree"></div>

                                </div>
                                <div id="" class="">
                                    <button type="button" class="" id="btnCreateParent">Create Parent</button>
                                    <button type="button" class="" id="btnCreateSub">Create Child</button>
                                    <button type="button" class="" id="btnCreateChild" onclick="demo_delete();">delete</button>
                                    <button type="button"  onclick="demo_rename();">Rename</button>

                                    <button type="button" class="" id="btnCreateChild">update</button>
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
                                                <input type="text" class="form-control" id="task-id" placeholder="Password" readonly="">
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
                                                <input type="text" data-source="" class="form-control" id="task-name" placeholder="Password" >
                                            </div>

                                            <div class="col-xs-3">
                                                <label for="exampleInputPassword1">Estimate time</label>
                                                <input type="text" class="form-control" id="task-est-time" placeholder="Password" >
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
                                                <label for="exampleInputPassword1">spend time</label>
                                                <input type="text" class="form-control" id="task-spend-time" placeholder="Password" >
                                            </div>

                                            <div class="col-xs-6">
                                                <label for="exampleInputPassword1">Deadline</label>
                                                <input type="text" class="form-control" id="task-deadline" placeholder="Password" >
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

</section>



<div class="modal fade" id="ddd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <form action="/action_page.php">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-default">Submit</button>

                </div>
            </form>
        </div>
    </div>
</div>


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




	$(document).on("click","#task-update-btn",function() {
		var desigName = $('#task-name').val();

		var sourceid  = $('#task-name').attr('data-source'); //setter

		alert(desigName);
		alert(sourceid);

		//$("#jstree").jstree('set_text', '#' + sourceid , desigName );
		$("#jstree").jstree('rename_node', '#' + sourceid , desigName );
		//$("#demo1").jstree('rename_node', node , text );
	});





	window.onload=function(){
		$(function() {



			$("#jstree").jstree({
				"core": {
					"check_callback": true,
					"data": [],
					"themes" : { "stripes" : true },
				},
				//"plugins" : [ "unique","wholerow"],
				"plugins" : [ "unique"],
				"unique": {
					"duplicate": function (name, counter) {
						alert('duplicate node added: ' + name);
						//return name; // This would just return the duplicate name to use as the node is created
					}
				},



			}).on('create_node.jstree', function(e, data) {
				console.log('saved');
				var level=data.node.parents.length;
				console.log(level);

			}).on("select_node.jstree", function(event, data) {

				//var selected = node.instance.get_selected();
				//alert(selected);


				console.log(data.selected[0]);
				//console.log(data.selected[0].text());
				console.log( $('#'+data.node.id).attr('aria-level') );


				var level = data.node.parents.length;
				var text  = data.node.text;
				var id    = data.node.id;
				console.log(level,text,id);


				$('#task-name').val(text);

				$('#task-name').attr('data-source',id); //setter




				var selectedNode = $("#jstree").jstree("get_selected");
				console.log('selectedNode');
				console.log(selectedNode);

				console.log($('#'+selectedNode[0]).text());





				var node_info = $("#jstree").jstree("get_node",selectedNode[0]);

				console.log(node_info);


				var childrens = node_info.children;


				alert(node_info.children_d.join(','));
				console.log(childrens);

				$("#jstree").jstree("open_node", $('#' + id));
				for(var i=0;i<childrens.length;i++)
				{
					console.log('~~~' + $('#'+childrens[i]).text());
				}




			});













			$('#btnCreateSub').click(function(){

				var ref = $('#jstree').jstree(true);
				var parent;
				var sel = ref.get_selected();
				console.log(sel);




				var depth = $('#' + sel).attr('aria-level');
				//alert('depth' + depth);


				if(depth >2){
					//alert('must not more than 3 levels');
					swal ( "Oops" ,  "must not more than 2 levels" ,  "error" );
					return false;
				}

				if(!sel.length) { return false; }

				sel = sel[0];
				parent = sel;




				console.log($('#'+parent[0]).text());

				var node_info = $("#jstree").jstree("get_node",parent);

				console.log(node_info);

				var childrens = node_info.children;

				console.log(node_info.children_d.join(','));
				console.log(childrens);

				var k=1;



				var slectedParent     = $("#jstree").jstree("get_node",$('#' + parent));
				var allChildsOfParent = node_info.children;


				function  checkUniqueId(id){

					var tempId = parent + "-c" + id;
					for (var i = 0; i < allChildsOfParent.length; i++)
					{
						var loopitemId = allChildsOfParent[i];
						if (tempId === loopitemId)
						{
							return false;
						}
					}
					return id;
				}

				function  checkUniqueName(id){

					var tempNodeText = "child-"+ id;
					for (var i = 0; i < allChildsOfParent.length; i++)
					{
						var loopitemText = $('#'+allChildsOfParent[i]).text();
						if (tempNodeText === loopitemText)
						{
							return false;
						}
					}
					return tempNodeText;
				}
//
//
				var k=0;

				var isUniqueId   = false;
				var isUniqueName = false;

				while( isUniqueId ===false || isUniqueName ===false ){
					k++;
					isUniqueId   = checkUniqueId(k);
					isUniqueName = checkUniqueName(k);

				}


				sel = ref.create_node(sel, {
					"id": parent + "-c" + k,
					"text": "child-"+ k,
					"li_attr" : { "class" : "child" },



				}, "last", function() {
					//	alert("Child created");
				});


				console.log(sel);
				if(sel) {
					ref.edit(sel);
				}

				$('#jstree').jstree("deselect_all");

				//$('.jstree').jstree(true).select_node('element id');
				ref.select_node(sel);


				$("#jstree").jstree("open_node", $('#' + sel));


				j++;
			});



			$('#btnCreateParent').click(function() {

				//$('#ddd').modal('show');


				var ref = $('#jstree').jstree(true);


				//get all parent nodes
				var node_info = $("#jstree").jstree("get_node",'#');
				var parentnodeArrById = node_info.children;




				function  checkUniqueId(id){

					var tempId = "p" + id;
					for (var i = 0; i < parentnodeArrById.length; i++)
					{
						var loopitemId = parentnodeArrById[i];
						if (tempId === loopitemId)
						{
							return false;
						}
					}
					return id;
				}

				function  checkUniqueName(id){

					var tempNodeText = "Parent-"+ id;
					for (var i = 0; i < parentnodeArrById.length; i++)
					{
						var loopitemText = $('#'+parentnodeArrById[i]).text();
						if (tempNodeText === loopitemText)
						{
							return false;
						}
					}
					return tempNodeText;
				}


				var k=0;

				var isUniqueId   = false;
				var isUniqueName = false;

				while( isUniqueId ===false || isUniqueName ===false ){
					k++;
					isUniqueId   = checkUniqueId(k);
					isUniqueName = checkUniqueName(k);

				}


				alert(k);

				var sel = ref.create_node('#',  {
					"id": "p" + k,
					"text": "Parent-"+ k,
					"li_attr" : { "class" : "parent" },
				},"last", function() {

					//alert("Child created");
				});



				if(sel) {
					ref.edit(sel);
				}

				$('#jstree').jstree("deselect_all");

				//$('.jstree').jstree(true).select_node('element id');
				ref.select_node(sel);
			});






		});

	}




</script>










</body>
</html>