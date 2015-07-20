<div class="container" style="border-color:green;">
    <header class="row">
        <h1><strong><center><i class=" fa fa-file-text-o fa-3x"></i>REPORTING OFFICER </center></strong></h1>
        <a href="<?=base_url()?>Login/logout" style="float:right; color:black">Logout</a></li>
        <hr class="colorgraph">
        <div>
      
            <form>
                <label>SELECT THE OFFICER</label>
                <select id="officer-id" placeholder="Choose an officer">
                  <optgroup id="opt1" label="To be checked">
                    <option selected="selected">----</option>";
                   <?php
                        for($i=0;$i<count($id);$i++){
                          if($id[$i]['set']!=1)
                            echo "<option id=o".$i."value=".$id[$i]['officer_id'].">".$id[$i]['officer_id']."</option>";
                        // print_r($id);
                        }

                    ?>
                  </optgroup>
                  <optgroup id="opt2" label="Checked">
                     <?php
                        for($i=0;$i<count($id);$i++){
                          if($id[$i]['set']==1)
                            echo "<option value=".$id[$i]['officer_id'].">".$id[$i]['officer_id']."</option>";
                        // print_r($id);
                        }

                    ?>
                  </optgroup>

                </select>
               
            <a href="#officer_info" style="color:green;" data-toggle="modal" id="clickprofile" title="officer-profile"><div style="position:fixed;left:0;top:30%;color:rgb(1, 85, 100);"> <i class="fa fa-user fa-4x"></i> <br><small style="color: rgb(54, 81, 1);font-weight:bold;">OFFICER<br>PROFILE</small></div></a>
            </form>
        </div>
        
    </header>
    <div class="modal modal-wide fade" id="officer_info" >
        <div class="modal-dialog" style="min-width:60%">
            <!-- Modal content -->
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body" id="show-profile">
                </div>
        </div>
        </div>
    </div>
