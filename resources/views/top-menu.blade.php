@extends('layouts.app')
@push('css')

@endpush
@section('navbar')
    <div id="navbar" class="navbar navbar-default    navbar-collapse       h-navbar ace-save-state">
        <div class="navbar-container ace-save-state" id="navbar-container">
            <div class="navbar-header pull-left">
                <a href="index.html" class="navbar-brand">
                    <small>
                        <i class="fa fa-leaf"></i>
                        Ace Admin
                    </small>
                </a>

                <button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button"
                        data-toggle="collapse" data-target=".navbar-buttons,.navbar-menu">
                    <span class="sr-only">Toggle user menu</span>

                    <img src="assets/images/avatars/user.jpg" alt="Jason's Photo"/>
                </button>

                <button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse"
                        data-target="#sidebar">
                    <span class="sr-only">Toggle sidebar</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="navbar-buttons navbar-header pull-right  collapse navbar-collapse" role="navigation">
                <ul class="nav ace-nav">
                    <li class="transparent dropdown-modal">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                        </a>

                        <div class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                            <div class="tabbable">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a data-toggle="tab" href="#navbar-tasks">
                                            Tasks
                                            <span class="badge badge-danger">4</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" href="#navbar-messages">
                                            Messages
                                            <span class="badge badge-danger">5</span>
                                        </a>
                                    </li>
                                </ul><!-- .nav-tabs -->

                                <div class="tab-content">
                                    <div id="navbar-tasks" class="tab-pane in active">
                                        <ul class="dropdown-menu-right dropdown-navbar dropdown-menu">
                                            <li class="dropdown-content">
                                                <ul class="dropdown-menu dropdown-navbar">
                                                    <li>
                                                        <a href="#">
                                                            <div class="clearfix">
                                                                <span class="pull-left">Software Update</span>
                                                                <span class="pull-right">65%</span>
                                                            </div>

                                                            <div class="progress progress-mini">
                                                                <div style="width:65%" class="progress-bar"></div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <div class="clearfix">
                                                                <span class="pull-left">Hardware Upgrade</span>
                                                                <span class="pull-right">35%</span>
                                                            </div>

                                                            <div class="progress progress-mini">
                                                                <div style="width:35%"
                                                                     class="progress-bar progress-bar-danger"></div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <div class="clearfix">
                                                                <span class="pull-left">Unit Testing</span>
                                                                <span class="pull-right">15%</span>
                                                            </div>

                                                            <div class="progress progress-mini">
                                                                <div style="width:15%"
                                                                     class="progress-bar progress-bar-warning"></div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <div class="clearfix">
                                                                <span class="pull-left">Bug Fixes</span>
                                                                <span class="pull-right">90%</span>
                                                            </div>

                                                            <div class="progress progress-mini progress-striped active">
                                                                <div style="width:90%"
                                                                     class="progress-bar progress-bar-success"></div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="dropdown-footer">
                                                <a href="#">
                                                    See tasks with details
                                                    <i class="ace-icon fa fa-arrow-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- /.tab-pane -->

                                    <div id="navbar-messages" class="tab-pane">
                                        <ul class="dropdown-menu-right dropdown-navbar dropdown-menu">
                                            <li class="dropdown-content">
                                                <ul class="dropdown-menu dropdown-navbar">
                                                    <li>
                                                        <a href="#">
                                                            <img src="assets/images/avatars/avatar.png"
                                                                 class="msg-photo" alt="Alex's Avatar"/>
                                                            <span class="msg-body">
																	<span class="msg-title">
																		<span class="blue">Alex:</span>
																		Ciao sociis natoque penatibus et auctor ...
																	</span>

																	<span class="msg-time">
																		<i class="ace-icon fa fa-clock-o"></i>
																		<span>a moment ago</span>
																	</span>
																</span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <img src="assets/images/avatars/avatar3.png"
                                                                 class="msg-photo" alt="Susan's Avatar"/>
                                                            <span class="msg-body">
																	<span class="msg-title">
																		<span class="blue">Susan:</span>
																		Vestibulum id ligula porta felis euismod ...
																	</span>

																	<span class="msg-time">
																		<i class="ace-icon fa fa-clock-o"></i>
																		<span>20 minutes ago</span>
																	</span>
																</span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <img src="assets/images/avatars/avatar4.png"
                                                                 class="msg-photo" alt="Bob's Avatar"/>
                                                            <span class="msg-body">
																	<span class="msg-title">
																		<span class="blue">Bob:</span>
																		Nullam quis risus eget urna mollis ornare ...
																	</span>

																	<span class="msg-time">
																		<i class="ace-icon fa fa-clock-o"></i>
																		<span>3:15 pm</span>
																	</span>
																</span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <img src="assets/images/avatars/avatar2.png"
                                                                 class="msg-photo" alt="Kate's Avatar"/>
                                                            <span class="msg-body">
																	<span class="msg-title">
																		<span class="blue">Kate:</span>
																		Ciao sociis natoque eget urna mollis ornare ...
																	</span>

																	<span class="msg-time">
																		<i class="ace-icon fa fa-clock-o"></i>
																		<span>1:33 pm</span>
																	</span>
																</span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <img src="assets/images/avatars/avatar5.png"
                                                                 class="msg-photo" alt="Fred's Avatar"/>
                                                            <span class="msg-body">
																	<span class="msg-title">
																		<span class="blue">Fred:</span>
																		Vestibulum id penatibus et auctor  ...
																	</span>

																	<span class="msg-time">
																		<i class="ace-icon fa fa-clock-o"></i>
																		<span>10:09 am</span>
																	</span>
																</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="dropdown-footer">
                                                <a href="inbox.html">
                                                    See all messages
                                                    <i class="ace-icon fa fa-arrow-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- /.tab-pane -->
                                </div><!-- /.tab-content -->
                            </div><!-- /.tabbable -->
                        </div><!-- /.dropdown-menu -->
                    </li>

                    <li class="light-blue dropdown-modal user-min">
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            <img class="nav-user-photo" src="assets/images/avatars/user.jpg" alt="Jason's Photo"/>
                            <span class="user-info">
									<small>Welcome,</small>
									Jason
								</span>

                            <i class="ace-icon fa fa-caret-down"></i>
                        </a>

                        <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-cog"></i>
                                    Settings
                                </a>
                            </li>

                            <li>
                                <a href="profile.html">
                                    <i class="ace-icon fa fa-user"></i>
                                    Profile
                                </a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-power-off"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <nav role="navigation" class="navbar-menu pull-left collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Overview
                            &nbsp;
                            <i class="ace-icon fa fa-angle-down bigger-110"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-light-blue dropdown-caret">
                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-eye bigger-110 blue"></i>
                                    Monthly Visitors
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-user bigger-110 blue"></i>
                                    Active Users
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-cog bigger-110 blue"></i>
                                    Settings
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            <i class="ace-icon fa fa-envelope"></i>
                            Messages
                            <span class="badge badge-warning">5</span>
                        </a>
                    </li>
                </ul>

                <form class="navbar-form navbar-left form-search" role="search">
                    <div class="form-group">
                        <input type="text" placeholder="search"/>
                    </div>

                    <button type="button" class="btn btn-mini btn-info2">
                        <i class="ace-icon fa fa-search icon-only bigger-110"></i>
                    </button>
                </form>
            </nav>
        </div><!-- /.navbar-container -->
    </div>
