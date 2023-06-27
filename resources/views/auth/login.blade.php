<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
     @vite('resources/sass/app.scss')
</head>
<body>
    <section  class="vh-100 bg-primary">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center bg-white rounded-4">


            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-hexagon-fill text-primary mb-3" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8.5.134a1 1 0 0 0-1 0l-6 3.577a1 1 0 0 0-.5.866v6.846a1 1 0 0 0 .5.866l6 3.577a1 1 0 0 0 1 0l6-3.577a1 1 0 0 0 .5-.866V4.577a1 1 0 0 0-.5-.866L8.5.134z"/>
</svg>

            <h3 class="mb-5 fw-bold">Employee Data Master</h3>

            <form method="POST" action="{{ route('login') }}">
                        @csrf
              <div class="form-outline mb-4">
              <input id="email" placeholder="Enter Your Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            </div>

            <div class="form-outline mb-4">
              <input id="password" placeholder="Enter Your Password"  type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            </div>

            <div class="d-grid gap-2">
            <button class="btn btn-primary btn-block btn-lg" type="submit">
                <i class="bi-box-arrow-right"></i>
                Login</button>
            </form>


            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 @vite('resources/js/app.js')
</body>
</html>

