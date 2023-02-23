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

    <title>Hello, world!</title>
</head>
<body>
    <section id="register">
        <div class="left">
            <img src="{{asset('assets/img/background/auth-bg.jpg')}}" alt="">
        </div>
        <div class="right">
            <div class="card-login">
                <div class="logo mb-5 text-center">
                    <img src="{{asset('assets/img/logo/icon.png')}}" alt="">
                    Where <b>BIKERS</b> meet
                </div>
                <form action="">
                    <div class="mb-4">
                        <label for="username" class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="name@mail.com" id="username">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <div class="extra mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="remember">
                            <label class="form-check-label" for="remember">
                                Remember Me
                            </label>
                        </div>
                        <div>
                            <a href=""><b><i>Forgot Password</i></b></a>
                        </div>
                    </div>
                    <button class="btn btn-primary w-100 mb-5" type="submit">Sign In</button>
                    <div class="register text-center">
                        Don't have an account? <b><i>Sing Up</i></b>
                    </div>
                </form>
            </div>
        </div>
    </section>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>