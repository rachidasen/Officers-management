<div class="container" style="border-color:green;">
    <header class="row">
        <h1><strong><center><i class=" fa fa-file-text-o fa-3x"></i>REPORTING OFFICER </center></strong></h1>
        <hr class="colorgraph">
        <div>
            <form>
                <label>SELECT THE OFFICER</label>
            <select>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <a href="#officer_info" style="color:green;" data-toggle="modal">OFFICER PROFILE</a>
            </form>
        </div>
    </header>
    <div class="modal modal-fade" id="officer_info">
        <div class="modal-dialog">
            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <?php
                        $this->load->view('home_view.php');
                    ?>
               </div>
        </div>
</div>
    </div>
</div>
    <!--header tag -->

<div class="panel panel-info">
   <div class="panel-heading" data-target="#part-3" data-toggle="collapse">
      <h3 class="panel-title">
         PART-3 
      </h3>
   </div>
   <div class="panel-body collapse" id="part-3">
   
      <p><b>Numerical grading is to be awarded by reporting and reviewing authority which should be on a scale of 1-10,where 1 refers to the lowest grade and 10 refers to the highest grade</b></p>
       <p><b>(Please read carefully the instructions before filling the entries)</b></center></p>
     <br>


        <form action="#">
            <div class="panel panel-success">
                <div class="panel panel-heading" data-toggle="collapse" data-target=""></strong><strong>Assesment of Work Output(weightage to this section would be 40% )</strong></div>
                <table class="table table-responsive" id="A">
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
                   <select  class="form-control" style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                    <option value="0" disabled selected>select grade</option> <option value="1" >1</option>
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

                <select  class="form-control" style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                     <option value="0" disabled selected>select grade</option> <option value="1" >1</option>
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


                <select  class="form-control" style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                     <option value="0" disabled selected>select grade</option> <option value="1" >1</option>
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


                <select  class="form-control" style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                     <option value="0" disabled selected>select grade</option> <option value="1" >1</option>
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

                <select  class="form-control" style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                     <option value="0" disabled selected>select grade</option> <option value="1" >1</option>
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

            </tbody>
            </table>

         </div>

            <div class="panel panel-danger">
                        <div class="panel panel-heading " data-toggle="collapse" data-target="">
                            <b>Assesment of personal attributes(weightage to this section would be 30%)</b>
                        </div>
                            <table class="table table-responsive" id="B">
                                <thead>
                                    <tr><th class="col-sm-9 col-lg-9">        </th>
                                        <th class="col-sm-3 col-lg-3">Reporting Authority</th>		
                                    </tr> 
                                </thead>
                                <tbody>
                              <tr>
                                <td>Attitude to work</td>
                                <td>
                                    <select  class="form-control" style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                             <option value="0" disabled selected>select grade</option> <option value="1" >1</option>
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

                                <select  class="form-control" style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                                     <option value="0" disabled selected>select grade</option> <option value="1" >1</option>
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


                                <select  class="form-control" style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                                     <option value="0" disabled selected>select grade</option> <option value="1" >1</option>
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

                                <select  class="form-control" style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                                     <option value="0" disabled selected>select grade</option> <option value="1" >1</option>
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


                                <select  class="form-control" style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                                     <option value="0" disabled selected>select grade</option> <option value="1" >1</option>
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


                                <select  class="form-control" style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                                     <option value="0" disabled selected>select grade</option> <option value="1" >1</option>
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


                                <select  class="form-control" style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                                     <option value="0" disabled selected>select grade</option> <option value="1" >1</option>
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


                                <select  class="form-control" style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                                     <option value="0" disabled selected>select grade</option> <option value="1" >1</option>
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

                                <select  class="form-control" style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                                     <option value="0" disabled selected>select grade</option> <option value="1" >1</option>
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

                                <select  class="form-control" style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                                     <option value="0" disabled selected>select grade</option> <option value="1" >1</option>
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
                    </tbody>
                    </table>
</div> 

            <div class="panel panel-warning">
              
                <div class="panel panel-heading"> Assesment of functional competency<strong>(weightage to this section would be 30%)</strong></div>

                <table class="table table-responsive">
                    <thead>  <tr>
                    <th class="col-sm-9 col-lg-9">        </th>
                    <th class="col-sm-3 col-lg-3">Reporting Authority</th>    
                        </tr>
                    </thead>
                    <tbody>

                  <tr>
                    <td><b>Knowledge of rules/regulations/procedures in the area of function and  ability to perform them correctly</td>
                               <td>


                    <select  class="form-control" style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                       <option value="0" disabled selected>select grade</option> <option value="1" >1</option>
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

                    <select  class="form-control" style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                       <option value="0" disabled selected>select grade</option> <option value="1" >1</option>
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

                     <select  class="form-control" style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                       <option value="0" disabled selected>select grade</option> <option value="1" >1</option>
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

                     <select  class="form-control" style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                       <option value="0" disabled selected>select grade</option> <option value="1" >1</option>
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

                     <select  class="form-control" style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                       <option value="0" disabled selected>select grade</option> <option value="1" >1</option>
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

                      <select  class="form-control" style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                       <option value="0" disabled selected>select grade</option> <option value="1" >1</option>
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

                     <select  class="form-control" style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                       <option value="0" disabled selected>select grade</option> <option value="1" >1</option>
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

                     <select  class="form-control" style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                       <option value="0" disabled selected>select grade</option> <option value="1" >1</option>
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

                     <select  class="form-control" style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
                       <option value="0" disabled selected>select grade</option> <option value="1" >1</option>
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

                  </tbody>
                </table>

            
    
    </div>
        </form>
  </div>
</div>

<div class="panel panel-info" >
    <div class="panel-heading "data-toggle="collapse" data-target="#part-4">
            GENERAL
    </div>
    <form action="#">
    <div class="panel-body collapse" id="part-4">
        <li>
            <label>Relations with public (wherever applicable)</label>
            <textarea rows="10 "class="form-control"></textarea>
        </li>
        <li><label>Training</label>
            <textarea class="form-control"></textarea>
        </li>
        <li>
            <label>State of health</label>
            <textarea class="form-control"></textarea>
        </li>
        <li><label>Integrity</label>
            <textarea class="form-control"></textarea>
        </li>
        <li>
            <label>Pen Picture by Reporting Officer (in about 100 words ) on the overall qualities of the officer including areas of strength and lesser strength, extraordinary achievements, significant failures (ref 3(A) &amp; 3 (B) of part-2) and attitude towards waeker sections</label><textarea class="form-control"></textarea>
        </li>
        <li><label>Overall numerical grading on the basis of weightage given in sectionA, B and C in part-3 of the Report</label>
        <input type="number">
        </li>
    </div>
        
    </form>
</div>