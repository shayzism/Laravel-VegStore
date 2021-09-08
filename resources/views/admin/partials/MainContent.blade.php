@extends('admin.index')
@section('content')

<div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row tile_count">
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> تعداد کاربران</span>
                <div class="count">2500</div>
                <span class="count_bottom"><i class="green">4% </i> از هفته گذشته</span>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-clock-o"></i> مشتریان جدید</span>
                <div class="count">123</div>
                <span class="count_bottom"><i class="green"><i
                        class="fa fa-sort-asc"></i>3% </i> از هفته گذشته</span>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> مجموع سود بدست آمده</span>
                <div class="count green">2,5%</div>
                <span class="count_bottom"><i class="green"><i
                        class="fa fa-sort-asc"></i>34% </i> از هفته گذشته</span>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> محصولات فروخته شده</span>
                <div class="count">4,567</div>
                <span class="count_bottom"><i class="red"><i
                        class="fa fa-sort-desc"></i>12% </i> امروز</span>
            </div>

        </div>
        <!-- /top tiles -->

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="dashboard_graph">

                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>نمودار سود دهی
                                        <small>هفته اخیر</small>
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
                                    <canvas id="lineChart"></canvas>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>نمودار فروش
                                        <small>هفته اخیر</small>
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
                                    <canvas id="mybarChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
        <br/>

        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>آخرین نظرات ارسال شده</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="dashboard-widget-content">

                            <ul class="list-unstyled timeline widget">
                                <li>
                                    <div class="block">
                                        <div class="block_content">
                                            <h2 class="title">
                                                <a>چه کسی نیاز به یک پنل مدیریت خوب دارد؟</a>
                                            </h2>
                                            <div class="byline">
                                                <span>13 ساعت پیش</span> توسط <a>مرتضی کریمی</a>
                                            </div>
                                            <p class="excerpt">این یک متن نمونه برای بخش داشبورد پنل مدیریت پارسی
                                                شده ی Gentelella می باشد که برای نمایش امکانات آن نوشته شده است و
                                                هیچ معنا و مفهوم خاصی ندارد… <a>بیشتر&nbsp;بخوانید</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="block">
                                        <div class="block_content">
                                            <h2 class="title">
                                                <a>چه کسی نیاز به یک پنل مدیریت خوب دارد؟</a>
                                            </h2>
                                            <div class="byline">
                                                <span>13 ساعت پیش</span> توسط <a>مرتضی کریمی</a>
                                            </div>
                                            <p class="excerpt">این یک متن نمونه برای بخش داشبورد پنل مدیریت پارسی
                                                شده ی Gentelella می باشد که برای نمایش امکانات آن نوشته شده است و
                                                هیچ معنا و مفهوم خاصی ندارد… <a>بیشتر&nbsp;بخوانید</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="block">
                                        <div class="block_content">
                                            <h2 class="title">
                                                <a>چه کسی نیاز به یک پنل مدیریت خوب دارد؟</a>
                                            </h2>
                                            <div class="byline">
                                                <span>13 ساعت پیش</span> توسط <a>مرتضی کریمی</a>
                                            </div>
                                            <p class="excerpt">این یک متن نمونه برای بخش داشبورد پنل مدیریت پارسی
                                                شده ی Gentelella می باشد که برای نمایش امکانات آن نوشته شده است و
                                                هیچ معنا و مفهوم خاصی ندارد… <a>بیشتر&nbsp;بخوانید</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="block">
                                        <div class="block_content">
                                            <h2 class="title">
                                                <a>چه کسی نیاز به یک پنل مدیریت خوب دارد؟</a>
                                            </h2>
                                            <div class="byline">
                                                <span>13 ساعت پیش</span> توسط <a>مرتضی کریمی</a>
                                            </div>
                                            <p class="excerpt">این یک متن نمونه برای بخش داشبورد پنل مدیریت پارسی
                                                شده ی Gentelella می باشد که برای نمایش امکانات آن نوشته شده است و
                                                هیچ معنا و مفهوم خاصی ندارد… <a>بیشتر&nbsp;بخوانید</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-8 col-sm-8 col-xs-12">



                <div class="row">


                    <!-- Start to do list -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>فهرست کارها
                                    <small>برای بقیه ادمین ها</small>
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

                                <div class="">
                                    <ul class="to_do">
                                        <li>
                                            <p>
                                                <input type="checkbox" class="flat"> ملاقات با مشتری جدید </p>
                                        </li>
                                        <li>
                                            <p>
                                                <input type="checkbox" class="flat"> ایجاد ایمیل برای کارآموز جدید
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <input type="checkbox" class="flat"> آیا بخش IT پرینتر شبکه را تعمیر
                                                کرد</p>
                                        </li>
                                        <li>
                                            <p>
                                                <input type="checkbox" class="flat"> کپی نسخه های پشتیبان به محل
                                                offsite</p>
                                        </li>
                                        <li>
                                            <p>
                                                <input type="checkbox" class="flat"> خرید مواد خوراکی برای خانه</p>
                                        </li>
                                        <li>
                                            <p>
                                                <input type="checkbox" class="flat"> ملاقات با مشتری جدید </p>
                                        </li>
                                        <li>
                                            <p>
                                                <input type="checkbox" class="flat"> ایجاد ایمیل برای کارآموز جدید
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <input type="checkbox" class="flat"> آیا بخش IT پرینتر شبکه را تعمیر
                                                کرد</p>
                                        </li>
                                        <li>
                                            <p>
                                                <input type="checkbox" class="flat"> کپی نسخه های پشتیبان به محل
                                                offsite</p>
                                        </li>
                                        <li>
                                            <p>
                                                <input type="checkbox" class="flat"> خرید مواد خوراکی برای خانه</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End to do list -->

                </div>
            </div>
        </div>
    </div>
@endsection
