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
                        <th>نام</th>
                        <th>شماره موبایل</th>
                        <th>استان</th>
                        <th>شهر</th>
                        <th>کد پستی</th>
                        <th>آدرس</th>
                        <th>تاریخ تبت نام</th>
                        <th>تغییر</th>

                    </tr>
                    </thead>
                    <tbody>

                        @foreach ($all_users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->phone_number}}</td>
                        <td>{{$user->state}}</td>
                        <td>{{$user->city}}</td>
                        <td>{{$user->postal_code}}</td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>
                                <button type="button" class="btn btn-success btn-xs">ویرایش</button>
                                <a href="{{route('delete.user',$user->id)}}"><button type="button" class="btn btn-danger btn-xs">حذف</button></a>

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
