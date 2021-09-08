@extends('admin.index')
@section('content')


<div class="right_col" role="main">
        <!-- top tiles -->
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>فروشندگان</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"
                       cellspacing="10" width="100%">
                        <thead>
                        <tr>
                            <th>نام</th>
                            <th>وضعیت فروشگاه</th>
                            <th>آدرس</th>
                            <th>شماره تماس</th>
                            <th>فروش امروز</th>
                            <th>فروش کل</th>

                        </tr>
                        </thead>


                        <tbody>
                        <tr>
                            <td>علیرضا نور قربانی</td>
                            <td ><button type="button" class="btn btn-round btn-success">باز</button></td>
                            <td>رامسر همون بغل مقلا</td>
                            <td>09356623152</td>
                            <td>12000</td>
                            <td>123220</td>
                        </tr>
                        <tr>
                            <td>علیرضا نور قربانی</td>
                            <td ><button type="button" class="btn btn-round btn-danger">بسته</button></td>
                            <td>رامسر همون بغل مقلا</td>
                            <td>09356623152</td>
                            <td>112</td>
                            <td>11000</td>
                        </tr>
                        <tr>
                            <td>شایان رضی</td>
                            <td ><button type="button" class="btn btn-round btn-danger">بسته</button></td>
                            <td>رامسر همون بغل مقلا</td>
                            <td>09356623152</td>
                            <td>2000</td>
                            <td>10200</td>
                        </tr>
                        <tr>
                            <td>علیرضا نور قربانی</td>
                            <td ><button type="button" class="btn btn-round btn-danger">بسته</button></td>
                            <td>رامسر همون بغل مقلا</td>
                            <td>09356623152</td>
                            <td>0</td>
                            <td>1000</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>





@endsection
