@extends('sellerDashboard.withdraw.index')
@section('withdraw-content')
<div class="alert alert-color text-right ml-2 mr-2 mt-3" style="line-height: 10px;" role="alert">
    <p><strong>با عرض پوزش هیچ تراکنشی یافت نشد!</strong></p>
    </div>

          <table class="table  table-responsive-md ">
            <thead class="thead-light ">
              <tr>
                <th scope="col">#</th>
                <th scope="col">مقدار</th>
                <th scope="col">روش</th>
                <th scope="col">تاریخ</th>
                <th scope="col">یادداشت</th>

            </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>12.000 تومان</td>
                <td>نقدی</td>
                <td>12.02.1389</td>
                <td></td>
              </tr>
              <tr>
                    <th scope="row">2</th>
                    <td>120.000 تومان</td>
                    <td>انتقال بانکی</td>
                    <td>22.10.1399</td>
                    <td>با سس اضافه</td>
                  </tr>
                  <tr>
                        <th scope="row">3</th>
                        <td>952.000 تومان</td>
                        <td>نقدی</td>
                        <td>23.04.1399</td>
                        <td>بدهکاری ماه قبل</td>
                      </tr>
            </tbody>
          </table>
@endsection
