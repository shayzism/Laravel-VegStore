@extends('sellerDashboard.index')
@section('content')
<div class="col-md-9 col-sm-8">
    <div class="card con">
     <div class="card-header" id="headingOne">
       <h5 class="mb-0 float-right">
         درخواست برداشت
       </h5>
     </div>

     <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
       <div class="card-body" style="padding: 0 !important;">


        <div class="alert alert-color text-right ml-2 mr-2 mt-3" style="line-height: 10px;" role="alert">
           <div class="wallet-seller">
                   <p><strong> موجودی فعلی: </strong></p>
                   <span> 200 تومان </span>
           </div>
           <div class="wallet-seller">
                   <p><strong>حداقل مقدار دریافت وجه: </strong></p>
                   <span> 10 تومان </span>
           </div>
           <div class="wallet-seller">
                   <p><strong>درخواست وجه شما پیگیری خواهد شد تا: </strong></p>
                   <span> حداقل 2روز </span>
           </div>
        </div>
        <div class="text-right">
           <ul class="wallet-seller-options">
           <a href="#"><li>درخواست برداشت</li></a>
           <a href="#"><li>درخواست های تاکیید شده</li></a>
           <a href="#"><li>درخواست های لغو شده</li></a>
           </ul>
       </div>
       <hr>

      {{-- content --}}

       @yield('withdraw-content')

       {{-- end content --}}





       </div>
     </div>
   </div>
     </div>

@endsection
