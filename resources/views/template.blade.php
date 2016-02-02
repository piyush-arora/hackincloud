<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <title>Hack In Cloud</title>


    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="@yield('dot')/Dashboard/bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="@yield('dot')/Dashboard/dist/css/AdminLTE.min.css">

    <link rel="stylesheet" href="@yield('dot')/Dashboard/CodeMirror-master/lib/codemirror.css">
    <link rel="stylesheet" href="@yield('dot')/Dashboard/CodeMirror-master/addon/fold/foldgutter.css">
    <link rel="stylesheet" href="@yield('dot')/Dashboard/CodeMirror-master/addon/dialog/dialog.css">
    <link rel="stylesheet" href="@yield('dot')/Dashboard/CodeMirror-master/theme/monokai.css">


    <!-------------------------------------------------------->
    <!--js for sublime text-->
    <!-------------------------------------------------------->

    <script src="@yield('dot')/Dashboard/CodeMirror-master/lib/codemirror.js"></script>
    <script src="@yield('dot')/Dashboard/CodeMirror-master/addon/hint/show-hint.js"></script>
    <script src="@yield('dot')/Dashboard/CodeMirror-master/addon/hint/javascript-hint.js"></script>

    <script src="@yield('dot')/Dashboard/CodeMirror-master/addon/search/searchcursor.js"></script>
    <script src="@yield('dot')/Dashboard/CodeMirror-master/addon/search/search.js"></script>
    <script src="@yield('dot')/Dashboard/CodeMirror-master/addon/dialog/dialog.js"></script>
    <script src="@yield('dot')/Dashboard/CodeMirror-master/addon/edit/matchbrackets.js"></script>
    <script src="@yield('dot')/Dashboard/CodeMirror-master/addon/edit/closebrackets.js"></script>
    <script src="@yield('dot')/Dashboard/CodeMirror-master/addon/comment/comment.js"></script>
    <script src="@yield('dot')/Dashboard/CodeMirror-master/addon/wrap/hardwrap.js"></script>
    <script src="@yield('dot')/Dashboard/CodeMirror-master/addon/fold/foldcode.js"></script>
    <script src="@yield('dot')/Dashboard/CodeMirror-master/addon/fold/brace-fold.js"></script>
    <script src="@yield('dot')/Dashboard/CodeMirror-master/mode/clike/clike.js"></script>
    <script src="@yield('dot')/Dashboard/CodeMirror-master/keymap/sublime.js"></script>
    <script src="@yield('dot')/Dashboard/CodeMirror-master/addon/search/searchcursor.js"></script>
    <script src="@yield('dot')/Dashboard/CodeMirror-master/addon/search/search.js"></script>
    <script src="@yield('dot')/Dashboard/CodeMirror-master/addon/search/matchesonscrollbar.js"></script>








    @yield('include')

            <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->

    <!--CHANGE THE SKIN HERE-->


    <link rel="stylesheet" href="@yield('dot')/Dashboard/dist/css/skins/skin-green.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>






    @yield('include')

    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->

    <!--CHANGE THE SKIN HERE-->


    <link rel="stylesheet" href="@yield('dot')/Dashboard/dist/css/skins/skin-green.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->


<!--CHANGE THE SKIN HERE-->
<body class="hold-transition skin-green sidebar-mini">

<!--START OF WRAPPER CLASS(WRAPPING THE WEBSITE)-->

