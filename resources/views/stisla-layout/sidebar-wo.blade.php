<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/">Maju Persada Energi</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">MPE</a>
        </div>

        <ul class="sidebar-menu" {{ Request::is('*workshop*') ? '' : 'hidden' }}>

            <li class="menu-header">Workshop</li>
            {{-- <li class="{{ Request::is('*workshop/dashboard*') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('wo.dashboard')}}"><i class="fas fa-warehouse"></i> <span>Dashboard</span></a>
            </li> --}}
            <li class="{{ Request::is('*workshop/servis*', 'workshop') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('wo.servis.index')}}"><i class="fas fa-cogs"></i><span>Servis</span></a>
            </li>
            <li class="{{ Request::is('*workshop/inventory*') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('wo.inventory.index')}}"><i class="fas fa-boxes"></i><span>Warehouse Inventory</span></a>
            </li>
            <li class="{{ Request::is('*workshop/request*') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('wo.request.index')}}"><i class="fas fa-exchange-alt"></i><span>Request Sparepart</span></a>
            </li>

            <li class="menu-header">Master Data</li>
            <li class="{{ Request::is('*workshop/unit*') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('wo.unit.index')}}"><i class="fas fa-truck-monster"></i> <span>Unit</span></a>
            </li>

        </ul>
    </aside>
</div>