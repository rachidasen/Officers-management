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
            <div>
                <ul class="nav nav-tabs">
                    <li role="presentation" id="one"class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
				    <li role="presentation"id="two"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><icon class="fa fa-home"></icon> Profile</a></li>
				    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><icon class="fa fa-home"></icon> Messages</a></li>
				    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><icon class="fa fa-home"></icon> Settings</a></li>
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
													<label class="radio-inline" for="yestrain"><input type="radio" value="trainings" id="yestrain" name="gonetraining"tabindex="7" onclick="javascript:yesorno();">yes</label>
													<label class="radio-inline" for="inputtrain"><input type="radio" value="0" id="notrain" name="gonetraining"onclick="javascript:yesorno();" tabindex="8">no</label>
												</div>

											<script>
											function yesorno(){
												if(document.getElementById('yestrain').checked){
														document.getElementById('trainings').style.display="block";
												}
												else
												{
													document.getElementById('trainings').style.display="none";
												}
											}
											function next(){
												document.getElementById("one").className='';
												document.getElementById("two").className="active";
												document.getElementsByClassName("btn")[0].setAttribute("data-toggle",'tab');
											}
											</script>
											<div class="row container form-group" id="trainings" style="display:none;  ">
												<input type="text-area" class="form-control"placeholder="specify the training">
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
				    	<div class="row" style="color:green;">
                            <ol class="container">   	
				    		  <form>
                                  <label for="description"><li>Breif Description of duties</li></label>                       <div class="form-group">
                                  <textarea name="description"class="form-control"></textarea>
                                  </div>
                                  <label for="objectives"><li>PLEASE SPECIFY TARGETS/ONJECTIVES/GOALS(in quantitative or other terms) of work you set for yourself or that were set for you, eight to ten items of work in the order of priority and your achivement against each taraget</li></label>
                                  <div class="row" id="objectives">
                                  		<input type="text" style="display:inline">
                                      <input type="text" style="display:inline">
                                  </div>
				    		  </form>


				    		</ol>
	    					    	
				    	</div></div>
				    <div role="tabpanel" class="tab-pane fade" id="messages">.sdfdf..
				    </div>
				    <div role="tabpanel" class="tab-pane fade" id="settings">...
				    </div>
  					</div>
            </div>
        </div>
    </div>
</div>


