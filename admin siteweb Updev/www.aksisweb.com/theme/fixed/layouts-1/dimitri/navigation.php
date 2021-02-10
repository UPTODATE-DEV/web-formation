 <div class="main-sidebar-nav default-navigation">
            <div class="nano">
                <div class="nano-content sidebar-nav">
				
					<div class="card-body border-bottom text-center nav-profile">
						<div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                        <img alt="profile" class="margin-b-10  " src="assets/img/avtar-2.png" width="80">
<<<<<<< HEAD
                        <p class="lead margin-b-0 toggle-none">
                        <?php
                        if($_SESSION['user']['USERNAME'] !==array()){
                            $users=$_SESSION['user']['USERNAME'];
                            echo $users;

                        }
                        ?>
                        </p>
=======
                        <p class="lead margin-b-0 toggle-none">Dim Cloud</p>
>>>>>>> c596f1d463f66622723af7e711080be29a340c32
                        <p class="text-success">online</p>						
                    </div>
					
                    <ul class="metisMenu nav flex-column" id="menu">
                        <li class="nav-heading"><span>MAIN</span></li>
						<li class="nav-item"><a class="nav-link" href="index.php"><i class="fa fa-home"></i> <span class="toggle-none">Home <span class="badge badge-pill badge-danger float-right mr-2">1.0</span></span></a></li>
                         <li class="nav-item">
                            <a class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="fa fa-user"></i> <span class="toggle-none">User<span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                                <li class="nav-item"><a class="nav-link" href="Ajout-user.php">Add user</a></li>
                               
                                
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="javascript: void(0);" aria-expanded="false"><i class="fa fa-plus-square-o"></i> <span class="toggle-none">Objects<span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                                <li class="nav-item"><a class="nav-link" href="Ajout-objet.php">Add Object</a></li>
                                <li class="nav-item"><a class="nav-link" href="all-objet.php">All object</a></li>
                                <li class="nav-item"><a class="nav-link" href="ajout-box.php">Add box</a></li>
                                 <li class="nav-item"><a class="nav-link" href="banner.php">Add Object1</a></li>
                                
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="fa fa-table"></i> <span class="toggle-none">Tables <span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                                <li class="nav-item"><a class="nav-link" href="table-basic.html">Basic Tables</a></li>
                            
                            </ul>
                        </li>					
						<li class="nav-item">
                            <a class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="fa fa-envelope-open"></i> <span class="toggle-none">Inbox<span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                                <li class="nav-item"><a class="nav-link" href="mail-index.html">Inbox</a></li>
                                <li class="nav-item"><a class="nav-link" href="mail-view.html">Inbox view</a></li>
                                <li class="nav-item"><a class="nav-link" href="mail-compose.html">Compose</a></li>
                            </ul>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="fa fa-folder"></i> <span class="toggle-none">Sample Pages <span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                                
                                <li class="nav-item"><a class="nav-link" href="page-login.php">Login</a></li>
                                <li class="nav-item"><a class="nav-link" href="page-register.php">Register</a></li>
                                <li class="nav-item"><a class="nav-link" href="page-forget-password.html">Forget Password</a></li>
                                <li class="nav-item"><a class="nav-link" href="page-lockscreen.html">Lock-screen</a></li>
                                <li class="nav-item"><a class="nav-link" href="page-404.html">404</a></li>
                               
                                
                            </ul>
                        </li>
                        <li class="nav-heading"><span>FORMS, TABLE & LAYOUTS</span></li>

                        <li class="nav-item">
                            <a  class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="fa fa-cogs"></i> <span class="toggle-none">UI elements <span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
								<li class="nav-item"><a class="nav-link" href="ui-jquery-elements.html">Jquery UI</a></li>
								<li class="nav-item"><a class="nav-link" href="ui-bootstrap-elements.html">Bootstrap UI</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui-typography.html">Typography</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui-icons.html">Icons</a></li>
								<li class="nav-item"><a class="nav-link" href="ui-buttons.html">Buttons</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui-cards.html">Cards</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui-tabs.html">Tabs</a></li>
								<li class="nav-item"><a class="nav-link" href="ui-card-master.html">Card Master</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui-tip-pop.html">Tooltip & Popovers</a></li>
								<li class="nav-item"><a class="nav-link" href="ui-sweetalerts.html">Sweet Alters</a></li>
								<li class="nav-item"><a class="nav-link" href="ui-alertify.html">Alertify Alters</a></li>
								<li class="nav-item"><a class="nav-link" href="ui-modals.html">Modals</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui-notification.html">Notification</a></li>
								<li class="nav-item"><a class="nav-link" href="ui-progress.html">Progress</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui-grid.html">Grid System</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui-carousel.html">Carousel</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui-range-slider.html">Range Slider</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui-nestable.html">Nestable</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui-treeview.html">Tree View</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui-draggable-cards.html">Draggable Cards</a></li>
                            </ul>
                        </li>						
                       
						
                        <li class="nav-item">
                            <a class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="fa fa-map-marker"></i> <span class="toggle-none">Maps <span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                                <li class="nav-item"><a class="nav-link" href="map-vector.html">Vector map</a></li>
                                
                            </ul>
                        </li>
						
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
		<!-- 						Navigation End	 						-->
		<!-- ============================================================== -->
