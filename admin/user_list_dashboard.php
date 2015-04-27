<?php  include('header.php'); ?>
<?php  include('session.php'); ?>
    <body>
		<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
			 <?php include('dashboard_slidebar.php'); ?>		
                <div class="span9" id="content">
                    <div class="row-fluid">
         	         <?php $query= mysql_query("select * from users where id = '$session_id'")or die(mysql_error());
			         $row = mysql_fetch_array($query);			
			         ?>
                    <div class="col-lg-12">
                      <div class="alert alert-success alert-dismissable">
                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <img id="avatar1" class="img-responsive" src="<?php echo $row['thumbnail']; ?>"><strong> Welcome! <?php echo $row['first_name']." ".$row['last_name'];  ?></strong>
                      </div>
                    </div>
     
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-dashboard">&nbsp;</i>Dashboard Data Number</div>
								<div class="muted pull-right"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
                            </div>
                            <div class="block-content collapse in">
							        <div class="span12">
									
<div class="block-content collapse in">
<div id="page-wrapper">   
               </div> 				 							
<div id="page-wrapper">
           <div class="row-fluid">		
					<div class="span12">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                   
                                    <div class="span12 text-left"><br/>
                                        
                                         <?php //include('user_list.php'); ?>
									 
										 <!--- User List Start ---->
										 
										 
        <div class="container-fluid">
            <div class="row-fluid">
				        <!-- block -->
				<?php	
	             $count_user=mysql_query("select * from users");
	             $count = mysql_num_rows($count_user);
                 ?>	 
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"></i><i class="icon-user"></i>  User (s) List</div>
								<div class="muted pull-right">
								Number  user: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="delete_users.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-placement="right" title="Click to Delete check item"  data-toggle="modal" href="#user_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"> Delete</i></a>
									<script type="text/javascript">
									 $(document).ready(function(){
									 $('#delete').tooltip('show');
									 $('#delete').tooltip('hide');
									 });
									</script>
									<?php include('modal_delete.php'); ?>
										<thead>
										  <tr>
												<th></th>
												<th>Full Name</th>
												<th>Username</th>
										
												<th>Email</th>
												<th>Status</th>
												<th>Action</th>
												 
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query = mysql_query("select * from users")or die(mysql_error());
													while($row = mysql_fetch_array($user_query)){
													$id = $row['id'];
													?>
									
												<tr>
												<td width="30">
												<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $row['id']; ?>">
												</td>
												<td><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></td>
	
												<td><?php echo $row['username']; ?></td>
												<td><?php echo $row['email']; ?></td>
												<td><?php
                                        if ($row['status'] == 0) {
                                            echo '<span class="label label-sm label-warning">Unactive</span>';
                                        } else {
                                            echo '<span class="label label-sm label-success">Register</span>';
                                        }
                                        ?></td>
											
												<?php include('toolttip_edit_delete.php'); ?>															
												<td>
												<a rel="tooltip"  title="View User" id="e<?php echo $id; ?>" href="delete_user.php<?php echo '?id='.$id; ?>"  data-toggle="modal" ><i class="icon-list-alt icon-large"> </i></a> 
												
												<a rel="tooltip"  title="Edit User" id="<?php echo $id; ?>" href="edit_user.php<?php echo '?id='.$id; ?>"  data-toggle="modal" ><i class="icon-pencil icon-large"> </i></a>
											
												
												<?php
                                        if ($row['status'] == 1) {
											echo '<a color="red" rel="tooltip"  title="Deactivate User" href="userDelete.php?id='.$id.'"  data-toggle="modal" ><i class="icon-trash icon-large" color:red > </i></a> ';
                                           
                                        } else {
											echo '<a color="green" rel="tooltip"  title="Activate User" href="userEnable.php?id='.$id.'"  data-toggle="modal" ><i class="icon-check icon-large" color:green > </i></a> ';
                                           
                                        }
                                        ?>
										
												
												
												</td>
		
									
												</tr>
												<?php } ?>
										</tbody>
									</table>
									</form>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                   


                
            </div>
		 
        </div>
		 
   
										 
										 
										 <!--- User List End ---->
                                    </div>
                                </div>
							 </div>	
                            </div>
                            
                        </div>
                    </div>   				
              </div>	       
        </div>  	


               
				
				
			                 </div>
                            </div>
                        </div>
                        <!-- /block -->
						
                    </div>
                    </div>
                 
                </div>
            </div>
    
         <?php include('footer.php'); ?>
        </div>
	<?php include('script.php'); ?>
    </body>
