@extends('sellerDashboard.index')
@section('content')
<div class="col-md-9 col-sm-8">
    <div class="card">
     <div class="card-header" id="headingOne">
       <h5 class="mb-0 float-right">
          ارسال گزارش
       </h5>
     </div>

     <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
       <div class="card-body" style="padding: 0 !important;">


<form class="text-center p-5" action="#!">

<input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="نام و یا نام فروشگاه">

<input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="ایمیل">

<label class="text-right">موضوع</label>
<select class="browser-default custom-select mb-4">
   <option value="1" selected>خرابی سایت</option>
   <option value="2">عدم نمایش پروفایل و یا فروشگاه</option>
   <option value="3">واریز نشدن مبلغ برداشتی</option>
   <option value="4">شکایات مشتریان</option>
   <option value="4">بستن فروشگاه</option>
   <option value="4">درخواست رزومه</option>
   <option value="4">دیگر موارد</option>
</select>

<div class="form-group">
   <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="توضیح کوتاهی بدهید..."></textarea>
</div>

<button class="btn btn-info btn-block col-2" type="submit">ارسال گزارش</button>

</form>



       </div>
     </div>
   </div>
</div>
@endsection
