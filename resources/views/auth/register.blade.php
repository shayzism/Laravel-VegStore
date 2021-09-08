<!doctype html>
<html lang="fa">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>ثبت نام</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/css.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">

  </head>
  @extends('layouts.app')
  @section('content')
  <body class="text-center" style="background-color:#f7f7f7">
                    <form class="form-signin mt-4 bg-white" method="POST" action="{{ route('register') }}">
                        @csrf
                        <h1 class="h3 mb-3 font-weight-normal">ثبت نام در مای سبزی</h1><hr>
                        <div class="form-group">
                            <label>نام<span class="required">*</span></label>
                         <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="states">استان<span class="required">*</span></label>
                                <select required class="form-control" name="state" onChange="irancitylist(this.value);">
                                    <option value="0"> </option>
                                    <option value="تهران">تهران</option>
                                    <option value="گیلان">گیلان</option>
                                    <option value="آذربایجان شرقی">آذربایجان شرقی</option>
                                    <option value="خوزستان">خوزستان</option>
                                    <option value="فارس">فارس</option>
                                    <option value="اصفهان">اصفهان</option>
                                    <option value="خراسان رضوی">خراسان رضوی</option>
                                    <option value="قزوین">قزوین</option>
                                    <option value="سمنان">سمنان</option>
                                    <option value="قم">قم</option>
                                    <option value="مرکزی">مرکزی</option>
                                    <option value="زنجان">زنجان</option>
                                    <option value="مازندران">مازندران</option>
                                    <option value="گلستان">گلستان</option>
                                    <option value="اردبیل">اردبیل</option>
                                    <option value="آذربایجان غربی">آذربایجان غربی</option>
                                    <option value="همدان">همدان</option>
                                    <option value="کردستان">کردستان</option>
                                    <option value="کرمانشاه">کرمانشاه</option>
                                    <option value="لرستان">لرستان</option>
                                    <option value="بوشهر">بوشهر</option>
                                    <option value="کرمان">کرمان</option>
                                    <option value="هرمزگان">هرمزگان</option>
                                    <option value="چهارمحال و بختیاری">چهارمحال و بختیاری</option>
                                    <option value="یزد">یزد</option>
                                    <option value="سیستان و بلوچستان">سیستان و بلوچستان</option>
                                    <option value="ایلام">ایلام</option>
                                    <option value="کهگلویه و بویراحمد">کهگلویه و بویراحمد</option>
                                    <option value="خراسان شمالی">خراسان شمالی</option>
                                    <option value="خراسان جنوبی">خراسان جنوبی</option>
                                    <option value="البرز">البرز</option>
                                </select>

                            </div>
                            <div class="form-group col-md-6">
                                    <label>شهر<span class="required">*</span></label>
                                <select required class="form-control" name="city" id="city">
                                    <option value="0">لطفا استان را انتخاب نمایید</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label >شماره موبایل<span class="required">*</span></label>
                            <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>
                        </div>
                        <div class="form-group ">
                            <label >کد پستی<span class="required">*</span></label>
                            <input id="postal_code" type="text" class="form-control" name="postal_code" value="{{ old('postal_code') }}" required autocomplete="postal_code" autofocus>
                        </div>
                        <div class="form-group ">
                            <label >آدرس<span class="required">*</span></label>
                            <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autocomplete=address" autofocus>
                        </div>


                        <div class="form-group ">
                            <label>کلمه عبور<span class="required">*</span></label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        </div>

                        <div class="form-group ">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">تکرار کلمه عبور<span class="required">*</span></label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        </div>


                                <button type="submit" class="w-100 mt-4 btn btn-primary">
                                   ثبت نام
                                </button>

                    </form>

</body>
<script src="{{asset('front/js/city.js')}}"></script>
<script src="{{asset('front/js/jquery.min.js')}}"></script>
</html>

@endsection
