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
            <li class="{{ Request::is('*workshop/dashboard*') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('wo.dashboard')}}"><i class="fas fa-briefcase"></i> <span>Dashboard</span></a>
            </li>
            <li class="{{ Request::is('*workshop/servis*') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('wo.servis.index')}}"><i class="fas fa-briefcase"></i><span>Servis</span></a>
            </li>

        </ul>



        <ul class="sidebar-menu" {{ Request::is('*warehouse*') ? '' : 'hidden' }}>

            <li class="menu-header">Warehouse</li>
            <li class="{{ Request::is('*warehouse/dashboard*') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('wh.dashboard')}}"><i class="fas fa-briefcase"></i> <span>Dashboard</span></a>
            </li>
            <li class="{{ Request::is('*warehouse/request*') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('wh.request.index')}}"><i class="fas fa-briefcase"></i> <span>Request</span></a>
            </li>

        </ul>



    </aside>
</div>