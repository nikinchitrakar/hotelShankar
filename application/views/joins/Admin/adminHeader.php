<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hotel Shankar Admin Panel</title>

    <!-- Core CSS - Include with every page -->
    <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="<?=base_url();?>assets/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/css/plugins/timeline/timeline.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="<?=base_url();?>assets/css/sb-admin.css" rel="stylesheet">

</head>
<body>
<div id="wrapper">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Hotel Shankar Admin Panel</a>
            </div>
            
            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Rooms<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?=site_url('admin/list_rooms');?>">List Rooms</a>
                                </li>
                                <li>
                                    <a href="<?=site_url('admin/add_rooms');?>">Add Rooms</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
</div>
</body>