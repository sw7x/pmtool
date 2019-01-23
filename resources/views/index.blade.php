

<!-- Header -->
  @include('header')
  
	
    <!-- Left side column. contains the logo and sidebar -->
    @include('navigation')

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header)-->
		<section class="content-header">
			<h1>
				Dashboard
				<small>Control panel</small>
			</h1>
			{{--<ol class="breadcrumb">--}}
				{{--<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>--}}
				{{--<li class="active">Dashboard</li>--}}
			{{--</ol>--}}
		</section>

		<!-- Main content -->
		<section class="content">

			<!-- Small boxes (Stat box) -->
			<div class="row">

				<div class="col-lg-3 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-aqua">
						<div class="inner">
							<h3>150</h3>

							<p>New Orders</p>
						</div>
						<div class="icon">
							<i class="ion ion-bag"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>

				<div class="col-lg-3 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-green">
						<div class="inner">
							<h3>53<sup style="font-size: 20px">%</sup></h3>

							<p>Bounce Rate</p>
						</div>
						<div class="icon">
							<i class="ion ion-stats-bars"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>

				<div class="col-lg-3 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-yellow">
						<div class="inner">
							<h3>44</h3>

							<p>User Registrations</p>
						</div>
						<div class="icon">
							<i class="ion ion-person-add"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>

				<div class="col-lg-3 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-red">
						<div class="inner">
							<h3>65</h3>

							<p>Unique Visitors</p>
						</div>
						<div class="icon">
							<i class="ion ion-pie-graph"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>

			</div>
			<!-- /.row -->




			<!-- Main row -->
			<div class="row">
				<!-- Left col -->
				<section class="col-lg-7 connectedSortable">
					<!-- Custom tabs (Charts with tabs)-->
					<div class="nav-tabs-custom">
						<!-- Tabs within a box -->
						<ul class="nav nav-tabs pull-right">
							<li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
							<li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
							<li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>
						</ul>
						<div class="tab-content no-padding">
							<!-- Morris chart - Sales -->
							<div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
							<div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
						</div>
					</div>
					<!-- /.nav-tabs-custom -->

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

					<!-- TO DO List -->
					<div class="box box-primary">
						<div class="box-header">
							<i class="ion ion-clipboard"></i>

							<h3 class="box-title">To Do List</h3>

							<div class="box-tools pull-right">
								<ul class="pagination pagination-sm inline">
									<li><a href="#">&laquo;</a></li>
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">&raquo;</a></li>
								</ul>
							</div>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<ul class="todo-list">
								<li>
									<!-- drag handle -->
											<span class="handle">
												<i class="fa fa-ellipsis-v"></i>
												<i class="fa fa-ellipsis-v"></i>
											</span>
									<!-- checkbox -->
									<input type="checkbox" value="">
									<!-- todo text -->
									<span class="text">Design a nice theme</span>
									<!-- Emphasis label -->
									<small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
									<!-- General tools such as edit or delete-->
									<div class="tools">
										<i class="fa fa-edit"></i>
										<i class="fa fa-trash-o"></i>
									</div>
								</li>
								<li>
											<span class="handle">
												<i class="fa fa-ellipsis-v"></i>
												<i class="fa fa-ellipsis-v"></i>
											</span>
									<input type="checkbox" value="">
									<span class="text">Make the theme responsive</span>
									<small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
									<div class="tools">
										<i class="fa fa-edit"></i>
										<i class="fa fa-trash-o"></i>
									</div>
								</li>
								<li>
											<span class="handle">
												<i class="fa fa-ellipsis-v"></i>
												<i class="fa fa-ellipsis-v"></i>
											</span>
									<input type="checkbox" value="">
									<span class="text">Let theme shine like a star</span>
									<small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
									<div class="tools">
										<i class="fa fa-edit"></i>
										<i class="fa fa-trash-o"></i>
									</div>
								</li>
								<li>
											<span class="handle">
												<i class="fa fa-ellipsis-v"></i>
												<i class="fa fa-ellipsis-v"></i>
											</span>
									<input type="checkbox" value="">
									<span class="text">Let theme shine like a star</span>
									<small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
									<div class="tools">
										<i class="fa fa-edit"></i>
										<i class="fa fa-trash-o"></i>
									</div>
								</li>
								<li>
											<span class="handle">
												<i class="fa fa-ellipsis-v"></i>
												<i class="fa fa-ellipsis-v"></i>
											</span>
									<input type="checkbox" value="">
									<span class="text">Check your messages and notifications</span>
									<small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
									<div class="tools">
										<i class="fa fa-edit"></i>
										<i class="fa fa-trash-o"></i>
									</div>
								</li>
								<li>
											<span class="handle">
												<i class="fa fa-ellipsis-v"></i>
												<i class="fa fa-ellipsis-v"></i>
											</span>
									<input type="checkbox" value="">
									<span class="text">Let theme shine like a star</span>
									<small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
									<div class="tools">
										<i class="fa fa-edit"></i>
										<i class="fa fa-trash-o"></i>
									</div>
								</li>
							</ul>
						</div>
						<!-- /.box-body -->
						<div class="box-footer clearfix no-border">
							<button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
						</div>
					</div>
					<!-- /.box -->

					<!-- quick email widget -->
					<div class="box box-info">
						<div class="box-header">
							<i class="fa fa-envelope"></i>

							<h3 class="box-title">Quick Email</h3>
							<!-- tools box -->
							<div class="pull-right box-tools">
								<button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
									<i class="fa fa-times"></i></button>
							</div>
							<!-- /. tools -->
						</div>
						<div class="box-body">
							<form action="#" method="post">
								<div class="form-group">
									<input type="email" class="form-control" name="emailto" placeholder="Email to:">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="subject" placeholder="Subject">
								</div>
								<div>
									<textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
								</div>
							</form>
						</div>
						<div class="box-footer clearfix">
							<button type="button" class="pull-right btn btn-default" id="sendEmail">Send
								<i class="fa fa-arrow-circle-right"></i></button>
						</div>
					</div>

				</section>
				<!-- /.Left col -->
				<!-- right col (We are only adding the ID to make the widgets sortable)-->
				<section class="col-lg-5 connectedSortable">

					<!-- Map box -->
					<div class="box box-solid bg-light-blue-gradient">
						<div class="box-header">
							<!-- tools box -->
							<div class="pull-right box-tools">
								<button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range">
									<i class="fa fa-calendar"></i></button>
								<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
									<i class="fa fa-minus"></i></button>
							</div>
							<!-- /. tools -->

							<i class="fa fa-map-marker"></i>

							<h3 class="box-title">
								Visitors
							</h3>
						</div>
						<div class="box-body">
							<div id="world-map" style="height: 250px; width: 100%;"></div>
						</div>
						<!-- /.box-body-->
						<div class="box-footer no-border">
							<div class="row">
								<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
									<div id="sparkline-1"></div>
									<div class="knob-label">Visitors</div>
								</div>
								<!-- ./col -->
								<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
									<div id="sparkline-2"></div>
									<div class="knob-label">Online</div>
								</div>
								<!-- ./col -->
								<div class="col-xs-4 text-center">
									<div id="sparkline-3"></div>
									<div class="knob-label">Exists</div>
								</div>
								<!-- ./col -->
							</div>
							<!-- /.row -->
						</div>
					</div>
					<!-- /.box -->

					<!-- solid sales graph -->
					<div class="box box-solid bg-teal-gradient">
						<div class="box-header">
							<i class="fa fa-th"></i>

							<h3 class="box-title">Sales Graph</h3>

							<div class="box-tools pull-right">
								<button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
								</button>
								<button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>
								</button>
							</div>
						</div>
						<div class="box-body border-radius-none">
							<div class="chart" id="line-chart" style="height: 250px;"></div>
						</div>
						<!-- /.box-body -->
						<div class="box-footer no-border">
							<div class="row">
								<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
									<input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#39CCCC">

									<div class="knob-label">Mail-Orders</div>
								</div>
								<!-- ./col -->
								<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
									<input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#39CCCC">

									<div class="knob-label">Online</div>
								</div>
								<!-- ./col -->
								<div class="col-xs-4 text-center">
									<input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#39CCCC">

									<div class="knob-label">In-Store</div>
								</div>
								<!-- ./col -->
							</div>
							<!-- /.row -->
						</div>
						<!-- /.box-footer -->
					</div>
					<!-- /.box -->

					<!-- Calendar -->
					<div class="box box-solid bg-green-gradient">
						<div class="box-header">
							<i class="fa fa-calendar"></i>

							<h3 class="box-title">Calendar</h3>
							<!-- tools box -->
							<div class="pull-right box-tools">
								<!-- button with a dropdown -->
								<div class="btn-group">
									<button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
										<i class="fa fa-bars"></i></button>
									<ul class="dropdown-menu pull-right" role="menu">
										<li><a href="#">Add new event</a></li>
										<li><a href="#">Clear events</a></li>
										<li class="divider"></li>
										<li><a href="#">View calendar</a></li>
									</ul>
								</div>
								<button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
								</button>
								<button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
								</button>
							</div>
							<!-- /. tools -->
						</div>
						<!-- /.box-header -->
						<div class="box-body no-padding">
							<!--The calendar -->
							<div id="calendar" style="width: 100%"></div>
						</div>
						<!-- /.box-body -->
						<div class="box-footer text-black">
							<div class="row">
								<div class="col-sm-6">
									<!-- Progress bars -->
									<div class="clearfix">
										<span class="pull-left">Task #1</span>
										<small class="pull-right">90%</small>
									</div>
									<div class="progress xs">
										<div class="progress-bar progress-bar-green" style="width: 90%;"></div>
									</div>

									<div class="clearfix">
										<span class="pull-left">Task #2</span>
										<small class="pull-right">70%</small>
									</div>
									<div class="progress xs">
										<div class="progress-bar progress-bar-green" style="width: 70%;"></div>
									</div>
								</div>
								<!-- /.col -->
								<div class="col-sm-6">
									<div class="clearfix">
										<span class="pull-left">Task #3</span>
										<small class="pull-right">60%</small>
									</div>
									<div class="progress xs">
										<div class="progress-bar progress-bar-green" style="width: 60%;"></div>
									</div>

									<div class="clearfix">
										<span class="pull-left">Task #4</span>
										<small class="pull-right">40%</small>
									</div>
									<div class="progress xs">
										<div class="progress-bar progress-bar-green" style="width: 40%;"></div>
									</div>
								</div>
								<!-- /.col -->
							</div>
							<!-- /.row -->
						</div>
					</div>
					<!-- /.box -->

				</section>
				<!-- right col -->
			</div>
			<!-- /.row (main row) -->

		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Dashboard
			<small>Version 2.0</small>
		</h1>
		{{--<ol class="breadcrumb">--}}
		{{--<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>--}}
		{{--<li class="active">Dashboard</li>--}}
		{{--</ol>--}}
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Info boxes -->
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">CPU Traffic</span>
						<span class="info-box-number">90<small>%</small></span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">Likes</span>
						<span class="info-box-number">41,410</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->

			<!-- fix for small devices only -->
			<div class="clearfix visible-sm-block"></div>

			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">Sales</span>
						<span class="info-box-number">760</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">New Members</span>
						<span class="info-box-number">2,000</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->

		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Monthly Recap Report</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<div class="btn-group">
								<button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-wrench"></i></button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</div>
							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="row">
							<div class="col-md-8">
								<p class="text-center">
									<strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
								</p>

								<div class="chart">
									<!-- Sales Chart Canvas -->
									<canvas id="salesChart" style="height: 180px;"></canvas>
								</div>
								<!-- /.chart-responsive -->
							</div>
							<!-- /.col -->
							<div class="col-md-4">
								<p class="text-center">
									<strong>Goal Completion</strong>
								</p>

								<div class="progress-group">
									<span class="progress-text">Add Products to Cart</span>
									<span class="progress-number"><b>160</b>/200</span>

									<div class="progress sm">
										<div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
									</div>
								</div>
								<!-- /.progress-group -->
								<div class="progress-group">
									<span class="progress-text">Complete Purchase</span>
									<span class="progress-number"><b>310</b>/400</span>

									<div class="progress sm">
										<div class="progress-bar progress-bar-red" style="width: 80%"></div>
									</div>
								</div>
								<!-- /.progress-group -->
								<div class="progress-group">
									<span class="progress-text">Visit Premium Page</span>
									<span class="progress-number"><b>480</b>/800</span>

									<div class="progress sm">
										<div class="progress-bar progress-bar-green" style="width: 80%"></div>
									</div>
								</div>
								<!-- /.progress-group -->
								<div class="progress-group">
									<span class="progress-text">Send Inquiries</span>
									<span class="progress-number"><b>250</b>/500</span>

									<div class="progress sm">
										<div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
									</div>
								</div>
								<!-- /.progress-group -->
							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->
					</div>
					<!-- ./box-body -->
					<div class="box-footer">
						<div class="row">
							<div class="col-sm-3 col-xs-6">
								<div class="description-block border-right">
									<span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
									<h5 class="description-header">$35,210.43</h5>
									<span class="description-text">TOTAL REVENUE</span>
								</div>
								<!-- /.description-block -->
							</div>
							<!-- /.col -->
							<div class="col-sm-3 col-xs-6">
								<div class="description-block border-right">
									<span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
									<h5 class="description-header">$10,390.90</h5>
									<span class="description-text">TOTAL COST</span>
								</div>
								<!-- /.description-block -->
							</div>
							<!-- /.col -->
							<div class="col-sm-3 col-xs-6">
								<div class="description-block border-right">
									<span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
									<h5 class="description-header">$24,813.53</h5>
									<span class="description-text">TOTAL PROFIT</span>
								</div>
								<!-- /.description-block -->
							</div>
							<!-- /.col -->
							<div class="col-sm-3 col-xs-6">
								<div class="description-block">
									<span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
									<h5 class="description-header">1200</h5>
									<span class="description-text">GOAL COMPLETIONS</span>
								</div>
								<!-- /.description-block -->
							</div>
						</div>
						<!-- /.row -->
					</div>
					<!-- /.box-footer -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->

		<!-- Main row -->
		<div class="row">
			<!-- Left col -->
			<div class="col-md-8">
				<!-- MAP & BOX PANE -->
				<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title">Visitors Report</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body no-padding">
						<div class="row">
							<div class="col-md-9 col-sm-8">
								<div class="pad">
									<!-- Map will be created here -->
									<div id="world-map-markers" style="height: 325px;"></div>
								</div>
							</div>
							<!-- /.col -->
							<div class="col-md-3 col-sm-4">
								<div class="pad box-pane-right bg-green" style="min-height: 280px">
									<div class="description-block margin-bottom">
										<div class="sparkbar pad" data-color="#fff">90,70,90,70,75,80,70</div>
										<h5 class="description-header">8390</h5>
										<span class="description-text">Visits</span>
									</div>
									<!-- /.description-block -->
									<div class="description-block margin-bottom">
										<div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
										<h5 class="description-header">30%</h5>
										<span class="description-text">Referrals</span>
									</div>
									<!-- /.description-block -->
									<div class="description-block">
										<div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
										<h5 class="description-header">70%</h5>
										<span class="description-text">Organic</span>
									</div>
									<!-- /.description-block -->
								</div>
							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
				<div class="row">
					<div class="col-md-6">
						<!-- DIRECT CHAT -->
						<div class="box box-warning direct-chat direct-chat-warning">
							<div class="box-header with-border">
								<h3 class="box-title">Direct Chat</h3>

								<div class="box-tools pull-right">
									<span data-toggle="tooltip" title="3 New Messages" class="badge bg-yellow">3</span>
									<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
									</button>
									<button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
										<i class="fa fa-comments"></i></button>
									<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
									</button>
								</div>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<!-- Conversations are loaded here -->
								<div class="direct-chat-messages">
									<!-- Message. Default to the left -->
									<div class="direct-chat-msg">
										<div class="direct-chat-info clearfix">
											<span class="direct-chat-name pull-left">Alexander Pierce</span>
											<span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
										</div>
										<!-- /.direct-chat-info -->
										<img class="direct-chat-img" src="{{ URL::to('public/assets') }}/img/user1-128x128.jpg" alt="message user image"><!-- /.direct-chat-img -->
										<div class="direct-chat-text">
											Is this template really for free? That's unbelievable!
										</div>
										<!-- /.direct-chat-text -->
									</div>
									<!-- /.direct-chat-msg -->

									<!-- Message to the right -->
									<div class="direct-chat-msg right">
										<div class="direct-chat-info clearfix">
											<span class="direct-chat-name pull-right">Sarah Bullock</span>
											<span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
										</div>
										<!-- /.direct-chat-info -->
										<img class="direct-chat-img" src="{{ URL::to('public/assets') }}/img/user3-128x128.jpg" alt="message user image"><!-- /.direct-chat-img -->
										<div class="direct-chat-text">
											You better believe it!
										</div>
										<!-- /.direct-chat-text -->
									</div>
									<!-- /.direct-chat-msg -->

									<!-- Message. Default to the left -->
									<div class="direct-chat-msg">
										<div class="direct-chat-info clearfix">
											<span class="direct-chat-name pull-left">Alexander Pierce</span>
											<span class="direct-chat-timestamp pull-right">23 Jan 5:37 pm</span>
										</div>
										<!-- /.direct-chat-info -->
										<img class="direct-chat-img" src="{{ URL::to('public/assets') }}/img/user1-128x128.jpg" alt="message user image"><!-- /.direct-chat-img -->
										<div class="direct-chat-text">
											Working with AdminLTE on a great new app! Wanna join?
										</div>
										<!-- /.direct-chat-text -->
									</div>
									<!-- /.direct-chat-msg -->

									<!-- Message to the right -->
									<div class="direct-chat-msg right">
										<div class="direct-chat-info clearfix">
											<span class="direct-chat-name pull-right">Sarah Bullock</span>
											<span class="direct-chat-timestamp pull-left">23 Jan 6:10 pm</span>
										</div>
										<!-- /.direct-chat-info -->
										<img class="direct-chat-img" src="{{ URL::to('public/assets') }}/img/user3-128x128.jpg" alt="message user image"><!-- /.direct-chat-img -->
										<div class="direct-chat-text">
											I would love to.
										</div>
										<!-- /.direct-chat-text -->
									</div>
									<!-- /.direct-chat-msg -->

								</div>
								<!--/.direct-chat-messages-->

								<!-- Contacts are loaded here -->
								<div class="direct-chat-contacts">
									<ul class="contacts-list">
										<li>
											<a href="#">
												<img class="contacts-list-img" src="{{ URL::to('public/assets') }}/img/user1-128x128.jpg" alt="User Image">

												<div class="contacts-list-info">
																<span class="contacts-list-name">
																	Count Dracula
																	<small class="contacts-list-date pull-right">2/28/2015</small>
																</span>
													<span class="contacts-list-msg">How have you been? I was...</span>
												</div>
												<!-- /.contacts-list-info -->
											</a>
										</li>
										<!-- End Contact Item -->
										<li>
											<a href="#">
												<img class="contacts-list-img" src="{{ URL::to('public/assets') }}/img/user7-128x128.jpg" alt="User Image">

												<div class="contacts-list-info">
																<span class="contacts-list-name">
																	Sarah Doe
																	<small class="contacts-list-date pull-right">2/23/2015</small>
																</span>
													<span class="contacts-list-msg">I will be waiting for...</span>
												</div>
												<!-- /.contacts-list-info -->
											</a>
										</li>
										<!-- End Contact Item -->
										<li>
											<a href="#">
												<img class="contacts-list-img" src="{{ URL::to('public/assets') }}/img/user3-128x128.jpg" alt="User Image">

												<div class="contacts-list-info">
																<span class="contacts-list-name">
																	Nadia Jolie
																	<small class="contacts-list-date pull-right">2/20/2015</small>
																</span>
													<span class="contacts-list-msg">I'll call you back at...</span>
												</div>
												<!-- /.contacts-list-info -->
											</a>
										</li>
										<!-- End Contact Item -->
										<li>
											<a href="#">
												<img class="contacts-list-img" src="{{ URL::to('public/assets') }}/img/user5-128x128.jpg" alt="User Image">

												<div class="contacts-list-info">
																<span class="contacts-list-name">
																	Nora S. Vans
																	<small class="contacts-list-date pull-right">2/10/2015</small>
																</span>
													<span class="contacts-list-msg">Where is your new...</span>
												</div>
												<!-- /.contacts-list-info -->
											</a>
										</li>
										<!-- End Contact Item -->
										<li>
											<a href="#">
												<img class="contacts-list-img" src="{{ URL::to('public/assets') }}/img/user6-128x128.jpg" alt="User Image">

												<div class="contacts-list-info">
																<span class="contacts-list-name">
																	John K.
																	<small class="contacts-list-date pull-right">1/27/2015</small>
																</span>
													<span class="contacts-list-msg">Can I take a look at...</span>
												</div>
												<!-- /.contacts-list-info -->
											</a>
										</li>
										<!-- End Contact Item -->
										<li>
											<a href="#">
												<img class="contacts-list-img" src="{{ URL::to('public/assets') }}/img/user8-128x128.jpg" alt="User Image">

												<div class="contacts-list-info">
																<span class="contacts-list-name">
																	Kenneth M.
																	<small class="contacts-list-date pull-right">1/4/2015</small>
																</span>
													<span class="contacts-list-msg">Never mind I found...</span>
												</div>
												<!-- /.contacts-list-info -->
											</a>
										</li>
										<!-- End Contact Item -->
									</ul>
									<!-- /.contatcts-list -->
								</div>
								<!-- /.direct-chat-pane -->
							</div>
							<!-- /.box-body -->
							<div class="box-footer">
								<form action="#" method="post">
									<div class="input-group">
										<input type="text" name="message" placeholder="Type Message ..." class="form-control">
										<span class="input-group-btn">
														<button type="button" class="btn btn-warning btn-flat">Send</button>
													</span>
									</div>
								</form>
							</div>
							<!-- /.box-footer-->
						</div>
						<!--/.direct-chat -->
					</div>
					<!-- /.col -->

					<div class="col-md-6">
						<!-- USERS LIST -->
						<div class="box box-danger">
							<div class="box-header with-border">
								<h3 class="box-title">Latest Members</h3>

								<div class="box-tools pull-right">
									<span class="label label-danger">8 New Members</span>
									<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
									</button>
									<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
									</button>
								</div>
							</div>
							<!-- /.box-header -->
							<div class="box-body no-padding">
								<ul class="users-list clearfix">
									<li>
										<img src="{{ URL::to('public/assets') }}/img/user1-128x128.jpg" alt="User Image">
										<a class="users-list-name" href="#">Alexander Pierce</a>
										<span class="users-list-date">Today</span>
									</li>
									<li>
										<img src="{{ URL::to('public/assets') }}/img/user8-128x128.jpg" alt="User Image">
										<a class="users-list-name" href="#">Norman</a>
										<span class="users-list-date">Yesterday</span>
									</li>
									<li>
										<img src="{{ URL::to('public/assets') }}/img/user7-128x128.jpg" alt="User Image">
										<a class="users-list-name" href="#">Jane</a>
										<span class="users-list-date">12 Jan</span>
									</li>
									<li>
										<img src="{{ URL::to('public/assets') }}/img/user6-128x128.jpg" alt="User Image">
										<a class="users-list-name" href="#">John</a>
										<span class="users-list-date">12 Jan</span>
									</li>
									<li>
										<img src="{{ URL::to('public/assets') }}/img/user2-160x160.jpg" alt="User Image">
										<a class="users-list-name" href="#">Alexander</a>
										<span class="users-list-date">13 Jan</span>
									</li>
									<li>
										<img src="{{ URL::to('public/assets') }}/img/user5-128x128.jpg" alt="User Image">
										<a class="users-list-name" href="#">Sarah</a>
										<span class="users-list-date">14 Jan</span>
									</li>
									<li>
										<img src="{{ URL::to('public/assets') }}/img/user4-128x128.jpg" alt="User Image">
										<a class="users-list-name" href="#">Nora</a>
										<span class="users-list-date">15 Jan</span>
									</li>
									<li>
										<img src="{{ URL::to('public/assets') }}/img/user3-128x128.jpg" alt="User Image">
										<a class="users-list-name" href="#">Nadia</a>
										<span class="users-list-date">15 Jan</span>
									</li>
								</ul>
								<!-- /.users-list -->
							</div>
							<!-- /.box-body -->
							<div class="box-footer text-center">
								<a href="javascript:void(0)" class="uppercase">View All Users</a>
							</div>
							<!-- /.box-footer -->
						</div>
						<!--/.box -->
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->

				<!-- TABLE: LATEST ORDERS -->
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Latest Orders</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="table-responsive">
							<table class="table no-margin">
								<thead>
								<tr>
									<th>Order ID</th>
									<th>Item</th>
									<th>Status</th>
									<th>Popularity</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td><a href="invoice.php">OR9842</a></td>
									<td>Call of Duty IV</td>
									<td><span class="label label-success">Shipped</span></td>
									<td>
										<div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
									</td>
								</tr>
								<tr>
									<td><a href="invoice.php">OR1848</a></td>
									<td>Samsung Smart TV</td>
									<td><span class="label label-warning">Pending</span></td>
									<td>
										<div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
									</td>
								</tr>
								<tr>
									<td><a href="invoice.php">OR7429</a></td>
									<td>iPhone 6 Plus</td>
									<td><span class="label label-danger">Delivered</span></td>
									<td>
										<div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
									</td>
								</tr>
								<tr>
									<td><a href="invoice.php">OR7429</a></td>
									<td>Samsung Smart TV</td>
									<td><span class="label label-info">Processing</span></td>
									<td>
										<div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
									</td>
								</tr>
								<tr>
									<td><a href="invoice.php">OR1848</a></td>
									<td>Samsung Smart TV</td>
									<td><span class="label label-warning">Pending</span></td>
									<td>
										<div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
									</td>
								</tr>
								<tr>
									<td><a href="invoice.php">OR7429</a></td>
									<td>iPhone 6 Plus</td>
									<td><span class="label label-danger">Delivered</span></td>
									<td>
										<div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
									</td>
								</tr>
								<tr>
									<td><a href="invoice.php">OR9842</a></td>
									<td>Call of Duty IV</td>
									<td><span class="label label-success">Shipped</span></td>
									<td>
										<div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
									</td>
								</tr>
								</tbody>
							</table>
						</div>
						<!-- /.table-responsive -->
					</div>
					<!-- /.box-body -->
					<div class="box-footer clearfix">
						<a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
						<a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
					</div>
					<!-- /.box-footer -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->

			<div class="col-md-4">
				<!-- Info Boxes Style 2 -->
				<div class="info-box bg-yellow">
					<span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">Inventory</span>
						<span class="info-box-number">5,200</span>

						<div class="progress">
							<div class="progress-bar" style="width: 50%"></div>
						</div>
						<span class="progress-description">
										50% Increase in 30 Days
									</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
				<div class="info-box bg-green">
					<span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">Mentions</span>
						<span class="info-box-number">92,050</span>

						<div class="progress">
							<div class="progress-bar" style="width: 20%"></div>
						</div>
						<span class="progress-description">
										20% Increase in 30 Days
									</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
				<div class="info-box bg-red">
					<span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">Downloads</span>
						<span class="info-box-number">114,381</span>

						<div class="progress">
							<div class="progress-bar" style="width: 70%"></div>
						</div>
						<span class="progress-description">
										70% Increase in 30 Days
									</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
				<div class="info-box bg-aqua">
					<span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">Direct Messages</span>
						<span class="info-box-number">163,921</span>

						<div class="progress">
							<div class="progress-bar" style="width: 40%"></div>
						</div>
						<span class="progress-description">
										40% Increase in 30 Days
									</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->

				<div class="box box-default">
					<div class="box-header with-border">
						<h3 class="box-title">Browser Usage</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="row">
							<div class="col-md-8">
								<div class="chart-responsive">
									<canvas id="pieChart" height="150"></canvas>
								</div>
								<!-- ./chart-responsive -->
							</div>
							<!-- /.col -->
							<div class="col-md-4">
								<ul class="chart-legend clearfix">
									<li><i class="fa fa-circle-o text-red"></i> Chrome</li>
									<li><i class="fa fa-circle-o text-green"></i> IE</li>
									<li><i class="fa fa-circle-o text-yellow"></i> FireFox</li>
									<li><i class="fa fa-circle-o text-aqua"></i> Safari</li>
									<li><i class="fa fa-circle-o text-light-blue"></i> Opera</li>
									<li><i class="fa fa-circle-o text-gray"></i> Navigator</li>
								</ul>
							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.box-body -->
					<div class="box-footer no-padding">
						<ul class="nav nav-pills nav-stacked">
							<li><a href="#">United States of America
									<span class="pull-right text-red"><i class="fa fa-angle-down"></i> 12%</span></a></li>
							<li><a href="#">India <span class="pull-right text-green"><i class="fa fa-angle-up"></i> 4%</span></a>
							</li>
							<li><a href="#">China
									<span class="pull-right text-yellow"><i class="fa fa-angle-left"></i> 0%</span></a></li>
						</ul>
					</div>
					<!-- /.footer -->
				</div>
				<!-- /.box -->

				<!-- PRODUCT LIST -->
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Recently Added Products</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<ul class="products-list product-list-in-box">
							<li class="item">
								<div class="product-img">
									<img src="{{ URL::to('public/assets') }}/img/default-50x50.gif" alt="Product Image">
								</div>
								<div class="product-info">
									<a href="javascript:void(0)" class="product-title">Samsung TV
										<span class="label label-warning pull-right">$1800</span></a>
									<span class="product-description">
													Samsung 32" 1080p 60Hz LED Smart HDTV.
												</span>
								</div>
							</li>
							<!-- /.item -->
							<li class="item">
								<div class="product-img">
									<img src="{{ URL::to('public/assets') }}/img/default-50x50.gif" alt="Product Image">
								</div>
								<div class="product-info">
									<a href="javascript:void(0)" class="product-title">Bicycle
										<span class="label label-info pull-right">$700</span></a>
									<span class="product-description">
													26" Mongoose Dolomite Men's 7-speed, Navy Blue.
												</span>
								</div>
							</li>
							<!-- /.item -->
							<li class="item">
								<div class="product-img">
									<img src="{{ URL::to('public/assets') }}/img/default-50x50.gif" alt="Product Image">
								</div>
								<div class="product-info">
									<a href="javascript:void(0)" class="product-title">Xbox One <span class="label label-danger pull-right">$350</span></a>
									<span class="product-description">
													Xbox One Console Bundle with Halo Master Chief Collection.
												</span>
								</div>
							</li>
							<!-- /.item -->
							<li class="item">
								<div class="product-img">
									<img src="{{ URL::to('public/assets') }}/img/default-50x50.gif" alt="Product Image">
								</div>
								<div class="product-info">
									<a href="javascript:void(0)" class="product-title">PlayStation 4
										<span class="label label-success pull-right">$399</span></a>
									<span class="product-description">
													PlayStation 4 500GB Console (PS4)
												</span>
								</div>
							</li>
							<!-- /.item -->
						</ul>
					</div>
					<!-- /.box-body -->
					<div class="box-footer text-center">
						<a href="javascript:void(0)" class="uppercase">View All Products</a>
					</div>
					<!-- /.box-footer -->
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




















	@include('footer')
    


<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button);
</script>

<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{ URL::to('public/assets') }}/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="{{ URL::to('public/assets') }}/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="{{ URL::to('public/assets') }}/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{ URL::to('public/assets') }}/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ URL::to('public/assets') }}/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{ URL::to('public/assets') }}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="{{ URL::to('public/assets') }}/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ URL::to('public/assets') }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<!-- ChartJS 1.0.1 -->
<script src="{{ URL::to('public/assets') }}/plugins/chartjs/Chart.min.js"></script>




<!-- AdminLTE App -->
<script src="{{ URL::to('public/assets') }}/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ URL::to('public/assets') }}/js/pages/dashboard.js"></script>



<!-- AdminLTE for demo purposes -->
<script src="{{ URL::to('public/assets') }}/js/demo.js"></script>
</body>
</html>
