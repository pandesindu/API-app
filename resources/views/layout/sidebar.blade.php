    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <!-- <a href="../../index3.html" class="brand-link">
            <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a> -->


        <div class="sidebar">

            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <i class="fa fa-home mx-2" aria-hidden="true"></i>
                </div>
                <div class="info">
                    <a href="#" class="d-block">admin</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <router-link to="/home" class="nav-link">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                <i class="fa fa-home mx-2" aria-hidden="true"></i>
                                Dashboard

                            </p>
                        </router-link>
                    </li>

                    <li class="nav-item">
                        <router-link to="data-user" class="nav-link">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                <i class="fa fa-users mx-2" aria-hidden="true"></i>
                                Data user

                            </p>
                        </router-link>
                    </li>

                    <li class="nav-item">
                        <router-link to="data-level" class="nav-link">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                <i class="fa fa-unlock-alt mx-2" aria-hidden="true"></i>
                                Data Level

                            </p>
                        </router-link>
                    </li>

                    <li class="nav-item">
                        <router-link to="/motor" class="nav-link">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                <i class="fa fa-motorcycle mx-2" aria-hidden="true"></i>
                                Data Motor

                            </p>
                        </router-link>
                    </li>
        </div>
        <!-- /.sidebar -->
    </aside>