@extends('sellerDashboard.withdraw.index')
@section('withdraw-content')
<div class="alert alert-color text-right ml-2 mr-2 mt-3" style="line-height: 10px;" role="alert">
    <p><strong>با عرض پوزش هیچ تراکنشی یافت نشد!</strong></p>
    </div>

    <form>
        <div class="col-md-5 mr-4">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
                <label style="align-self: center;" class="ml-3" for="inlineFormInputGroup">مقدار برداشت</label>
                <div class="input-group-text">تومان</div>
              </div>
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="0.00">
            </div>
          </div>
        <div class="form-group col-md-5" style="display: flex;">
          <label class="col-md-4" style="align-self: center;" >روش برداشت</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>انتقال بانکی</option>
            <option>نقدی</option>
            <option>پی پال</option>

          </select>
        </div>

      </form>
@endsection
