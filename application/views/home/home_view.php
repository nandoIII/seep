<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin - Login</title>

        <!-- Bootstrap core CSS-->
        <link href="public/third-party/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template-->
        <link href="public/third-party/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template-->
        <link href="public/css/sb-admin.css" rel="stylesheet">

    </head>

    <body class="bg-dark">

        <div class="container">
            <div class="card card-login mx-auto mt-5">
                <div class="card-header">SEEP - Iniciar Sesion</div>
                <div class="card-body">
                    <form id="login_form" class="form-horizontal" method="POST" action="<?php echo site_url('user/login') ?>">
                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="text" id="inputEmail" name="login" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                                <label for="inputEmail">Usuario</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required">
                                <label for="inputPassword">Password</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="remember-me">
                                    Remember Password
                                </label>
                            </div>
                        </div>
                        <input class="btn btn-primary btn-block" type="submit" value="Iniciar Sesion" class="btn btn-primary" />
                    </form>
                    <div class="text-center">
                        <a class="d-block small mt-3" href="register.html">Register an Account</a>
                        <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="public/third-party/jquery/jquery.min.js"></script>
        <script src="public/third-party/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="public/third-party/jquery-easing/jquery.easing.min.js"></script>


        <script>
            $(function () {
                $('#login_form').submit(function (evt) {
                    evt.preventDefault();
                    var url = $(this).attr('action');
                    var postData = $(this).serialize();

                    $.post(url, postData, function (o) {
                        if (o.result == 1) {
                            window.location.href = '<?php echo site_url('empresa') ?>';
                        } else {
                            alert('Invalid login');
                        }
                    }, 'json');
                });
            });
        </script>

    </body>

</html>