@endsection
@section('sidebar')
    <div id="sidebar" class="sidebar      h-sidebar                navbar-collapse collapse          ace-save-state">
        <script type="text/javascript">
            try {
                ace.settings.loadState('sidebar')
            } catch (e) {
            }
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                <button class="btn btn-success">
                    <i class="ace-icon fa fa-signal"></i>
                </button>

                <button class="btn btn-info">
                    <i class="ace-icon fa fa-pencil"></i>
                </button>

                <button class="btn btn-warning">
                    <i class="ace-icon fa fa-users"></i>
                </button>

                <button class="btn btn-danger">
                    <i class="ace-icon fa fa-cogs"></i>
                </button>
            </div>

            <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                <span class="btn btn-success"></span>

                <span class="btn btn-info"></span>

                <span class="btn btn-warning"></span>

                <span class="btn btn-danger"></span>
            </div>
        </div><!-- /.sidebar-shortcuts -->


        <ul class="nav nav-list">
            <li class="hover">
                <a href="index.html">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text"> 控制台 </span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="active open hover">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-desktop"></i>
                    <span class="menu-text">
								UI &amp; 元素
							</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="active open hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>

                            布局
                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="active hover">
                                <a href="top-menu.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    顶部菜单
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="hover">
                                <a href="two-menu-1.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    左侧+顶部菜单1
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="hover">
                                <a href="two-menu-2.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    左侧+顶部菜单2
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="hover">
                                <a href="mobile-menu-1.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    默认移动风格菜单
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="hover">
                                <a href="mobile-menu-2.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    移动风格菜单2
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="hover">
                                <a href="mobile-menu-3.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    移动风格菜单3
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="hover">
                        <a href="typography.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            排版
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="elements.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            元素
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="buttons.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            按钮 &amp; 图标i
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="content-slider.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            内容滑块
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="treeview.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            树状视图
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="jquery-ui.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            jQuery UI
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="nestable-list.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                           可嵌套列表
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>

                            三级菜单
                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="hover">
                                <a href="#">
                                    <i class="menu-icon fa fa-leaf green"></i>
                                    条目 #1
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="hover">
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-pencil orange"></i>

                                    四级菜单
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>

                                <b class="arrow"></b>

                                <ul class="submenu">
                                    <li class="hover">
                                        <a href="#">
                                            <i class="menu-icon fa fa-plus purple"></i>
                                            增加产品
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="hover">
                                        <a href="#">
                                            <i class="menu-icon fa fa-eye pink"></i>
                                            查看产品
                                        </a>

                                        <b class="arrow"></b>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="hover">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-list"></i>
                    <span class="menu-text"> 表格 </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="hover">
                        <a href="tables.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            简单 &amp; 动态
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="jqgrid.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            jqGrid插件
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

            <li class="hover">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-pencil-square-o"></i>
                    <span class="menu-text"> 表单 </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="hover">
                        <a href="form-elements.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            表单元素
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="form-elements-2.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            表单元素2
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="form-wizard.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            向导 &amp; 验证
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="wysiwyg.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            富文本编辑器 &amp; Markdown
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="dropzone.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            拖拽上传
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

            <li class="hover">
                <a href="widgets.html">
                    <i class="menu-icon fa fa-list-alt"></i>
                    <span class="menu-text"> 小部件 </span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="hover">
                <a href="calendar.html">
                    <i class="menu-icon fa fa-calendar"></i>

                    <span class="menu-text">
								日历

								<span class="badge badge-transparent tooltip-error" title="2 Important Events">
									<i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
								</span>
							</span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="hover">
                <a href="gallery.html">
                    <i class="menu-icon fa fa-picture-o"></i>
                    <span class="menu-text"> 相册 </span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="hover">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-tag"></i>
                    <span class="menu-text"> 更多页面 </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="hover">
                        <a href="profile.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            个人中心
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="inbox.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            收件箱
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="pricing.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            价格表
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="invoice.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            发货单
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="timeline.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            时间轴
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="search.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            搜索结果
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="email.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            邮件模版
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="login.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            登录 &amp; 注册
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

            <li class="hover">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-file-o"></i>

                    <span class="menu-text">
								其他页面

								<span class="badge badge-primary">5</span>
							</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="hover">
                        <a href="faq.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            FAQ
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="error-404.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Error 404
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="error-500.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Error 500
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="grid.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Grid
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="blank.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            空白页
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
        </ul><!-- /.nav-list -->

    </div>
