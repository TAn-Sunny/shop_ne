<?php

use Illuminate\Support\Facades\Hash;
use App\Models\User;

$is_invalid = false;

if (request()->isMethod('post')) {
    
    $user = User::where('email', request('email'))->first();
    
    if ($user && Hash::check(request('password'), $user->password)) {
        
        session(['user_id' => $user->id]);
        
        return redirect('index');
    }
    
    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html lang="en">
  <head> 
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up Form</title>
    <link rel="stylesheet" href="{{Asset('login_public/style.css')}}" />
     <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"  defer></script>
    <script src = "{{Asset('login_public/validation.js')}}" defer></script>
    
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <?php if ($is_invalid): ?>
              <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    Email or password is incorrect. Please try again.
                </div>
            <?php endif; ?>
            
            <form action="/login" autocomplete="off" class="sign-in-form" 
            method = "post" id = login>
              <div class="logo">
                <img src="{{Asset('login_public/img/logo.png')}}" alt="easyclass" />
                <h4>Testing</h4>
              </div>

              <div class="heading">
                <h2>Welcome Back</h2>
                <h6>Not registred yet?</h6>
                <a href="#" class="toggle">Sign up</a>
              </div>

              <div class="actual-form">
              <div class="input-wrap">
                  
                  <input
                    type="email"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                    id = "signin-email"
                    name = "email"
                    value = "<?= htmlspecialchars($_POST["email"] ?? "") ?>">
    
                  <label for ="signin-email">Email</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                    id = "signin-password"
                    name = "password"
                  />
                  <label for ="signin-password">Password</label>
                </div>

                <input type="submit" value="Sign In" class="sign-btn" />

                <p class="text">
                  Forgotten your password or you login datails?
                  <a href="#">Get help</a> signing in
                </p>
              </div>
              @csrf
            </form>

            <form action="{{ route('login.process-signup') }}" autocomplete="off" class="sign-up-form" method = "post" id = "signup" novalidate>
              <div class="logo">
                <img src="{{Asset('login_public/img/logo.png')}}" alt="easyclass" />
                <h4>easyclass</h4>
              </div>

              <div class="heading">
                <h2>Get Started</h2>
                <h6>Already have an account?</h6>
                <a href="#" class="toggle">Sign in</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                    id = "name"
                    name = "name"
                  />
                  <label for = "name">Name</label>
                </div>

                <div class="input-wrap">
                  
                  <input
                    type="email"
                    class="input-field"
                    autocomplete="off"
                    required
                    id = "email"
                    name = "email"
                  />
                  <label for ="email">Email</label>
                </div>


                <div class="input-wrap">
                  
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                    id = "password"
                    name = "password"
                  />
                  <label for ="password">Password</label>
                </div>

                <div class="input-wrap">
                  
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                    id = "password_confirmation"
                    name = "password_confirmation"
                  />
                  <label for ="password_confirmation">Repeat your password</label>
                </div>

                <input type="submit" value="Sign Up" class="sign-btn" />

                <p class="text">
                  By signing up, I agree to the
                  <a href="#">Terms of Services</a> and
                  <a href="#">Privacy Policy</a>
                </p>
              </div>
              @csrf
            </form>
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="{{Asset('login_public/img/image1.png')}}" class="image img-1 show" alt="" />
              <img src="{{Asset('login_public/img/image2.png')}}" class="image img-2" alt="" />
              <img src="{{Asset('login_public/img/image3.png')}}" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Choose your own styles</h2>
                  <h2>Express yourself! </h2>
                  <h2>Discover the new you!</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Javascript file -->

    <script src="{{Asset('login_public/app.js')}}"></script>
  
  </body>
</html>
