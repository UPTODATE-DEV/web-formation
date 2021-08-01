<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/map-vector.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:29:32 GMT -->
<head>
        <?php include('dimitri/head.php')?>

        <!-- Common Plugins -->
        <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
        <!-- Vector Map -->
        <link href="assets/lib/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
		
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
			  <h2>Vector Maps</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Maps</a></li>
					<li class="breadcrumb-item active">Vector Maps</li>		
				</ol></div></div>

        <section class="main-content">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-default">
                            World Map 
                        </div>
                        <div class="card-body">
                            <div id="world-map-markers" style="height: 500px"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                            USA Map
                        </div>
                        <div class="card-body">
                            <div id="usa" style="height: 400px"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                            Australia Map
                        </div>
                        <div class="card-body">
                            <div id="australia" style="height: 400px"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                            UK Map
                        </div>
                        <div class="card-body">
                            <div id="uk" style="height: 400px"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card ">
                        <div class="card-header card-default">
                            India Map
                        </div>
                        <div class="card-body">
                            <div id="india" style="height: 400px"></div>
                        </div>
                    </div>
                </div>
            </div>
            

            <?php include('dimitri/footer.php')?>


        </section>
        <!-- ============================================================== -->
		<!-- 						Content End		 						-->
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
		
        <!-- Vector Maps -->
        <script src="assets/lib/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="assets/lib/vectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="assets/lib/vectormap/jquery-jvectormap-in-mill.js"></script>
        <script src="assets/lib/vectormap/jquery-jvectormap-us-aea-en.js"></script>
        <script src="assets/lib/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
        <script src="assets/lib/vectormap/jquery-jvectormap-au-mill.js"></script>
        <script src="assets/js/jvectormap.custom.js"></script>

    </body>

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/map-vector.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:29:43 GMT -->
</html>