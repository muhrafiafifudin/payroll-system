<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Login | RRI Surakarta</title>
        <meta content="Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="assets/images/rri-logo.png">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center m-0">
                        <a href="/" class="logo logo-admin"><img src="assets/images/rri-logo.png" height="150" alt="logo"></a>
                    </h3>

                    <div class="p-3">
                        <h4 class="text-muted font-18 m-b-5 text-center">Selamat Datang !</h4>
                        <p class="text-muted text-center">Silahkan login untuk masuk ke halaman dashboard.</p>

                        <form class="form-horizontal m-t-30" method="post" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label for="enail">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                                        <label class="custom-control-label" for="customControlInline">Ingatkan saya</label>
                                    </div>
                                </div>
                                <div class="col-6 text-right">
                                    <button class="btn w-md waves-effect waves-light" type="submit" style="background-color: #2F3382; color:#fff">Log In</button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>

            <div class="text-center">
                <p>© 2022 RRI Surakarta</p>
            </div>

        </div>


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/waves.min.js"></script>

        <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>
