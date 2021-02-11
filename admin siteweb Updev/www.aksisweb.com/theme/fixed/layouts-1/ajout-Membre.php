<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/ui-modals.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:27:33 GMT -->
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
		
		<!-- ============================================================== -->
		<!--                        Right Side End                          -->
		<!-- ============================================================== -->
		


        <!-- ============================================================== -->
		<!-- 						Navigation Start 						-->
		<!-- ============================================================== -->
        <?php include('dimitri/navigation.php')?>
        <!-- ============================================================== -->
		<!-- 						Navigation End	 						-->
		<!-- ============================================================== -->


        <!-- ============================================================== -->
		<!-- 						Content End		 						-->
		<!-- ============================================================== -->
		<div class="row page-header">
			<div class="col-lg-6 align-self-center ">
			   <h2>Add Box</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Team</a></li>
					<li class="breadcrumb-item active">Member</li>
				</ol>
			</div>
		</div>

        <section class="main-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-default">
                           
                            <div class="float-right mt-10">
								<a href="#" class="btn btn-success margin-r-5 btn-rounded box-shadow btn-icon"data-toggle="modal" data-target="#loginModal"><i class="fa fa-plus"></i> Add Member</a>
						    </div>
                        </div>
                                                 
                              
                                            
                        
                        <div class="card-body">
                                <table id="datatable1" class="table table-striped dt-responsive nowrap table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <strong>ID</strong>
                                            </th>
                                            
                                            <th class="text-center">
                                                <strong>Name</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Title</strong>
                                            </th>
                                           
                                            <th class="text-center">
                                                <strong>Description</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Photo</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Action</strong>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>0001</td>
                                            <td>Box 1</td>
                                            <td>Admin</td>
                                            <td>Description for Box</td>
                                           
                                            <td></td>
                                            <td class="text-center">
                                               
												<button type="button" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></button>
												<button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        
                                       
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>

         <!--   <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-default">
                            Modals Size
                        </div>
                        <div class="card-body">
                                <button type="button" class="btn btn-indigo margin-r-5" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>
                                <button type="button" class="btn btn-danger margin-r-5" data-toggle="modal" data-target=".bs-example-modal-default">Default size modal</button>            
                                <button type="button" class="btn btn-teal margin-r-5" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->

            

          <?php include('dimitri/footer.php')?>


        </section>
        <!-- ============================================================== -->
		<!-- 						Content End		 						-->
		<!-- ============================================================== -->

				<div class="modal fade" id="loginModal">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
						<h5 class="modal-title" id="exampleModalLabel">Add Member</h5>
					  </div>
					  <div class="modal-body">
                            <form role="form">
                                
                                <div class="form-group">
                                	<label>Name</label>
                                    <input type="text" class="form-control" placeholder="Text">
                                </div>
                                 <div class="form-group">
										<label>Title</label>
										<input type="text" placeholder="Text" class="form-control form-control-rounded">
								</div>
                                <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" placeholder="Text" class="form-control form-control-rounded">
                                </div>
                                <div class="form-group">
                                        <label>Images</label>
                                        <div class="fileinput fileinput-new input-group col-md-12" data-provides="fileinput">
                                              <div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
                                              <span class="input-group-addon btn btn-primary btn-file ">
                                              <span class="fileinput-new">Select</span>
                                              <span class="fileinput-exists">Change</span>
                                              <input type="file"  name="image">
                                              </span>
                                              <a href="#" class="input-group-addon btn btn-danger  hover fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                <div class="clearfix">
                                   
                                    <button type="button" class="btn  btn-primary float-right">Add</button>
                                </div>

                            </form>
                            
                           
					  </div>
					</div>
				  </div>
				</div>

            	<div class="modal fade" id="signupModal">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
						 <h5 class="modal-title" id="exampleModalLabel">Login Modal</h5>
					  </div>
                    <div class="modal-body">
                       
                            <form role="form">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Reset Password">
                                        </div>
                                    </div>
                                </div>


                                <div class="clearfix">
                                   <div class="checkbox checkbox-inline checkbox-primary">
													<input id="checkbox11" type="checkbox" checked="">
													<label for="checkbox11"> Option one </label>
												</div>
                                    <button type="button" class="btn btn-primary float-right">Signup</button>
                                </div>
                            </form>
                            <hr>
                            <div class="text-center">
                                <p>Already have an Account, <a href='#'>Login</a></p>
                            </div>
              
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="textModal" tabindex="-1" role="dialog" aria-labelledby="textModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
                        <h5 class="modal-title" id="myModalLabel">Text heading</h5>
                    </div>
                    <div class="modal-body">
                        <p>
                            We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desireWe denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire  
                        </p><br>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary btn-lg">Get free trail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--modal text end-->

        <!--modal of video-->
        <div class="modal video-modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
                    <div class="modal-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe id="vimeo-video" src="#"></iframe>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
                        <h5 class="modal-title" id="mySmallModalLabel">Modal Small</h5>
                    </div>
                    <div class="modal-body">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
                        <h5 class="modal-title" id="myModalLabel">Modal Large</h5>
                    </div>
                    <div class="modal-body">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade bs-example-modal-default" tabindex="-1" role="dialog" aria-labelledby="myDefaultModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
                        <h5 class="modal-title" id="myDefaultModalLabel">Modal Default Size</h5>
                    </div>
                    <div class="modal-body">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Common Plugins -->
        <script src="assets/lib/jquery/dist/jquery.min.js"></script>
		<script src="assets/lib/bootstrap/js/popper.min.js"></script>
        <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/lib/pace/pace.min.js"></script><script src="assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        <script src="assets/lib/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/lib/nano-scroll/jquery.nanoscroller.min.js"></script>
        <script src="assets/lib/metisMenu/metisMenu.min.js"></script>
        <script src="assets/js/custom.js"></script>

    </body>

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/ui-modals.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:27:33 GMT -->
</html>