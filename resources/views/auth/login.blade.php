<x-home title="Login">
  <style>
      .half, .half .container > .row {
          height: 100vh;
          min-height: 700px; 
      }
  
      @media (max-width: 991.98px) {
      .half .bg {
          height: 200px; } }
  
      .half .contents {
      background: #FFF5F0; }
  
      .half .contents, .half .bg {
      width: 50%; }
      @media (max-width: 1199.98px) {
      .half .contents, .half .bg {
      width: 100%; } }
      .half .contents .form-control, .half .bg .form-control {
      border: none;
      -webkit-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1);
      box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1);
      border-radius: 4px;
      height: 54px;
      background: #fff; }
      .half .contents .form-control:active, .half .contents .form-control:focus, .half .bg .form-control:active, .half .bg .form-control:focus {
      outline: none;
      -webkit-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1);
      box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1); }
  
      .half .bg {
      background-size: cover;
      background-position: center; }
  
      .half a {
      color: #888;
      text-decoration: underline; }
  
      .half .btn {
      height: 54px;
      padding-left: 30px;
      padding-right: 30px; }
  
      .half .forgot-pass {
      position: relative;
      top: 2px;
      font-size: 14px; }
  
      .control {
      display: block;
      position: relative;
      padding-left: 30px;
      margin-bottom: 15px;
      cursor: pointer;
      font-size: 14px; }
  
      .control .caption {
      position: relative;
      top: .2rem;
      color: #888; }
  
      .control input {
      position: absolute;
      z-index: -1;
      opacity: 0; }
  
      .control__indicator {
      position: absolute;
      top: 2px;
      left: 0;
      height: 20px;
      width: 20px;
      background: #e6e6e6;
      border-radius: 4px; }
  
      .control--radio .control__indicator {
      border-radius: 50%; }
  
      .control:hover input ~ .control__indicator,
      .control input:focus ~ .control__indicator {
      background: #ccc; }
  
      .control input:checked ~ .control__indicator {
      background: #fb771a; }
  
      .control:hover input:not([disabled]):checked ~ .control__indicator,
      .control input:checked:focus ~ .control__indicator {
      background: #fb8633; }
  
      .control input:disabled ~ .control__indicator {
      background: #e6e6e6;
      opacity: 0.9;
      pointer-events: none; }
  
      .control__indicator:after {
      content: '\2713';
      position: absolute;
      display: none;
      font-size: 16px;
      -webkit-transition: .3s all ease;
      -o-transition: .3s all ease;
      transition: .3s all ease; }
  
      .control input:checked ~ .control__indicator:after {
      display: block;
      color: #fff; }
  
      .control--checkbox .control__indicator:after {
      top: 50%;
      left: 50%;
      margin-top: -1px;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%); }
  
      .control--checkbox input:disabled ~ .control__indicator:after {
      border-color: #7b7b7b; }
  
      .control--checkbox input:disabled:checked ~ .control__indicator {
      background-color: #7e0cf5;
      opacity: .2; }
  </style>
  <div class="d-lg-flex half">
      <div class="bg order-1 order-md-2" style="background-image: url({{url('images/imaged.jpeg')}});"></div>
      <div class="contents order-2 order-md-1">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7">
              <h3 class="fw-bold">Login</h3>
              <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group first mb-3">
                  <label for="email">Email Address</label>
                  <input id="email" type="email" class="form-control" placeholder="Enter your email address" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
  
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input id="password" type="password" class="form-control" placeholder="Enter your password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
  
                <div class="d-flex mb-5 align-items-center justify-content-between">
                  <label for="remember" class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                    <input type="checkbox" checked="checked" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                    <div class="control__indicator"></div>
                  </label>
                  @if (Route::has('password.request'))
                    <span><a href="{{ route('password.request') }}" class="forgot-pass">Forgot Password</a></span>
                  @endif
                </div>
                <div class="d-flex mb-5 flex-column align-items-center justify-content-center">
                  <input type="submit" value="Log In" class="btn btn-block btn-primary mb-3">
                  <a href="register"
                    >Don't have an account?</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </x-home>