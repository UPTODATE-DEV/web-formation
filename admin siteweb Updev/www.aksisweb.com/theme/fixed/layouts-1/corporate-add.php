<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/corporate-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:29:46 GMT -->
<head>
        <?php include('dimitri/head.php')?>

        <!-- Common Plugins -->
        <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- Summernote -->
        <link href="assets/lib/summernote/summernote.css" rel="stylesheet">
        <link href="assets/lib/summernote/summernote-bs3.html" rel="stylesheet">
		
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
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->
					
            <div class="row page-header"><div class="col-lg-6 align-self-center ">
			  <h2>Add Pages</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Corporate</a></li>
					<li class="breadcrumb-item active">Add Pages</li>
				</ol></div></div>
           
        <section class="main-content">

			<div class="alert bg-success alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Success!</strong> Page successfully added.. </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header card-default">
							Add Pages
							<p class="text-muted">Lorem Ipsum is simply dummy text of the <code>printing and typesetting</code> industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="card-body">
							
                            <form method="get" action="#" class="form-horizontal">
                                    <div class="form-group">
                                        <label>Menu Position</label>
                                           <select name="account" class="form-control m-b">
                                                <option>Header Menu</option>
                                                <option>Footer Menu</option>
                                                <option>Side Menu</option>
                                            </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Page Name</label>
                                            <input type="text" placeholder="Page name" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Slug</label>
                                            <input type="text" placeholder="Page slug" class="form-control">
											<small class="text-muted">Sample : <code>corporate-page</code></small>
                                    </div>

                                   <div class="form-group">
                                        <label>Content</label>
                                        <div class="summernote" style="display: none;"><p>Hello Summernote</p></div>
                                    </div>

                                   <div class="form-group">
										<label>Featured Image</label>
										<div class="fileinput-new" data-provides="fileinput">
										  <div class="fileinput-preview" data-trigger="fileinput" style="width: 200px; height:150px;"></div>
											<span class="btn btn-primary  btn-file">
												<span class="fileinput-new">Select</span>
												<span class="fileinput-exists">Change</span>
												<input type="file" id="image" name="image">
											</span>
											<a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
										</div>
									</div>
								
								<div class="">
									Meta Settings
									<p class="text-muted">Lorem Ipsum is simply dummy text of the <code>printing and typesetting</code> industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
								</div>
							<hr>
                                    <div class="form-group">
                                        <label>Title</label>
                                            <input type="text" placeholder="Page title" class="form-control form-control-rounded">
                                    </div>
									
                                    <div class="form-group">
                                        <label>Description</label>
                                            <input type="text" placeholder="Page description" class="form-control form-control-rounded">
                                    </div>

                                    <div class="form-group">
                                        <label>Keywords</label>
                                            <input type="text" placeholder="Page keywords" class="form-control form-control-rounded">
										    <small class="text-muted">Sample : <code>apple, pear, banana, wholesale</code></small>
                                    </div>
									
                                   <div class="form-group">
                                        <label>Published</label>
											<div class="row">
												<div class="radio radio-success">
													<input type="radio" name="radio4" id="radio12" value="option4" checked="">
													<label for="radio12"> Yes </label>
												</div>
												<div class="radio radio-danger">
													<input type="radio" name="radio4" id="radio13" value="option4">
													<label for="radio13"> No </label>
												</div>
							
                                          </div>
                                    </div> 
								
									<a href="#" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Save</a>
									<a href="#" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Back</a>
									<a href="#" class="btn btn-danger btn-icon"><i class="fa fa-times"></i>Cancel</a>		
																	
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            

            <?php include('dimitri/footer.php')?>


        </section>
        <!-- ============================================================== -->
		<!-- 						Content End		 						-->
		<!-- ============================================================== -->



        <!--Common Plugins-->
        <script src="assets/lib/jquery/dist/jquery.min.js"></script>
		<script src="assets/lib/bootstrap/js/popper.min.js"></script>
        <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/lib/pace/pace.min.js"></script>
        <script src="assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        <script src="assets/lib/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/lib/nano-scroll/jquery.nanoscroller.min.js"></script>
        <script src="assets/lib/metisMenu/metisMenu.min.js"></script>
        <script src="assets/js/custom.js"></script>
		
		<!-- Summernote -->
        <script src="assets/lib/summernote/summernote.min.js"></script>

        <script type="text/javascript">
			$(document).ready(function() {
				$('.summernote').summernote({
					height:'300px',
				});
			});
		</script>

    </body>

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/corporate-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:29:46 GMT -->
</html>