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
                                        <div class="huge"></div>
                                         <?php// include('add_user.php'); ?>
										 
										 <!---- Add user start --->
										 
										    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"> Add User</i></div>
                            </div>
                            <div class="block-content collapse in">
                                
								<form method="post">
								<div class="span4">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="firstname" id="focusedInput" type="text" placeholder = "Firstname" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="lastname" id="focusedInput" type="text" placeholder = "Lastname" required>
                                          </div>
                                        </div>
										
											<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="username" id="focusedInput" type="text" placeholder = "Username" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="password" id="focusedInput" type="password" placeholder = "Password" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="email" id="focusedInput" type="email" placeholder = "Email" required>
                                          </div>
                                        </div>
										
											<div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-info" id="save" data-placement="right" title="Click to Save"><i class="icon-plus-sign icon-large"> Save</i></button>
                                                <script type="text/javascript">
	                                            $(document).ready(function(){
	                                            $('#save').tooltip('show');
	                                            $('#save').tooltip('hide');
	                                            });
	                                            </script>
                                          </div>
										  
                                        </div>
									</div>	
									<div class="span4">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="address" id="focusedInput" type="text" placeholder = "Address" >
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="city" id="focusedInput" type="text" placeholder = "City" >
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="postalcode" id="focusedInput" type="text" placeholder = "Postal Code" >
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="phone" id="focusedInput" type="text" placeholder = "Phone" >
                                          </div>
                                        </div>
										</div>
										<div class="span4">
										<div class="control-group">
                                          <div class="controls">
                                            
                                          </div>
                                        </div>
										
										
										</div>
										</div>
										
										</div>
										
										
											
										
                                </form>
								
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
<?php
if (isset($_POST['save'])){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$query = mysql_query("select * from users where username = '$username' and password = '$password' and email = '$email' ")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Data Already Exist');
</script>
<?php
}else{
mysql_query("insert into users (username,email,password,first_name,last_name,thumbnail) values('$username','$email','$password','$firstname','$lastname','images/NO-IMAGE-AVAILABLE.jpg')")or die(mysql_error());

mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Add System User $firstname')")or die(mysql_error());
?>
<script>
window.location = "dashboard.php";
$.jGrowl("System User Successfully added", { header: 'User add' });
</script>
<?php
}
}
?>



										 
										 <!---- Add user end --->
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
