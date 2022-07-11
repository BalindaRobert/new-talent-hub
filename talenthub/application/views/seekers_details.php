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
						<li class="nav-item"><a class="nav-link" href="#bottom-tab3" data-toggle="tab">Messages</a></li>
					</ul>

					<div class="tab-content">
						<div class="tab-pane show active" id="about-cont">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h3 class="card-title">Education Informations</h3>
                            <div class="experience-box">
                                <ul class="experience-list">
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">International College of Medical Science (UG)</a>
                                                <div>MBBS</div>
                                                <span class="time">2001 - 2003</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">International College of Medical Science (PG)</a>
                                                <div>MD - Obstetrics & Gynaecology</div>
                                                <span class="time">1997 - 2001</span>
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
                                                <a href="#/" class="name">Consultant Gynecologist</a>
                                                <span class="time">Jan 2014 - Present (4 years 8 months)</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">Consultant Gynecologist</a>
                                                <span class="time">Jan 2009 - Present (6 years 1 month)</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">Consultant Gynecologist</a>
                                                <span class="time">Jan 2004 - Present (5 years 2 months)</span>
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
    