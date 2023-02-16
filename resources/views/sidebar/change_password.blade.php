<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{ URL::to('assets/images/logo/logo.png') }}" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-item">
                    <div class="card-body">
                        <div class="badges">
                            @if (Auth::user()->role_name=='Admin')
                            <span>Name: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                            <hr>
                            <span>Role Name:</span>
                            <span class="badge bg-success">Admin</span>
                            @endif
                            @if (Auth::user()->role_name=='Super Admin')
                            <span>Name: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                            <hr>
                            <span>Role Name:</span>
                            <span class="badge bg-info">Super Admin</span>
                            @endif
                            @if (Auth::user()->role_name=='Normal User')
                            <span>Name: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                            <hr>
                            <span>Role Name:</span>
                            <span class="badge bg-warning">User Normal</span>
                             @endif
                            </div>
                            <div class="mt-2">
                                @if(Auth::user()->status =='Null')
                                    <span>Status : <span class="badge bg-warning">{{ Auth::user()->status }}</span></span>
                                @endif
                            @if(Auth::user()->status =='Active')
                                <span>Status : <span class="badge bg-success">{{ Auth::user()->status }}</span></span>
                            @endif
                            @if(Auth::user()->status =='Disable')
                                <span>Status : <span class="badge bg-danger">{{ Auth::user()->status }}</span></span>
                            @endif
                            </div>
                    </div>
                </li>
                <li class="sidebar-title">Menu</li>
                @if (Auth::user()->role_name=='Admin')
                <li class="sidebar-item">
                    <a href="{{ route('home') }}" class='sidebar-link'>
                        <i class="bi bi-house-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                @endif
                <li class="sidebar-item has-sub">
                    <a href="{{ route('home') }}" class='sidebar-link'>
                    <i class="bi bi-megaphone-fill"></i>
                        <span>ข่าวประชาสัมพันธ์</span>
                    </a>
                    <ul class="submenu">
                            <li class="submenu-item">
                                <a href="{{ route('userManagement') }}">Information List</a>
                            </li>
                        </ul>
                </li>

                @if (Auth::user()->role_name=='Admin')
                        <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                        <i class="bi bi-person-fill"></i>
                            <span>Account</span>
                        </a>
                        <ul class="submenu">
                            <li class="submenu-item">
                                <a href="{{ route('userManagement') }}">User Control</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('activity/log') }}">User Activity Log</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('activity/login/logout') }}">Activity Log</a>
                            </li>
                        </ul>
                    </li>
                @endif
                
                <li class="sidebar-title">Setting</li>
                <li class="sidebar-item"> 
                    <a href="{{ route('userList') }}" class='sidebar-link'>
                    <i class="bi bi-person-fill"></i>
                        <span>Account</span>
                    </a>
                </li>
                <li class="sidebar-item active">
                    <a href="{{ route('change/password') }}" class='sidebar-link'>
                        <i class="bi bi-shield-lock"></i>
                        <span>Chnage Password</span>
                    </a>
                </li>
                <hr>
                <li class="sidebar-item">
                    <a href="{{ route('logout') }}" class='sidebar-link'>
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>