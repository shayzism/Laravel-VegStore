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
            <h1>چرا سبزینه؟</h1>
            <p class="font-italic text-muted mb-0">به سادگی سوابق خرید و فعالیت های خود را مدیریت کنید</p>
            <p class="font-italic text-muted mb-0">کاهش هزینه‌های جانبی فروش تا کمترین مقدار</p>
            <p class="font-italic text-muted mb-0">تایید ثبت‌نام یکروزه</p>
            <p class="font-italic text-muted mb-0">فروش کالای شما در سراسر ایران</p>
            <p class="font-italic text-muted mb-0">نقد، بررسی و نظرات خود را با دیگران به اشتراک گذارید</p>

        </div>

        <!-- Registration Form -->
        <div class="col-md-7 col-lg-6 ml-auto">
<form style="direction: rtl" class="text-right" method="POST" action="{{ route('signup_seller') }}">
    @csrf
    <h5>اطلاعات شخصی</h5><hr>
    <div class="form-group">
        <label>نام<span class="required">*</span></label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
{{--  <div class="form-row">--}}
{{--        <div class="form-group col-md-6">--}}
{{--          <label>شماره شناسنامه<span class="required">*</span></label>--}}
{{--          <input type="text" class="form-control" id="shenasname" name="shenasname">--}}
{{--        </div>--}}
{{--        <div class="form-group col-md-6">--}}
{{--          <label>کد ملی <span class="required">*</span></label>--}}
{{--          <input type="text" class="form-control" id="meli_code" name="meli_code">--}}
{{--        </div>--}}
{{--      </div>--}}
{{--  <div class="form-group">--}}
{{--        <label for="inputAddress">آدرس ایمیل</label>--}}
{{--        <input type="email" class="form-control" id="email" name="email">--}}
{{--      </div>--}}
{{--      <h5>اطلاعات تماس</h5><hr>--}}

{{--    <div class="form-row">--}}
{{--        <div class="form-group col-md-6">--}}
{{--            <label for="states">استان<span class="required">*</span></label>--}}
{{--            <select required class="form-control" name="state" onChange="irancitylist(this.value);">--}}
{{--                <option value="0"> </option>--}}
{{--                <option value="تهران">تهران</option>--}}
{{--                <option value="گیلان">گیلان</option>--}}
{{--                <option value="آذربایجان شرقی">آذربایجان شرقی</option>--}}
{{--                <option value="خوزستان">خوزستان</option>--}}
{{--                <option value="فارس">فارس</option>--}}
{{--                <option value="اصفهان">اصفهان</option>--}}
{{--                <option value="خراسان رضوی">خراسان رضوی</option>--}}
{{--                <option value="قزوین">قزوین</option>--}}
{{--                <option value="سمنان">سمنان</option>--}}
{{--                <option value="قم">قم</option>--}}
{{--                <option value="مرکزی">مرکزی</option>--}}
{{--                <option value="زنجان">زنجان</option>--}}
{{--                <option value="مازندران">مازندران</option>--}}
{{--                <option value="گلستان">گلستان</option>--}}
{{--                <option value="اردبیل">اردبیل</option>--}}
{{--                <option value="آذربایجان غربی">آذربایجان غربی</option>--}}
{{--                <option value="همدان">همدان</option>--}}
{{--                <option value="کردستان">کردستان</option>--}}
{{--                <option value="کرمانشاه">کرمانشاه</option>--}}
{{--                <option value="لرستان">لرستان</option>--}}
{{--                <option value="بوشهر">بوشهر</option>--}}
{{--                <option value="کرمان">کرمان</option>--}}
{{--                <option value="هرمزگان">هرمزگان</option>--}}
{{--                <option value="چهارمحال و بختیاری">چهارمحال و بختیاری</option>--}}
{{--                <option value="یزد">یزد</option>--}}
{{--                <option value="سیستان و بلوچستان">سیستان و بلوچستان</option>--}}
{{--                <option value="ایلام">ایلام</option>--}}
{{--                <option value="کهگلویه و بویراحمد">کهگلویه و بویراحمد</option>--}}
{{--                <option value="خراسان شمالی">خراسان شمالی</option>--}}
{{--                <option value="خراسان جنوبی">خراسان جنوبی</option>--}}
{{--                <option value="البرز">البرز</option>--}}
{{--            </select>--}}

{{--        </div>--}}
{{--        <div class="form-group col-md-6">--}}
{{--            <label>شهر<span class="required">*</span></label>--}}
{{--            <select required class="form-control" name="city" id="city">--}}
{{--                <option value="0">لطفا استان را انتخاب نمایید</option>--}}
{{--            </select>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--  <div class="form-group">--}}
{{--    <label for="inputAddress">آدرس فروشگاه<span class="required">*</span></label>--}}
{{--    <input type="text" class="form-control" id="store_address" name="store_adress">--}}
{{--  </div>--}}
  <div class="form-row">
{{--        <div class="form-group col-md-6">--}}
{{--          <label>تلفن ثابت<span class="required">*</span></label>--}}
{{--          <input type="text" class="form-control" id="tel" name="tel" placeholder="********-021">--}}
{{--        </div>--}}
      <div class="form-group col-md-6">
          <label> pass<span class="required">*</span></label>
          <input type="password" class="form-control" id="password" name="password" placeholder="********-09">
      </div>
        <div class="form-group col-md-6">
          <label> تلفن همراه<span class="required">*</span></label>
          <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="********-09">
        </div>
      </div>
      <h5>اطلاعات تجاری</h5><hr>
{{--  <div class="form-group">--}}
{{--    <label for="inputAddress2">نام فروشگاه<span class="required">*</span></label>--}}
{{--    <input type="text" class="form-control" id="store_name" name="store_name">--}}
{{--  </div>--}}
{{--      <div class="form-group">--}}
{{--            <label for="inputAddress2">شماره شبا (به نام شخص یا شرکت ثبت نام کنند)<span class="required">*</span></label>--}}
{{--            <input type="text" class="form-control" id="shaba_number" name="shaba_name" placeholder="__-__-___-__-__-__ IR">--}}
{{--      </div>--}}
{{--      <div class="custom-control custom-checkbox my-1 mr-sm-4">--}}
{{--            <input type="checkbox" class="custom-control-input" id="rules">--}}
{{--            <label class="custom-control-label">شرایط و قوانین را مطالعه نموده و با کلیه موارد آن موافقم.</label>--}}
{{--          </div>--}}


  <button type="submit" class=" mt-5 btn btn-primary btn-lg btn-block">عضویت در سایت</button>
</form>
            <br><a href="{{route('signin_seller_show')}}" class="float-right">قبلا ثبت نام کرده اید؟</a>
        </div>
    </div>
</div>
</body>
<script src="{{asset('front/js/city.js')}}"></script>
<script src="{{asset('front/js/jquery.min.js')}}"></script>
</html>
