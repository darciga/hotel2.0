<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Archon Admin Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Loading Bootstrap -->
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

	<!-- Loading Stylesheets -->    
	<link href="css/archon.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

	<!-- Loading Custom Stylesheets -->    
	<link href="css/custom.css" rel="stylesheet">

	<link rel="shortcut icon" href="images/favicon.ico">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->
</head>
<body>
	<div class="frame">
		<div class="sidebar">
			<div class="wrapper">

				<!-- Replace the src of the image with your logo -->
				<a href="index.html" class="logo"><img src="images/logo.png" alt="Archon Admin" /></a>
				<ul class="nav  nav-list">
					<!-- Sidebar header @add class nav-header for sidebar header -->
					<li class="nav-header">Overview</li>
					<li><a href="index.html"><i class="icon-dashboard"></i>Dashboard </a></li>
					<li><a class="dropdown" href="#"><i class="icon-tint"></i> UI Features</a></li>
					<li><a href="widgets.html"><i class="icon-group"></i>Widgets</a></li>
				</ul>

			</div><!-- /Wrapper -->
		</div><!-- /Sidebar -->

		<!-- Main content starts here-->
		<div class="content">
			<div class="navbar">
				<a href="#" onclick="return false;" class="btn pull-left toggle-sidebar "><i class="icon-list"></i></a>
				<a class="navbar-brand" href="index.html">Archon</a>
				<!-- Top right user menu -->
				<ul class="nav navbar-nav user-menu pull-right">
					<!-- First nav user item -->
					<li class="dropdown user-name">
						<a class="dropdown-toggle" data-toggle="dropdown"><img src="images/theme/avatarSeven.png" class="user-avatar" alt="" />Vijay Kumar</a>
							<ul class="dropdown-menu right inbox user">
								<li class="user-avatar">
									<img src="images/theme/avatarSeven.png" class="user-avatar" alt="" />
									Vijay Kumar
								</li>
							<li><a href="#">Logout</a></li>
						</ul>
					</li><!-- / dropdown -->				
				</ul><!-- / Top right user menu -->
			</div><!-- / Navbar-->

			<div id="main-content">
				<div class="row">
					<div class="col-mod-12">
						<ul class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="forms.html">Forms</a></li>
							<li class="active">Bread Crumb</li>
						</ul>
					</div>
				</div>

				<!-- Form Horizontal -->
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-archon">
							<div class="panel-heading">
								<h3 class="panel-title">
									Form Horizontal
									<span class="pull-right">
										<a  href="#" class="panel-minimize"><i class="icon-chevron-up"></i></a>
										<a  href="#"  class="panel-settings"><i class="icon-cog"></i></a>
										<a  href="#"  class="panel-close"><i class="icon-remove"></i></a>
									</span>
								</h3>
							</div>
							<div class="panel-body">
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label for="inputEmail1" class="col-lg-3 control-label">Input</label>
										<div class="col-lg-9">
											<input type="email" class="form-control" id="inputEmail1" placeholder="Type something here">
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail1" class="col-lg-3 control-label">Disabled</label>
										<div class="col-lg-9">
											<input type="email" class="form-control" id="inputEmail2" placeholder="You cannot type here" disabled>
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail1" class="col-lg-3 control-label"> Prepend</label>
										<div class="col-lg-9">
											<div class="input-group">
												<span class="input-group-addon">@</span>
												<input type="text" class="form-control" placeholder="Username">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail1" class="col-lg-3 control-label"> Append</label>
										<div class="col-lg-9">
											<div class="input-group">
												<input type="text" class="form-control">
												<span class="input-group-addon">.00</span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail1" class="col-lg-3 control-label">Icon group</label>
										<div class="col-lg-9">
											<div class="input-group">
												<span class="input-group-addon">$</span>
												<input type="text" class="form-control">
												<span class="input-group-addon">.00</span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail1" class="col-lg-3 control-label">Checkbox input</label>
										<div class="col-lg-9">
											<div class="input-group">
												<span class="input-group-addon">
													<input type="checkbox">
												</span>
												<input type="text" class="form-control">
											</div><!-- /input-group -->
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-3 control-label">Radio Input</label>
										<div class="col-lg-9">
											<div class="input-group">
												<span class="input-group-addon">
													<input type="radio">
												</span>
												<input type="text" class="form-control">
											</div><!-- /input-group -->
										</div>
									</div>
									<div class="form-group">
										<label  class="col-lg-3 control-label">Addons</label>
										<div class="col-lg-9">
											<div class="input-group">
												<span class="input-group-btn">
													<button class="btn btn-info " type="button">Go!</button>
												</span>
												<input type="text" class="form-control">
											</div><!-- /input-group -->
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-3 control-label">Checkboxes</label>
										<div class="col-lg-9">
											<div class="checkbox">
												<label>
													<input type="checkbox" value="">
													Option One
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox" value="">
													Option Two
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox" value="">
													Option Three
												</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-3 control-label">Inline Checkboxes</label>
										<div class="col-lg-9">
											<label class="checkbox-inline">
												<input type="checkbox" id="inlineCheckbox1" value="option1"> 1
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="inlineCheckbox2" value="option2"> 2
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="inlineCheckbox3" value="option3"> 3
											</label>
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-3 control-label">Radio</label>
										<div class="col-lg-9">
											<div class="radio">
												<label>
													<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
													Option One
												</label>
											</div>
											<div class="radio">
												<label>
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
													Option Two 
												</label>
											</div>
											<div class="radio">
												<label>
													<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
													Option Three 
												</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail1" class="col-lg-3 control-label">Selects</label>
										<div class="col-lg-9">
											<select class="form-control">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail1" class="col-lg-3 control-label">Select multiple</label>
										<div class="col-lg-9">
											<select multiple class="form-control">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
										</div>
									</div>
								</form>

							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="panel panel-archon">
							<div class="panel-heading">
								<h3 class="panel-title">
									Form Vertical
									<span class="pull-right">
										<a  href="#" class="panel-minimize"><i class="icon-chevron-up"></i></a>
										<a  href="#"  class="panel-settings"><i class="icon-cog"></i></a>
										<a  href="#"  class="panel-close"><i class="icon-remove"></i></a>
									</span>
								</h3>
							</div>
							<div class="panel-body">
								<form class="form-vertical" role="form">
									<div class="form-group">
										<label>Input</label>
										<input type="email" class="form-control" id="inputEmail4" placeholder="Type something here">
									</div>
									<div class="form-group">
										<label>Color Picker</label>
										<input type="email" class="form-control" id="colorpicker" placeholder="Color picker" >
									</div>
									<div class="form-group">
										<label>Prepend</label>
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input type="text" class="form-control" placeholder="Username">
										</div>
									</div>
									<div class="form-group">
										<label>Checkbox Input</label>
										<div class="input-group">
											<span class="input-group-addon">
												<input type="checkbox">
											</span>
											<input type="text" class="form-control">
										</div><!-- /input-group -->
									</div>
									<div class="form-group">
										<label>Addons</label>
										<div class="input-group">
											<span class="input-group-btn">
												<button class="btn btn-info " type="button">Go!</button>
											</span>
											<input type="text" class="form-control">
										</div><!-- /input-group -->
									</div>
									<div class="form-group">
										<label>Checkboxes</label>
										<div class="checkbox">
											<label>
												<input type="checkbox" value="">
												Option One
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" value="">
												Option Two
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" value="">
												Option Three
											</label>
										</div>								  
									</div>
									<div class="form-group">
										<label>Tags input</label>
										<input id="tags_2" type="text" class="tags" value="php,ios,javascript,ruby,android,kindle" />
									</div>
									<div class="form-group">
										<label>File input</label>
										<input type="file" id="exampleInputFile">
										<p class="help-block">Example block-level help text here.</p>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox"> Check me out
										</label>
									</div>
									<button type="submit" class="btn btn-primary">Save Chnages</button>
									<button type="submit" class="btn btn-default">Cancel</button>
								</form>
							</div>
						</div>
					</div>
				</div>

				<!-- Inline Form-->
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-archon">
							<div class="panel-heading">
								<h3 class="panel-title">
									Inline Form
									<span class="pull-right">
										<a  href="#" class="panel-minimize"><i class="icon-chevron-up"></i></a>
										<a  href="#"  class="panel-settings"><i class="icon-cog"></i></a>
										<a  href="#"  class="panel-close"><i class="icon-remove"></i></a>
									</span>
								</h3>
							</div>
							<div class="panel-body">
								<form class="form-inline" role="form">
									<div class="form-group col-lg-5">
										<label class="sr-only" for="email">Email address</label>
										<input type="email" class="form-control" id="email" placeholder="Enter email">
									</div>
									<div class="form-group col-lg-5">
										<label class="sr-only" for="password">Password</label>
										<input type="password" class="form-control" id="password" placeholder="Password">
									</div>
									<div class="checkbox col-lg-1">
										<label>
											<input type="checkbox"> Remember?
										</label>
									</div>
									<button type="submit" class="col-lg-1 btn btn-default">Sign in</button>
								</form>							
							</div>
						</div>
					</div>
				</div>

				<!-- Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h5 class="modal-title">Panel Settings</h5>
								<span class="small">Some sort of settings with a form</span>
							</div>
							<div class="modal-body">
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label for="inputEmail1" class="col-lg-2 control-label">Label</label>
										<div class="col-lg-10">
											<input type="email" class="form-control" id="inputEmail6" placeholder="Label">
										</div>
									</div>
									<div class="form-group">
										<label for="inputPassword1" class="col-lg-2 control-label">Second Label</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" id="inputPassword1" placeholder="Label two">
										</div>
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Save changes</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->

			</div><!-- /Main Content  @7 -->

		</div><!-- / Content @5 -->

		<div class="row footer">
			<div class="col-md-12 text-center">
				© 2013 <a href="http://bootstrapguru.com/">Bootstrap Guru</a>
			</div>
		</div>
	</div> <!-- Frame -->



	<!-- Load JS here for greater good =============================-->
	<script src="js/jquery-1.8.3.min.js"></script>
	<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-select.js"></script>
	<script src="js/bootstrap-switch.js"></script>
	<script src="js/flatui-checkbox.js"></script>
	<script src="js/flatui-radio.js"></script>
	<script src="js/jquery.tagsinput.js"></script>
	<script src="js/jquery.placeholder.js"></script>
	<script src="js/bootstrap-typeahead.js"></script>
	<script src="js/application.js"></script>
	<script src="js/moment.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/jquery.sortable.js"></script>
	<script type="text/javascript" src="js/jquery.gritter.js"></script>

	<!-- Page scripts-->
	<script src="js/jquery.autosize.min.js"></script>
	<script src="js/bootstrap-wysiwyg.js"></script>
	<script src="js/bootstrap-colorpicker.js"></script>
	<script src="js/forms.js"></script>

	<!-- Archon JS =============================-->
	<script src="js/archon.js"></script>
</body>
</html>
