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
        <h1>Designation Management</h1>
    </section>


    <!-- Main content -->
    <div class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">


                    <!-- /.box-header -->
                    <div class="box-body">

                        <div class="row">
                            <div class="col-xs-6">

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h1 class="panel-title">Panel 1</h1>
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
                                        <h1 class="panel-title">Panel 1 www</h1>
                                    </div>
                                    <div id="" class="panel-body box-container">
                                        <form id="task-info" action="">
                                            <div class="modal-body">

                                                <div class="form-group">
                                                    <label for="">Designation Name</label>
                                                    <input type="text" class="form-control" id="desig-name" data-source="">
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="">Description</label>
                                                    <textarea class="form-control" rows="5" id="desig-desc"></textarea>
                                                </div>

                                                <div class="checkbox">
                                                    <label><input type="checkbox"> Remember me</label>
                                                </div>


                                                <button type="button" id="desig-update-btn" class="update-task-info btn btn-default">update</button>

                                            </div>

                                        </form>

                                    </div>

                                </div>
                            </div>    

                        </div>
                    
                    </div><!-- /.box-body -->
                </div>
                <!-- /.box -->
            
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div> 


    {{--
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
                            <label for="email">Designation Name</label>
                            <input type="text" class="form-control" id="desig-name">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Designation Description</label>
                            <input type="text" class="form-control" id="desig-desc">
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
    --}}














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


	window.onload=function(){
		$(function() {
			var i=3;
			var j=1;
			var data = [{
				"id": "p1",
				"parent": "#",
				"text": "Parent-1"
			}, {
				"id": "p2",
				"parent": "#",
				"text": "Parent-2"
			}, {
				"id": "p2-c1",
				"parent": "p2",
				"text": "child-1"
			}, {
				"id": "p2-c2",
				"parent": "p2",
				"text": "child-2"
			}
                /*
				, {
					"id": "c3",
					"parent": "p2",
					"text": "child-3"
				}, {
					"id": "c4",
					"parent": "p2",
					"text": "child-4"
				}

				, {
					"id": "c5",
					"parent": "p2",
					"text": "child-5"
				}, {
					"id": "c6",
					"parent": "p2",
					"text": "child-6"
				}
                 //
				, {
					"id": "c1",
					"parent": "p1",
					"text": "child-1"
				}, {
					"id": "c2",
					"parent": "p1",
					"text": "child-2"
				}

				, {
					"id": "c3",
					"parent": "p1",
					"text": "child-3"
				}, {
					"id": "c4",
					"parent": "p1",
					"text": "child-4"
				}

				, {
					"id": "c5",
					"parent": "p1",
					"text": "child-5"
				}, {
					"id": "c6",
					"parent": "p1",
					"text": "child-6"
				}
                */
			];

			data =[];






			$("#jstree").jstree({
				"core": {
					"check_callback": true,
					"data": data,
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

			}).on('select_node.jstree', function(event, data){

				console.log(data.selected[0]);
				//console.log(data.selected[0].text());
				console.log( $('#'+data.node.id).attr('aria-level') );


				var level = data.node.parents.length;
				var text  = data.node.text;
				var id    = data.node.id;
				console.log(level,text,id);


				$('#desig-name').val(text);

				$('#desig-name').attr('data-source',id); //setter




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


			$(document).on("click","#desig-update-btn",function() {
				var desigName = $('#desig-name').val();

				var sourceid  = $('#desig-name').attr('data-source'); //setter

				alert(desigName);
				alert(sourceid);

				//$("#jstree").jstree('set_text', '#' + sourceid , desigName );
				$("#jstree").jstree('rename_node', '#' + sourceid , desigName );
				//$("#demo1").jstree('rename_node', node , text );
			});




			$('#btnCreateSub').click(function(){

				var ref = $('#jstree').jstree(true);
				var parent;
				var sel = ref.get_selected();
				console.log(sel);




				var depth = $('#' + sel).attr('aria-level');
				//alert('depth' + depth);


				if(depth >1){
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


            // not using
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


</script>










</body>
</html>