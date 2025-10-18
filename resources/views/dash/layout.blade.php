<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cyiamaef</title>

    <!-- iCheck -->
    <link href="{{asset('dash')}}/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{asset('dash')}}/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('dash')}}/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('dash')}}/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('dash')}}/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('dash')}}/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">


    <!-- Bootstrap -->
    <link href="{{asset('dash')}}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('dash')}}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('dash')}}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="{{asset('dash')}}/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="{{asset('dash')}}/build/css/custom.min.css" rel="stylesheet">

    <!-- bootstrap-wysiwyg -->
    <link href="{{asset('dash')}}/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{asset('dash')}}/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{asset('dash')}}/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="{{asset('dash')}}/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('dash')}}/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{route('reserved.home')}}" class="site_title"><i class="fa fa-paw"></i> <span>Cyiamaef</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('dash')}}/images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-list-alt"></i> Categories <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('reserved.categories')}}">All Categories</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-home"></i> Projects <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('reserved.projects')}}">All Projects</a></li>
                      <li><a href="{{route('reserved.projects.create')}}">New Project</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Events <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('reserved.events')}}">All Events</a></li>
                      <li><a href="{{route('reserved.events.create')}}">New Event</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Blog <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('reserved.blog')}}">All Posts</a></li>
                      <li><a href="{{route('reserved.blog.create')}}">New Post</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('dash')}}/images/user.png" alt="">Admin
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{route('logout')}}"><i class="fa fa-sign-out pull-right"></i>Log Out</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h4><strong>{!! $title??'' !!}</strong></h4>
              </div>
            </div>
            <div class="container-fluid">
              <div class="container-fluid">
                @if (session()->has('success'))
                  <div class="alert alert-success">{{session()->get('success')}}</div>
                @endif
                @if (session()->has('message'))
                  <div class="alert alert-info">{{session()->get('message')}}</div>
                @endif
                @if(session()->has('error'))
                  <div class="alert alert-danger">{{session()->get('error')}}</div>
                @endif
              </div>
              @yield('section')
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            CYIAMAEF
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('dash')}}/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{asset('dash')}}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="{{asset('dash')}}/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="{{asset('dash')}}/vendors/nprogress/nprogress.js"></script>
    <!-- jQuery custom content scroller -->
    <script src="{{asset('dash')}}/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('dash')}}/build/js/custom.min.js"></script>

    <script src="{{asset('dash')}}/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="{{asset('dash')}}/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('dash')}}/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="{{asset('dash')}}/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{asset('dash')}}/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="{{asset('dash')}}/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="{{asset('dash')}}/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{asset('dash')}}/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{asset('dash')}}/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="{{asset('dash')}}/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="{{asset('dash')}}/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('dash')}}/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="{{asset('dash')}}/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>

    
    <!-- bootstrap-progressbar -->
    <script src="{{asset('dash')}}/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('dash')}}/vendors/moment/min/moment.min.js"></script>
    <script src="{{asset('dash')}}/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="{{asset('dash')}}/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="{{asset('dash')}}/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="{{asset('dash')}}/vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="{{asset('dash')}}/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="{{asset('dash')}}/vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="{{asset('dash')}}/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="{{asset('dash')}}/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="{{asset('dash')}}/vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="{{asset('dash')}}/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="{{asset('dash')}}/vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->

    @yield('script')
  </body>
</html>