</div>
    <!--header tag -->

  <div class="container"  id="msg" style="display:none" >
      You have submitted the details for this id.
  </div>


  <div class="container" id= "detail">
   <?php $attributes = array('id' => 'myform'); ?>
   <?=form_open(base_url()."Home/reporting_officer/", $attributes);?>
      <div class="panel panel-info">
         <div class="panel-heading" data-target="#part-3"id="part-3head" data-toggle="collapse">
            <h3 class="panel-title">
               PART-3 
            </h3>
         </div>
         <div class="panel-body" id="part-3">
           
            <p><b>Numerical grading is to be awarded by reporting and reviewing authority which should be on a scale of 1-10,where 1 refers to the lowest grade and 10 refers to the highest grade</b></p>
            <p><b>(Please read carefully the instructions before filling the entries)</b></center></p>
            <br>

              
                <div class="panel panel-success">
                  <div class="panel panel-heading" data-toggle="collapse" data-target="#A"><strong>Assesment of Work Output(weightage to this section would be 40% )</strong>
                  </div>

                  <table class="table table-responsive " id="A">
                    <thead>
                      <tr>
                        <th class="col-sm-9 col-lg-9">        </th>
                        <th class="col-sm-3 col-lg-3">Reporting Authority</th>		
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td><b>Accomplishment of planned work/work alotted as per subjects alotted</td>
                        <td>
                           <select  class="form-control" required  style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="plannedwork" id="plannedwork">
                              <option value="" disabled selected>select grade</option> <option value="1" >1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4" >4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                          </select>
                        </td>	
                      </tr>

                      <tr>
                        <td><b>Quality of output</td>
                        <td>

                          <select  class="form-control" required  style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="qualityoutput" id="qualityoutput">
                               <option value="" disabled selected>select grade</option> <option value="1" >1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4" >4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                          </select>
                         </td>
                      </tr>

                      <tr>
                        <td><b>Analytical ability</td>
                        <td>


                          <select  class="form-control" required  style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="analytical" id="analytical">
                               <option value="" disabled selected>select grade</option> <option value="1" >1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4" >4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                          </select>
                        </td>
                      </tr>

                      <tr>
                        <td><b>Accomplishment of exceptional work/unforeseen tasks performed</td>
                                       <td>


                        <select  class="form-control" required  style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="exceptionalwork" id="exceptionalwork">
                             <option value="" disabled selected>select grade</option> <option value="1" >1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" >4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>

                         </td>

                      </tr>

                      <tr>
                        <td><b>Overall grading on work output</td>
                                       <td>

                        <input  type="number" readonly class="form-control" required  style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="overall_workoutput" id="overall_workoutput">
                             


                        </td>

                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="panel panel-danger">
                  
                 <div class="panel panel-heading " data-toggle="collapse" data-target="#B">
                      <b>Assesment of personal attributes(weightage to this section would be 30%)</b>
                  </div>
                  <table class="table table-responsive " id="B">
                      <thead>
                          <tr><th class="col-sm-9 col-lg-9">        </th>
                              <th class="col-sm-3 col-lg-3">Reporting Authority</th>    
                          </tr> 
                      </thead>
                      <tbody>
                        <tr>
                          <td><b>Attitude to work</b></td>
                          <td>
                              <select name="attitudetowork" id="attitudetowork" class="form-control" required  style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                                  <option value="" disabled selected>select grade</option> <option value="1" >1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4" >4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                  <option value="7">7</option>
                                  <option value="8">8</option>
                                  <option value="9">9</option>
                                  <option value="10">10</option>
                              </select>
                           </td>  
                        </tr>
                        <tr>
                          <td><b>Sense of responsibility</td>
                          <td>

                            <select  name="responsibility" id="responsibility" class="form-control" required  style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                                 <option value="" disabled selected>select grade</option> <option value="1" >1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4" >4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td><b>Maintenance of discipline</td>
                          <td>
                            <select  name="discipline" id="discipline" class="form-control" required  style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                                 <option value="" disabled selected>select grade</option> <option value="1" >1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4" >4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td><b>Communication Skills</td>
                          <td>

                            <select name="communication" id="communication" class="form-control" required  style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                                 <option value="" disabled selected>select grade</option> <option value="1" >1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4" >4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td><b>Leadership Qualities</td>
                          <td>


                            <select  name="leadership" id="leadership" class="form-control" required  style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                                 <option value="" disabled selected>select grade</option> <option value="1" >1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4" >4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>

                          </td>

                        </tr>

                        <tr>
                          <td><b>Capacity to work in team spirit</td>
                          <td>


                            <select name="teamspirit" id="teamspirit" class="form-control" required  style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                                 <option value="" disabled selected>select grade</option> <option value="1" >1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4" >4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                          </td>

                        </tr>
                        <tr>
                          <td><b>Capacity to adhere to time schedule</td>
                          <td>


                            <select name="timeschedule" id="timeschedule" class="form-control" required  style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                                 <option value="" disabled selected>select grade</option> <option value="1" >1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4" >4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>

                           </td>

                        </tr>

                        <tr>
                          <td><b>Inter-personal relations</td>
                          <td>


                            <select  name="inter-personal" id="inter-personal" class="form-control" required  style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                                 <option value="" disabled selected>select grade</option> <option value="1" >1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4" >4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>

                          </td>

                        </tr>
                        <tr>
                          <td><b>Overall bearing and personality</td>
                          <td>

                            <select name="personality" id="personality" class="form-control" required  style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                                 <option value="" disabled selected>select grade</option> <option value="1" >1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4" >4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>

                          </td>

                        </tr>

                        <tr>
                          <td><b>Overall Grading on 'Personal Attributes'</td>
                          <td>

                            <input  type="number" id="overall_personalattributes"  readonly name="overall_personalattributes" class="form-control" required  style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                                 
                          </td>
                        </tr>
                     </tbody>
                  </table>
                </div>

                <div class="panel panel-warning">
                
                  <div class="panel panel-heading" data-target="#C" data-toggle="collapse"> Assesment of functional competency<strong>(weightage to this section would be 30%)</strong>

                  </div>

                  <table class="table table-responsive " id="C">
                    <thead>  
                      <tr>
                        <th class="col-sm-9 col-lg-9">        </th>
                        <th class="col-sm-3 col-lg-3">Reporting Authority</th>    
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><b>Knowledge of rules/regulations/procedures in the area of function and  ability to perform them correctly</td>
                        <td>


                          <select  class="form-control" required style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="Knowledgeofrules" id="Knowledgeofrules">
                               <option value="" disabled selected>select grade</option> <option value="1" >1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4" >4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                          </select>
                        </td> 

                      </tr>
                      <tr>
                        <td><b>Strategic planning ability</td>
                        <td>

                          <select  class="form-control" required style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="strategic" id="strategic">
                             <option value="" disabled selected>select grade</option> <option value="1" >1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" >4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                          </select>
                        </td>

                      </tr>
                      <tr>
                        <td><b>Decision making ability</td>
                                     <td>

                         <select  class="form-control" required style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="decision" id="decision">
                           <option value="" disabled selected>select grade</option> <option value="1" >1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4" >4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        </select>

                       </td>

                      </tr>
                      <tr>
                        <td><b>Coordination ability</td>
                                     <td>

                         <select  class="form-control" required style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="coordination" id="coordination">
                           <option value="" disabled selected>select grade</option> <option value="1" >1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4" >4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          </select>

                        </td>

                      </tr>
                      <tr>
                        <td><b>Ability to motivate,develop and appraise subordinates</td>
                                     <td>

                          <select  class="form-control" required style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="subordinates" id="subordinates">
                             <option value="" disabled selected>select grade</option> <option value="1" >1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" >4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                         </select>
                        </td>

                      </tr>

                      <tr>
                        <td><b>Initiative and resourcefulness in handling/anticipating problems and unforeseen situations</td>
                        <td>

                          <select  class="form-control" required style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="handlingproblems" id="handlingproblems">
                             <option value="" disabled selected>select grade</option> <option value="1" >1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" >4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                          </select>

                        </td>

                      </tr>
                      <tr>
                        <td><b>Quality of inspection</td>
                                     <td>

                         <select  class="form-control" required style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="inspection" id="inspection">
                           <option value="" disabled selected>select grade</option> <option value="1" >1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4" >4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                          </select>

                        </td>

                      </tr>

                      <tr>
                        <td><b>Financial propriety</td>
                                     <td>

                         <select  class="form-control" required style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="financialpropriety" id="financialpropriety">
                           <option value="" disabled selected>select grade</option> <option value="1" >1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4" >4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                          </select>

                        </td>

                      </tr>
                      <tr>
                        <td><b>Overall Grading on 'Functional Competency'</td>
                                     <td>

                         <input type="number"  readonly class="form-control" required  style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="overall_functionalcompetency" id="overall_functionalcompetency">
                          
                        </td>

                      </tr>

                    </tbody>
                  </table>
                </div>
               

                
         </div>
      </div>

      
       <button type="submit" value="Submit" class="btn btn-primary btn-inline center-block" tabindex="7">SUBMIT</button>

   <?=form_close();?>
  </div>




