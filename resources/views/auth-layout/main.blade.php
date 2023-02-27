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

    <title>Log</title>
</head>
<body>
    <section id="register">
        <div class="left">
            <img src="{{asset('assets/img/background/auth-bg.jpg')}}" alt="">
        </div>
        <div class="right">
            <div class="container">
                <div class="row justify-content-center align-items-center" style="height: 100vh">
                    <div class="col-xl-7 col-12">
                        <div style="">
                            <div class="logo mb-5 text-center">
                                <img src="{{asset('assets/img/logo/icon.png')}}" alt="">
                                Where <b>BIKERS</b> meet
                            </div>
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>