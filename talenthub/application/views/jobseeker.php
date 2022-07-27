 <div class="main-wrapper" style="margin: 50px">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Edit Profile</h4>
                    </div>
                </div>
                
               
                    <div class="card-box">
                        <h3 class="card-title">Personal Information</h3>
						 <form action="<?php echo base_url();?>Client/jobseekersavedeatails/save1" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-img-wrap">
                                    <img class="inline-block" src="<?php echo base_url();?><?php echo ($this->Crud_model->get_clientdetails("firstname")=="")?'assets/img/logo.png':$this->Crud_model->get_clientdetails("photo");?>" alt=""> alt="user">
                                    <div class="fileupload btn">
                                        <span class="btn-text">Upload</span>
                                        <input class="upload" type="file" name="photo" >
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">First Name</label>
                                                <input type="text" class="form-control floating" name="fname" value="<?php echo ($this->Crud_model->get_clientdetails("firstname")=="")?'':$this->Crud_model->get_clientdetails("firstname");?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Last Name</label>
                                                <input type="text" class="form-control floating" name="lname" value="<?php echo ($this->Crud_model->get_clientdetails("lastname")=="")?'':$this->Crud_model->get_clientdetails("lastname");?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Birth Date</label>
                                                <div class="cal-icon">
                                                    <input class="form-control floating datetimepicker" name="dob" type="text" value="<?php echo ($this->Crud_model->get_clientdetails("birthdate")=="")?'':$this->Crud_model->get_clientdetails("birthdate");?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus select-focus">
                                                <label class="focus-label">Gender</label>
                                                <select class="select form-control floating" name="gender">
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                        </div>
										
										<div class="col-md-12">
                                            <div class="form-group form-focus select-focus">
							<div class="add-more">
							<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save & Update</button>
							</div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
					 </form>
					</div>
                    <div class="card-box">
                        <h3 class="card-title">Contact Informations</h3>
						<form action="<?php echo base_url();?>Client/jobseekersavedeatails/save2" method="post" enctype="multipart/form-data">
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Address</label>
                                    <textarea type="text" class="form-control floating" name="address" placeholder="4487 Snowbird Lane"><?php echo ($this->Crud_model->get_clientdetails("address")=="")?'':$this->Crud_model->get_clientdetails("address");?></textarea>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Country</label>
                                    <input type="text" class="form-control floating" name="country" value="<?php echo ($this->Crud_model->get_clientdetails("country")=="")?'':$this->Crud_model->get_clientdetails("country");?>">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Phone Number</label>
                                    <input type="phone" class="form-control floating" name="phone" value="<?php echo ($this->Crud_model->get_clientdetails("phonenumber")=="")?'':$this->Crud_model->get_clientdetails("phonenumber");?>">
                                </div>
                            </div>
							<div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">State / District</label>
                                    <input type="text" class="form-control floating" name="district" value="<?php echo ($this->Crud_model->get_clientdetails("district")=="")?'':$this->Crud_model->get_clientdetails("district");?>">
                                </div>
                            </div>
							<div class="col-md-6 ">
											<div class="form-group">
												<label>Sector</label>
												<select class="form-control select" name="sector">
													<option value="Software Engineer">Software Engineer</option>
													<option value="Computer Science">Computer Science</option>
													<option value="Information Technology">Information Technology</option>
												</select>
											</div>
										</div>
							<div class="col-md-12">
                                            <div class="form-group form-focus select-focus">
							<div class="add-more">
							<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save & Update</button>
							</div>
                                                
                                            </div>
                                        </div>
							
                        </div>
						</form>
						
                    </div>
                    <div class="card-box">
                        <h3 class="card-title">Education Informations</h3>
                        <form action="<?php echo base_url();?>Client/jobseekersavedeatails/save3" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Institution</label>
                                    <input type="text" class="form-control floating" name="institution" value="<?php echo ($this->Crud_model->get_clientdetails("institution")=="")?'':$this->Crud_model->get_clientdetails("institution");?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Subject</label>
                                    <input type="text" class="form-control floating" name="subject" value="<?php echo ($this->Crud_model->get_clientdetails("subject")=="")?'':$this->Crud_model->get_clientdetails("subject");?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Starting Date</label>
									<div class="cal-icon">
										<input type="text" class="form-control floating datetimepicker" name="startingdate" value="<?php echo ($this->Crud_model->get_clientdetails("startingdate")=="")?'':$this->Crud_model->get_clientdetails("startingdate");?>">
									</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Complete Date</label>
									<div class="cal-icon">
										<input type="text" class="form-control floating datetimepicker" name="completedate" value="<?php echo ($this->Crud_model->get_clientdetails("completedate")=="")?'':$this->Crud_model->get_clientdetails("completedate");?>">
									</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Degree</label>
                                    <input type="text" class="form-control floating" name="degree" value="<?php echo ($this->Crud_model->get_clientdetails("degree")=="")?'':$this->Crud_model->get_clientdetails("degree");?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Grade</label>
                                    <input type="text" class="form-control floating" name="grade" value="<?php echo ($this->Crud_model->get_clientdetails("grade")=="")?'':$this->Crud_model->get_clientdetails("grade");?>">
                                </div>
                            </div>
                        </div>
                        <div class="add-more">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save & Update</button>
                        </div>
                        </form>
                    </div>
                    <div class="card-box">
                        <h3 class="card-title">Experience Informations</h3>
                        <form action="<?php echo base_url();?>Client/jobseekersavedeatails/save4" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Company Name</label>
                                    <input type="text" class="form-control floating" name="companyname" value="<?php echo ($this->Crud_model->get_clientdetails("companyname")=="")?'':$this->Crud_model->get_clientdetails("companyname");?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Location</label>
                                    <input type="text" class="form-control floating" name="location" value="<?php echo ($this->Crud_model->get_clientdetails("location")=="")?'':$this->Crud_model->get_clientdetails("location");?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Job Position</label>
                                    <input type="text" class="form-control floating" name="jobposition" value="<?php echo ($this->Crud_model->get_clientdetails("jobposition")=="")?'':$this->Crud_model->get_clientdetails("jobposition");?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Period From</label>
									<div class="cal-icon">
										<input type="text" class="form-control floating datetimepicker" name="periodfrom" value="<?php echo ($this->Crud_model->get_clientdetails("periodfrom")=="")?'':$this->Crud_model->get_clientdetails("periodfrom");?>">
									</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Period To</label>
									<div class="cal-icon">
										<input type="text" class="form-control floating datetimepicker" name="periodto" value="<?php echo ($this->Crud_model->get_clientdetails("periodto")=="")?'':$this->Crud_model->get_clientdetails("periodto");?>">
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="add-more">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save & Update</button>
                        </div>
                           </form>
                           <div>
                           <form action="<?php echo base_url();?>Client/jobseekersavedeatails/save5" method="post" enctype="multipart/form-data">
                            <button type="submit" class="btn btn-primary" allign="center">Save</button>
                            </form>
                           </div>
                    </div>
                    
                
            </div>
            
		</div>
    
	