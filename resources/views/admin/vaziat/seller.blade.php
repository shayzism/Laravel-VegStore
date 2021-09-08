@extends('admin.index')
@section('content')


<div class="right_col" role="main">
        <!-- top tiles -->
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>مشتریان</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>نام</th>
                            <th>وضعیت خرید</th>
                            <th>آدرس</th>
                            <th>شماره تماس</th>
                            <th>تاریخ خرید</th>
                            <th>کالای خریداری شده</th>

                        </tr>
                        </thead>


                        <tbody>
                        <tr>
                            <td>علیرضا نور قربانی</td>
                            <td ><button type="button" class="btn btn-round btn-success">موفق</button></td>
                            <td>رامسر همون بغل مقلا</td>
                            <td>09356623152</td>
                            <td>2011/04/25</td>
                            <td>سبزی خوردن</td>
                        </tr>
                        <tr>
                            <td>علیرضا نور قربانی</td>
                            <td ><button type="button" class="btn btn-round btn-danger">لغو شده</button></td>
                            <td>رامسر همون بغل مقلا</td>
                            <td>09356623152</td>
                            <td>2011/04/25</td>
                            <td>سبزی خوردن</td>
                        </tr>
                        <tr>
                            <td>شایان رضی</td>
                            <td ><button type="button" class="btn btn-round btn-info">درحال ارسال</button></td>
                            <td>رامسر همون بغل مقلا</td>
                            <td>09356623152</td>
                            <td>2011/04/25</td>
                            <td>سبزی خوردن</td>
                        </tr>
                        <tr>
                            <td>علیرضا نور قربانی</td>
                            <td ><button type="button" class="btn btn-round btn-warning">در حال بررسی</button></td>
                            <td>رامسر همون بغل مقلا</td>
                            <td>09356623152</td>
                            <td>2011/04/25</td>
                            <td>سبزی خوردن</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection
