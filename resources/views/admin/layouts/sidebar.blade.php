<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('admin-dist/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
        <div style="direction: rtl">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="https://www.gravatar.com/avatar/52f0fbcbedee04a121cba8dad1174462?s=200&d=mm&r=g"
                        class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{ auth()->user()->name }}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                مدیریت کاربران
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.users.create') }}" class="nav-link active">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>ایجاد کاربر</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.users.index') }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p> لیست کاربران</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview ">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                مدیریت گروهبندی ها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.categories.create') }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>ایجاد گروهبندی</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.categories.index') }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p> لیست گروهبندی ها</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview ">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                مدیریت محصولات
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.products.create') }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>ایجاد محصول</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.products.index') }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p> لیست محصولات</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
