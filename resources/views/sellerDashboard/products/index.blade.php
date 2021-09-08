@extends('sellerDashboard.index')
@section('content')
    <div class="col-md-9 col-sm-8">
        @include('notification')
    <div class="card">
     <div class="card-header" id="headingOne">
       <h5 class="mb-0 float-right">
          محصولات شما
       </h5>
       <a class="btn btn-success float-left" href="#new-Product"><i class="fa fa-plus-circle"></i> ایجاد محصول جدید</a>
     </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body" style="padding: 0 !important;">

                <table id="example" class="row-border text-right table-responsive-lg" style="width:100%">
                    <thead >
                    <tr>
                        <th scope="col">شماره کالا</th>
                        <th scope="col">عکس</th>
                        <th scope="col">نام</th>
                        <th scope="col">وضعیت</th>
                        <th scope="col">قیمت</th>
                        <th scope="col">بیشتر</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($all_product as $product)
                    <tr>
                        <th scope="row"><a style="border-bottom: 1px dashed #1ca2bd;" href="#">{{$product->id}}</a></th>
                        <td><img class="img-dash" src="{{$product->image}}"></td>
                        <td>{{$product->title}}</td>
                        <td><span class="badge badge-danger">ناموجود</span></td>
                        <td><b>{{$product->price}}</b> تومان</td>
                        <td>
                            <ul class="more-options">
                                <a  class="ml-2" href="#"><li>ویرایش</li></a>
                                <a class="ml-2" href="{{route('delete.product',$product->id)}}"><li>حذف</li></a>
                                <a href="#"><li>مشاهده</li> </a>

                            </ul>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>

                </table>



            </div>
        </div>


</div>











<br>
   <div id="new-Product" class="card mt-4">
       <div class="card-header" id="headingOne">
         <h5 class="mb-0 float-right">
            ایجاد محصول جدید
         </h5>
       </div>

       <form class="container-new-kala container text-right" action="{{route('image.upload.post')}}" method="post" enctype="multipart/form-data">
           @csrf
           <div class="col-md-9 mb-3" style="margin-right: -15px;">
               <label>نام محصول</label>
               <input type="text" class="form-control"required name="title" id="title">

             </div>

           <div class="form-row">
               <div class="col-md-4 mb-3">
                   <label for="price">قیمت</label>
                   <div class="input-group">
                     <div class="input-group-prepend">
                       <span class="input-group-text">تومان</span>
                     </div>
                     <input type="text" class="form-control" name="price" id="price" aria-describedby="validationTooltipUsernamePrepend" required>
                   </div>
                 </div>
{{--               <div class="col-md-4 mb-3">--}}
{{--                   <label for="validationTooltipUsername">قیمت با تخفیف</label>--}}
{{--                   <div class="input-group">--}}
{{--                     <div class="input-group-prepend">--}}
{{--                       <span class="input-group-text">تومان</span>--}}
{{--                     </div>--}}
{{--                     <input type="text" class="form-control" aria-describedby="validationTooltipUsernamePrepend" required>--}}

{{--                   </div>--}}
{{--               </div>--}}
             </div>
           <div class="form-row">
               <div class="col-md-4 mb-3">
                   <label for="quantity">تعداد موجودی انبار</label>
                   <div class="input-group">
                       <div class="input-group-prepend">
                           <span class="input-group-text">کیلو</span>
                       </div>
                       <input type="text" class="form-control" name="quantity" id="quantity" aria-describedby="validationTooltipUsernamePrepend" required>
                   </div>
               </div>
           </div>
           <div class="form-group">
             <div class="col-md-5" style="margin-right: -15px;">
             <label >انتخاب نوع محصول</label>
             <select class="form-control" name="category" id="category">
                 @foreach($all_cats as $cat)
                    <option>{{$cat->name}}</option>
                 @endforeach
             </select>
           </div>
           </div>


           <div class="form-group">
             <label for="description">توضیح مختصری در مورد این محصول بدهید...</label>
             <textarea class="form-control" id="description" name="description" rows="2"></textarea>
           </div>

           <div class="form-group">
               <label style="margin-top: 5px">انتخاب عکس دلخواه</label>
               <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
               <p style="margin-right: 15px" class="btn btn-sm btn-info"><label for="file" style="cursor: pointer;">عکس مورد نظر را انتخاب کنید...</label></p>
               <div class="text-center" style="text-align-last: right;">
                   <p><img id="output" class="img-choose"></p>
               </div>
             </div>
         <div class="mb-5" style="align-self: center;">
             <button type="submit" class="btn btn-success"> ایجاد محصول</button>
       </div>
         </form>
    </div>
</div>

     @endsection
