@extends('front.index')
@section('content')

<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters ftco-services">
  <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
    <div class="media block-6 services mb-md-0 mb-4">
      <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            <span class="flaticon-shipped"></span>
      </div>
      <div class="media-body">
        <h3 class="heading">دارای نماد اعتماد مردم </h3>
        <span>بیش از 10هزار مشتری</span>
      </div>
    </div>
  </div>
  <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
    <div class="media block-6 services mb-md-0 mb-4">
      <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
            <span class="flaticon-diet"></span>
      </div>
      <div class="media-body">
        <h3 class="heading">تازه و سلامت</h3>
        <span>تمام محصولات ضدعفونی شده  </span>
      </div>
    </div>
  </div>
  <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
    <div class="media block-6 services mb-md-0 mb-4">
      <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            <span class="flaticon-award"></span>
      </div>
      <div class="media-body">
        <h3 class="heading">امکان رزرو و خرید</h3>
        <span>ارسال به سرتاسر کشور</span>
      </div>
    </div>
  </div>
  <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
    <div class="media block-6 services mb-md-0 mb-4">
      <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            <span class="flaticon-customer-service"></span>
      </div>
      <div class="media-body">
        <h3 class="heading">پشتیبانی 24 ساعته</h3>
        <span>با ما تماس بگیرید</span>
      </div>
    </div>
  </div>
</div>
    </div>
</section>

<section class="ftco-section ftco-category ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 order-md-last align-items-stretch d-flex">
                        <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(front/images/category.jpg);">
                            <div class="text text-center">
                                <h2>به سلامت خود بیاندیشید</h2>
                                <p><a href="{{route('shop')}}" class="btn btn-primary">شروع خرید</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(front/images/category-1.jpg);">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="#">سبزیجات</a></h2>
                            </div>
                        </div>


                        <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(front/images/category-2.jpg);">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="#">ترشیجات</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(front/images/category-3.jpg);">
                    <div class="text px-3 py-1">
                        <h2 class="mb-0"><a href="#">ادویه </a></h2>
                    </div>
                </div>
                <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(front/images/category-4.jpg);">
                    <div class="text px-3 py-1">
                        <h2 class="mb-0"><a href="#">آجیل و خشکبار</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
<div class="container">
        <div class="row justify-content-center mb-3 pb-3">
  <div class="col-md-12 heading-section text-center ftco-animate">
      <span class="subheading">محصولات امروز</span>
      {{-- <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
        <div class="container py-4">
          <div class="row d-flex justify-content-center py-5">
            <div class="col-md-6">
                <h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
                <span>Get e-mail updates about our latest shops and special offers</span>
            </div>
            <div class="col-md-6 d-flex align-items-center">
              <form action="#" class="subscribe-form">
                <div class="form-group d-flex">
                  <input type="text" class="form-control" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="submit px-3">
                </div>
              </form>
            </div>
          </div>
        </div>
      </section> --}}
    <p><a href="{{route('shop')}}" class="btn btn-info"> انتخاب شهر مورد نظر </a></p>
  </div>
