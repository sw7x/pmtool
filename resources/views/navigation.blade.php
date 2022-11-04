<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->

        {{--
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ URL::to('public/assets') }}/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>FutureSoft (Pvt) Ltd</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        --}}

        <!-- search form -->
        {{--
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="button" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        --}}
        <!-- /.search form -->


    <?php

            //var_dump ($page);
            //var_dump ($menu)
    ?>


        treeview menu-open




        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Main Navigation [{{Route::currentRouteName()}}]</li>

            <li class="{{ Route::is('dashboard') ? 'current' : '' }}"><a href="{{ URL::to('') }}/"><i class="fa fa-tachometer"></i>Dashboard</a></li>


            <li class="treeview {{ Route::is('project.list') ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-pencil-square-o"></i> <span>Project Management</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Route::is('project.list') ? 'active' : '' }}"><a href="{{ URL::to('') }}/project"><i class="fa fa-list-ol"></i>Project list</a></li>
                    <li><a href="{{ URL::to('') }}/project/enroll-employees"><i class="fa fa-users"></i>Enroll Developers</a></li>
                    <li><a href="{{ URL::to('') }}/client"><i class="fa  fa-street-view text-red"></i> <span>Client Management</span></a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i> <span>Threads</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::to('') }}/project/thread"><i class="fa fa-list-alt"></i>Project Threads</a></li>
                    <li><a href="{{ URL::to('') }}/task/thread"><i class="fa fa-list-alt"></i>Task Threads</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-tasks"></i> <span>Task Management</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::to('') }}/task/task-manage"><i class="fa fa-list"></i>Manage Task Info</a></li>
                    <li><a href="{{ URL::to('') }}/task/task-submit"><i class="fa fa-list"></i>view/Submit Task</a></li>
                    <li><a href="{{ URL::to('') }}/task/assign-developers"><i class="fa fa-user-plus"></i>Assign Developers</a></li>

                </ul>
            </li>



            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>User Management</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::to('') }}/users"><i class="fa fa-pencil-square-o"></i>User Accounts</a></li>
                    {{--
                    <li><a href="{{ URL::to('') }}/profile"><i class="fa  fa-user-secret"></i> == Profile</a></li>
                    --}}
                    <li><a href="{{ URL::to('') }}/designation-manage"><i class="fa fa-bookmark"></i>Manage Designations</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-hourglass-1"></i> <span>Reports</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::to('') }}/designation-projectwise-timing"><i class="fa fa-clock-o"></i>Desig - Project wise timing</a></li>
                    <li><a href="{{ URL::to('') }}/developer-projectwise-timing"><i class="fa fa-clock-o"></i>Dev - Project wise timing</a></li>


                    <li><a href="{{ URL::to('') }}/timesheet"><i class="fa  fa-calendar-check-o"></i>Submit Timesheet</a></li>
                    <li><a href="{{ URL::to('') }}/view-timesheet"><i class="fa fa-calendar"></i>View Timesheet</a></li>
                    {{--
                    <li><a href="{{ URL::to('') }}/calendar"><i class="fa fa-calendar"></i> <span>===Year Calendar</span></a></li>
                    --}}

                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dollar"></i> <span>Cost Management</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::to('') }}/cost/calculate "><i class="fa fa-balance-scale"></i>project Invoices</a></li>
                </ul>
            </li>


            <li class="treeview active">
                <a href="{{ URL::to('') }}/mailbox">
                    <i class="fa fa-envelope"></i> <span>Private Messages</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        <small class="label pull-right bg-yellow">12</small>
                        <small class="label pull-right bg-green">16</small>
                        <small class="label pull-right bg-red">5</small>

                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ URL::to('') }}/mailbox"><i class="fa fa-inbox"></i>Inbox
                            <span class="pull-right-container">
                                <span class="label label-primary pull-right">13</span>
                            </span>
                        </a>
                    </li>
                    <li><a href="{{ URL::to('') }}/compose"><i class="fa  fa-pencil"></i>Compose</a></li>
                    <li class="active"><a href="{{ URL::to('') }}/read-mail"><i class="fa  fa-map-o"></i>Read</a></li>
                </ul>
            </li>

            {{--
            <li class="treeview">
                <a href="{{ URL::to('') }}/leave">
                    <i class="ion-medkit"></i> <span>Leave ====</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::to('') }}/leave/apply"><i class="ion-ios-compose-outline"></i>Apply Leave</a></li>
                    <li><a href="{{ URL::to('') }}/leave/approve"><i class="ion-android-done-all"></i>Approve Leave</a></li>
                    <li><a href="{{ URL::to('') }}/leave/view"><i class="ion-ios-list-outline"></i>My Leave</a></li>
                </ul>
            </li>
            --}}



            <li><a href="{{ URL::to('') }}/login"><i class="fa fa-circle-o"></i> Login</a></li>


            
            <li><a href="{{ URL::to('') }}/advanced"><i class="fa fa-circle-o"></i> Advanced Elements ===</a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
