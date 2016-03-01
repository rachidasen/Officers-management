  <div class="container-fluid">
  <div class="row">
    <div>
            <h1><strong><center><i class="fa fa-xing fa-3x"></i>OFFICER</center></strong></h1>
    </div>
  </div>
</div>

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <ul class="nav nav-tabs">
        <li role="presentation" id="one"class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-user fa-fw"></i>Home</a></li>
        <li role="presentation"id="two"><a href="#profile" aria-controls="profile" role="tab"><i class="fa fa-user-plus" ></i> Profile</a></li>
        <li role="presentation" id='three'><a href="#status" class="hiddd" role="tab" data-toggle="tab">Status</a></li>
        <li role="presentation" id="exit" style="float:right;"> <a href="<?=base_url()?>Login/logout" >Logout</a></li>
      </ul>
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="home">
          
          <div class="container-fluid">
            <div class="row">
            <?php $attributes = array('id' => 'personal'); ?>
              <?=form_open("Home/insert_personal",$attributes);?>
                <!---adding form -->
                
                 <?php if(isset($set)): ?>
                    <?php 
                      $response_yes='unchecked';
                      $response_no='unchecked';
                        //$selected_radio=$value['response_training'];
                        if(!empty($value['training']))
                            $response_yes='checked';
                        else
                            $response_no='checked';
                    ?>
                  <div class="well submit-msg" style="background-color:green;color:white;margin-top:12px">
                      <u>YOU HAVE SUCCESSFULLY SUBMITTED THE FORM</u>
                      <span name="enter" style="color:black"> PROCEED TO THE NEXT PAGE <button type="button" class="btn btn-info" data-color="info" onClick="javascript:next()"data-target="#profile" tabindex="2">NEXT</button></span>
                  </div>
                <?php else:?>
                  <?php 
                    $response_yes='unchecked';
                    $response_no='checked';
                  ?>
                <?php endif; ?>
                  <h2>PERSONAL DATA<br><small>&#40;To be filled by the Administrative Section concerned of Ministry/Department/Office&#41;</small></h2>
                  <hr class="colorgraph">
                  <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 form-group">
                      <label for="first_name">FIRST NAME</label><span class="fa fa-asterisk"></span>
                      <input type="text" name="fname" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" required <?php if(isset($set)): ?> disabled value=<?=$value['fname']?> <?php endif;?>>
                      
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 form-group">
                      <label for="last_name">LAST NAME</label>
                      <input type="text" name="lname" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2"<?php if(isset($set)): ?> disabled value=<?=$value['lname']?><?php endif;?>>
                      
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-6 form-group">
                      <label for="dob">Date of birth</label>
                      <input name="dob" class="form-control input-lg datepicker" placeholder="DOB (DD/MM/YYYY)" tabindex="3" type="text" required<?php if(isset($set)): ?> disabled value=<?=$value['dob']?><?php endif;?>>
                    </div>
                    
                    <div class="col-xs-6 form-group">
                      <label for="quali">Qualification</label>
                      <input type="text" name="qualification" id="quali" class="form-control input-lg" placeholder="Academic  &amp; Technical Qualification" required tabindex="4" <?php if(isset($set)): ?> disabled value=<?=$value['qualification']?>  <?php endif;?>>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 form-group">
                      <label for="appointment">Date of continuous Appointment</label><span class="fa fa-asterisk"></span>
                      <input type="text" name="date_presentgrade" id="appointment" class="form-control input-lg datepicker" required placeholder="Date of continuous Appointment(DD/MM/YYYY)" tabindex="5"  <?php if(isset($set)): ?> disabled value=<?=$value['date_presentgrade']?><?php endif;?>>
                      
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 form-group">
                      <label for="grade">GRADE</label>
                      <input type="text" name="grade" id="grade"  class="form-control input-lg" placeholder="GRADE" tabindex="6"<?php if(isset($set)): ?> disabled value=<?=$value['grade']?> <?php endif;?>>
                      
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="form-group">
                        <label>Present Post</label>
                        <select required <?php if(isset($set)): ?> disabled <?php endif;?> name="present_post" id="post" class="form-control input-lg" tabindex="7">
                          <option value="DG">DG</option>
                          <option value="ADG">ADG</option>
                          <option value="CE">CE</option>
                          <option value="SE">SE</option>
                          <option value="EE">EE</option>
                          <option value="AEE">AEE</option>
                        </select>
                                                
                      </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="form-group">
                        <label for="appoint">Date of Appointment thereto</label>
                        <input type="text" name="date_presentpost" id="appoint" class="form-control input-lg datepicker" required placeholder="Date of Appointment" tabindex="8"<?php if(isset($set)): ?> disabled value=<?=$value['date_presentpost']?> <?php endif;?>>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="abs">Period of Absence from duty(on training leave etc.) during the year</label>
                    <input name="period_absence" id="abs" class="form-control input-lg" placeholder="Period of Absence from duty(Duration)" required tabindex="9" type="text" <?php if(isset($set)): ?> disabled  value=<?=$value['period_absence']?> <?php endif;?>>
                  </div>

                  <div class="row container fomr-group" id="training">UNDERGONE TRAINING
                    <label class="radio-inline" for="yestrain"><input type="radio" id="yestrain" name="choice" tabindex="10" onclick="javascript:yesorno(this,5);" value="1"<?php if(isset($set)): ?> disabled <?=$response_yes;?> <?php endif;?>>yes</label>
                    <label class="radio-inline" for="inputtrain"><input type="radio" value="0" id="notrain" name="choice"onclick="javascript:yesorno(this,5);"value="0" tabindex="10"<?php if(isset($set)): ?> disabled <?=$response_no;?><?php endif;?>>no</label>
                    <input style="display:none;" type="text-area" id="hidden-display" class="form-control input-lg" name="training" placeholder="specify the training"<?php if(isset($set)): ?> disabled value=<?=$value['training']?><?php else: ?> checked <?php endif;?>>
                  </div>
                  <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3">
                      <!--span class="button-checkbox">
                        <button type="button" class="btn" data-color="info" onClick="javascript:next()"data-target="#profile" tabindex="9">NEXT</button>
                        
                      </span-->
                    </div>
                    
                  </div>
                  
                  <hr class="colorgraph">
                

                <div class="row container">
                <button id="b1" type="submit" value="Submit" class="btn btn-primary btn-inline btn-lg" tabindex="11" <?php if(isset($set)) : ?>disabled<?php endif;?>>SUBMIT</button></div>
              <?=form_close()?>
            </div>
          </div>
          
        </div>
        <div role="tabpanel" class="tab-pane fade" id="profile">
          
          <div  style="margin-top:15px;"><h2>To be filled in by the Officer reported upon</h2> </div>
          <hr class="colorgraph">
          
            <?=form_open(base_url()."Home/insert_work_infos/","id=\"work_info\"");?>
              <?php if(isset($set2)):?>
                    <?php 
                      for($i=0,$counter=0;$i<10;$i++){
                        if(!empty($value2["target$i"]))
                            $counter++;
                      } 

                      if($counter>0)
                          $counter--;
                      $response_yes='unchecked';
                      $response_no='unchecked';
                        //$selected_radio=$value['response_training'];
                        if(isset($value['training']))
                            $response_yes='checked';
                        else
                            $response_no='checked';
                    ?>
                  <div class="well submit-msg" style="background-color:green;color:white;margin-top:12px">
                      YOU HAVE SUCCESSFULLY SUBMITTED YOUR INFO
                      
                      <!--pre><?//=print_r($value2);?></pre>
                      -->
                      <?=$counter;?>
                 </div>
               <?php else: ?><?php $counter=0;?>
                <?php endif; ?>
            <div class="jumbotron" style="padding-left:2px;">
             <ol>
                <li>
                  <div class="panel panel-warning">
                    <div class="panel-heading">  Breif Description of duties</div>
                    <textarea name="description"class=" form-control" rows="5" required <?php if(isset($set2)) echo "disabled"; ?>><?php if(isset($set2)) echo htmlspecialchars($value2['description']); ?></textarea>
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
                      
                      <?php for($i=0;$i<=$counter;$i++): ?>
                        <tr>
                          <td><input class="stop col-md-4 col -sm- 3 col-xs-3 form-control" type="text" name="target[]" id="target[]" required <?php if(isset($set2)):?>disabled value=<?=$value2["target$i"];?><?php endif;?>></td>
                          <td><input class="stop col-md-7 col-sm-8 col-xs-8 form-control" type="text" name="achievement[]" id="achievement[]" required <?php if(isset($set2)):?>disabled value=<?=$value2["achievement$i"];?><?php endif;?>></td>
                          <td><i class="fa fa-plus-square fa-2x add_field"></i></td>
                        </tr>
                      <?php endfor; ?>
                      
                      </tbody>
                    </table>
                  </div>
                </li>
                <!--2nd item -->
                <li>
                  <ol type="A">
                    <li>
                      <label class="control-label">
                        Please state briefly, the shortfalls with reference to the targets/objectives/goals referred to in <a href="#">ITEM 2</a>.Please specify the constraints, if any, in achieving the targets.    <textarea class="form-control" name="shortfalls" rows="5" required <?php if(isset($set2)) echo "disabled"; ?>><?php if(isset($set2)) echo htmlspecialchars($value2['shortfalls']); ?></textarea>
                      </label>
                    </li>
                    <li>
                      <label class="control-label">
                        Please also indicate items in which there have been significantly higher achievements and your contribution thereto <textarea class="form-control" name="higher_achievement" rows="5"<?php if(isset($set2)) echo "disabled"; ?>><?php if(isset($set2)) echo htmlspecialchars($value2['higher_achievement']); ?></textarea>
                      </label>
                    </li>
                  </ol>
                </li>
                <!-- 3rd item -->
               <li>
                  <div>
                    Please state whether the annual return on immovable property for the preceding calender year was filed within the prescribed date i.e. 31st January of the year following the calender year. If not,the date of filing the return should be given.
                    <input type="radio" name="choice" id="y" value="0" hidden  onclick="yesorno(this,3)">
                    <label for="y" class="control-label switch switch--on">Yes</label>
                    <input type="radio" name="choice" id="n" value="1" hidden onclick="yesorno(this,3)">
                    <label for="n" class="control-label switch switch--off">No</label>
                  </div>

                  <div class="form-group" style="display:none">
                    <input type="text" style="width:150px;" class="form-control input-group datepicker" <?php if(isset($set2)): ?> disabled value=<?=$value2['date_of_filling'];?><?php endif;?> placeholder=" Date of filling" style="float:right"  name="date_of_filling" id="date_of_filling">
                  </div>

                </li>
                <!-- 4th item -->

              </ol>

              <button type="button" onclick="javascript:back(); " data-toggle="tab" class="btn btn-default" data-target="#home">BACK</button>

            </div>
            <hr class="colorgraph">
            <button type="submit" value="SUBMIT" id="b2"class="btn btn-primary btn-inline-block btn-lg center-block"<?php if(isset($set2)) echo "disabled";?> >SUBMIT</button>

          <?=form_close()?>
        </div>
         <div role="tabpanel" class="tab-pane fade  hiddd" id="status">
              <form id="stats" style="margin-top:5%; margin-left:40%;">
                      
                      <div>            
                        
                         <button type="submit" class='btn btn-large btn-warning '> STATUS</button>
                         
                      </div>
                      <div id='stat' style="color:black; font-weight:bold; margin-left:-3%; margin-top:-8%"> </div>
                      
              </form>

         </div>
      </div>
    </div>
  </div>
</div>


<script>
$(document).ready(function() {
    $( ".datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
      //yearRange: "c-30:+0"
    });
    // $("#two").children().attr("data-toggle");

  });
$('#personal').on('submit',function(e){
  alert("Once Submitted Can't Be Proceed");
  return confirm("Are you sure you want to Submit the form?");
});
$('#work_info').on('submit',function(e){
  alert("Once Submitted Can't Be Proceed");
  return confirm("Are you sure you want to Submit the form?");
});
$("#stats").on('submit',function(e){
  e.preventDefault();
      var id="<?=$_SESSION['officer_id']?>";
  $.ajax({

         type: 'POST',
         url: '<?php echo base_url();?>Home/status', //We are going to make the request to the method "list_dropdown" in the match controller
         data:{'officer_id':id}, //POST parameter to be sent with the tournament id
         success: function(resp) { //When the request is successfully completed, this function will be executed
         //Activate and fill in the matches list
         // alert(resp);
         resp=parseInt(resp);
         //alert(resp);
         switch(resp){
          case -1: alert('You haven\'t submitted your form');
                    $("#stat").empty();
                    $("#stat").html('You haven\'t submitted your form');
                    break;
          case 0: alert("Under processing by reporting Officer");
                    $("#stat").empty();
                    $("#stat").html("Under processing by reporting Officer");
                    break;
          case 1: alert('Under processing by reviewing Officer');
                    $("#stat").empty();
                    $("#stat").html("Under processing by reviewing Officer");
                    break;
          case 2: alert('YOUR report has been processed ');
                  $("#stat").empty();
                  $("#stat").html('YOUR report has been processed ');
                    
                  break;
          case 5: alert('YOU haven\'t been assigned reporting officer yet ');
                  $("#stat").empty();
                  $("#stat").html('Reporting officer not assigned ');
                    
                  break;
         }
          //$("#show").html(resp);
         }

});
});
</script>