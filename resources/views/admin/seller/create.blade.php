@extends('admin.index')
@section('content')

<div class="right_col" role="main">

        <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>ایجاد فروشنده جدید

                            </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>

                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br/>
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ route('admin.seller.register') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">نام فروشگاه
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone_number" class="control-label col-md-3 col-sm-3 col-xs-12">شماره تماس </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" class="form-control" id="phone_number" name="phone_number">
                                    </div>
                                </div>
{{--                                <div class="form-group">--}}
{{--                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" dir="rtl">شهر خود را انتخاب کنید</label>--}}
{{--                                        <div class="col-md-6 col-sm-6 col-xs-12">--}}
{{--                                            <select class="select2_single form-control" tabindex="-1">--}}
{{--                                                <option></option>--}}
{{--                                                <option value="AK">تهران</option>--}}
{{--                                                <option value="HI">مشهد</option>--}}
{{--                                                <option value="CA">تبریز</option>--}}
{{--                                                <option value="NV">رشت</option>--}}
{{--                                                <option value="OR">رامسر</option>--}}
{{--                                                <option value="WA">زاهدان</option>--}}
{{--                                                <option value="AK">تهران</option>--}}
{{--                                                <option value="HI">مشهد</option>--}}
{{--                                                <option value="CA">تبریز</option>--}}
{{--                                                <option value="NV">رشت</option>--}}
{{--                                                <option value="OR">رامسر</option>--}}
{{--                                                <option value="WA">زاهدان</option>--}}

{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">آدرس <span--}}
{{--                                            class="required">*</span>--}}
{{--                                    </label>--}}
{{--                                    <div class="col-md-6 col-sm-6 col-xs-12">--}}
{{--                                        <input id="address" class="date-picker form-control col-md-7 col-xs-12"--}}
{{--                                               required="required" type="text">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">رمز عبور <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="password" class="form-control" id="password" name="password">

                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button type="submit" class="btn btn-success">ارسال</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>


</div>
@endsection
