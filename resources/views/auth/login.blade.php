<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
  <title>Kitabbhandaar || Login Page</title>
=======
  <title>E-SHOP || Login Page</title>
>>>>>>> efc5db2e52dd3c5e287448d2561fe52e57541dd7
  @include('backend.layouts.head')
  <style>
    .full-height {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 90vh;
    }

    .container {
      width: 90%;
    }
    
  </style>
</head>

<body class="bg-gradient-primary">

  <div class="container full-height">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-12 mt-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block text-center">
                <img src="/storage/photos/1/login.jpg" alt="Book Image" class="img-fluid" style="max-width: 112%; height: 100%;">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <form class="user" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." required autocomplete="email" autofocus>
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="exampleInputPassword" placeholder="Password" name="password" required autocomplete="current-password">
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                          {{ __('Remember Me') }}
                        </label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    @if (Route::has('password.request'))
<<<<<<< HEAD
                    <a class="btn btn-link small" href="{{ route('password.request') }}">                     
=======
                    <a class="btn btn-link small" href="{{ route('password.request') }}">
                      {{ __('Forgot Your Password?') }}
>>>>>>> efc5db2e52dd3c5e287448d2561fe52e57541dd7
                    </a>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
</body>

</html>
