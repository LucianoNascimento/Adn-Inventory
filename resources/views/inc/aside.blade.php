<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('admin/dist/img/me.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">

            <li><a href="/"><i class="fa fa-dashboard"></i>Dashboard</a></li>

            {{--   <span class="pull-right-container">
            --}}{{--  <i class="fa fa-angle-left pull-right"></i>--}}{{--
            </span>--}}

               {{-- <ul class="treeview-menu">
                    <li class="active"><a href="/"><i class="fa fa-circle-o"></i> Dashboard</a></li>
                </ul>--}}
            </li>
            <li>
                <a href="pages/widgets.html">
                    <i class="fa fa-th"></i> <span>Widgets</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Category</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
{{--
              <span class="label label-primary pull-right">4</span>
--}}
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/category"><i class="fa  fa-list-alt"></i>Category List</a></li>
                    <li><a href="/category/create"><i class="fa fa-plus-square"></i>Add a new Category</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pencil"></i>
                    <span>Customers</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/customer"><i class="fa  fa-list-alt"></i> Customer List</a></li>
                    <li><a href="/customer/create"><i class="fa fa-plus-square"></i> Add a new Customer</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-shopping-cart"></i> <span>Suppliers</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/suppliers"><i class="fa  fa-list-alt"></i>Suppliers List</a></li>
                    <li><a href="/suppliers/create"><i class="fa fa-plus-square"></i>Add a new Suppliers</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Products</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/product"><i class="fa  fa-list-alt"></i>Product List</a></li>
                    <li><a href="/product/create"><i class="fa fa-plus-square"></i>Add a new Product</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-minus-square-o"></i> <span>Expences</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/expences"><i class="fa  fa-list-alt"></i>Expences List</a></li>
                    <li><a href="/expences/create"><i class="fa fa-plus-square"></i>Add a new Expences</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-signal"></i> <span>Sales</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/sales"><i class="fa  fa-list-alt"></i>Sales List</a></li>
                    <li><a href="/sales/create"><i class="fa fa-plus-square"></i>Add a new Sales</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-money"></i> <span>Purches</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/purches"><i class="fa  fa-list-alt"></i>Purches List</a></li>
                    <li><a href="/purches/create"><i class="fa fa-plus-square"></i>Add a new Purches</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-paperclip"></i> <span>Sales Invoices</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/sales_invoices"><i class="fa  fa-list-alt"></i>Sales-invoices List</a></li>
                    <li><a href="/sales_invoices/create"><i class="fa fa-plus-square"></i>Add a new Sales-invoices</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list-alt"></i> <span>Purches Invoices</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/purches_invoices"><i class="fa  fa-list-alt"></i>Purches-invoices List</a></li>
                    <li><a href="/purches_invoices/create"><i class="fa fa-plus-square"></i>Add a new Purches-invoices</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>Users</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/users"><i class="fa  fa-list-alt"></i>User List</a></li>
                    <li><a href="/users/create"><i class="fa fa-plus-square"></i>Add a new User</a></li>
                </ul>
            </li>
            <li>
                <a href="/calender">
                    <i class="fa fa-calendar"></i> <span>Calendar</span>
                    <span class="pull-right-container">
             {{-- <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>--}}
            </span>
                </a>
            </li>
            <li>
                <a href="pages/mailbox/mailbox.html">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Examples</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                    <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                    <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                    <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                    <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                    <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                    <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                    <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                    <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
                </ul>
            </li>

            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>