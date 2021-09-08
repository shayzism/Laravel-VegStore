@extends('front.index')
@section('content')
<section class="ftco-section ftco-degree-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 ftco-animate">
            <h3 style="color:firebrick;"><strong>.توجه!</strong> همه قیمت ها به تومان میباشد </h3>
        <section class="ftco-section">
            <div class="container">

                <div class="row">
                    @foreach($all_products as $product)
                    <div class="col-md-7 col-lg-4 ftco-animate mb-2">
                            <div class="card card-cascade narrower card-ecommerce">
                                    <div class="view view-cascade overlay" style="    width: 100%;height: 220px;text-align: center;">
                                            <a href="{{route('shop.single',$product->id)}}" class="img-prod"><img class="img-fluid" src="{{ $product->image}}" alt="Product_image">
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
                    <div class="col-md-7 col-lg-4 ftco-animate">
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
                    <div class="col-md-7 col-lg-4 ftco-animate">
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
                    </div> <div class="col-md-7 col-lg-4 ftco-animate">
                            <div class="card card-cascade narrower card-ecommerce">
                                    <div class="view view-cascade overlay">
                                            <a href="#" class="img-prod"><img class="img-fluid" src="front/images/bg_2.jpg">
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
                                            <a href="#"><i class="fa fa-shopping-cart grey-text ml-3"></i></a>
                                            <i class="fa fa-heart grey-text ml-3"></i>
                                        </span>
                                      </div>
                                    </div>

                                  </div>
                    </div>
                </div>
                <div class="row mt-5">
              <div class="col text-center">
                <div class="block-27">
                  <ul>
                    <li><a href="#">قبلی</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">بعدی</a></li>
                  </ul>
                </div>
              </div>
            </div>
            </div>
        </section>
        </div>


        <!-- .col-md-8 -->


        <div class="col-lg-3 sidebar ftco-animate">
          <div class="sidebar-box">
            <form action="#" class="search-form">
              <div class="form-group">
                <span class="icon ion-ios-search"></span>
                <input type="text" class="form-control text-right" placeholder="...جستجو">
              </div>
            </form>
          </div>

          <div class="sidebar-box ftco-animate">
              <h3 class="heading">جستجوی پیشرفته</h3>
            <ul class="categories">

            <div id="shahr">
               <li><a href="#"  data-toggle="collapse" data-target="#city" aria-expanded="true" aria-controls="city"> <span class="icon-caret-down "></span>انتخاب شهر </a></li>
                    <div id="city" class="collapse show" aria-labelledby="city" data-parent="#shahr">
                    <div class="card-body">

                           <ul>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">تهران</label>
                                      </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">تبریز</label>
                                      </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                                        <label class="custom-control-label" for="customCheck3">شیراز</label>
                                      </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                                        <label class="custom-control-label" for="customCheck4">رشت</label>
                                      </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">گرگان</label>
                                      </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label">مرکزی</label>
                                      </div>
                                </li>
                               <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label">اصفهان</label>
                                      </div>
                                </li>
                               <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label">اردبیل</label>
                                      </div>
                                </li>

                           </ul>

                    </div>
                  </div>
            </div>

           <div id="kala">
                        <li><a href="#"  data-toggle="collapse" data-target="#jens" aria-expanded="true" aria-controls="jens"> <span class="icon-caret-down "></span> انتخاب دسته ها </a></li>
                             <div id="jens" class="collapse show" aria-labelledby="jens" data-parent="#kala">
                                    <div class="card-body">
                                            <ul>
                                                @foreach($categories as $cats)
                                                    <li>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="{{$cats->id}}">
                                                            <label class="custom-control-label" for="{{$cats->id}}">{{$cats->name}}</label>
                                                          </div>
                                                    </li>
                                                   @endforeach
                                               </ul>

                           </div>
                     </div>

            </ul>

          </div>

          <div class="sidebar-box ftco-animate">
            <h3 class="heading">تگ های پر بازدید</h3>
            <div class="tagcloud">
              <a href="#" class="tag-cloud-link">سبزی کوکو</a>
              <a href="#" class="tag-cloud-link">سبزی خوردن</a>
              <a href="#" class="tag-cloud-link">ادویه محلی</a>
              <a href="#" class="tag-cloud-link">مربا هویج</a>
              <a href="#" class="tag-cloud-link">ادویه کاری </a>
              <a href="#" class="tag-cloud-link">سبزی محلی</a>

            </div>
          </div>


        </div>

      </div>
    </div>
  </section>
@endsection

