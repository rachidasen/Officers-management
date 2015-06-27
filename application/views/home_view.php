<div class="container">
    <div class="row">
        <div class="well">
            <strong>OFFICER</strong>
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
									    <form role="form">
												<h2>PERSONAL DATA<br><small>&#40;To be filled by the Administrative Section concerned of Ministry/Department/Office&#41;</small></h2>
												<hr class="colorgraph">
												<div class="row">
													<div class="col-xs-6 col-sm-6 col-md-6 form-group">
												
									                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
														
													</div>
													<div class="col-xs-6 col-sm-6 col-md-6 form-group">
												
															<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
												
													</div>
												</div>
                                            <div class="row">
                                            <div class="col-xs-6 form-group">
										<input name="dob" id="dob" class="form-control input-lg" placeholder="Date of birth" tabindex="3" type="text" onfocus="(this.type='date')">
												</div>
                                    
												<div class="col-xs-6 form-group">
													<input type="text" name="quali" id="quali" class="form-control input-lg" placeholder="Academic & Technical Qualification" tabindex="4">
												</div>
                                            </div>
												<div class="row">
													<div class="col-xs-6 col-sm-6 col-md-6">
														<div class="form-group">
															<input type="text" name="post" id="post" class="form-control input-lg" placeholder="Post" tabindex="5">
														</div>
													</div>
													<div class="col-xs-6 col-sm-6 col-md-6">
														<div class="form-group">
															<input type="text" name="da" id="" class="form-control input-lg" placeholder="Date of Appointment" tabindex="6" onfocus="(this.type='date')">
														</div>
													</div>
												</div>
                                              <div class="form-group">
										<input name="dob" id="dob" class="form-control input-lg" placeholder="Period of Absence from duty" tabindex="7" type="text" onfocus="(this.type='date')">
												</div>
												<div class="row container form-group" id="training">UNDERGONE TRAINING
													<label class="radio-inline" for="yestrain"><input type="radio" id="yestrain" name="gonetraining"tabindex="7" onclick="javascript:yesorno(this,5);" value="1">yes</label>
													<label class="radio-inline" for="inputtrain"><input type="radio" value="0" id="notrain" name="gonetraining"onclick="javascript:yesorno(this,5);"value="0" tabindex="8">no</label>
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
												<input type="submit" value="Register" class="btn btn-primary btn-inline btn-lg" tabindex="7"></div>
				
											</form>
										</div>
                                        </div>
												        
                     </div>  			    
				    <div role="tabpanel" class="tab-pane fade" id="profile">
				    	<div class="row well">TO be filled in by the Officer reported upon	</div>
				    	<div class="row well" style="color:green;">
					    	<form action="#">
	                            <ol class="container">   	
                                    <li>
					    		    <div class="form-group input-group">
					    		    	<span>1.</span><label for="description">Breif Description of duties</label>
	                                    <textarea name="description"class="form-control"></textarea>
                                      </div>
                                      </li>
                                    <!-- 1st item -->
                                    
                                    
	                              <li>
	                              	<div class="form-group">
	                                  <label for="objectives">PLEASE SPECIFY TARGETS/ONJECTIVES/GOALS(in quantitative or other terms) of work you set for yourself or that were set for you, eight to ten items of work in the order of priority and your achivement against each taraget</label>
	                                </div>
	                                  <div class="row container" >
										 <table class="table ">
										  <thead>
										    <tr>
										      <th class="col-md-4 col-sm-3">TARGETS/OBJECTIVES/GOALS</th>
										      <th class="col-md-7 col-sm-8">ACHIEVEMENTS</th>
										      <th class="col-md-1 col-sm-1"></th>
										    </tr>
										  </thead>
										  <tbody id="objectives">
										  					      <tr class="form-group">
										        <td><input class="form-control" type="text" name="target[]"></td>
										        <td><input class="form-control" type="text" name="achievement[]"></td>
	                                            <td>  <button class="btn btn-success add_field" type="button" >Add More Fields</button></td>
										      </tr>
										  </tbody>
										</table>
	                                </div>
	                             </li>
                                <!--2nd item -->
                                    
	                             <li>
                                     <ol type="A">
                                         <li>
                                         <label>
                                             Please state briefly, the shortfalls with reference to the targets/objectives/goals referred to in <a href="#">ITEM 2</a>.<br>Please specify the constraints, if any, in achieving the targets.    <textarea></textarea></label>
                                         
                                    </li>
                                         <li>
                                     <label>
                                        Please also indicate items in which there have been significantly higher achievements and your contribution thereto <textarea></textarea>
                                     </label>
                                             </li>
                                    </ol>
	                             </li>
                                <!-- 3rd item -->
                                    
	                             <li>
	                             	<div class="form-group">
	                             		Please state whether the annual return on immovable property for the preceding calender year was filed within the prescribed date i.e. 31st January of the year following the calender year. If not,the date of filing the return should be given.<br>
	                             		<label class="radio-inline"> YES <input name="choice" type="radio" value=0 onclick="javascript:yesorno(this,7);"></label>
	                             		<label class="radio-inline">NO  <input name="choice" type="radio"  VALUE=1 onclick="javascript:yesorno(this,7);"></label>
	                            		<input type="text" class="form-control" style="display:none;" placeholder=" Date of filling" onfocus="this.type='date'">
	                             	</div>
	                             </li>	

	                             <!-- 4th item -->
	                            </ol>
                                <button type="button" onclick="javascript:history.back();" class="btn btn-default">BACK</button>
	                        </form>
					    </div>
				    </div>
				</div>
        </div>
    </div>
</div>


