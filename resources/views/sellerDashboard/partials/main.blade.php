@extends('sellerDashboard.index')
@section('content')
<div class="col-md-9 col-sm-8">

    <div class="container text-left">
        <div class="row">
        <div class="col-md-3">
          <div class="card-counter primary">
            <i class="fa fa-code-fork"></i>
            <span class="count-numbers">12</span>
            <span class="count-name">بازدید پروفایل شما</span>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card-counter danger">
            <i class="fa fa-ticket"></i>
            <span class="count-numbers">599</span>
            <span class="count-name">فروش کل</span>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card-counter success">
            <i class="fa fa-database"></i>
            <span class="count-numbers">6875</span>
            <span class="count-name">درآمد</span>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card-counter info">
            <i class="fa fa-product-hunt"></i>
            <span class="count-numbers">35</span>
            <span class="count-name">محصولات</span>
          </div>
        </div>
      </div>
    </div>

<hr>
    <div class="card">
      <div class="card-header" id="headingOne">
        <h5 class="mb-0 float-right">
           آخرین سفارشات <small>(5 سفارش اخیر)</small>
        </h5>
      </div>

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body" style="padding: 0 !important;">

            <table class="table text-right table-responsive-lg">
                <thead class="thead-primary">
                  <tr>
                    <th scope="col">شماره سفارش</th>
                    <th scope="col">تاریخ</th>
                    <th scope="col">وضعیت</th>
                    <th scope="col">محصول</th>
                    <th scope="col">مشتری</th>
                    <th scope="col">بیشتر</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><a href="#">5122</a></th>
                    <td>12 فروردین 1399</td>
                    <td><span class="badge badge-success">ارسال شده</span></td>
                    <td>3 ترشی سیر , 2 کیلو سبزی کوکو</td>
                    <td>محمد حسینی</td>
                    <td><a class="btn btn-primary" href="#"><i class="fa fa-angle-double-left"></i></a></td>
                  </tr>
                  <tr>
                      <th scope="row">2341</th>
                      <td>12 فروردین 1399</td>
                      <td><span class="badge badge-danger">لغو شده</span></td>
                      <td>2 ترشی لیته</td>
                      <td>علیرضا نور قربانی</td>
                      <td><a class="btn btn-primary" href="#"><i class="fa fa-angle-double-left"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">1220</th>
                        <td>12 فروردین 1399</td>
                        <td><span class="badge badge-info">درحال انجام</span></td>
                        <td>30 کیلو فلفل دلمه</td>
                        <td>شایان رضی </td>
                        <td><a class="btn btn-primary" href="#"><i class="fa fa-angle-double-left"></i></a></td>
                      </tr>
                </tbody>
              </table>
        </div>
      </div>
    </div>


    <div class="row mt-3 text-right">
        <div class="col-sm-6">
          <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table table-responsive-lg table-bordered">
                        <thead class="thead-primary">
                          <tr>
                            <th scope="col"><i class="fa fa-line-chart"></i> فروش کل </th>
                            <th scope="col">درآمد</th>
                            <th scope="col">بازدید پروفایل شما</th>

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th>124.320.000 تومان</th>
                            <td>120.000.000 تومان</td>
                            <td>12</td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                  <table class="table table-responsive-lg table-bordered">
                      <thead class="thead-primary">
                        <tr>
                          <th scope="col"><i class="fa fa-shopping-bag"></i> مجموع محصولات</th>
                          <th scope="col">فروخته شده</th>
                          <th scope="col">موجود</th>
                          <th scope="col">ناموجود</th>


                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>142</th>
                          <td>100</td>
                          <td>85</td>
                          <td>43</td>
                        </tr>
                      </tbody>
                    </table>
              </div>
            </div>
        </div>

        </div>


        <div class="col-sm-6">
            <div class="card">
                <div class="card-header" style="color: black;">
                    <i class="fa fa-exclamation-triangle" style="color: crimson;"></i> آخرین اطلاعیه
                </div>
                <div class="body-dash">
                    <button type="button" style="float: left;" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="date-dash">
                      <h5 class="title-dash">نقض قوانین!</h5>
                      <p class="mr-3">13 تیر 1388 </p>
                  </div>
                  <p class="text-dash">فروشگاه تا اطلاع تانوی به دلیل رعایت نکردن بهداشت بسته میباشد!</p>
                  <hr>
                </div>


                <div class="body-dash">
                  <button type="button" style="float: left;" class="close" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                    <div class="date-dash">
                        <h5 class="title-dash">نقض قوانین!</h5>
                        <p class="mr-3">13 تیر 1388 </p>
                    </div>
                    <p class="text-dash">فروشگاه تا اطلاع تانوی به دلیل رعایت نکردن بهداشت بسته میباشد!</p>
                    <hr>
                  </div>



                  <div class="body-dash">
                    <button type="button" style="float: left;" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                      <div class="date-dash">
                          <h5 class="title-dash">نقض قوانین!</h5>
                          <p class="mr-3">13 تیر 1388 </p>
                      </div>
                      <p class="text-dash">فروشگاه تا اطلاع تانوی به دلیل رعایت نکردن بهداشت بسته میباشد!</p>
                      <hr>
                    </div>

              </div>
        </div>
    </div>
    <br>

    <div class="card mb-5">
      <div class="card-header bg-white">
        نمودار فروش این ماه
      </div>
      <div class="card-body">
        <div style="width:100%;">
          <canvas id="canvas"></canvas>
        </div>
      </div>
    </div>





  </div>
  @endsection
