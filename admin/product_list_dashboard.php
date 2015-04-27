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
                                        
                                         <?php //include('product_list.php'); ?>
										 
										 
										 
										 <!--- product List Start ---->
										 
										 
        <div class="container-fluid">
            <div class="row-fluid">
				        <!-- block -->
				<?php	
	             $count_user=mysql_query("select * from product");
	             $count = mysql_num_rows($count_user);
                 ?>	 
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"></i><i class="icon-user"></i>  Product (s) List</div>
								<div class="muted pull-right">
								Number  Product: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="delete_product.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-placement="right" title="Click to Delete check item"  data-toggle="modal" href="#product_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"> Delete</i></a>
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
												<th>Id</th>
												<th>Product Code</th>
												<th>Product Name</th>
												
												<th>Action</th>
												 
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query = mysql_query("select * from product")or die(mysql_error());
													while($row = mysql_fetch_array($user_query)){
													$id = $row['id'];
													?>
									
												<tr>
												<td width="30">
												<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $row['id']; ?>">
												</td>
												<td><?php echo $row['id']; ?> </td>
	
												<td><?php echo $row['code']; ?></td>
												<td><?php echo $row['name']; ?></td>
												<?php include('toolttip_edit_delete.php'); ?>															
												<td>
												<a rel="tooltip"  title="View Product" id="e<?php echo $id; ?>" href="view_product.php<?php echo '?id='.$id; ?>"  data-toggle="modal" ><i class="icon-list-alt icon-large"> </i></a> 
												
												<a rel="tooltip"  title="Edit Product" id="<?php echo $id; ?>" href="edit_product.php<?php echo '?id='.$id; ?>"  data-toggle="modal" ><i class="icon-pencil icon-large"> </i></a>
												<a rel="tooltip"  title="View Product" id="e<?php echo $id; ?>" href="delete_product.php<?php echo '?id='.$id; ?>"  data-toggle="modal" ><i class="icon-trash icon-large"> </i></a> 
											
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
