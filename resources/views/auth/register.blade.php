<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Register</title>

    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

</head>

<body class="bg-gradient-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg" style="margin-top: 200px">
                    <div class="card-header o-hidden">
                        <h4 class="m-0 font-weight-bold text-primary text-center">Sistem Informasi Sewa Kos</h1>
                    </div>
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <div class="d-flex justify-content-center h-100">
                                    <img src="{{ asset('assets/img/undraw_profile.svg') }}" width="80%" alt="...">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Silahkan Register</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <label for="exampleInputName">Nama</label>
                                            <input type="email" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Name...">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername">Username</label>
                                            <input type="email" class="form-control" id="exampleInputUsername" aria-describedby="emailHelp" placeholder="Enter Username...">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail">Email</label>
                                            <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password...">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputConfirmPassword">Confirm Password</label>
                                            <input type="password" class="form-control" id="exampleInputConfirmPassword" placeholder="Confirm Password...">
                                        </div>
                                        <a href="index.html" class="btn btn-primary btn-block">
                                            Register
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="/login">Sudah Punya Akun? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

</body>
</html>

