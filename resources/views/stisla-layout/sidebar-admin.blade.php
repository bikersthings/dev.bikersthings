<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/">Maju Persada Energi</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">MPE</a>
        </div>

        <ul class="sidebar-menu">

            <li class="menu-header">Super Sight</li>
            <li class="{{ Request::is('*admin/inventory*', 'admin') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('adm.inventory.index')}}"><i class="fas fa-boxes"></i> <span>Workshop Inventory</span></a>
            </li>
            <li class="{{ Request::is('*admin/request*') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('adm.request.index')}}"><i class="fas fa-exchange-alt"></i> <span>Request</span></a>
            </li>

            <li class="menu-header">Master Data</li>
            <li class="{{ Request::is('*admin/users*') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('adm.users.index')}}"><i class="fas fa-users"></i> <span>Users</span></a>
            </li>
            <li class="{{ Request::is('*admin/unit*') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('adm.unit.index')}}"><i class="fas fa-truck-monster"></i> <span>Unit</span></a>
            </li>
        </ul>

    </aside>
</div>