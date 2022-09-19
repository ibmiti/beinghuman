@extends ('layouts.app')
@section('title', 'About BeingHMN')
@section ('content')
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form class="mx-1 mx-md-4" method="POST" action="{{ url('register') }}">
                    @csrf
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="username">Username</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" />

                        @error('username')
                            <P class="text-red-500 text-xs mt-1">
                        @enderror
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="email">Your Email</label>
                        <input type="email" id="email" name="email" class="form-control" value=" {{ old('email') }}" />
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control"  />
                    </div>
                  </div>

                  <!-- TODO: Add this later -->
                  <!-- <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="password-confirmation">Repeat your password</label>
                        <input type="password" id="password-confirmation" name="password-confirmation" class="form-control"  />
                    </div>
                  </div> -->

                  <!-- <div class="form-check d-flex justify-content-center mb-5">
                    <input
                      class="form-check-input me-2"
                      type="checkbox"
                      value=""
                      id="form2Example3c"
                    />
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div> -->
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-outline btn-lg">Register</button>
                  </div>
                </form>
                @if ($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="btn btn-outline-danger mb-1">{{ $error }}</li>
                        @endforeach
                        <li class="list-unstyled"><a class="btn btn-outline-danger" href="{{ url('login-page') }}">Login here</a></li>
                    </ul>
                @endif
              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection