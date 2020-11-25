<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }} | Login</title>

    <!-- Bootstrap -->
    <link href="Template/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="Template/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="Template/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="Template/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="Template/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="{{ url('/login') }}">
              @csrf
              <h1>Login Form</h1>

              <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Username"/>
                @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>

              <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" placeholder="Password" name="password"/>
                @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>

              <div>
                <Button class="btn btn-default submit" type="submit"><a>Log in</a></Button>
                <a class="reset_pass" href="{{ url('/password/reset') }}">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="{{ url('/register') }}" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

              </div>
            </form>
          </section>
        </div>

        <!-- REGISTER -->
      </div>
    </div>
  </body>
</html>
