<!DOCTYPE html>
<html lang="en">


@include('students.layout.head')
<body>

<div class="sign_in_up_bg">
    <div class="container">
        <div class="row justify-content-lg-center justify-content-md-center">
            <div class="col-lg-12">
                <div class="main_logo25" id="logo">
                    <a href="./"><img src="{{asset('assets/images/logo.svg')}}" alt=""></a>
                    <a href="./"><img class="logo-inverse" src="{{asset('assets/images/ct_logo.svg')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-8">
                <div class="sign_form">
                    <h2>Welcome Back</h2>
                    @if(session('error'))
                        <div class="alert alert-warning">{{session('error')}}</div>
                    @endif
                    <p>Log In to Your Edututs+ Account!</p>

                    <form  method="post" action="{{route('login')}}">
                        @csrf

                        <div class="ui search focus mt-15">
                            <div class="ui left icon input swdh95">
                                <input class="prompt srch_explore" type="email" name="email" value="{{old('email')}}" id="id_email" required="" maxlength="64" placeholder="Email Address">
                                <i class="uil uil-envelope icon icon2"></i>
                            </div>
                            @error('email')<div class="text-danger">{{$message}}</div>@enderror
                        </div>
                        <div class="ui search focus mt-15">
                            <div class="ui left icon input swdh95">
                                <input class="prompt srch_explore" type="password" name="password" value="{{old('password')}}" id="id_password" required="" maxlength="64" placeholder="Password">
                                <i class="uil uil-key-skeleton-alt icon icon2"></i>
                            </div>
                            @error('password')<div class="text-danger">{{$message}}</div>@enderror
                        </div>
                        <div class="ui form mt-30 checkbox_sign">
                            <div class="inline field">
                                <div class="ui checkbox mncheck">
                                    <input type="checkbox" checked tabindex="0" class="hidden">
                                    <label>Remember Me</label>
                                </div>
                            </div>
                        </div>
                        <button class="login-btn" type="submit">Sign In</button>
                    </form>
{{--                    <p class="sgntrm145">Or <a href="forgot_password.html">Forgot Password</a>.</p>--}}
                    <p class="mb-0 mt-30 hvsng145">Don't have an account? <a href="./register">Sign Up</a></p>
                </div>
                <div class="sign_footer"><img src="{{asset('assets/images/sign_logo.png')}}" alt="">© {{date('Y')}} <strong>Cursus</strong>. All Rights Reserved.</div>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/OwlCarousel/owl.carousel.js"></script>
<script src="vendor/semantic/semantic.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/night-mode.js"></script>
</body>

</html>