</div>
</div>
<div class="container">
    <div class="row">
       @foreach($products as $product)
        <div class="col-md-5 col-lg-3 ftco-animate mb-3">
            <div class="card card-cascade narrower card-ecommerce">
                <div class="view view-cascade overlay">
                    <a href="{{route('shop.single',$product->id)}}" class="img-prod"><img class="img-fluid" src="{{$product->image}}">
                        <div class="overlay"></div>
                    </a>

                </div>

                <div class="card-body card-body-cascade text-center pb-3">
                    <p class="card-title mb-1">
                        <strong>
                            <a style="color:black" href="{{route('shop.single',$product->id)}}">{{$product->title}}</a>
                        </strong>
                        </h5>
                    <p class="text-right card-text">{{$product->description}}</p>
                    <div class="mb-3 location-store">
                        <p style="font-size:15px;">{{$product->seller_name}} <i class="icon-store_mall_directory"></i></p>

                        <p style="font-size:15px;">تبریز<i class="icon-edit_location"></i></p>
                    </div>
                    <div class=" px-1">
                                        <span class="float-left text-primary font-weight-bold">
                                          <strong>کیلویی {{$product->price}}</strong>
                                        </span>
                        <span class="float-right">
                                            <form action="{{route('cart.store')}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$product->id}}">
                                                <input type="hidden" name="title" value="{{$product->title}}">
                                                <input type="hidden" name="price" value="{{$product->price}}">
                                                <input type="hidden" name="image" value="{{$product->image}}">
                                                <input type="hidden" name="seller_name" value="{{$product->seller_name}}">
                                                <input type="hidden" name="quantity" value="{{$product->quantity}}">
                                             <button type="submit" class="btn" style="padding: 0"><i class="fa fa-shopping-cart grey-text ml-3"></i></button>
                                            <button class="btn" type="submit" style="padding: 0"><i class="fa fa-heart grey-text ml-3"></i></button>
                                            </form>
                                        </span>

                    </div>
                </div>

            </div>
        </div>
        @endforeach
        <div class="col-md-5 col-lg-3 ftco-animate mb-3">
            <div class="card card-cascade narrower card-ecommerce">
                <div class="view view-cascade overlay">
                    <a href="#" class="img-prod"><img class="img-fluid" src="front/images/bg_2.jpg" alt="<mysabzi">
                        <div class="overlay"></div>
                    </a>

                </div>

                <div class="card-body card-body-cascade text-center pb-3">
                    <p class="card-title mb-1">
                        <strong>
                            <a style="color:black" href="">ترشی سیر</a>
                        </strong>
                        </h5>
                    <p class="text-right card-text">ترشی سیر 10 ساله اصن بخوری میمیری سمه سم!</p>
                    <div class="mb-3 location-store">
                        <p style="font-size:15px;">فروشگاه حسینی <i class="icon-store_mall_directory"></i></p>

                        <p style="font-size:15px;">تبریز<i class="icon-edit_location"></i></p>
                    </div>
                    <div class=" px-1">
                                        <span class="float-left text-primary font-weight-bold">
                                          <strong>کیلویی 12.000</strong>
                                        </span>
                        <span class="float-right">
                                            <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                            <i class="fa fa-heart grey-text ml-3"></i>
                                        </span>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-5 col-lg-3 ftco-animate">
            <div class="card card-cascade narrower card-ecommerce">
                <div class="view view-cascade overlay">
                    <a href="#" class="img-prod"><img class="img-fluid" src="front/images/bg_2.jpg" alt="mysabzi">
                        <div class="overlay"></div>
                    </a>

                </div>

                <div class="card-body card-body-cascade text-center pb-3">
                    <p class="card-title mb-1">
                        <strong>
                            <a style="color:black" href="">ترشی سیر</a>
                        </strong>
                        </h5>
                    <p class="text-right card-text">ترشی سیر 10 ساله اصن بخوری میمیری سمه سم!</p>
                    <div class="mb-3 location-store">
                        <p style="font-size:15px;">فروشگاه حسینی <i class="icon-store_mall_directory"></i></p>

                        <p style="font-size:15px;">تبریز<i class="icon-edit_location"></i></p>
                    </div>
                    <div class=" px-1">
                                        <span class="float-left text-primary font-weight-bold">
                                          <strong>کیلویی 12.000</strong>
                                        </span>
                        <span class="float-right">
                                            <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                            <i class="fa fa-heart grey-text ml-3"></i>
                                        </span>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-5 col-lg-3 ftco-animate">
            <div class="card card-cascade narrower card-ecommerce">
                <div class="view view-cascade overlay">
                    <a href="#" class="img-prod"><img class="img-fluid" src="front/images/bg_2.jpg" alt="mysabzi">
                        <div class="overlay"></div>
                    </a>

                </div>

                <div class="card-body card-body-cascade text-center pb-3">
                    <p class="card-title mb-1">
                        <strong>
                            <a style="color:black" href="">ترشی سیر</a>
                        </strong>
                        </h5>
                    <p class="text-right card-text">ترشی سیر 10 ساله اصن بخوری میمیری سمه سم!</p>
                    <div class="mb-3 location-store">
                        <p style="font-size:15px;">فروشگاه حسینی <i class="icon-store_mall_directory"></i></p>

                        <p style="font-size:15px;">تبریز<i class="icon-edit_location"></i></p>
                    </div>
                    <div class=" px-1">
                                        <span class="float-left text-primary font-weight-bold">
                                          <strong>کیلویی 12.000</strong>
                                        </span>
                        <span class="float-right">
                                            <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                            <i class="fa fa-heart grey-text ml-3"></i>
                                        </span>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-5 col-lg-3 ftco-animate">
            <div class="card card-cascade narrower card-ecommerce">
                <div class="view view-cascade overlay">
                    <a href="#" class="img-prod"><img class="img-fluid" src="front/images/product-2.jpg" alt="mysabzi">
                        <div class="overlay"></div>
                    </a>

                </div>

                <div class="card-body card-body-cascade text-center pb-3">
                    <p class="card-title mb-1">
                        <strong>
                            <a style="color:black" href="">ترشی سیر</a>
                        </strong>
                        </h5>
                    <p class="text-right card-text">ترشی سیر 10 ساله اصن بخوری میمیری سمه سم!</p>
                    <div class="mb-3 location-store">
                        <p style="font-size:15px;">فروشگاه حسینی <i class="icon-store_mall_directory"></i></p>

                        <p style="font-size:15px;">تبریز<i class="icon-edit_location"></i></p>
                    </div>
                    <div class=" px-1">
                                        <span class="float-left text-primary font-weight-bold">
                                          <strong>کیلویی 12.000</strong>
                                        </span>
                        <span class="float-right">
                                            <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                            <i class="fa fa-heart grey-text ml-3"></i>
                                        </span>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-5 col-lg-3 ftco-animate">
            <div class="card card-cascade narrower card-ecommerce">
                <div class="view view-cascade overlay">
                    <a href="#" class="img-prod"><img class="img-fluid" src="front/images/product-7.jpg" alt="mysabzi">
                        <div class="overlay"></div>
                    </a>

                </div>

                <div class="card-body card-body-cascade text-center pb-3">
                    <p class="card-title mb-1">
                        <strong>
                            <a style="color:black" href="">ترشی سیر</a>
                        </strong>
                        </h5>
                    <p class="text-right card-text">ترشی سیر 10 ساله اصن بخوری میمیری سمه سم!</p>
                    <div class="mb-3 location-store">
                        <p style="font-size:15px;">فروشگاه حسینی <i class="icon-store_mall_directory"></i></p>

                        <p style="font-size:15px;">تبریز<i class="icon-edit_location"></i></p>
                    </div>
                    <div class=" px-1">
                                        <span class="float-left text-primary font-weight-bold">
                                          <strong>کیلویی 12.000</strong>
                                        </span>
                        <span class="float-right">
                                            <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                            <i class="fa fa-heart grey-text ml-3"></i>
                                        </span>
                    </div>
                </div>

            </div>
        </div>



    </div>
    <a class="text-after" href="{{route('shop')}}">... مشاهده محصولات بیشتر</a>
</div>

</section>

{{--<section class="ftco-section img" style="background-image: url(front/images/bg_3.jpg);">--}}
{{--<div class="container">--}}
{{--        <div class="row justify-content-end">--}}
{{--  <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">--}}
{{--      <span class="subheading">تخفیف امروز</span>--}}
{{--    <h4 class="mb-2">مخصوص شما</h4>--}}
{{--    <p>هر روز با یک محصول جدید در خدمت شما هستیم</p>--}}
{{--    <h3><a href="#">اسفناج</a></h3>--}}
{{--    <span class="price"><span style="text-decoration: line-through;"> 25.000 </span><a class="price-sale" href="#"> 10.000 تومان </a></span>--}}


{{--  </div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</section>--}}

@endsection
