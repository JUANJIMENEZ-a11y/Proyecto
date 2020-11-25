<aside class="main-sidebar" id="sidebar-wrapper">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        
    <!-- class="col-md-3 left_col" -->
        <div >
        <!-- class="left_col scroll-view" -->
          <div>
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>System Sales</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="Template/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  
                @include('layouts.menu')
            
             
                </ul>
              </div>
            </div>

            <!-- <ul class="sidebar-menu" data-widget="tree">
                @include('layouts.menu')
            </ul> -->
            
          </div>
        </div>

          <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
