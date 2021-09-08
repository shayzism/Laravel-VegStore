<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login | Admin</title>

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
<div>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form method="POST" action="{{route('signin')}}">
                    @csrf
                    <h1>فرم ورود</h1>
                    <div>
                        <input name="email" id="email" type="text" class="form-control" placeholder="ایمیل" required>
                    </div>
                    <div>
                        <input type="password" name="password" id="password" class="form-control" placeholder="رمز ورود" required>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-default">ورود</button>
                        <a class="reset_pass" href="#reset">رمز ورود را از دست دادید؟</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">جدید در سایت؟
                            <a href="{{route('signup.form')}}" class="to_register"> ایجاد حساب </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                    </div>
                </form>
            </section>
        </div>

        <div id="rest_pass" class="animate form rest_pass_form">
            <section class="login_content">
                <!-- /password recovery -->
                <form action="index.html">
                    <h1>بازیابی رمز عبور</h1>
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" name="email" placeholder="ایمیل" />
                        <div class="form-control-feedback">
                            <i class="fa fa-envelope-o text-muted"></i>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default btn-block">بازیابی رمز عبور </button>
                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">جدید در سایت؟
                            <a href="#signup" class="to_register"> ایجاد حساب </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                            <p>©1397 تمامی حقوق محفوظ. Gentelella Alela! یک قالب بوت استرپ 3. حریم خصوصی و شرایط</p>
                        </div>
                    </div>
                </form>
                <!-- Password recovery -->
            </section>
        </div>
    </div>
</div>
</body>
</html>
