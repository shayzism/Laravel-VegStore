@extends('admin.index')
@section('content')

<div class="right_col" role="main">
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>درخواست مشتریان
            </h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>

                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <div class="x_content">

            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                    <tr class="headings">
                        <th class="column-title">#</th>
                        <th class="column-title">نام</th>
                        <th class="column-title">تاریخ سفارش</th>
                        <th class="column-title">محصول</th>
                        <th class="column-title">فروشگاه</th>
                        <th class="column-title">وضعیت</th>
                        <th class="column-title">تعداد</th>
                        <th class="column-title no-link last"><span class="nobr">ارسال سفارش</span>
                        </th>

                    </tr>
                    </thead>

                    <tbody>
                    <tr class="even pointer">
                        <td class=" ">1</td>
                        <td class=" ">جعفر</td>
                        <td class=" ">May 23, 2014 11:47:56 PM</td>
                        <td class=" ">سبزی </td>
                        <td class=" ">John Blank L</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">2</td>
                        <td class=" last"><a href="#"><button type="button" class="btn btn-success btn-xs">ارسال</button></a>
                        </td>
                    </tr>
                    <tr class="odd pointer">
                        <td class=" ">2</td>
                        <td class=" ">121000039</td>
                        <td class=" ">May 23, 2014 11:30:12 PM</td>
                        <td class=" ">121000208</td>
                        <td class=" ">John Blank L</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">10</td>
                        <td class=" last"><a href="#"><button type="button" class="btn btn-success btn-xs">ارسال</button>
                        </a>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
