<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/">
                {{-- <img src="{{asset('assets/img/logo/icon.png')}}" alt="" style="width: 100%;"> --}}
                Bikersthings
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">MPE</a>
        </div>

        <ul class="sidebar-menu">

            <li class="{{ Request::is('*item*', '/') ? 'active' : '' }}">
                <a class="nav-link" href="/user/item"><i class="fas fa-boxes"></i> <span>Items</span></a>
            </li>
            <li class="{{ Request::is('*icebox*') ? 'active' : '' }}">
                <a class="nav-link" href="/user/icebox"><i class="fas fa-gifts"></i> <span>Ice Box</span></a>
            </li>
            <li class="{{ Request::is('*keranjang*') ? 'active' : '' }}">
                <a class="nav-link" href="/user/keranjang"><i class="fas fa-shopping-cart"></i> <span>Keranjang</span></a>
            </li>
            <li class="{{ Request::is('*keuangan*') ? 'active' : '' }}">
                <a class="nav-link" href="/user/keuangan"><i class="fas fa-money-bill-wave"></i> <span>Keuangan</span></a>
            </li>
            <li class="{{ Request::is('*setting*') ? 'active' : '' }}">
                <a class="nav-link" href="/user/setting"><i class="fas fa-user-cog"></i> <span>Setting Profile</span></a>
            </li>

        </ul>

    </aside>
</div>