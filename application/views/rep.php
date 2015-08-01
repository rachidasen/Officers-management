
      <div class="panel panel-info">
         <div class="panel-heading" data-target="#part3"id="part-3head" data-toggle="collapse">
            <h3 class="panel-title">
               PART-3 
            </h3>
         </div>
         <div class="panel-body" id="part3">
           
            <p><b>Numerical grading is to be awarded by reporting and reviewing authority which should be on a scale of 1-10,where 1 refers to the lowest grade and 10 refers to the highest grade</b></p>
            <p><b>(Please read carefully the instructions before filling the entries)</b></center></p>
            <br>

              
                <div class="panel panel-success">
                  <div class="panel panel-heading" data-toggle="collapse" data-target="#A"><strong>Assesment of Work Output(weightage to this section would be 40% )</strong>
                  </div>

                  <table class="table table-responsive " id="A">
                    <thead>
                      <tr>
                        <th class="col-sm-6 col-lg-6">        </th>
                        <th class="col-sm-3 col-lg-3">Reporting Authority</th>  
                        <th class="col-sm-3 col-lg-3 rev-officer"   style="display:none;" >Initials of Reviewing Authority</th>  
                      </tr> 
                    </thead>
                    <tbody>

                      <tr>
                        <td><b>Accomplishment of planned work/work alotted as per subjects alotted</td>
                        <td>
                           <select  class="form-control"    style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="plannedwork" id="plannedwork"   disabled>
                              <option disabled selected> <?php if(isset($set)) echo $plannedwork; else echo "select grade";?></option> 
                              <option value="1" >1</option>
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
                        <td>
                           <select  class="form-control rev-officer"   style="display:none;  width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="rplannedwork" id="rplannedwork"  >
                              <option disabled selected>select grade</option> 
                              <option value="1" >1</option>
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

                          <select  class="form-control"    style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="qualityoutput" id="qualityoutput" disabled>
                              <option disabled selected> <?php if(isset($set)) echo $qualityoutput; else echo "select grade";?></option> 
                                <option value="1" >1</option>
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
                         <td>

                          <select  class="form-control rev-officer"   style="display:none;  width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="rqualityoutput" id="rqualityoutput" required>
                              <option disabled selected> select grade</option> 
                                <option value="1" >1</option>
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


                          <select  class="form-control"    style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="analytical" id="analytical" disabled>
                              <option disabled selected> <?php if(isset($set)) echo $analytical; else echo "select grade";?></option> 
                              <option value="1" >1</option>
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
                        <td>


                          <select  class="form-control rev-officer"   style="display:none;  width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="ranalytical" id="ranalytical" required>
                              <option disabled selected>select grade</option> 
                              <option value="1" >1</option>
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
                          <select  class="form-control"    style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="exceptionalwork" id="exceptionalwork" disabled>
                              <option disabled selected> <?php if(isset($set)) echo $exceptionalwork; else echo "select grade";?></option> 
                               <option value="1" >1</option>
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
                         <td>
                          <select  class="form-control rev-officer"   style="display:none;  width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="rexceptionalwork" id="rexceptionalwork" required>
                              <option disabled selected> select grade</option> 
                               <option value="1" >1</option>
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

                        <input  type="number" readonly class="form-control"   <?php if(isset($set)): ?> value=<?=(int)$overall_workoutput;?> <?php endif;?>style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="overall_workoutput" id="overall_workoutput" >
                             


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
                          <tr><th class="col-sm-6 col-lg-6">        </th>
                              <th class="col-sm-3 col-lg-3">Reporting Authority</th>   
                               <th class="col-sm-3 col-lg-3 rev-officer" style="display:none;">Initials of Reviewing Authority</th> 
                          </tr> 
                      </thead>
                      <tbody>
                        <tr>
                          <td><b>Attitude to work</b></td>
                          <td>
                              <select name="attitudetowork" id="attitudetowork" class="form-control"    style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" disabled>
                              <option disabled selected> <?php if(isset($set)) echo $attitudetowork; else echo "select grade";?></option> 
                               <option value="1" >1</option>
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
                             <td>
                              <select name="rattitudetowork" id="rattitudetowork" class="form-control rev-officer"   style="display:none;  width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" required>
                              <option disabled selected> select grade</option> 
                               <option value="1" >1</option>
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

                            <select  name="responsibility" id="responsibility" class="form-control"    style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" disabled>
                              <option disabled selected> <?php if(isset($set)) echo $responsibility; else echo "select grade";?></option> 
                                  <option value="1" >1</option>
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
                          <td>

                            <select  name="rresponsibility" id="rresponsibility" class="form-control rev-officer"   style="display:none;  width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" required>
                              <option disabled selected> select grade</option> 
                                  <option value="1" >1</option>
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
                            <select  name="discipline" id="discipline" class="form-control"    style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" disabled>
                              <option disabled selected> <?php if(isset($set)) echo $discipline; else echo "select grade";?></option> 
                                  <option value="1" >1</option>
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
                          <td>

                            <select  name="rdiscipline" id="rdiscipline" class="form-control rev-officer"   style="display:none;  width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" required>
                              <option disabled selected> select grade </option> 
                                  <option value="1" >1</option>
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

                            <select name="communication" id="communication" class="form-control"    style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" disabled>
                              <option disabled selected> <?php if(isset($set)) echo $communication; else echo "select grade";?></option> 
                                 <option value="1" >1</option>
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
                          <td>

                            <select name="rcommunication" id="rcommunication" class="form-control rev-officer"   style="display:none;  width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" required>
                              <option disabled selected> select grade </option> 
                                 <option value="1" >1</option>
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


                            <select  name="leadership" id="leadership" class="form-control"    style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" disabled>
                              <option disabled selected> <?php if(isset($set)) echo $leadership; else echo "select grade";?></option> 
                                  <option value="1" >1</option>
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
                          <td>


                            <select  name="rleadership" id="rleadership" class="form-control rev-officer"   style="display:none;  width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" required>
                              <option disabled selected> select grade </option> 
                                  <option value="1" >1</option>
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


                            <select name="teamspirit" id="teamspirit" class="form-control"    style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" disabled>
                              <option disabled selected> <?php if(isset($set)) echo $teamspirit; else echo "select grade";?></option> 
                                  <option value="1" >1</option>
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
                          <td>


                            <select name="rteamspirit" id="rteamspirit" class="form-control rev-officer"   style="display:none;  width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" required>
                              <option disabled selected> select grade</option> 
                                  <option value="1" >1</option>
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


                            <select name="timeschedule" id="timeschedule" class="form-control"    style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" disabled>
                              <option disabled selected> <?php if(isset($set)) echo $timeschedule; else echo "select grade";?></option> 
                              <option value="1" >1</option>
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
                           <td>


                            <select name="rtimeschedule" id="rtimeschedule" class="form-control rev-officer"   style="display:none;  width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" required>
                              <option disabled selected>select grade </option> 
                              <option value="1" >1</option>
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


                            <select  name="inter_personal" id="inter_personal" class="form-control"    style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" disabled>
                              <option disabled selected> <?php if(isset($set)) echo "$inter_personal"; else echo "select grade";?></option> 
                                 <option value="1" >1</option>
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
                           <td>


                            <select  name="rinter_personal" id="rinter_personal" class="form-control rev-officer"   style="display:none;  width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" required>
                              <option disabled selected> select grade </option> 
                                 <option value="1" >1</option>
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

                            <select name="personality" id="personality" class="form-control"    style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" disabled>
                              <option disabled selected> <?php if(isset($set)) echo $personality; else echo "select grade";?></option> 
                               <option value="1" >1</option>
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
                           <td>

                            <select name="rpersonality" id="rpersonality" class="form-control rev-officer"   style="display:none;  width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" required>
                              <option disabled selected> select grade</option> 
                               <option value="1" >1</option>
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

                            <input  type="number" id="overall_personalattributes"  readonly name="overall_personalattributes" <?php if(isset($set)): ?> value=<?=$overall_personalattributes;?> <?php endif;?> class="form-control"    style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                                 
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
                          <tr><th class="col-sm-6 col-lg-6">        </th>
                              <th class="col-sm-3 col-lg-3">Reporting Authority</th>   
                               <th class="col-sm-3 col-lg-3 rev-officer"   style="display:none">Initials of Reviewing Authority</th> 
                          </tr> 
                      </thead>
                    <tbody>
                      <tr>
                        <td><b>Knowledge of rules/regulations/procedures in the area of function and  ability to perform them correctly</td>
                        <td>


                          <select  class="form-control"   style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="Knowledgeofrules" id="Knowledgeofrules" disabled>
                              <option disabled selected> <?php if(isset($set)) echo $Knowledgeofrules; else echo "select grade";?></option> 
                                <option value="1" >1</option>
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
                         <td>


                          <select  class="form-control rev-officer"   style="display:none; width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="rKnowledgeofrules" id="rKnowledgeofrules" required>
                              <option disabled selected> select grade</option> 
                                <option value="1" >1</option>
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

                          <select  class="form-control"   style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="strategic" id="strategic" disabled>
                              <option disabled selected> <?php if(isset($set)) echo $strategic; else echo "select grade";?></option> 
                              <option value="1" >1</option>
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

                         <td>

                          <select  class="form-control rev-officer"   style="display:none; width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="rstrategic" id="rstrategic" required>
                              <option disabled selected> select grade</option> 
                              <option value="1" >1</option>
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

                         <select  class="form-control"   style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="decision" id="decision" disabled>
                              <option disabled selected> <?php if(isset($set)) echo $decision; else echo "select grade";?></option> <option value="1" >1</option>
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
                        <td>

                         <select  class="form-control rev-officer"   style="display:none; width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="rdecision" id="rdecision" required>
                              <option disabled selected> select grade</option> <option value="1" >1</option>
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

                         <select  class="form-control"   style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="coordination" id="coordination" disabled>
                              <option disabled selected> <?php if(isset($set)) echo $coordination; else echo "select grade";?></option> 
                                <option value="1" >1</option>
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
                        <td>

                         <select  class="form-control rev-officer"   style="display:none; width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="rcoordination" id="rcoordination" required>
                              <option disabled selected> select grade</option> 
                                <option value="1" >1</option>
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

                          <select  class="form-control"   style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="subordinates" id="subordinates" disabled>
                              <option disabled selected> <?php if(isset($set)) echo $subordinates; else echo "select grade";?></option>  <option value="1" >1</option>
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


                         <td>

                          <select  class="form-control rev-officer"   style="display:none; width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="rsubordinates" id="rsubordinates" required>
                              <option disabled selected> select grade</option>  <option value="1" >1</option>
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

                          <select  class="form-control"   style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="handlingproblems" id="handlingproblems" disabled>
                              <option disabled selected> <?php if(isset($set)) echo $handlingproblems; else echo "select grade";?></option> 
                               <option value="1" >1</option>
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
                        <td>

                          <select  class="form-control rev-officer"   style="display:none; width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="rhandlingproblems" id="rhandlingproblems" required>
                              <option disabled selected> select grade</option> 
                               <option value="1" >1</option>
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

                         <select  class="form-control"   style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="inspection" id="inspection" disabled>
                              <option disabled selected> <?php if(isset($set)) echo $inspection; else echo "select grade";?></option> 
                              <option value="1" >1</option>
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

                        <td>

                         <select  class="form-control rev-officer"   style="display:none; width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="rinspection" id="rinspection" required>
                              <option disabled selected> select grade </option> 
                              <option value="1" >1</option>
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

                         <select  class="form-control"   style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="financialpropriety" id="financialpropriety" disabled>
                              <option disabled selected> <?php if(isset($set)) echo $financialpropriety; else echo "select grade";?></option> 
                               <option value="1" >1</option>
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

                          <td>

                         <select  class="form-control rev-officer"   style="display:none; width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="rfinancialpropriety" id="rfinancialpropriety" required>
                              <option disabled selected> select grade </option> 
                               <option value="1" >1</option>
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

                         <input type="number"  readonly  class="form-control"    <?php if(isset($set)): ?> value=<?=(int)$overall_functionalcompetency;?> <?php endif;?> style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="overall_functionalcompetency" id="overall_functionalcompetency">
                          
                        </td>

                      </tr>

                    </tbody>
                  </table>
                </div>
               
                               
         </div>
      </div>

     

      