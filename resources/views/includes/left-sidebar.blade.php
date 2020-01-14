<!-- Brand Logo -->
<a href="index3.html" class="brand-link">
    <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->

            @can('isAdmin')
            <li class="nav-item {{ isActive(['/','dashboard*']) }}">
                <a href="{{ action('DashboardController@index') }}" class="nav-link {{ isActive('/') }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item has-treeview {{ isActive(['posts*']) }}">
                <a href="#" class="nav-link {{ isActive(['posts*']) }}">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        Manage Post
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('posts') }}" class="nav-link {{ isActive('posts') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Post</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview {{ isActive(['categories*']) }}">
                <a href="#" class="nav-link {{ isActive(['categories*']) }}">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        Category
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('categories') }}" class="nav-link {{ isActive('categories') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Category</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview {{ isActive(['products*']) }}">
                <a href="#" class="nav-link {{ isActive(['products*']) }}">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        Product
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('products') }}" class="nav-link {{ isActive('products') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Product</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview {{ isActive(['sales*']) }}">
                <a href="#" class="nav-link {{ isActive(['sales*']) }}">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        Sales
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('sales/orders') }}" class="nav-link {{ isActive('sales/orders') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Order's</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('sales/shipments') }}" class="nav-link {{ isActive('sales/shipments') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Shipments</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('sales/invoices') }}" class="nav-link {{ isActive('sales/invoices') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Invoices</p>
                        </a>
                    </li>
                </ul>
            </li>

            @endcan
            @can('isAuthor')
                <li class="nav-item {{ isActive(['/','dashboard*']) }}">
                    <a href="{{ action('DashboardController@index') }}" class="nav-link {{ isActive('/') }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
            @endcan
            @can('isEditor')
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            UI Elements
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/UI/general.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>General</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/icons.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Icons</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/buttons.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Buttons</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/sliders.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sliders</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/modals.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Modals & Alerts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/navbar.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Navbar & Tabs</p>
                            </a>
                        </li>
                    </ul>
                </li>
            @endcan

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->