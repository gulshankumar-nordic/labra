
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
											
												<?php include('toolttip_edit_delete.php'); ?>															
												<td width="120">
												<a rel="tooltip"  title="Edit Client" id="e<?php echo $id; ?>" href="edit_user.php<?php echo '?id='.$id; ?>"  data-toggle="modal" ><i class="icon-pencil icon-large"> Edit User</i></a>
												 &nbsp;
												<a rel="tooltip"  title="Edit Client" id="e<?php echo $id; ?>" href="edit_user.php<?php echo '?id='.$id; ?>"  data-toggle="modal" ><i class="icon-pencil icon-large"> Activate</i></a>
												
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
		 
   