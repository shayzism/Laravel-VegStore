@extends('admin.index')
@section('content')

    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>دسته بندی ها
                    </h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="جست و جو برای...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">برو!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table class="table table-striped پروژه ها">
                                <thead>
                                <tr>
                                    <th style="width: 1%">#</th>
                                    <th style="width: 20%">نام دسته</th>
                                    <th>تعداد محصول</th>
                                    <th style="width: 20%">#ویرایش</th>
                                </tr>
                                </thead>
                                @foreach($cat as $cats)
                                <tbody>
                                <tr>
                                    <td>{{$cats->id}}</td>
                                    <td>
                                        <a>{{$cats->name}}</a>
                                        <br/>
                                        <small>{{$cats->created_at}}</small>
                                    </td>
                                    </td>

                                    <td>
                                        <button type="button" class="btn btn-success btn-xs">20</button>
                                    </td>
                                    <td class="nowrap">
                                        <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> ویرایش </a>
                                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> حذف </a>
                                    </td>
                                </tr>
                                </tbody>
                                    @endforeach
                            </table>
                            <!-- end project list -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
