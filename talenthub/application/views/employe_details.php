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
                                        <a href="#"><img class="avatar" src="<?php echo base_url();?><?php echo ($clientdata->photo =="")?'assets/img/logo.png':$clientdata->photo;?>" alt=""></a>
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0"><?php echo ($clientdata->firstname=="")?'Not Set':$clientdata->firstname;?></h3>
                                                <small class="text-muted"><?php echo ($clientdata->sector=="")?'Not Set':$clientdata->sector;?></small>
                                               
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <span class="title">Phone:</span>
                                                    <span class="text"><a href="#"><?php echo ($clientdata->phonenumber=="")?'Not Set':$clientdata->phonenumber;?></a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Email:</span>
                                                    <span class="text"><a href="#"><?php echo ($clientdata->email=="")?'Not Set':$clientdata->email;?></a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Birthday:</span>
                                                    <span class="text"><?php echo ($clientdata->birthdate=="")?'Not Set':$clientdata->birthdate;?></span>
                                                </li>
                                                <li>
                                                    <span class="title">Address:</span>
                                                    <span class="text"><?php echo ($clientdata->address=="")?'Not Set':$clientdata->address;?></span>
                                                </li>
                                                <li>
                                                    <span class="title">Gender:</span>
                                                    <span class="text"><?php echo ($clientdata->gender=="")?'Not Set':$clientdata->gender;?></span>
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
                            <h3 class="card-title">Education Informations</h3>
                            <div class="experience-box">
                                <ul class="experience-list">
                                <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">Institution:</a>
                                                <span class="time"><?php echo ($clientdata->institution=="")?'Not Set':$clientdata->institution;?></span>
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
                                                <span class="time"><?php echo ($clientdata->subject=="")?'Not Set':$clientdata->subject;?></span>
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
                                                <span class="time"><?php echo ($clientdata->startingdate=="")?'Not Set':$clientdata->startingdate;?></span>
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
                                                <span class="time"><?php echo ($clientdata->completedate=="")?'Not Set':$clientdata->completedate;?></span>
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
                                                <span class="time"><?php echo ($clientdata->degree=="")?'Not Set':$clientdata->degree;?></span>
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
                                                <span class="time"><?php echo ($clientdata->grade=="")?'Not Set':$clientdata->grade;?></span>
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
                                                <span class="time"><?php echo ($clientdata->companyname=="")?'Not Set':$clientdata->companyname;?></span>
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
                                                <span class="time"><?php echo ($clientdata->location=="")?'Not Set':$clientdata->location;?></span>
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
                                                <span class="time"><?php echo ($clientdata->jobposition=="")?'Not Set':$clientdata->jobposition;?></span>
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
                                                <span class="time"><?php echo ($clientdata->periodfrom=="")?'Not Set':$clientdata->periodfrom;?></span>
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
                                                <span class="time"><?php echo ($clientdata->periodto=="")?'Not Set':$clientdata->periodto;?></span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    
						
					</div>
				</div>
            </div>
            
		</div>
    