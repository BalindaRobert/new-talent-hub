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
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Institution</label>
                                    <input type="text" class="form-control floating" value="Oxford University">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Subject</label>
                                    <input type="text" class="form-control floating" value="Computer Science">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Starting Date</label>
									<div class="cal-icon">
										<input type="text" class="form-control floating datetimepicker" value="01/06/2002">
									</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Complete Date</label>
									<div class="cal-icon">
										<input type="text" class="form-control floating datetimepicker" value="31/05/2006">
									</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Degree</label>
                                    <input type="text" class="form-control floating" value="BE Computer Science">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Grade</label>
                                    <input type="text" class="form-control floating" value="Grade A">
                                </div>
                            </div>
                        </div>
                        <div class="add-more">
                            <a href="#" class="btn btn-primary"><i class="fa fa-plus"></i> Add More Institute</a>
                        </div>
                    </div>
                    <div class="card-box">
                        <h3 class="card-title">Experience Informations</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Company Name</label>
                                    <input type="text" class="form-control floating" value="Digital Devlopment Inc">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Location</label>
                                    <input type="text" class="form-control floating" value="United States">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Job Position</label>
                                    <input type="text" class="form-control floating" value="Web Developer">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Period From</label>
									<div class="cal-icon">
										<input type="text" class="form-control floating datetimepicker" value="01/07/2007">
									</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Period To</label>
									<div class="cal-icon">
										<input type="text" class="form-control floating datetimepicker" value="08/06/2018">
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="add-more">
                            <a href="#" class="btn btn-primary"><i class="fa fa-plus"></i> Add More Experience</a>
                        </div>
                    </div>
                    <div class="text-center m-t-20">
                        <button class="btn btn-primary submit-btn" type="button">Save</button>
                    </div>
                </form>
            </div>
            
		</div>
    
	