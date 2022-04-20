        <header class="header-top navbar fixed-top">



            <div class="navbar-header">
                <button type="button" class="navbar-toggle side-nav-toggle">
                    <i class="ti-align-left"></i>
                </button>

                <a class="navbar-brand" href="/">
                    <img src="assets/images/logo-w.svg">
                    <span>Coba blade </span>
                </a>

                <ul class="nav navbar-nav-xs">  <!-- START: Responsive Top Right tool bar -->
                    <li>
                        <a href="javascript:;" class="collapse" data-toggle="collapse" data-target="#headerNavbarCollapse">
                            <i class="sli-user"></i>
                        </a>
                    </li>


                </ul>   <!-- END: Responsive Top Right tool bar -->

            </div>

            <div class="collapse navbar-collapse" id="headerNavbarCollapse">

                <ul class="nav navbar-nav">

                    <li class="hidden-xs">
                        <a href="javascript:;" class="sidenav-size-toggle">
                            <i class="ti-align-left"></i>
                        </a>
                    </li>





                </ul>

                <ul class="nav navbar-nav navbar-right">

                    <!-- <li class="main-search hidden-xs">
                        <div class="input-wrap">
                            <input class="form-control" type="text" placeholder="Search Here...">
                            <a href="page-search.php"><i class="sli-magnifier"></i></a>
                        </div>
                    </li> -->

                    <li class="user-profile dropdown">
                        <a href="javascript:;" class="clearfix dropdown-toggle" data-toggle="dropdown">
                            <img src="assets/images/appstore.png" alt="" class="hidden-sm">
                            <div class="user-name">{{Auth::user()->name}}<small class="fa fa-angle-down"></small></div>
                            $au
                        </a>
                        <ul class="dropdown-menu dropdown-animated pop-effect" role="menu">
                            <li><a href="/profil"><i class="sli-user"></i> My Profile</a></li>
                            <!-- <li><a href="app-calendar.php"><i class="sli-calendar"></i> Calendar</a></li>
                            <li><a href="msg-inbox.php"><i class="fa fa-envelope-o"></i> Inbox</a></li> -->
                            <li role="separator" class="divider"></li>
                            <!-- <li><a href="page-faq.php"><i class="sli-question"></i> FAQ's</a></li> -->
                            <li><a href="/login"><i class="sli-logout"></i> Logout</a></li>
                        </ul>
                    </li>

                </ul>

            </div><!-- END: Navbar-collapse -->

        </header>   <!-- END: Header -->
