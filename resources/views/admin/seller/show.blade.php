@extends('admin.index')
@section('content')

<div class="right_col" role="main">

<div class="col-md-12 col-sm-10 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>نمایش کاربران</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>نام فروشگاه</th>
                        <th>شماره تماس</th>
                        <th>آدرس</th>
                        <th>تاریخ تبت نام</th>
                        <th>تغییر</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td> شایان سبزی</td>
                        <td>09362438001</td>
                        <td>تهران</td>
                        <td>2012/12/2</td>
                        <td>
                                <button type="button" class="btn btn-success btn-xs">ویرایش</button>
                                <button type="button" class="btn btn-danger btn-xs">حذف</button>

                        </td>

                    </tr>
                    @foreach($all_sellers as $sellers)
                    <tr>
                            <th scope="row">{{$sellers->id}}</th>
                            <td>{{$sellers->name}}</td>
                            <td>{{$sellers->phone_number}}</td>
                            <td>address</td>
                            <td>{{$sellers->created_at}}</td>
                            <td>
                                    <button type="button" class="btn btn-success  btn-xs">ویرایش</button>
                                <a href="{{route('delete.seller',$sellers->id)}}"><button type="button" class="btn btn-danger btn-xs">حذف</button></a>

                            </td>
                    </tr>
@endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection
