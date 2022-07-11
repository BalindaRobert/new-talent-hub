<div class="main-wrapper" style="margin: 30px">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Doctors</h4>
                    </div>
                   
                </div>
				<div class="row doctor-grid">
				
						<?php 

						foreach($clientdata as $row){

						?>
				
                    <div class="col-md-4 col-sm-4  col-lg-3">
                        <div class="profile-widget">
                            <div class="doctor-img">
                                <a class="avatar" href="profile.html"><img alt="" src="<?php echo base_url();?><?php echo $row['photo']; ?>"></a>
                            </div>
                            <div class="dropdown profile-action">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="<?php echo base_url();?>Client/view_client/<?php echo  $row['user_id']; ?>"><i class="fa fa-eye m-r-5"></i> View</a>
                                    
                                </div>
                            </div>
                            <h4 class="doctor-name text-ellipsis"><a href="profile.html"><?php echo  $row['firstname']; ?>&nbsp; <?php echo  $row['lastname']; ?></a></h4>
                            <div class="doc-prof"><?php echo  $row['sector']; ?></div>
                            <div class="user-country">
                                <i class="fa fa-map-marker"></i> <?php echo  $row['address']; ?>
                            </div>
                        </div>
                    </div>
					
					 <?php } ?>

					
                </div>
				
            </div>
            
		</div>
		
   