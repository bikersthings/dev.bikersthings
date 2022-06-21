<section id="topbar">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 left">
                <a href="/">
                    <img src="{{asset('assets/img/logo/icon.png')}}" alt="">
                </a>
            </div>
            <div class="col-lg-6 center" style="">
                <a href="/item-filter">Filter</a>
                <input class="form-control" type="text" placeholder="Agv, Kyoto, Wearpack">
            </div>
            <div class="col-lg-3 right" style="">
                <div type="button" class="wrapper dropdown-nav dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('assets/img/logo/tab-icon.png')}}" alt="">
                    Hi, Tubagus Store!
                </div>
                <div class="dropdown-menu dropdown-menu-end" style="">
                    <div class="profile-menu badge-gold">
                        Gold Member
                    </div>
                    <a href="/ice-box">
                        <div class="profile-menu">
                            <i class="fas fa-gifts"></i> Ice box
                        </div>
                    </a>
                    <a href="/ice-box">
                        <div class="profile-menu">
                            <i class="fas fa-hourglass-half"></i> Timeline
                        </div>
                    </a>
                    <hr>
                    <a href="/user/item">
                        <div class="profile-menu">
                            <i class="fas fa-boxes"></i> Kelola Item
                        </div>
                    </a>
                    <a href="/user/setting">
                        <div class="profile-menu">
                            <i class="fas fa-user-cog"></i> Setting Profile
                        </div>
                    </a>
                    <hr>
                    <div class="profile-menu">
                        <i class="fas fa-ticket-alt"></i> Ice Coupon : 200
                    </div>
                    <div class="profile-menu">
                        <i class="fas fa-rocket"></i> Boost! Voucher : 50
                    </div>
                    <a href="">
                        <div class="btn btn-danger"style="width: 100%">
                            <i class="fas fa-sign-out-alt"></i> LOGOUT
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@section('js')
    
@endsection