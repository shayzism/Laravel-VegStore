<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register | Admin </title>

    <link href="{{asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/vendors/bootstrap-rtl/dist/css/bootstrap-rtl.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('admin/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('admin/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('admin/build/css/custom.min.css')}}" rel="stylesheet">
</head>
<body class="login">
<div class="login_wrapper">
<div class="animate form">
    <section class="login_content">
        <form  method="POST" action="{{route('signup')}}">
            @csrf
            <h1>ایجاد حساب</h1>
            <div>
                <input name="name" type="text" class="form-control" placeholder="نام کاربری" required>
            </div>
            <div>
                <input name="email" type="email" class="form-control" placeholder="ایمیل" required>
            </div>
            <div>
                <input name="password" type="password" class="form-control" placeholder="رمز ورود" required>
            </div>
            <div>
                <button type="submit" class="btn btn-default">عضویت</button>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
                <p class="change_link">در حال حاضر عضو هستید؟
                    <a href="{{route('signin.form')}}" class="to_register"> ورود </a>
                </p>

                <div class="clearfix"></div>
                <br />

            </div>
        </form>
    </section>
</div>
</div>
</body>

</html>
