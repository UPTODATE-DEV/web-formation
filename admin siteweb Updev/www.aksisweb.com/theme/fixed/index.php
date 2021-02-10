<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:26:21 GMT -->
<head>
        <?php include('dimitri/head.php')?>
		
		<?php include('dimitri/link.php')?>
		
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
		<!--<?php include('dimitri/side.php')?>-->
		<!-- ============================================================== -->
		<!--                        Right Side End                          -->
		<!-- ============================================================== -->
		

        <!-- ============================================================== -->
		<!-- 						Navigation Start 						-->
		<!-- ============================================================== -->
       <?php include('dimitri/navigation.php')?>
			
		<!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->
		<div class="row page-header">
				<div class="col-lg-6 align-self-center ">
				  <h2>Dashboard</h2>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div>
				
		</div>
		
        <section class="main-content">
            <div class="row w-no-padding margin-b-30">
			
				<div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
								<h2 class="margin-b-5">Object</h2>
								<p class="text-muted">Total Object</p>
								<span class="float-right text-primary widget-r-m">859</span>
							</div>
							<div class="progress margin-b-10  progress-mini">
								<div style="width:50%;" class="progress-bar bg-primary"></div>
							</div>
							<p class="text-muted float-left margin-b-0">Change</p>
							<p class="text-muted float-right margin-b-0">50%</p>
                        </div>
                    </div>
                </div>
				
                <div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
								<h2 class="margin-b-5">Box</h2>
								<p class="text-muted">Total Box</p>
								<span class="float-right text-indigo widget-r-m">58</span>
							</div>
							<div class="progress margin-b-10 progress-mini">
								<div style="width:45%;" class="progress-bar bg-indigo"></div>
							</div>
							<p class="text-muted float-left margin-b-0">Change</p>
							<p class="text-muted float-right margin-b-0">450%</p>
                        </div>
                    </div>
                </div>
				
				<div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
								<h2 class="margin-b-5">Images</h2>
								<p class="text-muted">Total Images</p>
								<span class="float-right text-success widget-r-m">85</span>
							</div>
							<div class="progress margin-b-10 progress-mini">
								<div style="width:85%;" class="progress-bar bg-success"></div>
							</div>
							<p class="text-muted float-left margin-b-0">Change</p>
							<p class="text-muted float-right margin-b-0">85%</p>
                        </div>
                    </div>
                </div>
				
				<div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
								<h2 class="margin-b-5">Visitors</h2>
								<p class="text-muted">Total Visitors</p>
								<span class="float-right text-warning widget-r-m">98421</span>
							</div>
							<div class="progress margin-b-10 progress-mini">
								<div style="width:38%;" class="progress-bar bg-warning"></div>
							</div>
							<p class="text-muted float-left margin-b-0">Change</p>
							<p class="text-muted float-right margin-b-0">38%</p>
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="row">
                <div class="col-md-12">
                  <div class="card bg-chart ">
                        <div class="card-header text-white anime">
                            Sales Overview			
							<p class="text-white">Lorem Ipsum is simply dummy text of the printing</p>
                        </div>
                        <div class="card-body">
                            <div>
                                <canvas id="myChart"  height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
            <div class="row">
                <div class="col-md-8">
				  <div class="card">
                        <div class="card-header">
                             Current Visitors
							<p class="text-muted">Different Devices Used to Visit</p>
                        </div>
                        <div class="card-body">

                             <div id="world-map-markers" style="height: 472px"></div>

						</div>
                    </div>
                </div>
				
				<div class="col-md-4">
				  <div class="card">
                        <div class="card-header">
                            Our Visitors
							<p class="text-muted">Different Devices Used to Visit</p>
                        </div>
                        <div class="card-body">
							<div id="donut"></div>
							<ul class="list-1 list-group">
							  <li class="list-group-item">Desktop <span class="float-right text-indigo"><i class="fa fa-arrow-up"></i> 45.0%</span></li>
							  <li class="list-group-item">Mobile <span class="float-right text-primary"><i class="fa fa-minus"></i> 25.0%</span></li>
							  <li class="list-group-item">Tablet <span class="float-right text-teal"><i class="fa fa-arrow-down"></i> 15.0%</span></li>
							  <li class="list-group-item">Other <span class="float-right text-muted"><i class="fa fa-arrow-up"></i> 15.0%</span></li>
							</ul>
						</div>
                    </div>
                </div>
			</div>
			
			<div class="row">
                  <div class="col-md-6">
					<div class="card">
					  <div class="card-header">
						Recent Comments
						<p class="text-muted">Latest Comments on users</p>
					  </div>
						<div class="comment-widgets">
						  <div class="d-flex flex-row comment-row">
							<div class="mr-2"><img alt="user" class="rounded-circle" src="assets/img/avtar-1.png" width="50"></div>
							<div class="comment-text w-100">
							  <h5>John Doe</h5>
							  <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
							  <div class="comment-footer">
								<span class="text-muted pull-right">April 8, 2018</span> 
								<span class="label label-info">Pending</span> 
								<span class="action-icons">
									<a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a> 
									<a href="javascript:void(0)"><i class="ti-check"></i></a>
									<a href="javascript:void(0)"><i class="ti-heart"></i></a>
								</span>
							  </div>
							</div>
						  </div>
						  <div class="d-flex flex-row comment-row active">
							<div class="mr-2">
							  <span class="round"><img alt="user" src="assets/img/avtar-2.png" width="50"></span>
							</div>
							<div class="comment-text active w-100">
							  <h5>John Doe</h5>
							  <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
							  <div class="comment-footer">
								<span class="text-muted pull-right">April 7, 2018</span> 
								<span class="label label-success">Approved</span> 
								<span class="action-icons">
									<a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a> 
									<a href="javascript:void(0)"><i class="ti-check"></i></a>
									<a href="javascript:void(0)"><i class="ti-heart"></i></a>
								</span>
							  </div>
							</div>
						  </div><!-- Comment Row -->
						  <div class="d-flex flex-row comment-row">
							<div class="mr-2">
							  <span class="round"><img alt="user" src="assets/img/avtar-3.png" width="50"></span>
							</div>
							<div class="comment-text w-100">
							  <h5>John Doe</h5>
							  <p class="m-b-5">Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
							  <div class="comment-footer">
								<span class="text-muted pull-right">April 6, 2018</span> <span class="label label-danger">Rejected</span> <span class="action-icons"><a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a> <a href="javascript:void(0)"><i class="ti-check"></i></a> <a href="javascript:void(0)"><i class="ti-heart"></i></a></span>
							  </div>
							</div>
						  </div><!-- Comment Row -->
						  <div class="d-flex flex-row comment-row">
							<div class="mr-2">
							  <span class="round"><img alt="user" src="assets/img/avtar-4.png" width="50"></span>
							</div>
							<div class="comment-text w-100">
							  <h5>John Doe</h5>
							  <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
							  <div class="comment-footer">
								<span class="text-muted pull-right">April 5, 2018</span> <span class="label label-info">Pending</span> <span class="action-icons"><a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a> <a href="javascript:void(0)"><i class="ti-check"></i></a> <a href="javascript:void(0)"><i class="ti-heart"></i></a></span>
							  </div>
							</div>
						  </div>
						  <div class="d-flex flex-row comment-row">
							<div class="mr-2">
							  <span class="round"><img alt="user" src="assets/img/avtar-2.png" width="50"></span>
							</div>
							<div class="comment-text active w-100">
							  <h5>John Doe</h5>
							  <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
							  <div class="comment-footer">
								<span class="text-muted pull-right">April 7, 2018</span> 
								<span class="label label-success">Approved</span> 
								<span class="action-icons">
									<a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a> 
									<a href="javascript:void(0)"><i class="ti-check"></i></a>
									<a href="javascript:void(0)"><i class="ti-heart"></i></a>
								</span>
							  </div>
							</div>
						  </div>
						</div>
			
					</div>
				</div>
				
				<div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
							<div class="row">
                            <div class="col-md-6">
                                Todo List
								<p class="text-muted">Lorem ipsum dolor sit amet</p>
                            </div>
                            <div class="col-md-6">
								<a href="javascript: void(0);" class="btn btn-success btn-border box-shadow btn-circle pull-right"><i class="fa fa-plus"></i></a>
                            </div>
							 </div>
                        </div>
                        <div class="card-body">
                            <div class="scrollDiv">
                                <ul class="todo-list">
                                  <li>
                                       <div class="checkbox checkbox-primary margin-r-5">
											<input id="checkbox1" type="checkbox">
											<label for="checkbox1">Lorem Ipsum is simply dummy text of the printing <small class="label label-info">Today</small></label>
										</div>
                                    </li>
									<li>
                                       <div class="checkbox checkbox-primary margin-r-5">
											<input id="checkbox2" type="checkbox">
											<label for="checkbox2"> Lorem Ipsum is simply dummy text of the printing  dummy text of the printing and typesetting industry. <small class="label label-danger">Yesterday</small></label>
										</div>
                                    </li>
									<li>
                                       <div class="checkbox checkbox-primary margin-r-5">
											<input id="checkbox3" type="checkbox">
											<label for="checkbox3"> Lorem Ipsum is simply dummy text of the printing  dummy text of the <small class="label label-info">1 Week</small></label>
										</div>
                                    </li>
									<li>
                                       <div class="checkbox checkbox-primary margin-r-5">
											<input id="checkbox1" type="checkbox" >
											<label for="checkbox1"> Lorem Ipsum is simply dummy text of the 	<small class="label label-primary"><i class="fa fa-clock-o"></i> 3 Mins</small></label>
										
										</div>
                                    </li>
									<li>
                                       <div class="checkbox checkbox-primary margin-r-5">
											<input id="checkbox4" type="checkbox">
											<label for="checkbox4"> Lorem Ipsum is simply dummy text of the printing  dummy text of the printing<small class="label label-warning">2 Week</small></label>
										</div>
                                    </li>
                                    <li>
                                       <div class="checkbox checkbox-primary margin-r-5">
											<input id="checkbox5" type="checkbox">
											<label for="checkbox5"> Lorem Ipsum is simply dummy text of the<small class="label label-info">Today</small></label>
										</div>
                                    </li>
                                   <li>
                                       <div class="checkbox checkbox-primary margin-r-5">
											<input id="checkbox1" type="checkbox">
											<label for="checkbox1"> Lorem Ipsum is simply dummy text of the printing  dummy text of<small class="label label-danger">Yesterdat</small></label>
										</div>
                                    </li>
									<li>
                                       <div class="checkbox checkbox-primary margin-r-5">
											<input id="checkbox4" type="checkbox" >
											<label for="checkbox4"> Lorem Ipsum is simply dummy text of the printing  dummy text of the printing<small class="label label-info"><i class="fa fa-clock-o"></i> 3 Mins</small></label>
										</div>
                                    </li>
                                    <li>
                                       <div class="checkbox checkbox-primary margin-r-5">
											<input id="checkbox5" type="checkbox" >
											<label for="checkbox5"> Lorem Ipsum is simply dummy text of the<small class="label label-danger"><i class="fa fa-clock-o"></i> 1 Week</small></label>
										</div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Add Todo...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        Add</button>
                                </span>
                            </div>
                        </div>
                    </div>
					<div class="card">
                        <div class="card-header card-default">
                            Chat
							<p class="text-muted">Lorem ipsum dolor sit amet</p>
                        </div>
						
                        <div class="card-body">
                            <div class="scrollDiv">
                                <ul class="chat-list list-unstyled">
                                    <li class="clearfix chat-element media">
                                        <a href='javascript: void(0);' class="float-left">
                                            <img src="assets/img/avtar-2.png" alt="" class="rounded-circle">
                                        </a>
                                        <div class="media-body ">
                                            <div class="speech-box">
                                                <small class="float-right text-primary">1m ago</small>
                                                <strong>John Doe</strong>
                                                <p class="margin-b-0">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                                </p>
                                                <small class="text-info">Today 12:31 pm - 10.08.2018</small>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="clearfix chat-element right media">
                                        <div class="media-body text-right float-left">
                                            <div class="speech-box">
                                                <strong class="float-left">John Doe</strong>
												<small class="text-right text-primary">1m ago</small>
                                                <p class="margin-b-0 text-left">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                                </p>
                                                <small class="text-info">Today 12:31 pm - 10.08.2018</small>
                                            </div>
                                        </div>
										<a href='javascript: void(0);' class="float-right">
                                            <img src="assets/img/avtar-2.png" alt="" class="rounded-circle">
                                        </a>
                                    </li>
                                    <li class="clearfix chat-element media">
                                        <a href='javascript: void(0);' class="float-left">
                                            <img src="assets/img/avtar-2.png" alt="" class="rounded-circle">
                                        </a>
                                        <div class="media-body ">
                                            <div class="speech-box">
                                                <small class="float-right text-primary">1m ago</small>
                                                <strong>John Doe</strong>
                                                <p class="margin-b-0">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                                </p>
                                                <small class="text-info">Today 12:31 pm - 10.08.2018</small>
                                            </div>
                                        </div>
                                    </li>
									 <li class="clearfix chat-element media">
                                        <a href='javascript: void(0);' class="float-left">
                                            <img src="assets/img/avtar-2.png" alt="" class="rounded-circle">
                                        </a>
                                        <div class="media-body ">
                                            <div class="speech-box">
                                                <small class="float-right text-primary">1m ago</small>
                                                <strong>John Doe</strong>
                                                <p class="margin-b-0">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                                </p>
                                                <small class="text-info">Today 12:31 pm - 10.08.2018</small>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Type your message here...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary"><i class="fa fa-send"></i></button>
                                </span>
                            </div>
                        </div>
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
			
        <!--Chart Script-->
        <script src="assets/lib/chartjs/chart.min.js"></script>
		<script src="assets/lib/chartjs/chartjs-sass.js"></script>

		<!--Vetor Map Script-->
		<script src="assets/lib/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="assets/lib/vectormap/jquery-jvectormap-us-aea-en.js"></script>
		
		<!-- Chart C3 -->
        <script src="assets/lib/chart-c3/d3.min.js"></script>
        <script src="assets/lib/chart-c3/c3.min.js"></script>
	
        <!-- Datatables-->
        <script src="assets/lib/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/lib/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/lib/toast/jquery.toast.min.js"></script>
        <script src="assets/js/dashboard.js"></script>
		
    </body>

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:27:14 GMT -->
</html>