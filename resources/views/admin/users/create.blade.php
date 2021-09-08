@extends('admin.index')
@section('content')

<div class="right_col" role="main">

        <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>ایجاد کاربر جدید</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                            </ul>
                            <div class="clearfix"></div>
                         </div>
                        <div class="x_content">
                            <br/>
<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ route('admin.register.user') }}">
    @csrf
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">نام<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        </div>
    </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="states">استان<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
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
        </div>
        <div class="form-group ">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">شهر<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <select required class="form-control" name="city" id="city">
                <option value="0">لطفا استان را انتخاب نمایید</option>
            </select>
            </div>
        </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">شماره موبایل<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>
        </div>
    </div>
    <div class="form-group ">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">کد پستی<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="postal_code" type="text" class="form-control" name="postal_code" value="{{ old('postal_code') }}" required autocomplete="postal_code" autofocus>
        </div>
    </div>
    <div class="form-group ">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">آدرس<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autocomplete=address" autofocus>
        </div>
    </div>


    <div class="form-group ">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">کلمه عبور<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        </div>

    </div>

    <div class="form-group ">
        <label  for="password-confirm" class="control-label col-md-3 col-sm-3 col-xs-12">تکرار کلمه عبور<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
    </div>


    <button type="submit" class="w-100 mt-4 btn btn-primary">
        ثبت نام
    </button>

</form>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
