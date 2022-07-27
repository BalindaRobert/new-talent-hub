<div class="main-wrapper" style="margin: 30px">
            <div class="">
                <div class="row">
                    <div class="col-sm-7 col-6">
                        <h4 class="page-title">My Profile</h4>
                    </div>

                    
                </div>
                <div class="card-box profile-header">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        <a href="#"><img class="avatar" src="<?php echo base_url();?><?php echo ($this->Crud_model->get_clientdetails("firstname")=="")?'assets/img/logo.png':$this->Crud_model->get_clientdetails("photo");?>" alt=""></a>
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0"><?php echo ($this->Crud_model->get_clientdetails("firstname")=="")?'Not Set':$this->Crud_model->get_clientdetails("firstname");?></h3>
                                                <small class="text-muted"><?php echo ($this->Crud_model->get_clientdetails("sector")=="")?'Not Set':$this->Crud_model->get_clientdetails("sector");?></small>
                                               
                                                <div class="staff-msg"><a href="<?php echo base_url();?>Client/jobseeker/editprof" class="btn btn-primary">Edit Profile</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <span class="title">Phone:</span>
                                                    <span class="text"><a href="#"><?php echo ($this->Crud_model->get_clientdetails("phonenumber")=="")?'Not Set':$this->Crud_model->get_clientdetails("phonenumber");?></a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Email:</span>
                                                    <span class="text"><a href="#"><?php echo ($this->Crud_model->get_clientdetails("email")=="")?'Not Set':$this->Crud_model->get_clientdetails("email");?></a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Birthday:</span>
                                                    <span class="text"><?php echo ($this->Crud_model->get_clientdetails("birthdate")=="")?'Not Set':$this->Crud_model->get_clientdetails("birthdate");?></span>
                                                </li>
                                                <li>
                                                    <span class="title">Address:</span>
                                                    <span class="text"><?php echo ($this->Crud_model->get_clientdetails("address")=="")?'Not Set':$this->Crud_model->get_clientdetails("address");?></span>
                                                </li>
                                                <li>
                                                    <span class="title">Gender:</span>
                                                    <span class="text"><?php echo ($this->Crud_model->get_clientdetails("gender")=="")?'Not Set':$this->Crud_model->get_clientdetails("gender");?></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
				<div class="profile-tabs">
					<ul class="nav nav-tabs nav-tabs-bottom">
						<li class="nav-item"><a class="nav-link active" href="#about-cont" data-toggle="tab">Education</a></li>
						<li class="nav-item"><a class="nav-link" href="#bottom-tab2" data-toggle="tab">Experience</a></li>
						
					</ul>

					<div class="tab-content">
						<div class="tab-pane show active" id="about-cont">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h3 class="card-title">Education Information</h3>
                            <div class="experience-box">
                                <ul class="experience-list">
                                <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">Institution:</a>
                                                <span class="time"><?php echo ($this->Crud_model->get_clientdetails("institution")=="")?'Not Set':$this->Crud_model->get_clientdetails("institution");?></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">Subject:</a>
                                                <span class="time"><?php echo ($this->Crud_model->get_clientdetails("subject")=="")?'Not Set':$this->Crud_model->get_clientdetails("subject");?></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">Starting Date:</a>
                                                <span class="time"><?php echo ($this->Crud_model->get_clientdetails("startingdate")=="")?'Not Set':$this->Crud_model->get_clientdetails("startingdate");?></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">Complete Date:</a>
                                                <span class="time"><?php echo ($this->Crud_model->get_clientdetails("completedate")=="")?'Not Set':$this->Crud_model->get_clientdetails("completedate");?></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">Degree:</a>
                                                <span class="time"><?php echo ($this->Crud_model->get_clientdetails("degree")=="")?'Not Set':$this->Crud_model->get_clientdetails("degree");?></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">Grade:</a>
                                                <span class="time"><?php echo ($this->Crud_model->get_clientdetails("grade")=="")?'Not Set':$this->Crud_model->get_clientdetails("grade");?></span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
					</div>
                </div>
						</div>
						<div class="tab-pane" id="bottom-tab2">
							<div class="card-box mb-0">
                            <h3 class="card-title">Experience</h3>
                            <div class="experience-box">
                                <ul class="experience-list">
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">Company Name:</a>
                                                <span class="time"><?php echo ($this->Crud_model->get_clientdetails("companyname")=="")?'Not Set':$this->Crud_model->get_clientdetails("companyname");?></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">Location:</a>
                                                <span class="time"><?php echo ($this->Crud_model->get_clientdetails("location")=="")?'Not Set':$this->Crud_model->get_clientdetails("location");?></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">Job Position:</a>
                                                <span class="time"><?php echo ($this->Crud_model->get_clientdetails("jobposition")=="")?'Not Set':$this->Crud_model->get_clientdetails("jobposition");?></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">Period from:</a>
                                                <span class="time"><?php echo ($this->Crud_model->get_clientdetails("periodfrom")=="")?'Not Set':$this->Crud_model->get_clientdetails("periodfrom");?></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">Period to:</a>
                                                <span class="time"><?php echo ($this->Crud_model->get_clientdetails("periodto")=="")?'Not Set':$this->Crud_model->get_clientdetails("periodto");?></span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    
						</div>
						<div class="tab-pane" id="bottom-tab3">
							Tab content 3
						</div>
					</div>
				</div>
            </div>
            
		</div>
    