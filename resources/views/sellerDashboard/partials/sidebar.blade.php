<div class="col-md-3 col-sm-4">
    <div class="right-profile-info" style="margin-bottom:10px;">
        <img class="card-img-top" src="{{asset('front/images/person_4.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">فروشگاه ممدلی</h6>
        </div>
        <div class="profile-options">
          <a href="#" class="card-link"> <i class="fa fa-gear"></i> تنظیمات</a>
          <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" class="card-link"><i class="fa fa-sign-out"></i> خروج از حساب کاربری</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
      </div>
<div class="right-sidebar mb-2">
    <div>
       <p>حساب کاربری شما</p>
       <div>
        <ul>
            <a href="{{route('seller.home')}}"><li><i class="fa fa-inbox"></i> پیشخوان</li></a>
            <a href="{{route('seller.product')}}"><li><i class="fa fa-shopping-bag"></i> محصولات</li></a>
            <a href="{{route('seller.order')}}"><li><i class="fa fa-shopping-basket"></i> سفارشات</li></a>
            <a href="{{route('seller.withdraw')}}"><li><i class="fa fa-bookmark"></i> جزییات حساب</li></a>
            <a href="{{route('seller.report')}}"><li><i class="fa fa-reply"></i> ارسال گزارش</li></a>

        </ul>
        </div>
    </div>
</div>

<div class="right-sidebar  mb-2">
  <div class="side-content">
    <span class="dot dot-red"></span>
     <p>وضعیت مدارک: <b>ناقص</b></p>
  </div>
  <div class="side-content">
      <span class="dot dot-green"></span>
       <p>وضعیت کلی حساب: <b>تایید شده</b></p>
    </div>
    <div class="side-content">
        <span class="dot dot-green"></span>
         <p>وضعیت قرارداد: <b>تایید شده</b></p>
      </div>
</div>

</div>
