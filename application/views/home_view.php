<div class="container">
    <div class="row">
        <div>
            <h1><strong><center><i class="fa fa-xing fa-3x"></i>OFFICER</center></strong></h1>
        </div>
    </div>
</div>

<div class="content">
   <div class="container">
        <div class="row">
            
                <ul class="nav nav-tabs">
                    <li role="presentation" id="one"class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-user fa-fw"></i>Home</a></li>
				    <li role="presentation"id="two"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-user-plus"></i> Profile</a></li>
				</ul>
                <div class="tab-content">
				    <div role="tabpanel" class="tab-pane fade in active" id="home">
				       				<!---adding form -->
                                        <div class="container">
				       					  <div class="row">
									    <?=form_open("Home/new_insert");?>
												<h2>PERSONAL DATA<br><small>&#40;To be filled by the Administrative Section concerned of Ministry/Department/Office&#41;</small></h2>
												<hr class="colorgraph">
												<div class="row">
													<div class="col-xs-6 col-sm-6 col-md-6 form-group">
												            <label for="first_name">FIRST NAME</label><span class="fa fa-asterisk"></span>
									                        <input type="text" name="fname" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" required>
														
													</div>
													<div class="col-xs-6 col-sm-6 col-md-6 form-group">
                                                        <label for="last_name">LAST NAME</label>
															<input type="text" name="lname" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
												
													</div>
												</div>
                                            <div class="row">
                                            <div class="col-xs-6 form-group">
                                                 <label for="dob">Date of birth</label>
										<input name="dob" id="dob" class="form-control input-lg" placeholder="Date of birth" tabindex="3" type="text" required onfocus="(this.type='date')">
												</div>
                                    
												<div class="col-xs-6 form-group">
                                                    <label for="quali">Qualification</label>
													<input type="text" name="qualification" id="quali" class="form-control input-lg" placeholder="Academic & Technical Qualification" tabindex="4">
												</div>
                                            </div>
                                              <div class="row">
													<div class="col-xs-6 col-sm-6 col-md-6 form-group">
												            <label for="first_name">Date of continuous Appointment</label><span class="fa fa-asterisk"></span>
									                        <input type="text" name="date_presentgrade" id="first_name" class="form-control input-lg" placeholder="Date of continuous Appointment" tabindex="1" required onfocus="this.type='date'">
														
													</div>
													<div class="col-xs-6 col-sm-6 col-md-6 form-group">
                                                        <label for="last_name">GRADE</label>
															<input type="text" name="grade" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
												
													</div>
												</div>
												<div class="row">
													<div class="col-xs-6 col-sm-6 col-md-6">
														<div class="form-group">
                                                            <label>Present Post</label>
															<input type="text" name="present_post" id="post" class="form-control input-lg" placeholder="Post" tabindex="5">
														</div>
													</div>
													<div class="col-xs-6 col-sm-6 col-md-6">
														<div class="form-group">
                                                            <label>Date of Appointment thereto</label>
															<input type="text" name="date_presentpost" id="" class="form-control input-lg" placeholder="Date of Appointment" tabindex="6" onfocus="(this.type='date')">
														</div>
													</div>
												</div>
                                              <div class="form-group">
                                                  <label>Period of Absence from duty(on training leave etc.) during the year</label>
										<input name="period_absence" id="dob" class="form-control input-lg" placeholder="Period of Absence from duty" tabindex="7" type="text" onfocus="(this.type='date')">
												</div>
												<div class="row container form-group" id="training">UNDERGONE TRAINING
													<label class="radio-inline" for="yestrain"><input type="radio" id="yestrain" name="training"tabindex="7" onclick="javascript:yesorno(this,5);" value="1">yes</label>
													<label class="radio-inline" for="inputtrain"><input type="radio" value="0" id="notrain" name="training"onclick="javascript:yesorno(this,5);"value="0" tabindex="8">no</label>
													<input style="display:none;" type="text-area" class="form-control"placeholder="specify the training">
											</div>
												<div class="row">
													<div class="col-xs-3 col-sm-3 col-md-3">
														<span class="button-checkbox">
															<button type="button" class="btn" data-color="info" onClick="javascript:next()"data-target="#profile" tabindex="9">NEXT</button>
									                       
														</span>
													</div>
													
												</div>
												
												<hr class="colorgraph">
												<div class="row container">
												<button type="submit" value="Submit" class="btn btn-primary btn-inline btn-lg" tabindex="7">SUBMIT</button></div>
				
                                              </form>
										</div>
                                        </div>
												        
                     </div>  			    
				    <div role="tabpanel" class="tab-pane fade" id="profile">
                       
                            <div c style="margin-top:15px;"><h2>To be filled in by the Officer reported upon</h2>	</div>
                        <hr class="colorgraph">
                         
                         <?=form_open("Home/new_insert");?>
                            <div class="jumbotron" style="padding-left:2px;">
                               
                                  <ol>   	
                                        <li> 
                                        <div class="panel panel-warning"><div class="panel-heading">
                                        	Breif Description of duties</div>
                                        			<textarea name="description"class=" form-control"></textarea>
                                          </div>
                                          </li>
                                        <!-- 1st item -->


                                      <li>
                                        <div class="panel panel-success">
                                          <div class="panel-heading">
                                          	PLEASE SPECIFY TARGETS/ONJECTIVES/GOALS(in quantitative or other terms) of work you set for yourself or that were set for you, eight to ten items of work in the order of priority and your achivement against each taraget</div>

                                          
                                             <table class="table">
                                              <thead>
                                                <tr>
                                                  <th class="col-md-4 col -sm- 3 col-xs-3 ">TARGETS/OBJECTIVES/GOALS</th>
                                                  <th class="col-md-7 col-sm-8 col-xs-8">ACHIEVEMENTS</th>
                                                  <th class="col-md-1 col-sm-1 col-xs-1"></th>
                                                </tr>
                                              </thead>
                                              <tbody id="objectives">
                                                                      <tr>
                                                    <td><input class=" col-md-4 col -sm- 3 col-xs-3 form-control" type="text" name="target[]"></td>
                                                    <td><input class="col-md-7 col-sm-8 col-xs-8 form-control" type="text" name="achievement[]"></td>
                                                    <td><i class="fa fa-plus-square fa-2x add_field"></i></td>
                                                  </tr>
                                              </tbody>
                                            </table>
                                    </div>
                                     </li>
                                    <!--2nd item -->

                                     <li>
                                         <ol type="A">
                                             <li>
                                                 <label class="control-label">
                                                 Please state briefly, the shortfalls with reference to the targets/objectives/goals referred to in <a href="#">ITEM 2</a>.Please specify the constraints, if any, in achieving the targets.    <textarea class="form-control" rows="5"></textarea>
                                                 </label>

                                        </li>
                                             <li>
                                         <label class="control-label">
                                            Please also indicate items in which there have been significantly higher achievements and your contribution thereto <textarea class="form-control" rows="5"></textarea>
                                         </label>
                                                 </li>
                                        </ol>
                                     </li>
                                    <!-- 3rd item -->

                                     <li>

                                           <div>
                                            Please state whether the annual return on immovable property for the preceding calender year was filed within the prescribed date i.e. 31st January of the year following the calender year. If not,the date of filing the return should be given.
                                            <input type="radio" name="choice" id="y" value="0" hidden onclick="yesorno(this,3)">
                                                <label for="y" class="control-label switch switch--on">Yes</label>

                                            <input type="radio" name="choice" id="n" value="1" hidden onclick="yesorno(this,3)">
                                                <label for="n" class="control-label switch switch--off">No</label>
                                            </div>
                                           <div class="form-group" style="display:none">
                                             <input type="text" style="width:150px;" class="form-control input-group" placeholder=" Date of filling" style="float:right"  onfocus="this.type='date'">
                                           </div>


                                                            
                                     </li>	

                                     <!-- 4th item -->


                                    </ol>
                                    <button type="button" onclick="javascript:back(); " data-toggle="tab" class="btn btn-default" data-target="#home">BACK</button>
                                                                   
                            </div>
                        <hr class="colorgraph">
                        <button type="submit" value="SUBMIT" class="btn btn-primary btn-inline-block btn-lg center-block" >SUBMIT</button>
                    </form>

                </div>
            </div>
				
        </div>
    </div>
</div>