@endsection
@section('breadcrumbs')

@endsection
@section('page-content')

    <div class="page-header">
        <h1>
            顶部菜单风格
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                顶部菜单 &amp; 导航
            </small>
        </h1>
    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="alert alert-info visible-sm visible-xs">
                <button type="button" class="close" data-dismiss="alert">
                    <i class="ace-icon fa fa-times"></i>
                </button>
                请注意
                <span class="blue bolder">顶部菜单风格</span>
                在屏幕大于
                <span class="blue bolder">991px</span>
                才会可见
            </div>

            <div class="well well-sm visible-sm visible-xs">
                Top menu can become any of the 3 mobile view menu styles:
                <em>default</em>
                ,
                <em>collapsible</em>
                or
                <em>minimized</em>.
            </div>

            <div class="hidden-sm hidden-xs">
                <button type="button" class="sidebar-collapse btn btn-white btn-primary" data-target="#sidebar">
                    <i class="ace-icon fa fa-angle-double-up" data-icon1="ace-icon fa fa-angle-double-up"
                       data-icon2="ace-icon fa fa-angle-double-down"></i>
                    折叠/展开 菜单
                </button>
            </div>

            <div class="center">
                <br/>
            </div>

            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection
@push('scripts')
<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function ($) {
        var $sidebar = $('.sidebar').eq(0);
        if (!$sidebar.hasClass('h-sidebar')) return;

        $(document).on('settings.ace.top_menu', function (ev, event_name, fixed) {
            if (event_name !== 'sidebar_fixed') return;

            var sidebar = $sidebar.get(0);
            var $window = $(window);

            //return if sidebar is not fixed or in mobile view mode
            var sidebar_vars = $sidebar.ace_sidebar('vars');
            if (!fixed || ( sidebar_vars['mobile_view'] || sidebar_vars['collapsible'] )) {
                $sidebar.removeClass('lower-highlight');
                //restore original, default marginTop
                sidebar.style.marginTop = '';

                $window.off('scroll.ace.top_menu')
                return;
            }


            var done = false;
            $window.on('scroll.ace.top_menu', function (e) {

                var scroll = $window.scrollTop();
                scroll = parseInt(scroll / 4);//move the menu up 1px for every 4px of document scrolling
                if (scroll > 17) scroll = 17;


                if (scroll > 16) {
                    if (!done) {
                        $sidebar.addClass('lower-highlight');
                        done = true;
                    }
                }
                else {
                    if (done) {
                        $sidebar.removeClass('lower-highlight');
                        done = false;
                    }
                }

                sidebar.style['marginTop'] = (17 - scroll) + 'px';
            }).triggerHandler('scroll.ace.top_menu');

        }).triggerHandler('settings.ace.top_menu', ['sidebar_fixed', $sidebar.hasClass('sidebar-fixed')]);

        $(window).on('resize.ace.top_menu', function () {
            $(document).triggerHandler('settings.ace.top_menu', ['sidebar_fixed', $sidebar.hasClass('sidebar-fixed')]);
        });


    });
</script>
@endpush