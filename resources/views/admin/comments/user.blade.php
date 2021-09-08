@extends('admin.index')
@section('content')

<div class="right_col" role="main">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>نظرات اخیر کاربران
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
                <ul class="list-unstyled msg_list">
                    <li>
                        <a>
                    <span class="image">
                      <img src="admin/build/images/img.jpg" alt="img"/>
                    </span>
                            <span>
                      <span><b>مرتضی کریمی</b></span>
                      <span><button type="button" class="btn btn-success btn-xs" data-toggle="modal"
                        data-target=".bs-example-modal-lg">جواب دادن</button>
                      </span>
                      <span><button type="button" class="btn btn-danger btn-xs">حذف نظر</button>
                      </span>
                    </span>
                            <span class="message">
                      فیلمای فستیوال فیلمایی که اجرا شده یا راجع به لحظات مرده ایه که فیلمسازا میسازن. آنها جایی بودند که...
                    </span>
                        </a>
                    </li>
                    <li>
                        <a>
                    <span class="image">
                      <img src="admin/build/images/img.jpg" alt="img"/>
                    </span>
                            <span>
                      <span><b>مرتضی کریمی</b></span>
                      <span><button type="button" class="btn btn-success btn-xs" data-toggle="modal"
                        data-target=".bs-example-modal-lg">جواب دادن</button>
                      </span>
                      <span><button type="button" class="btn btn-danger btn-xs">حذف نظر</button>
                      </span>
                    </span>
                            <span class="message">
                      فیلمای فستیوال فیلمایی که اجرا شده یا راجع به لحظات مرده ایه که فیلمسازا میسازن. آنها جایی بودند که...
                    </span>
                        </a>
                    </li>
                    <li>
                        <a>
                    <span class="image">
                      <img src="admin/build/images/img.jpg" alt="img"/>
                    </span>
                            <span>
                            <span><b>مرتضی کریمی</b></span>
                            <span><button type="button" class="btn btn-success btn-xs" data-toggle="modal"
                              data-target=".bs-example-modal-lg">جواب دادن</button>
                      </span>
                      <span><button type="button" class="btn btn-danger btn-xs">حذف نظر</button>
                      </span>
                    </span>
                            <span class="message">
                      فیلمای فستیوال فیلمایی که اجرا شده یا راجع به لحظات مرده ایه که فیلمسازا میسازن. آنها جایی بودند که...
                    </span>
                        </a>
                    </li>
                    <li>
                        <a>
                    <span class="image">
                      <img src="admin/build/images/img.jpg" alt="img"/>
                    </span>
                            <span>
                      <span><b>مرتضی کریمی</b></span>
                      <span><button type="button" class="btn btn-success btn-xs" data-toggle="modal"
                        data-target=".bs-example-modal-lg">جواب دادن</button>
                      </span>
                      <span><button type="button" class="btn btn-danger btn-xs">حذف نظر</button>
                      </span>
                    </span>
                            <span class="message">
                      فیلمای فستیوال فیلمایی که اجرا شده یا راجع به لحظات مرده ایه که فیلمسازا میسازن. آنها جایی بودند که...
                    </span>
                        </a>
                      </li>
                </ul>
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-xl">
                      <div class="modal-content">

                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span
                                      aria-hidden="true">×</span>
                              </button>
                              <h4 class="modal-title" id="myModalLabel">پاسخ</h4>
                          </div>
                          <div class="modal-body">

                            <div class="row">
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                  <div class="x_panel">

                                      <div class="x_content">
                                          <br/>
                                          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                              <div class="form-group">
                                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ارسال پیام به
                                                  </label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                      <input type="text" id="first-name" required="required"
                                                             class="form-control col-md-7 col-xs-12" disabled="disable"
                                                             placeholder="فروشگاه دواده">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">
                                                      موضوع <span class="required">*</span>
                                                  </label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                      <input type="text" id="last-name" name="last-name" required="required"
                                                             class="form-control col-md-7 col-xs-12">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">متن
                                                       </label>
                                                  <div class="col-md-8 col-sm-8 col-xs-12">
                                                    <textarea class="resizable_textarea form-control"></textarea>
                                                  </div>
                                              </div>



                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>




                          </div>
                          <div class="modal-footer ">
                              <button type="button" class="btn btn-success" data-dismiss="modal">ارسال</button>
                          </div>

                      </div>
                  </div>
              </div>
            </div>
        </div>

</div>
</div>
@endsection
