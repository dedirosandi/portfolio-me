<div class="sidebar">
    <div class="scrollbar-inner sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="/dashboard">
                    <i class="la la-dashboard"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('dashboard/hero') ? 'active' : '' }}">
                <a href="/dashboard/hero">
                    <i class="la la-chevron-left"></i>
                    <p>Hero section</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('dashboard/about') ? 'active' : '' }}">
                <a href="/dashboard/about">
                    <i class="la la-chevron-left"></i>
                    <p>About Me</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('dashboard/service') ? 'active' : '' }}">
                <a href="/dashboard/service">
                    <i class="la la-chevron-left"></i>
                    <p>My service</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('dashboard/experience*') ? 'active' : '' }}">
                <a href="/dashboard/experience">
                    <i class="la la-chevron-left"></i>
                    <p>My Experience</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('dashboard/portfolio') ? 'active' : '' }}">
                <a href="/dashboard/portfolio">
                    <i class="la la-chevron-left"></i>
                    <p>My Portfolio</p>
                </a>
            </li>
            
        </ul>
    </div>
</div>