<div class="wrapper">

    <!----------------------------------------------------------------->
    <!--START OF TOP BAR-->
    <!----------------------------------------------------------------->

    <!-- Main Header(IT INCLUDE LOGO +NAVBAR) -->
    <header class="main-header">


        <!-- Logo (NEED TO DESIGN index2.html) -->

        <a href="/" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels(CHANGE OG LOGO FOR MOBILE) -->
            <span class="logo-mini">HIC</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">Hack In Cloud</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">

            <!-- Sidebar toggle button(NO IDEA)-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only"></span>
            </a>


            <!-- Navbar Right Menu(MESSAGES ,NOTIFICATION AND FLAGS) -->


            <!--------------------------------------------------------->
            <!--START OF MESSAGES-->
            <!-------------------------------------------------------->

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>

                            <!--NUMBER OF NEW MESSAGES {PHP PART}-->
                            <span class="label label-success">[10]</span>


                        </a>
                        <ul class="dropdown-menu">

                            <!--NUMBER OF NEW MESSAGES {PHP PART}-->
                            <li class="header">[You have 10 messages]</li>

                            <li>
                                <!-- inner menu: contains the messages -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">

                                                <!-- User Image(PHP PART) FROM WHERE THE MESSAGE CAME -->

                                                <img src="@yield('dot')/Dashboard/dist/img/me.jpg" class="img-circle" alt="User Image">

                                            </div>
                                            <!-- Message title and timestamp -->
                                            <h4>
                                                <!--NAME OF THE PERSON WHO SENT THE MESSAGE {PHP PART}-->

                                                [PERSON_NAME]

                                                <small><i class="fa fa-clock-o"></i>
                                                    <!--Timestamp at which he received the message}-->
                                                    [5 mins]
                                                </small>
                                            </h4>
                                            <!-- The message -->
                                            <p>[MESSAGE FROM THE PERSON]</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                </ul>
                                <!-- /.menu -->
                            </li>

                            <!--SEE ALL PAGES HTML NEED TO BE DESIGNED-->
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li>
                    <!--------------------------------------------------------->
                    <!--END OF MESSAGES-->
                    <!--------------------------------------------------------->








                    <!--------------------------------------------------------->
                    <!-- START OF NOTIFICATIONS -->
                    <!-------------------------------------------------------->


                    <li class="dropdown notifications-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <!--NUMBER OF NOTIFICATIONS (PHP PART)-->
                            <span class="label label-warning">[10]</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have [10] notifications</li>
                            <li>
                                <!-- Inner Menu: contains the notifications -->
                                <ul class="menu">
                                    <li><!-- start notification -->
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> [Notification 1]
                                        </a>
                                    </li>
                                    <!-- end notification -->
                                </ul>
                            </li>

                            <!--TO DESIGN THE PAGE OF ALL NOTIFICATIONS -->
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>

                    <!------------------------------------------------->
                    <!-END OF NOTIFICATIONS-->
                    <!------------------------------------------------->


                    <!------------------------------------------------->
                    <!-START OF TASKS-->
                    <!------------------------------------------------->


                    <!-- Tasks Menu -->
                    <li class="dropdown tasks-menu">
                        <!-- Menu Toggle Button -->

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>

                            <!--CALCULATE THE NUMBER OF TASKS(PHP PART)-->
                            <span class="label label-danger">[9]</span>
                        </a>

                        <ul class="dropdown-menu">
                            <li class="header">You have [9] tasks</li>
                            <li>
                                <!-- Inner menu: contains the tasks -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <!-- Task title and progress text -->
                                            <h3>
                                                [Task1]
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <!-- The progress bar -->
                                            <div class="progress xs">
                                                <!-- Change the css width attribute to simulate progress -->
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <!--NEED TO DESIGN VIEW ALL TASKS-->
                                <a href="#">View all tasks</a>
                            </li>
                        </ul>
                    </li>


                    <!---------------------------------------------------->
                    <!--START PROFILE ACCOUNT-->
                    <!---------------------------------------------------->
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->

                            <!--GET THE IMAGE OF THE ACTIVE USER(PHP PART)-->

                            <img src="@yield('dot')/Dashboard/dist/img/me.jpg" class="user-image" alt="User Image">

                            <!-- hidden-xs hides the username on small devices so only the image appears. -->


                            <!--DETERMINE THE NAME OF THE CURRENT USER(PHP PART)-->
                            <span class="hidden-xs">Piyush Arora</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">

                                <!--GET THE IMAGE OF THE ACTIVE USER ON CLICK BIG IMAGE(PHP PART)-->
                                <img src="@yield('dot')/Dashboard/dist/img/me.jpg" class="img-circle" alt="User Image">

                                <p>
                                    Piyush Arora
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>


                            <!-- Menu Body OF PROFILE-->

                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <!--NEED TO DESIGN FOLLOWER PAGES-->
                                        <a href="#">Followers</a>
                                    </div>
                                    <!--NEED TO DESIGN PROJECTS PAGES-->
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Projects</a>
                                    </div>
                                    <!--NEED TO DESIGN FRIENDS PAGES-->
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <!--NEED TO DESIGN FULL PROFILE  PAGES-->
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>

                                <div class="pull-right">
                                    <!--NEED TO DESIGN SIGN OUT PAGE(PHP PART TOO)-->
                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <!-- SETTINGS BUTTON -->
                    <li>

                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>


                </ul>
            </div>
        </nav>
    </header>

    <!----------------------------------------------------------------->
    <!--END OF TOP BAR-->
    <!----------------------------------------------------------------->


    <!----------------------------------------------------------------->
    <!--START OF LEFT PANEL-->
    <!----------------------------------------------------------------->

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <!--GET THE IMAGE OF THE CURRENT USER(PHP PART)-->

                    <img src="@yield('dot')/Dashboard/dist/img/me.jpg" class="img-circle" alt="User Image">

                </div>

                <div class="pull-left info">
                    <!--GET THE NAME OF THE CURRENT USER(PHP PART)-->
                    <p>Piyush Arora</p>
                    <!-- Status -->
                    <!--NEED TO DESIGN THE ONINE USERS PAGE-->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>


            <!--START OF SEARCH -->
            <!-- search form (Optional) -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!--END OF SEARCH-->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li class="header">MENU</li>

                <!-- Optionally, you can add icons to the links -->
                <!--NEED TO DESIGN LINK1-->

                <li class="@yield('active_projects')">

                    <a href="projects"><i class="fa fa-link"></i> <span>Projects</span></a></li>

                <li class="@yield('active_choose_things')">

                    <a href="/choose_things"><i class="fa fa-link"></i> <span>Choose Things</span></a></li>

                <li class="@yield('active_create_things')">

                    <a href="/things"><i class="fa fa-link"></i> <span>Create Things</span></a></li>

                <li class="@yield('active_editors')">

                    <a href="/editors"><i class="fa fa-link"></i> <span>Editors</span></a></li>


                <li class="@yield('active_boards')">

                    <a href="boards"><i class="fa fa-link"></i> <span>Boards</span></a></li>
                <!--NEED TO DESIGN LINK2-->
                <li class="@yield('active_editor')"><a href="editor"><i class="fa fa-link"></i> <span>Editor</span></a></li>

                <li class="@yield('active_blockly')"><a href="blockly"><i class="fa fa-link"></i> <span>Blockly</span></a></li>

                <li class="@yield('active_graph')"><a href="graph"><i class="fa fa-link"></i> <span>Graph</span></a></li>

                <li class="@yield('active_virtual_reality')"><a href="virtual_reality"><i class="fa fa-link"></i> <span>Virtual Reality</span></a></li>

            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>
    <!------------------------------------------------------------->
    <!--END OF SIDE BAR-->
    <!------------------------------------------------------------->


    <!------------------------------------------------------------->
    <!--START OF  CONTENT-->
    <!------------------------------------------------------------->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                @yield('page_title')
                <br>
                <small>
                    @yield('page_subtitle')
                </small>
            </h1>

            <!--TO KNOW WHERE IS THE USER AT PRESENT FOR NAVIGATION BETWEEN LEVELS-->

            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!---------------------------------------------->
        <!--START OF MAIN CONTENT-->
        <!---------------------------------------------->

        <section class="content">

            <!-- Your Page Content Here -->


            @yield('content')
            <!-- Default box -->







        </section>
        <!-- /.content -->


        @yield('button_footer')
    </div>
    <!-- /.content-wrapper -->





    <!---------------------------------------------------------------->
    <!--END OF CONTENT-->
    <!---------------------------------------------------------------->


    <!---------------------------------------------------------------->
    <!--START OF FOOTER-->
    <!---------------------------------------------------------------->


    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            Keep Hacking
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2015 <a href="#">Hack In Cloud</a>.</strong> All rights reserved.
    </footer>


    <!---------------------------------------------------------------->
    <!--END OF FOOTER-->
    <!---------------------------------------------------------------->



    <!---------------------------------------------------------------->
    <!--START OF SETTINGS -->
    <!---------------------------------------------------------------->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane active" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->














<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="@yield('dot')/Dashboard/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="@yield('dot')/Dashboard/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="@yield('dot')/Dashboard/dist/js/app.min.js"></script>

<script src="@yield('dot')/Dashboard/dist/js/compiler.js"></script>

<script src="TemplateData/UnityProgress.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
