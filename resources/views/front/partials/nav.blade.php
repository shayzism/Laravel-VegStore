<div class="py-1 bg-primary">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md pl-4 ml-4 d-flex topper align-items-center">
                        <span class="text">021-55623310</span>
                        <div class="icon ml-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>

                    </div>
                    <div class="col-md d-flex topper align-items-center">
                        <span class="text">MySabzi@gmail.com</span>
                        <div class="icon ml-3 d-flex justify-content-center align-items-center"> <span class="icon-paper-plane"> </span></div>

                    </div>
                    <div class="col-md-8 pl-4 d-flex topper align-items-center text-lg-right">
                        <span class="text">سرویس سریع و تحویل فوری در سرتاسر کشور</span>
                    </div>
                </div>
            </div>
        </div>
      </div>
</div>
<!--Navbar -->
<nav class="mb-1 ftco-navbar-light navbar navbar-expand-lg navbar-light  pl-5 ftco_navbar" id="ftco-navbar">
    <a class="navbar-brand text-primary" href="/">MySabzi</a>
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
            aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" style="direction: rtl" id="navbarSupportedContent-333">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item cta cta-colored active"><a href="{{route('cart')}}" class="nav-link">[{{Cart::getTotalQuantity()}}]<span class="icon-shopping_cart"></span></a></li>
            <li class="nav-item">
                <a class="nav-link" href="#">درباره ی ما</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">تماس با ما</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">محصولات
                </a>
                    <ul class="dropdown-menu mega-menu">

                        <li class="mega-menu-column">
                            <ul>
                                <li class="nav-header">ترشی</li>
                                <li><a href="#"> سیرترشی</a></li>
                                <li><a href="#">ترشی لیته</a></li>
                                <li><a href="#">ترشی بادمجان</a></li>

                            </ul>
                        </li>

                        <li class="mega-menu-column">
                            <ul>
                                <li class="nav-header">سبزی</li>
                                <li><a href="#">سبزی پلو</a></li><br>
                                <li><a href="#">سبزی پلو</a></li><br>
                                <li><a href="#">سبزی پلو</a></li><br>
                                <li><a href="#">سبزی پلو</a></li><br>


                            </ul>
                        </li>

                        <li class="mega-menu-column">
                            <ul>
                                <li class="nav-header">ادویه</li>
                                <li><a href="#">ادویه سالاد</a></li><br>
                                <li><a href="#">ادویه سالاد</a></li>

                                <li><a href="#">ادویه سالاد</a></li>
                            </ul>
                        </li>

                    </ul>
                    <li class="nav-item">
                            <a class="nav-link" href="{{route('signup_seller_show')}}">فروشنده بشوید!</a>
                    </li>

        </ul>
        <ul class="navbar-nav mr-auto nav-flex-icons ml-4">
            @if(Auth::user())
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-default"
                     aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item text-right" href="{{route('cart')}}">مشاهده سبد خرید</a>
                    <a class="dropdown-item text-right" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">خروج از حساب</a>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            @endif
            @if(!Auth::user())
                <li class="nav-item "><a href="{{route('register')}}" class="nav-link">ثبت نام</a></li>
                <li class="nav-item "><a href="{{route('login')}}" class="nav-link">ورود</a></li>
            @endif
        </ul>
    </div>
</nav>

<section id="home-section" class="hero">
      <div class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url(front/images/bg_1.jpg);">
          <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 ftco-animate text-center">
              <h1 class="mb-2">فروش  متنوع انواع سبزی و ترشی </h1>
              <h2 class="subheading mb-4">ارسال سرتاسر کشور</h2>
              <p><a href="/shop" class="btn btn-primary">شروع خرید</a></p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(front/images/bg_2.jpg);">
          <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-sm-12 ftco-animate text-center">
              <h1 class="mb-2">همچنین میتوانید محصولات خود را بفروش برسانید</h1>
              <h2 class="subheading mb-4">فروشنده خود باشید</h2>
              <p><a href="{{route('signin_seller_show')}}" class="btn btn-primary">تبت نام</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>
</section>
