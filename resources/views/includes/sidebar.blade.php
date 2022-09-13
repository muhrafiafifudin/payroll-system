<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Main</li>
                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="mdi mdi-view-dashboard"></i><span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('category.index') }}" class="waves-effect">
                        <i class="fas fa-cubes"></i><span>Golongan</span>
                    </a>
                </li>
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{ route('employee.index') }}" class="waves-effect">
                        <i class="mdi mdi-account-multiple"></i><span>Data Pegawai</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('kgb.index') }}" class="waves-effect">
                        <i class="mdi mdi-clipboard-text"></i><span>Data KGB</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('classification.index') }}" class="waves-effect">
                        <i class="mdi mdi-clipboard-outline"></i><span>Klasifikasi</span>
                    </a>
                </li>
            </ul>
            <!-- Left Menu End -->
        </div>
        <!-- Sidebar -->

    </div>
    <!-- Sidebar -left -->

</div>
