<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('front/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/css.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <title>Document</title>
</head>


<body>

@include('sellerDashboard.partials.nav')
<div class="container">
    <div class="row py-5 mt-4 align-items-center">
        <!-- For Demo Purpose -->
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0 text-right">
            <img src="https://res.cloudinary.com/mhmd/image/upload/v1569543678/form_d9sh6m.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
            <h1>ورود به حساب کاربری</h1>
            <p class="font-italic text-muted mb-0">!در حفظ رمز خود کوشا باشید</p>


        </div>

        <!-- Registeration Form -->
        <div class="col-md-7 col-lg-6 ml-auto">
            <form style="direction: rtl" class="text-right" method="POST" action="{{ route('signin_seller') }}">
                @csrf
                <div class="form-group">
                    <label>شماره موبایل<span class="required">*</span></label>
                    <input type="text" class="form-control" id="phone_number" name="phone_number">
                </div>
                <div class="form-group">
                    <label>رمز عبور<span class="required">*</span></label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <ul>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">مرا بخاطر بسپار</label>
                        </div>
                    </li>
                </ul>
                <div class="separator">
                    <p class="change_link">هنوز ثبت نام نکردید؟
                        <a href="{{route('signup_seller')}}" class="to_register"> ثبت نام کنید </a>
                    </p>
                </div>
                <button type="submit" class=" mt-5 btn btn-primary btn-lg btn-block">عضویت در سایت</button>
            </form>
        </div>
    </div>
</div>
</body>
<script src="{{asset('front/js/city.js')}}"></script>
<script src="{{asset('front/js/jquery.min.js')}}"></script>
</html>
