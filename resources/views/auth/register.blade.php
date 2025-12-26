<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin - Register</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('UI/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('UI/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('UI/vendors/css/vendor.bundle.base.css')}}">
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('UI/css/vertical-layout-light/style.css')}}">
  <link rel="shortcut icon" href="{{asset('UI/images/favicon.png')}}"/>
  
  <style>
    @keyframes slideUp {
      from {
        opacity: 0;
        transform: translateY(50px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    .auth-form-light {
      animation: slideUp 0.6s ease-out;
    }
    
    .brand-logo {
      animation: slideUp 0.8s ease-out;
    }
    
    h4, h6 {
      animation: slideUp 1s ease-out;
    }
    
    .form-group {
      animation: slideUp 1.2s ease-out;
    }
    
    .form-check {
      animation: slideUp 1.3s ease-out;
    }
    
    .mt-3, .text-center {
      animation: slideUp 1.4s ease-out;
    }
  </style>
</head>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{asset('UI/images/logo.svg')}}" alt="logo">
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              
              <form class="pt-3" method="POST" action="{{ route('register') }}">
                @csrf
                
                <div class="form-group">
                  <input type="text" 
                         class="form-control form-control-lg @error('name') is-invalid @enderror" 
                         id="name" 
                         name="name" 
                         value="{{ old('name') }}" 
                         placeholder="Name" 
                         required 
                         autocomplete="name" 
                         autofocus>
                  
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                
                <div class="form-group">
                  <input type="email" 
                         class="form-control form-control-lg @error('email') is-invalid @enderror" 
                         id="email" 
                         name="email" 
                         value="{{ old('email') }}" 
                         placeholder="Email" 
                         required 
                         autocomplete="email">
                  
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                
                <div class="form-group">
                  <input type="password" 
                         class="form-control form-control-lg @error('password') is-invalid @enderror" 
                         id="password" 
                         name="password" 
                         placeholder="Password" 
                         required 
                         autocomplete="new-password">
                  
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                
                <div class="form-group">
                  <input type="password" 
                         class="form-control form-control-lg" 
                         id="password-confirm" 
                         name="password_confirmation" 
                         placeholder="Confirm Password" 
                         required 
                         autocomplete="new-password">
                </div>
                
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input" name="terms" required>
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                    SIGN UP
                  </button>
                </div>
                
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- plugins:js -->
  <script src="{{asset('UI/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('UI/js/off-canvas.js')}}"></script>
  <script src="{{asset('UI/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('UI/js/template.js')}}"></script>
  <script src="{{asset('UI/js/settings.js')}}"></script>
  <script src="{{asset('UI/js/todolist.js')}}"></script>
</body>
</html>