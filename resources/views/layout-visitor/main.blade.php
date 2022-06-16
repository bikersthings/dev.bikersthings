<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Visitor CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/visitor-style.css')}}">

    <!-- K2D Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=K2D:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title>BIKERSTHINGS</title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/logo/tab-icon-bkt.png')}}">
</head>
<body>
    <section id="topbar">
        <div class="container">
            <div class="row">
                <div class="col-3 left">
                    <img src="{{asset('assets/img/logo/icon.png')}}" alt="">
                </div>
                <div class="col-6 center" style="">
                    <a href="">Filter</a>
                    <input class="form-control" type="text" placeholder="Agv, Kyoto, Wearpack">
                </div>
                <div class="col-3 right" style="">
                    <div type="button" class="wrapper dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{asset('assets/img/logo/tab-icon.png')}}" alt="">
                        Hi, Tubagus Store!
                    </div>
                    <div class="dropdown-menu dropdown-menu-end profile" style="">
                        <a href="">
                            <div class="profile-menu badge-gold">
                                Gold Member
                            </div>
                        </a>
                        <a href="">
                            <div class="profile-menu">
                                <i class="fas fa-boxes"></i> Kelola Toko
                            </div>
                        </a>
                        <a href="">
                            <div class="profile-menu">
                                <i class="fas fa-gifts"></i> Ice box
                            </div>
                        </a>
                        <a href="">
                            <div class="profile-menu">
                                <i class="fas fa-user-cog"></i> Setting Profile
                            </div>
                        </a>
                        <hr>
                        <a href="">
                            <div class="profile-menu">
                                <i class="fas fa-ticket-alt"></i> Ice Coupon : 200
                            </div>
                        </a>
                        <a href="">
                            <div class="profile-menu">
                                <i class="fas fa-rocket"></i> Boost! Voucher : 50
                            </div>
                        </a>
                        <hr>
                        <a href="" class="">
                            <div class="profile-menu text-center btn btn-danger">
                                <i class="fas fa-sign-out-alt"></i> LOGOUT
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>