<script>
  $(document).ready(function(){
     if($("#officer-id").val()==="----"){ 
          $("#detail").hide();
          $("header").append("<div id='msg-inf'>Currently no option selected</div>")
      }

    $('#clickprofile').click(function(){
      var officer_id = $('#officer-id').val();
      $.ajax({
         type: 'POST',
         url: '<?php echo base_url(); ?>Home/ajax_view', //We are going to make the request to the method "list_dropdown" in the match controller
          data: {'id':officer_id}, //POST parameter to be sent with the tournament id
         success: function(resp) { //When the request is successfully completed, this function will be executed
         //Activate and fill in the matches list
         //With the ".html()" method we include the html code returned by AJAX into the matches list
          if(officer_id==="----"){
            $("#show-profile").html("<div id='no-officer'> No officer Selected </div>");
            //alert($("#officer-id").length);
          }
          else
         $("#show-profile").html(resp);
         $("#exit").hide();
          $("form > .well ").hide();
          $("#b2,#b1").hide();
        // alert(resp);

         },
         error: function(resp) { //When the request is successfully completed, this function will be executed
         //Activate and fill in the matches list
         //With the ".html()" method we include the html code returned by AJAX into the matches list
         console.log('error');
         console.log(arguments);
         }
      });
      
    });
    $('#officer-id').on('change',function(){
        var officer_id = $('#officer-id').val();
        $.ajax({
         type: 'POST',
         url: '<?php echo base_url(); ?>Home/reporting', //We are going to make the request to the method "list_dropdown" in the match controller
          data: {'id':officer_id}, //POST parameter to be sent with the tournament id
         success: function(resp) { //When the request is successfully completed, this function will be executed
      
          //alert(officer_id);
          if(resp==0){
               // $("#part-3").show();
               $("#msg-inf").remove();
                $('#msg').hide();
                 $("#detail").show();
                 if($(".success").length){
                    alert("dsfd");
                    $("#part-3").show();
                    $("#part-3head").css("pointer-events", "none");
                    $(".success").hide();
                 }
          }
          else{
          $('select option[value="'+ officer_id + '" ]').prop('disabled',true);
          $("#detail").hide();
          $('#msg').show();
            }          //$('html').html(resp);
        
        // alert(resp);

         }
       });
    });


    $('#myform').on('submit',function(e){
      e.preventDefault(); // <------this will restrict the page refresh
      sum1=parseInt($("#plannedwork").val())+parseInt($("#qualityoutput").val()) +parseInt($("#analytical").val()) + parseInt($("#exceptionalwork").val());
      $("#overall_workoutput").val(sum1/4);
      sum2=parseInt($("#attitudetowork").val())+parseInt($("#responsibility").val())+parseInt($("#discipline").val())+parseInt($("#communication").val())+parseInt($("#leadership").val())+parseInt($("#teamspirit").val())+parseInt($("#timeschedule").val())+parseInt($("#inter-personal").val())+parseInt($("#personality").val());
      $("#overall_personalattributes").val(sum2/9);
      sum3=parseInt($("#Knowledgeofrules").val())+parseInt($("#strategic").val())+parseInt($("#decision").val())+ parseInt($("#coordination").val())+parseInt($("#subordinates").val())+parseInt($("#handlingproblems").val())+parseInt($("#inspection").val())+parseInt($("#financialpropriety").val())
      $("#overall_functionalcompetency").val(sum3/8);
      $.ajax({
        type: 'POST',
        url: "<?php echo base_url(); ?>Home/reporting_officer1",
        data: $(this).serialize(), // $(this).serialize(); you can use this too
        success: function(msg) {
            // console.log(msg); 
             $("#detail").show();
            $("#part-3").hide();
              var $newdiv1 = $( "<div class='container success' style='background-color:green;color:white;'> <center>YOUR FORM HAS BEEN SUBMITTED</center></div>" );
              var $newdiv2 = $( "<a href='#part-3' class='success'style='float:right; color:black;' >view</a>" );
              $( "div" ).find("#part-3head").append( $newdiv2,$newdiv1);
              //alert(msg);
              $("#opt2").append($("#officer-id :selected"));
        }

      });

    });
});

</script>


    