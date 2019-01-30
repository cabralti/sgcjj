<!-- start: left sidebar -->
<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">

        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="{{route('admin.principal')}}">
                <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30"
                     height="33" viewBox="0 0 30 33">
                    <g fill="none" fill-rule="evenodd">
                        <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z"/>
                        <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z"/>
                    </g>
                </svg>
                <span class="brand-name">SGCJJ</span>
            </a>
        </div>

        <!-- start: sidebar scrollbar -->
        <div class="sidebar-scrollbar">

            <!-- start: sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="has-sub active expand">
                    <a href="{{route('admin.principal')}}" class="sidenav-item-link">
                        <i class="mdi mdi-home-outline"></i>
                        <span class="nav-text">Dashboard</span> <b class="caret"></b>
                    </a>
                </li>

                <li class="has-sub">
                    <a href="{{route('admin.professor.index')}}" class="sidenav-item-link">
                        <i class="mdi mdi-account-outline"></i>
                        <span class="nav-text">Professores</span> <b class="caret"></b>
                    </a>
                </li>
                <li class="has-sub">
                    <a href="#" class="sidenav-item-link">
                        <i class="mdi mdi-bank"></i>
                        <span class="nav-text">Academias</span> <b class="caret"></b>
                    </a>
                </li>
                <li class="has-sub">
                    <a href="#" class="sidenav-item-link">
                        <i class="mdi mdi-account-group-outline"></i>
                        <span class="nav-text">Atletas</span> <b class="caret"></b>
                    </a>
                </li>
            </ul>
            <!-- end: sidebar menu -->

        </div>
        <!-- end: sidebar scrollbar -->

    </div>
</aside>
<!-- end: left sidebar -->