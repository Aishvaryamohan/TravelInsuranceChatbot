<html>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login Page</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="login-layout">
	
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-leaf green"></i>
									
									<span class="white" id="id-text2">Travel Insurance</span>
								</h1>
								 
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Please Enter Your Information
											</h4>

											<div class="space-6"></div>

											<form method="POST" action="register.php">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input name="email" type="email" class="form-control" placeholder="Email" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input  name ="Username" type="text" class="form-control" placeholder="Username" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>
													
<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input name="Mobileno" type="number" class="form-control" placeholder="Mobile number" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input name="password" type="password" id="password" class="form-control" placeholder="Password" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input name="password2" type="password" class="form-control" placeholder="Repeat password" />
															<i class="ace-icon fa fa-retweet"></i>
														</span>
													</label>
													<label class="block">
														<input type="checkbox" class="ace" />
														<span class="lbl">
															I accept the
															<a href="#">User Agreement</a>
														</span>
													</label>

													<div class="space-24"></div>

														<button type="reset" class="width-30 pull-left btn btn-sm">
															<i class="ace-icon fa fa-refresh"></i>
															<span class="bigger-110">Reset</span>
														</button>

														<input type="submit"  name=" register_btn" value="register">
														
													</div>
												</fieldset>
											</form>
											<script>
											function reg()
											{
											var email = $('#email').val()
											var Username = $('#Username').val()
											var Mobileno= $('#Mobileno').val()
											var password = $('#password').val()
											var confirmpassword = $('#confirmpassword').val()
											if(email == '')
											{
											alert("Please enter the email")
											}
											else if(Username == '')
											{
											alert("Please enter the Username")
											}
							
											else if(Mobileno == '')
											{
											alert("Please enter the Mobileno")
											}
											else if(password == '')
											{
											alert("Please enter the password")
											}
											else if(confirmpassword == '')
											{
											alert("Please enter the confirmpassword")
											}
											else if(confirmpassword != password)
											{
											alert("Password Mismatch")
											}
											else
											{
											
												var dataString = "&email=" + email +"&Username=" + Username +"&Mobileno=" + Mobileno + "&password=" + password +"&login=";
					// alert(dob);
					 $.ajax({
                type: "POST", 
				 url:  "http://localhost/hack/hack.php?f=register",
                data: dataString,
                crossDomain: true,
                cache: false,
                beforeSend: function () {
                     
                },
                success: function (ret) {
				var data = JSON.parse(ret);
                    if ($.trim(data.status) == "success") {  
					window.location.href="Travelinsurance.html";
					}
					else if ($.trim(data.status) == "exist") 
					{
					alert("already Register")
					}
					
					else 
					{
					alert("already Register")
					}
					}
</body>
</html>