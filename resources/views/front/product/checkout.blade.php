@extends('front.index')
@section('content')

<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row" style="direction : rtl" >
        <div class="col-md-12 ftco-animate">
            <table class="table">
                <thead class="thead-primary">
                <tr class="text-center">
                    <th>&nbsp;</th>
                    <th>عکس محصول</th>
                    <th>نام محصول</th>
                    <th>قیمت</th>
                    <th>تعداد</th>
                    <th>قیمت کل</th>
                </tr>
                </thead>
                <tbody>
                @foreach(Cart::getContent() as $product)
                <tr class="text-center">

                        <td class="product-remove"><a href="{{\route('cart.delete',$product->id)}}"><span class="ion-ios-close"></span></a></td>

                        <td class="image-prod">
                                <div class="img" style="background-image: url({{$product->attributes->image}})">
                                </div>
                        </td>

                        <td class="product-name">
                            <h3>{{$product->name}}</h3>
                            <p>فروشنده: {{$product->attributes->seller_name}}</p>
                        </td>

                        <td class="price">{{$product->price}}</td>

                        <td class="price font-weight-bold">
                                <p>{{$product->quantity}}</p>

                      </td>

                        <td class="total">{{$product->price * $product->quantity}}</td>

                      </tr><!-- END TR-->
                @endforeach
                    </tbody>
                  </table>
              </div>
        </div>
    </div>
    <br>
    @if(Auth::check())
    <div class="row justify-content-end mt-2 mx-0 px-0" style="direction: rtl">
        <div class="row justify-content-center ml-3">
            <div class="col-xl-7 ftco-animate">
                <h3 class="mb-4 billing-heading">مشخصات کاربر</h3>

                <form action="#" class="billing-form">
                    <div class="row align-items-end">
                    <div class="col-md-12">
                      <div class="form-group">
                          <label for="name">نام </label>
                        <input type="text" class="form-control" id="name" name="name" @if(Auth::check()) value="{{ Auth::user()->name }}" @endif required autocomplete="name">
                      </div>
                  </div>
                  <div class="w-100"></div>
                      <div class="col-md-6">
                          <div class="form-group">
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
                      </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>شهر<span class="required">*</span></label>
                                <select required class="form-control" name="city" id="city">
                                    <option value="0">لطفا استان را انتخاب نمایید</option>
                                </select>
                            </div>
                        </div>
                      <div class="w-100"></div>
                      <div class="col-md-12">
                          <div class="form-group">
                          <label for="address">آدرس</label>
                        <input type="text" class="form-control" id="address" name="address"  @if(Auth::check()) value="{{Auth::user()->address}}" @endif>
                      </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                      </div>
                      </div>
                      <div class="w-100"></div>
                      <div class="col-md-6">
                          <div class="form-group">
                          <label>کد پستی</label>
                        <input type="text" class="form-control" id="postal_code" name="postal_code"  @if(Auth::check()) value="{{Auth::user()->postal_code}}" @endif>
                      </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label>شماره تلفن</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number"  @if(Auth::check()) value="{{Auth::user()->phone_number}}" @endif>
                      </div>
                      </div>
                  <div class="w-100"></div>

                  </div>
                </form><!-- END -->
                      </div>
                      <div class="col-xl-5">
                <div class="row mt-5 pt-3">
                    <div class="col-md-12 d-flex mb-5">
                        <div class="cart-detail cart-total p-3 p-md-4">
                            <h3 class="billing-heading mb-4">صورت حساب</h3>
                            <p class="d-flex">
                                      <span>قیمت کل</span>
                                      <span>{{Cart::getSubTotal()}} تومان </span>
                                  </p>
                                  <p class="d-flex">
                                      <span>هزینه ارسال</span>
                                      <span>0</span>
                                  </p>
                                  <p class="d-flex">
                                      <span>تخفیف</span>
                                      <span>0%</span>
                                  </p>
                                  <hr>
                                  <p class="d-flex total-price">
                                      <span>قیمت نهایی</span>
                                      <span>{{Cart::getTotal()}} تومان</span>
                                  </p>
                                  </div>
                    </div>

                </div>
                <p class="pt-3"><a href="#" class="btn btn-primary">تکمیل خرید و پرداخت</a></p>
            </div> <!-- .col-md-8 -->
          </div>
    </div>
    @endif
    @if(!Auth::check())
<div class="text-md-center text-danger font-weight-bold">
    !کاربر گرامی برای ادامه خرید باید <a href="{{route('register')}}">ثبت نام</a> کنید.باتشکر
</div>
        @endif
</section>


@endsection
