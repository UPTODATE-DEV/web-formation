<?php 
 include 'config/connect.php';

 if(empty($_SESSION['user'])){
	 header('location:login.php');
 }
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/form-validations.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:28:30 GMT -->
<head>
        <?php include('dimitri/head.php')?>

        <!-- Common Plugins -->
        <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Css-->
        <link href="assets/scss/style.css" rel="stylesheet">
		
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

			<!-- ============================================================== -->
			<!-- 						Topbar Start 							-->
			<!-- ============================================================== -->
			<?php include('dimitri/topbar.php')?>

			<!-- ============================================================== -->
		<!--                        Topbar End                              -->
		<!-- ============================================================== -->
		
		
		<!-- ============================================================== -->
		<!--                        Right Side Start                        -->
		<!-- ============================================================== -->
		<?php include('dimitri/side.php')?>
		<!-- ============================================================== -->
		<!--                        Right Side End                          -->
		<!-- ============================================================== -->
		

			<?php include('dimitri/navigation.php')?>
		<!-- ============================================================== -->


        <!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->
					
        <div class="row page-header">
			<div class="col-lg-6 align-self-center ">
				<h2>Add User</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">User</a></li>
					<li class="breadcrumb-item active">Add User</li>		
				</ol>
			</div>
		</div>

        <section class="main-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header card-default">
                            Basic Steps
                        </div>
                        <div class="card-body">
                            <form  method="post" class="form-horizontal" action="new.php">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
								    <input type="text" class="form-control" id="firstname" name="name" placeholder=" First name" />
							      </div>

								</div>
								<div class="col-md-6">
									<div class="form-group">
								    <input type="text" class="form-control" id="firstname" name="username" placeholder="username" />
							      </div>
							      
								</div>
								<div class="col-md-6">
									<div class="form-group">
								    <input type="password" class="form-control" id="firstname" name="password" placeholder="password" />
							      </div>
							      
								</div>
								<div class="col-md-6">
									<div class="form-group">
								    <input type="email" class="form-control" id="firstname" name="mail" placeholder="mail" />
							      </div>
							      
								</div>
								</div>
								<input type="submit" class="btn btn-primary" id="firstname" name="" value="Enregistrer" />
							</div>

						</form>
                        </div>
                    </div>
                </div>
            </div>
			
			

            <?php include('dimitri/footer.php')?>


        </section>
        <!-- ============================================================== -->
		<!-- 						Content End	 						-->
		<!-- ============================================================== -->



        <!-- Common Plugins -->
        <script src="assets/lib/jquery/dist/jquery.min.js"></script>
		<script src="assets/lib/bootstrap/js/popper.min.js"></script>
        <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/lib/pace/pace.min.js"></script>
        <script src="assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        <script src="assets/lib/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/lib/nano-scroll/jquery.nanoscroller.min.js"></script>
        <script src="assets/lib/metisMenu/metisMenu.min.js"></script>
        <script src="assets/js/custom.js"></script>
		
        <!-- Validations -->
        <script type="text/javascript" src="assets/lib/jquery-validate/jquery.validate.js"></script>
        <script type="text/javascript">
		$.validator.setDefaults( {
			submitHandler: function () {
				alert( "submitted!" );
			}
		} );

		$( document ).ready( function () {
			$( "#confirmForm" ).validate( {
				rules: {
					firstname: "required",
					lastname: "required",
					username: {
						required: true,
						minlength: 2
					},
					password: {
						required: true,
						minlength: 5
					},
					confirm_password: {
						required: true,
						minlength: 5,
						equalTo: "#password"
					},
					email: {
						required: true,
						email: true
					},
					agree: "required"
				},
				messages: {
					firstname: "Please enter your firstname",
					lastname: "Please enter your lastname",
					username: {
						required: "Please enter a username",
						minlength: "Your username must consist of at least 2 characters"
					},
					password: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long"
					},
					confirm_password: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long",
						equalTo: "Please enter the same password as above"
					},
					email: "Please enter a valid email address",
					agree: "Please accept our policy"
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".form-group" ).addClass( "has-error" ).removeClass( "has-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".form-group" ).addClass( "has-success" ).removeClass( "has-error" );
				}
			} );

			$( "#confirmForm1" ).validate( {
				rules: {
					firstname1: "required",
					lastname1: "required",
					username1: {
						required: true,
						minlength: 2
					},
					password1: {
						required: true,
						minlength: 5
					},
					confirm_password1: {
						required: true,
						minlength: 5,
						equalTo: "#password1"
					},
					email1: {
						required: true,
						email: true
					},
					agree1: "required"
				},
				messages: {
					firstname1: "Please enter your firstname",
					lastname1: "Please enter your lastname",
					username1: {
						required: "Please enter a username",
						minlength: "Your username must consist of at least 2 characters"
					},
					password1: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long"
					},
					confirm_password1: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long",
						equalTo: "Please enter the same password as above"
					},
					email1: "Please enter a valid email address",
					agree1: "Please accept our policy"
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					// Add `has-feedback` class to the parent div.form-group
					// in order to add icons to inputs
					element.parents( ".form-group" ).addClass( "has-feedback" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}

					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !element.next( "input" )[ 0 ] ) {
						$('input').addClass( "form-control-danger" ).removeClass( "form-control-success" );
					}
				},
				success: function ( label, element ) {
					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !$( element ).next( "input" )[ 0 ] ) {
						$('input').addClass( "form-control-success" ).removeClass( "form-control-danger" );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".form-group" ).addClass( "has-danger" ).removeClass( "has-success" );
					$('input').addClass( "form-control-danger" ).removeClass( "form-control-success" );
				},
				unhighlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".form-group " ).addClass( "has-success" ).removeClass( "has-danger" );
					$('input').addClass( "form-control-success" ).removeClass( "form-control-danger" );
				}
			} );
		} );
	</script>
    </body>

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/form-validations.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:28:33 GMT -->
</html>