<section id="bottombar">
    <div class="container">
        <ul>
            
            <li class="{{ Request::is('/') ? 'active' : '' }}">
                <a href="/">
                    <i class="fas fa-home"></i> <br> Home
                </a>
            </li>
            <li class="{{ Request::is('item-filter') ? 'active' : '' }}">
                <a href="/item-filter">
                    <i class="fas fa-filter"></i> <br> Filter
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-gifts"></i> <br> Ice Box
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-hourglass-half"></i> <br> Timeline
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-user-cog"></i> <br> Setting
                </a>
            </li>
        </ul>
    </div>
</section>