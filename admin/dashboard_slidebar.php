     <div class="span3" id="sidebar">
	              <img id="admin_avatar" class="img-polaroid" src="<?php echo $row['thumbnail']; ?>">
	                 <?php// include('count.php'); ?>
					 <?php// include('count_damage.php'); ?>
					  <?php //include('count_dump.php'); ?>
					 <?php //include('count_remain_new_device.php'); ?>
                  <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                           <li class="active"> 
						   <a href="dashboard.php"><i class="icon-chevron-right"></i><i class="icon-home"></i>&nbsp;Dashboard</a> 
						   </li>
						 
						 <!------/.* manage user sidebar*------->						
						 <li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs"><i class="icon-chevron-right"></i><i class="icon-tablet icon-large"></i>&nbsp;Manage User
						    <div class="muted pull-right"><i class="caret"></i></div></a>					
						    <ul id="bs" class="collapse">						
                            <li class="">
                            <a href="add_user_dashboard.php"><i class="icon-chevron-right"></i><i class="icon-desktop"></i> Add User </a>
                            </li>
                            <li class="">
                            <a href="user_list_dashboard.php"><i class="icon-chevron-right"></i><i class="icon-folder-open-alt"></i> User List</a>
                            </li> 
						   					
						    </ul>
						</li>
						
                         <!------/.* manage product sidebar*------->	
					    <li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs1"><i class="icon-chevron-right"></i><i class="icon-sitemap"></i>&nbsp;Manage Product
							<div class="muted pull-right"><i class="caret"></i></div></a>						
						    <ul id="bs1" class="collapse">						
                            <li class="">
                            <a href="add_Device.php"><i class="icon-chevron-right"></i><i class="icon-map-marker"></i> Add Product</a>
                            </li>
						    <li class="">
                            <a href="product_list_dashboard.php"><i class="icon-chevron-right"></i><i class="icon-sitemap"></i> Product List</a>
                            </li>
						    </ul>
						</li>
						
						    <!------/.* manage reservation sidebar*------->
						<li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs2"><i class="icon-chevron-right"></i><i class="icon-sitemap"></i>&nbsp;Manage Reservation
							<div class="muted pull-right"><i class="caret"></i></div></a>						
						    <ul id="bs2" class="collapse">						
                            <li class="">
                            <a href=""><i class="icon-chevron-right"></i><i class="icon-map-marker"></i> Make Reservation</a>
                            </li>
						    <li class="">
                            <a href=""><i class="icon-chevron-right"></i><i class="icon-sitemap"></i> Renew Reservation</a>
                            </li>
							<li class="">
                            <a href=""><i class="icon-chevron-right"></i><i class="icon-sitemap"></i> Reservation List</a>
                            </li>
						    </ul>
						</li>
						
						 <!------/.* manage system log sidebar*------->
						<li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs3"><i class="icon-chevron-right"></i><i class="icon-sitemap"></i>&nbsp;Manage Invoice							<div class="muted pull-right"><i class="caret"></i></div></a>						
						    <ul id="bs3" class="collapse">						
                            <li class="">
                            <a href=""><i class="icon-chevron-right"></i><i class="icon-map-marker"></i> Create Invoice</a>
                            </li>
						    <li class="">
                            <a href=""><i class="icon-chevron-right"></i><i class="icon-sitemap"></i> Invoice List</a>
                            </li>
						    </ul>
						</li>
						
						<!------/.* manage notification *------->
						  <li class="">
				           <a href="feedback.php"><i class="icon-chevron-right"></i><i class="icon-globe"></i>&nbsp;Feedback
				           
				           </a>
			            </li>
						
						
	                 </ul>					
				 									
    </div>