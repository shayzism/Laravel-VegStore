@extends('front.index')
@section('content')

<section class="ftco-section">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 mb-5 ftco-animate">
                <a href="images/product-1.jpg" class="image-popup"><img src="{{$product->image}}" class="img-fluid"></a>
            </div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                <h3>{{$product->title}}</h3>
                <div class="rating d-flex text-right">

                        <p class="text-left">
                            <a href="#" class="mr-2" >100 <span >درصد خانگی</span></a>
                        </p>
                        <p class="text-left">
                            <a href="#" class="mr-2">21 <span>عدد فروخته شده</span></a>
                        </p>
                        <p class="text-left">
                            <a href="#" class="mr-2">وضعیت :<span style="color:firebrick">موجود</span></a>
                        </p>
                </div>
<br>
                <p class="text-single" >.قیمت به ازای هر یک کیلو/لیتر میباشد</p>
                <p class="price single-price"><span>{{ $product->price}}</span> تومان</p>
                <p style="color:black">
                    {{ $product->description}}
                </p>
                <div class="row mt-4 w-100">
                        <div class="col-md-6">
                            <div class="form-group d-flex">
                  <div class="select-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="" id="" class="form-control">
                      <option value="">یک کیلو</option>
                    <option value="">دو کیلو</option>
                    <option value="">سه کیلو</option>
                    <option value="">چهار کیلو</option>
                    <option value="">پنج کیلو</option>
                    <option value="">شش کیلو</option>
                    <option value="">هفت کیلو</option>
                    <option value="">هشت کیلو</option>

                  </select>
                </div>
                </div>
            </div>

              <div class="w-100"></div>

          </div>
                <form action="{{route('cart.store')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$product->id}}">
                    <input type="hidden" name="title" value="{{$product->title}}">
                    <input type="hidden" name="price" value="{{$product->price}}">
                    <input type="hidden" name="seller_name" value="{{$product->seller_name}}">
                    <input type="hidden" name="image" value="{{$product->image}}">
                    <input type="hidden" name="quantity" value="{{$product->quantity}}">
                    <button type="submit" class="btn py-3" style="height: 100%!important;background-color: #82ae46!important;color: white;border-radius: 30px"> افزودن به سبد خرید <span class="ion-ios-cart"></span></button>
{{--                    <p><a type="submit" class="btn btn-primary py-3 px-5"> افزودن به سبد خرید <span class="ion-ios-cart"></span></a></p>--}}

                </form>
            </div>

        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
      <div class="col-md-12 heading-section text-center ftco-animate">
        <h2 class="mb-4">محصولات مرتبط</h2><hr style="box-shadow: 2px 7px 20px 0px;">
      </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
    @foreach($products as $pr)
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="{{route('shop.single',$pr->id)}}" class="img-prod"><img class="img-fluid" src="{{$pr->image}}" alt="mysabzi">
                        <span class="status">20%</span>
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="{{route('shop.single',$pr->id)}}">{{$pr->title}}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span class="mr-2 price-dc">{{$pr->price}}</span><span class="price-sale">{{$pr->price-100}}</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">

                                <a href="{{route('shop.single',$pr->id)}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach
        </div>
    </div>
</section>

@endsection
