<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }} | Register</title>

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

    <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="{{ url('/register') }}">
              @csrf
              <h1>Register Form</h1>

              <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Fullname"/>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
              </div>

              <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                  <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">

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

              <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                  <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                  @if ($errors->has('password_confirmation'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password_confirmation') }}</strong>
                      </span>
                  @endif
              </div>

              <div>
                <Button class="btn btn-default submit" type="submit"><a>Create Account</a></Button>
                <a class="reset_pass" href="{{ url('/password/reset') }}">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Login?
                  <a href="{{ url('/login') }}" class="to_register"> Sign In </a>
                </p>

                <div class="clearfix"></div>
                <br />

              </div>
            </form>
          </section>
        </div>
    
    </body>        
</html>