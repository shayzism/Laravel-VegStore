<div class="col-md-3 left_col hidden-print">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{route('admin.home')}}" class="site_title"><i class="fa fa-paw"></i> <span>پنل ادمین</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{asset('admin/build/images/img.jpg')}}" alt="profile_picture" class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>خوش آمدید,</span>
                <h2>{{Auth::guard('admin')->user()->name}}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br/>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-mail-reply-all"></i> وضعیت فروش <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="/req"> مشتری</a></li>
                            <li><a href="/reqq"> فروشنده</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-user"></i> درخواست ها <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/reqqq">درخواست مشتری</a></li>
                            <li><a href="/reqqqq">درخواست فروشنده</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-user"></i> کاربران <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('admin.show.users')}}">نمایش کاربران</a></li>
                            <li><a href="{{route('admin.create.users')}}">ایجاد کاربر جدید</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-male"></i> فروشندگان <span
                            class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('admin.show.sellers')}}">نمایش فروشندگان</a></li>
                            <li><a href="{{route('admin.create.sellers')}}">ایجاد فروشنده جدید</a></li>

                        </ul>
                    </li>
                    <li><a><i class="fa fa-envelope"></i> پیام ها <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/cm">پیام فروشندگان</a></li>
                            <li><a href="/cmm">پیام کاربران</a></li>
                            <li><a href="tables_dynamic.html">نظرات تایید نشده</a></li>

                        </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart-o"></i> چارت ها</a></li>
                    <li><a><i class="fa fa-envelope"></i> دسته بندی محصولات <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('show-categories')}}">مشاهده دسته بندی ها</a></li>
                            <li><a href="{{route('add-categories')}}">ایجاد دسته جدید</a></li>
                        </ul>
                    </li>
                </ul>
            </div>


        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="تنظیمات">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="تمام صفحه" onclick="toggleFullScreen();">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="قفل" class="lock_btn">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="خروج" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
