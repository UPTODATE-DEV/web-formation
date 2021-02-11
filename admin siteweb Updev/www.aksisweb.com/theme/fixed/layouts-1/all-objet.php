<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/ecommerce-Boxs.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:29:46 GMT -->
<head>
        <?php include('dimitri/head.php')?>

        <!-- Common Plugins -->
        <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
        <!-- DataTables -->
        <link href="assets/lib/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
        <link href="assets/lib/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css">

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
			  <h2>Boxs</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Ojects</a></li>
					<li class="breadcrumb-item active">Add Obect1</li>
				</ol></div></div>

        <section class="main-content">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
					 <div class="card-header card-default">
							<div class="float-right mt-10">
								<a href="Ajout-objet.php" class="btn btn-primary btn-rounded box-shadow btn-icon"><i class="fa fa-plus"></i> Add New Object</a>
                            </div>
							Object
							<p class="text-muted">Lorem ipsum dolor sit amet</p>
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
                                                <strong>Added</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Action</strong>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                      
                                        <tr>
                                            <td>00012</td>
                                            <td>Box 12</td>
                                            <td>Description for Box</td>
                                            
                                            <td>15/07/2018</td>
                                            <td class="text-center">
                                                
												<button type="button" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></button>
												<button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>00013</td>
                                            <td>Box 13</td>
                                            <td>Description for Box</td>
                                            
                                            <td>15/07/2018</td>
                                            <td class="text-center">
                                                
												<button type="button" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></button>
												<button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>00014</td>
                                            <td>Box 14</td>
                                            <td>Description for Box</td>
                                            
                                            <td>15/07/2018</td>
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

            

           <?php include('dimitri/footer.php')?>


        </section>
        <!-- ============================================================== -->
		<!-- 						Content End 	 						-->
		<!-- ============================================================== -->



        <!-- Common Plugins-->
        <script src="assets/lib/jquery/dist/jquery.min.js"></script>
		<script src="assets/lib/bootstrap/js/popper.min.js"></script>
        <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/lib/pace/pace.min.js"></script>
        <script src="assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        <script src="assets/lib/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/lib/nano-scroll/jquery.nanoscroller.min.js"></script>
        <script src="assets/lib/metisMenu/metisMenu.min.js"></script>
        <script src="assets/js/custom.js"></script>
		
        <!-- Datatables-->
        <script src="assets/lib/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/lib/datatables/dataTables.responsive.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#datatable1').dataTable();
            });
        </script>
    </body>

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/ecommerce-Boxs.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:29:46 GMT -->
</html>