<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/table-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:28:59 GMT -->
<head>
       <?php include('reference/heard.php'); ?>
   </head>
    <body>

			<!-- ============================================================== -->
			<!-- 						Topbar Start 							-->
			<!-- ============================================================== -->
           <?php include('reference/topbar.php'); ?>
		<!-- ============================================================== -->
		<!--                        Topbar End                              -->
		<!-- ============================================================== -->
		
		
		<!-- ============================================================== -->
		<!--                        Right Side Start                        -->
		<!-- ============================================================== -->
		<?php include('reference/nav.php'); ?>
		<!-- ============================================================== -->
		<!--                        Right Side End                          -->
		<!-- ============================================================== -->
		


        <!-- ============================================================== -->
		<!-- 						Navigation Start 						-->
		<!-- ============================================================== -->
       <?php include('reference/menu.php'); ?>
        <!-- ============================================================== -->
		<!-- 						Navigation End	 						-->
		<!-- ============================================================== -->


        <!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->
		           
		   <div class="row page-header"><div class="col-lg-6 align-self-center ">
			  <h2>Users</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Tables</a></li>
					<li class="breadcrumb-item active">users</li>		
                </ol>
            </div>
            <div class="col-lg-6 align-self-center text-right">
                <a href="#" class="btn btn-success box-shadow btn-icon btn-rounded"><i class="fa fa-plus"></i> New user</a>
            </div>
        </div>
    
               
            
        <section class="main-content">

			 <div class="row">
			  <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-default">
                            Users
                           
                        </div>
                        <div class="card-body">
                            <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Noms</th>
                                <th>Username</th>
                                <th>Email</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Systems Administrator</td>
                                <td>New York</td>
                                <td>@newyork</td>
                            </tr>
                        
                            </tbody>
                        </table>
                         </div>
                    </div>
                </div>
			 </div>
              
          <?php include('reference/footer.php'); ?>

        </section>
        <!-- ============================================================== -->
		<!-- 						Content End		 						-->
		<!-- ============================================================== -->



        <!-- Common Plugins -->
    <?php include('reference/script.php'); ?>

    </body>

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/table-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:28:59 GMT -->
</html>