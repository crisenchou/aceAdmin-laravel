@push('css')
@endpush
<div class="col-sm-6">
    <div class="widget-box transparent" id="recent-box">
        <div class="widget-header">
            <h4 class="widget-title lighter smaller">
                <i class="ace-icon fa fa-rss orange"></i>RECENT
            </h4>

            <div class="widget-toolbar no-border">
                <ul class="nav nav-tabs" id="recent-tab">
                    <li class="active">
                        <a data-toggle="tab" href="#task-tab">Tasks</a>
                    </li>

                    <li>
                        <a data-toggle="tab" href="#member-tab">Members</a>
                    </li>

                    <li>
                        <a data-toggle="tab" href="#comment-tab">Comments</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="widget-body">
            <div class="widget-main padding-4">
                <div class="tab-content padding-8">
                    <div id="task-tab" class="tab-pane active">
                        <h4 class="smaller lighter green">
                            <i class="ace-icon fa fa-list"></i>
                            Sortable Lists
                        </h4>

                        <ul id="tasks" class="item-list">
                            <li class="item-orange clearfix">
                                <label class="inline">
                                    <input type="checkbox" class="ace"/>
                                    <span class="lbl"> Answering customer questions</span>
                                </label>

                                <div class="pull-right easy-pie-chart percentage" data-size="30"
                                     data-color="#ECCB71" data-percent="42">
                                    <span class="percent">42</span>%
                                </div>
                            </li>

                            <li class="item-red clearfix">
                                <label class="inline">
                                    <input type="checkbox" class="ace"/>
                                    <span class="lbl"> Fixing bugs</span>
                                </label>

                                <div class="pull-right action-buttons">
                                    <a href="#" class="blue">
                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                    </a>

                                    <span class="vbar"></span>

                                    <a href="#" class="red">
                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                    </a>

                                    <span class="vbar"></span>

                                    <a href="#" class="green">
                                        <i class="ace-icon fa fa-flag bigger-130"></i>
                                    </a>
                                </div>
                            </li>

                            <li class="item-default clearfix">
                                <label class="inline">
                                    <input type="checkbox" class="ace"/>
                                    <span class="lbl"> Adding new features</span>
                                </label>

                                <div class="pull-right pos-rel dropdown-hover">
                                    <button class="btn btn-minier bigger btn-primary">
                                        <i class="ace-icon fa fa-cog icon-only bigger-120"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-caret dropdown-close dropdown-menu-right">
                                        <li>
                                            <a href="#" class="tooltip-success" data-rel="tooltip"
                                               title="Mark&nbsp;as&nbsp;done">
																					<span class="green">
																						<i class="ace-icon fa fa-check bigger-110"></i>
																					</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="tooltip-error" data-rel="tooltip"
                                               title="Delete">
																					<span class="red">
																						<i class="ace-icon fa fa-trash-o bigger-110"></i>
																					</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="item-blue clearfix">
                                <label class="inline">
                                    <input type="checkbox" class="ace"/>
                                    <span class="lbl"> Upgrading scripts used in template</span>
                                </label>
                            </li>

                            <li class="item-grey clearfix">
                                <label class="inline">
                                    <input type="checkbox" class="ace"/>
                                    <span class="lbl"> Adding new skins</span>
                                </label>
                            </li>

                            <li class="item-green clearfix">
                                <label class="inline">
                                    <input type="checkbox" class="ace"/>
                                    <span class="lbl"> Updating server software up</span>
                                </label>
                            </li>

                            <li class="item-pink clearfix">
                                <label class="inline">
                                    <input type="checkbox" class="ace"/>
                                    <span class="lbl"> Cleaning up</span>
                                </label>
                            </li>
                        </ul>
                    </div>

                    <div id="member-tab" class="tab-pane">
                        <div class="clearfix">
                            <div class="itemdiv memberdiv">
                                <div class="user">
                                    <img alt="Bob Doe's avatar" src="assets/images/avatars/user.jpg"/>
                                </div>

                                <div class="body">
                                    <div class="name">
                                        <a href="#">Bob Doe</a>
                                    </div>

                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o"></i>
                                        <span class="green">20 min</span>
                                    </div>

                                    <div>
                                        <span class="label label-warning label-sm">pending</span>

                                        <div class="inline position-relative">
                                            <button class="btn btn-minier btn-yellow btn-no-border dropdown-toggle"
                                                    data-toggle="dropdown" data-position="auto">
                                                <i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
                                            </button>

                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                <li>
                                                    <a href="#" class="tooltip-success"
                                                       data-rel="tooltip" title="Approve">
																							<span class="green">
																								<i class="ace-icon fa fa-check bigger-110"></i>
																							</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-warning"
                                                       data-rel="tooltip" title="Reject">
																							<span class="orange">
																								<i class="ace-icon fa fa-times bigger-110"></i>
																							</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-error" data-rel="tooltip"
                                                       title="Delete">
																							<span class="red">
																								<i class="ace-icon fa fa-trash-o bigger-110"></i>
																							</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="itemdiv memberdiv">
                                <div class="user">
                                    <img alt="Joe Doe's avatar"
                                         src="assets/images/avatars/avatar2.png"/>
                                </div>

                                <div class="body">
                                    <div class="name">
                                        <a href="#">Joe Doe</a>
                                    </div>

                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o"></i>
                                        <span class="green">1 hour</span>
                                    </div>

                                    <div>
                                        <span class="label label-warning label-sm">pending</span>

                                        <div class="inline position-relative">
                                            <button class="btn btn-minier btn-yellow btn-no-border dropdown-toggle"
                                                    data-toggle="dropdown" data-position="auto">
                                                <i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
                                            </button>

                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                <li>
                                                    <a href="#" class="tooltip-success"
                                                       data-rel="tooltip" title="Approve">
																							<span class="green">
																								<i class="ace-icon fa fa-check bigger-110"></i>
																							</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-warning"
                                                       data-rel="tooltip" title="Reject">
																							<span class="orange">
																								<i class="ace-icon fa fa-times bigger-110"></i>
																							</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-error" data-rel="tooltip"
                                                       title="Delete">
																							<span class="red">
																								<i class="ace-icon fa fa-trash-o bigger-110"></i>
																							</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="itemdiv memberdiv">
                                <div class="user">
                                    <img alt="Jim Doe's avatar" src="assets/images/avatars/avatar.png"/>
                                </div>

                                <div class="body">
                                    <div class="name">
                                        <a href="#">Jim Doe</a>
                                    </div>

                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o"></i>
                                        <span class="green">2 hour</span>
                                    </div>

                                    <div>
                                        <span class="label label-warning label-sm">pending</span>

                                        <div class="inline position-relative">
                                            <button class="btn btn-minier btn-yellow btn-no-border dropdown-toggle"
                                                    data-toggle="dropdown" data-position="auto">
                                                <i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
                                            </button>

                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                <li>
                                                    <a href="#" class="tooltip-success"
                                                       data-rel="tooltip" title="Approve">
																							<span class="green">
																								<i class="ace-icon fa fa-check bigger-110"></i>
																							</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-warning"
                                                       data-rel="tooltip" title="Reject">
																							<span class="orange">
																								<i class="ace-icon fa fa-times bigger-110"></i>
																							</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-error" data-rel="tooltip"
                                                       title="Delete">
																							<span class="red">
																								<i class="ace-icon fa fa-trash-o bigger-110"></i>
																							</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="itemdiv memberdiv">
                                <div class="user">
                                    <img alt="Alex Doe's avatar"
                                         src="assets/images/avatars/avatar5.png"/>
                                </div>

                                <div class="body">
                                    <div class="name">
                                        <a href="#">Alex Doe</a>
                                    </div>

                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o"></i>
                                        <span class="green">3 hour</span>
                                    </div>

                                    <div>
                                        <span class="label label-danger label-sm">blocked</span>
                                    </div>
                                </div>
                            </div>

                            <div class="itemdiv memberdiv">
                                <div class="user">
                                    <img alt="Bob Doe's avatar"
                                         src="assets/images/avatars/avatar2.png"/>
                                </div>

                                <div class="body">
                                    <div class="name">
                                        <a href="#">Bob Doe</a>
                                    </div>

                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o"></i>
                                        <span class="green">6 hour</span>
                                    </div>

                                    <div>
                                        <span class="label label-success label-sm arrowed-in">approved</span>
                                    </div>
                                </div>
                            </div>

                            <div class="itemdiv memberdiv">
                                <div class="user">
                                    <img alt="Susan's avatar" src="assets/images/avatars/avatar3.png"/>
                                </div>

                                <div class="body">
                                    <div class="name">
                                        <a href="#">Susan</a>
                                    </div>

                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o"></i>
                                        <span class="green">yesterday</span>
                                    </div>

                                    <div>
                                        <span class="label label-success label-sm arrowed-in">approved</span>
                                    </div>
                                </div>
                            </div>

                            <div class="itemdiv memberdiv">
                                <div class="user">
                                    <img alt="Phil Doe's avatar"
                                         src="assets/images/avatars/avatar4.png"/>
                                </div>

                                <div class="body">
                                    <div class="name">
                                        <a href="#">Phil Doe</a>
                                    </div>

                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o"></i>
                                        <span class="green">2 days ago</span>
                                    </div>

                                    <div>
                                        <span class="label label-info label-sm arrowed-in arrowed-in-right">online</span>
                                    </div>
                                </div>
                            </div>

                            <div class="itemdiv memberdiv">
                                <div class="user">
                                    <img alt="Alexa Doe's avatar"
                                         src="assets/images/avatars/avatar1.png"/>
                                </div>

                                <div class="body">
                                    <div class="name">
                                        <a href="#">Alexa Doe</a>
                                    </div>

                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o"></i>
                                        <span class="green">3 days ago</span>
                                    </div>

                                    <div>
                                        <span class="label label-success label-sm arrowed-in">approved</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="space-4"></div>

                        <div class="center">
                            <i class="ace-icon fa fa-users fa-2x green middle"></i>

                            &nbsp;
                            <a href="#" class="btn btn-sm btn-white btn-info">
                                See all members &nbsp;
                                <i class="ace-icon fa fa-arrow-right"></i>
                            </a>
                        </div>

                        <div class="hr hr-double hr8"></div>
                    </div><!-- /.#member-tab -->

                    <div id="comment-tab" class="tab-pane">
                        <div class="comments">
                            <div class="itemdiv commentdiv">
                                <div class="user">
                                    <img alt="Bob Doe's Avatar" src="assets/images/avatars/avatar.png"/>
                                </div>

                                <div class="body">
                                    <div class="name">
                                        <a href="#">Bob Doe</a>
                                    </div>

                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o"></i>
                                        <span class="green">6 min</span>
                                    </div>

                                    <div class="text">
                                        <i class="ace-icon fa fa-quote-left"></i>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                        commodo massa sed ipsum porttitor facilisis &hellip;
                                    </div>
                                </div>

                                <div class="tools">
                                    <div class="inline position-relative">
                                        <button class="btn btn-minier bigger btn-yellow dropdown-toggle"
                                                data-toggle="dropdown">
                                            <i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
                                        </button>

                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                            <li>
                                                <a href="#" class="tooltip-success" data-rel="tooltip"
                                                   title="Approve">
																						<span class="green">
																							<i class="ace-icon fa fa-check bigger-110"></i>
																						</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-warning" data-rel="tooltip"
                                                   title="Reject">
																						<span class="orange">
																							<i class="ace-icon fa fa-times bigger-110"></i>
																						</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-error" data-rel="tooltip"
                                                   title="Delete">
																						<span class="red">
																							<i class="ace-icon fa fa-trash-o bigger-110"></i>
																						</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="itemdiv commentdiv">
                                <div class="user">
                                    <img alt="Jennifer's Avatar"
                                         src="assets/images/avatars/avatar1.png"/>
                                </div>

                                <div class="body">
                                    <div class="name">
                                        <a href="#">Jennifer</a>
                                    </div>

                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o"></i>
                                        <span class="blue">15 min</span>
                                    </div>

                                    <div class="text">
                                        <i class="ace-icon fa fa-quote-left"></i>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                        commodo massa sed ipsum porttitor facilisis &hellip;
                                    </div>
                                </div>

                                <div class="tools">
                                    <div class="action-buttons bigger-125">
                                        <a href="#">
                                            <i class="ace-icon fa fa-pencil blue"></i>
                                        </a>

                                        <a href="#">
                                            <i class="ace-icon fa fa-trash-o red"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="itemdiv commentdiv">
                                <div class="user">
                                    <img alt="Joe's Avatar" src="assets/images/avatars/avatar2.png"/>
                                </div>

                                <div class="body">
                                    <div class="name">
                                        <a href="#">Joe</a>
                                    </div>

                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o"></i>
                                        <span class="orange">22 min</span>
                                    </div>

                                    <div class="text">
                                        <i class="ace-icon fa fa-quote-left"></i>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                        commodo massa sed ipsum porttitor facilisis &hellip;
                                    </div>
                                </div>

                                <div class="tools">
                                    <div class="action-buttons bigger-125">
                                        <a href="#">
                                            <i class="ace-icon fa fa-pencil blue"></i>
                                        </a>

                                        <a href="#">
                                            <i class="ace-icon fa fa-trash-o red"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="itemdiv commentdiv">
                                <div class="user">
                                    <img alt="Rita's Avatar" src="assets/images/avatars/avatar3.png"/>
                                </div>

                                <div class="body">
                                    <div class="name">
                                        <a href="#">Rita</a>
                                    </div>

                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o"></i>
                                        <span class="red">50 min</span>
                                    </div>

                                    <div class="text">
                                        <i class="ace-icon fa fa-quote-left"></i>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                        commodo massa sed ipsum porttitor facilisis &hellip;
                                    </div>
                                </div>

                                <div class="tools">
                                    <div class="action-buttons bigger-125">
                                        <a href="#">
                                            <i class="ace-icon fa fa-pencil blue"></i>
                                        </a>

                                        <a href="#">
                                            <i class="ace-icon fa fa-trash-o red"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hr hr8"></div>

                        <div class="center">
                            <i class="ace-icon fa fa-comments-o fa-2x green middle"></i>

                            &nbsp;
                            <a href="#" class="btn btn-sm btn-white btn-info">
                                See all comments &nbsp;
                                <i class="ace-icon fa fa-arrow-right"></i>
                            </a>
                        </div>

                        <div class="hr hr-double hr8"></div>
                    </div>
                </div>
            </div><!-- /.widget-main -->
        </div><!-- /.widget-body -->
    </div><!-- /.widget-box -->
</div><!-- /.col -->
@push('scripts')
@endpush