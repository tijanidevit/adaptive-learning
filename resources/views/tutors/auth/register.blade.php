<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Tutor Registration Page </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body class="h-100">
<div class="authincation h-100">
    <div class="container-fluid h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <h4 class="text-center mb-4">Sign up your account</h4>
                                <form action="{{route('lecturer_reg')}}">
                                    <div class="form-group">
                                        <label><strong>First Name</strong></label>
                                        <input type="text" class="form-control" placeholder="Adekunle" name="first_name" value="{{old('first_name')}}">
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Other names</strong></label>
                                        <input type="text" class="form-control" placeholder="Olawale Adekunle" name="other_names" value="{{old('other_names')}}">
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Email</strong></label>
                                        <input type="email" name="email"  class="form-control" placeholder="hello@example.com" value="{{old('email')}}">
                                    </div>
                                    <div class="form-group">
                                        <label><strong>Password</strong></label>
                                        <input type="password" name="password" minlength="6" class="form-control" placeholder="*******">
                                    </div>
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
                                    </div>
                                </form>
                                <div class="new-account mt-3">
                                    <p>Already have an account? <a class="text-primary" href="./login">Sign in</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{asset('vendor/global/global.min.js')}}"></script>
<script src="{{asset('js/quixnav-init.js')}}"></script>
<!--endRemoveIf(production)-->
</body>

</html>
