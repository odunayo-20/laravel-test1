<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register </title>

    <!-- Bootstrap -->
    <link href="{{ url('public/vendors/bootstrap/dist/css/bootstrap.min.css') }} " rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ url('public/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ url('public/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ url('public/vendors/animate.css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ url('public/build/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="" method="POST">
                @csrf
              <h1>Registration Form</h1>
              <div>
                <input type="text" value="{{ old('username') }}" class="form-control @error('username') is-invalid  @enderror" name="username" placeholder="Username" />
                @error('username')
                <span class="text-danger">{{ $message }}</span>
                                @enderror
              </div>
              <div>
                <input type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" />
                @error('email')
<span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div>
                <input type="password" class="form-control @error('password') is-invalid  @enderror" name="password" placeholder="Password" />
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                                @enderror
              </div>
              <div>
                <input type="submit" value="Register" class="btn btn-primary">
              </div>
              <div>
                <a class="btn btn-default submit" href="{{ url('/') }}">Log in</a>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="{{ url('register') }}" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

              </div>
            </form>
          </section>
        </div>


      </div>
    </div>
  </body>
</html>
