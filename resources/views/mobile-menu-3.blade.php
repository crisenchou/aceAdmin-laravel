@extends('layouts.app')
@section('navbar')
	<div id="navbar" class="navbar navbar-default    navbar-collapse       ace-save-state">
		<div class="navbar-container ace-save-state" id="navbar-container">
			<div class="navbar-header pull-left">
				<a href="index.html" class="navbar-brand">
					<small>
						<i class="fa fa-leaf"></i>
						Ace Admin
					</small>
				</a>

				<button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button" data-toggle="collapse" data-target=".navbar-buttons">
					<span class="sr-only">Toggle user menu</span>

					<img src="assets/images/avatars/user.jpg" alt="Jason's Photo" />
				</button>

				<button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#sidebar">
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
											任务
											<span class="badge badge-danger">4</span>
										</a>
									</li>

									<li>
										<a data-toggle="tab" href="#navbar-messages">
											消息
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
																<div style="width:35%" class="progress-bar progress-bar-danger"></div>
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
																<div style="width:15%" class="progress-bar progress-bar-warning"></div>
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
																<div style="width:90%" class="progress-bar progress-bar-success"></div>
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
															<img src="assets/images/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
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
															<img src="assets/images/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
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
															<img src="assets/images/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
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
															<img src="assets/images/avatars/avatar2.png" class="msg-photo" alt="Kate's Avatar" />
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
															<img src="assets/images/avatars/avatar5.png" class="msg-photo" alt="Fred's Avatar" />
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
							<img class="nav-user-photo" src="assets/images/avatars/user.jpg" alt="Jason's Photo" />
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
		</div><!-- /.navbar-container -->
	</div>
@endsection
@section('sidebar')
	<div id="sidebar" class="sidebar                     navbar-collapse collapse          ace-save-state">
		<script type="text/javascript">
			try{ace.settings.loadState('sidebar')}catch(e){}
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
		@include('partial.menus')


		<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
			<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
		</div>
	</div>
@endsection
@section('breadcrumbs')
	<div class="breadcrumbs ace-save-state" id="breadcrumbs">
		<ul class="breadcrumb">
			<li>
				<i class="ace-icon fa fa-home home-icon"></i>
				<a href="#">Home</a>
			</li>

			<li>
				<a href="#">UI &amp; Elements</a>
			</li>

			<li>
				<a href="#">Layouts</a>
			</li>
			<li class="active">Mobile Menu 3</li>
		</ul><!-- /.breadcrumb -->

		<div class="nav-search" id="nav-search">
			<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
			</form>
		</div><!-- /.nav-search -->
	</div>
@endsection
@section('page-content')
	<div class="page-header">
		<h1>Collapsible Responsive(mobile) Menu </h1>
	</div><!-- /.page-header -->
	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
			<div class="alert alert-info hidden-sm hidden-xs">
				<button type="button" class="close" data-dismiss="alert">
					<i class="ace-icon fa fa-times"></i>
				</button>
				Please note that
				<span class="blue bolder">mobile menu</span>
				is visible only when window size is less than
				<span class="blue bolder">992px</span>
				,which you can change using CSS builder tool.
			</div>

			<div class="alert alert-info hidden-md hidden-lg">
				<button type="button" class="close" data-dismiss="alert">
					<i class="ace-icon fa fa-times"></i>
				</button>
				When device is smaller than
				<span class="blue bolder">992px</span>
				wide, side menu is collapsed and will be visible by clicking on the menu button above.
			</div>

			<!-- PAGE CONTENT ENDS -->
		</div><!-- /.col -->
	</div><!-- /.row -->
@endsection