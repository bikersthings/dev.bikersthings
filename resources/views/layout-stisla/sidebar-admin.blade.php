<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/">
                {{-- <img src="{{asset('assets/img/logo/icon.png')}}" alt="" style="width: 100%;"> --}}
                Bikersthings
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">BKT</a>
        </div>

        <ul class="sidebar-menu">

            <li class="{{ Request::is('*item*') ? 'active' : '' }}">
                <a class="nav-link" href="/admin/item"><i class="fas fa-boxes"></i> <span>Items</span></a>
            </li>
            <li class="{{ Request::is('*icebox*') ? 'active' : '' }}">
                <a class="nav-link" href="/admin/icebox"><i class="fas fa-gifts"></i> <span>Ice Box</span></a>
            </li>
            <li class="{{ Request::is('*user*') ? 'active' : '' }}">
                <a class="nav-link" href="/admin/user"><i class="fas fa-users"></i> <span>User</span></a>
            </li>

        </ul>

    </aside>
</div>