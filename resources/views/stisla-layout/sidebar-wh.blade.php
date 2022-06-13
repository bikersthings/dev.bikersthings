<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/">Maju Persada Energi</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">MPE</a>
        </div>

        <ul class="sidebar-menu">

            <li class="menu-header">Warehouse</li>
            {{-- <li class="{{ Request::is('*warehouse/dashboard*') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('wh.dashboard')}}"><i class="fas fa-warehouse"></i> <span>Dashboard</span></a>
            </li> --}}
            <li class="{{ Request::is('*warehouse/loading*') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('wh.loading.index')}}"><i class="fas fa-truck-loading"></i> <span>Loading</span></a>
            </li>
            <li class="{{ Request::is('*warehouse/inventory*') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('wh.inventory.index')}}"><i class="fas fa-boxes"></i> <span>Inventory</span></a>
            </li>
            <li class="{{ Request::is('*warehouse/request*', 'warehouse') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('wh.request.index')}}"><i class="fas fa-exchange-alt"></i> <span>Request Workshop</span></a>
            </li>

            <li class="menu-header">Master Data</li>
            <li class="{{ Request::is('*warehouse/kode*') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('wh.kode.index')}}"><i class="fas fa-list-ol"></i> <span>Kode</span></a>
            </li>

        </ul>

    </aside>
</div>