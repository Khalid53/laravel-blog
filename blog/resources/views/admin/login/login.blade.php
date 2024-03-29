<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin-Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('/') }}/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{ asset('/') }}/admin/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header text-center"><i><b>Admin Panel</b></i></div>
        <div class="card-body">
            <form action="{{ route('login') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="form-label-group">
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus" name="email">
                        <label for="inputEmail">Email address</label>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="form-label-group">
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required" name="password">
                        <label for="inputPassword">Password</label>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
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
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="submit" name="btn" class="btn btn-success btn-block" value="Login">
                    </div>
                </div>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="register.html">Register an Account</a>
                <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('/') }}/admin/vendor/jquery/jquery.min.js"></script>
<script src="{{ asset('/') }}/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('/') }}/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
