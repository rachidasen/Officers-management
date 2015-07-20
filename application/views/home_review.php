
<div class="container">
    <div class="container" style="border-color:green;">
    <header class="row">
       
                <h2><center><Strong><i class="fa fa-level-up fa-4x"></i>REVIEWING OFFICER</Strong></center></h2>
        <a href="<?=base_url()?>Login/logout" style="float:right; color:black">Logout</a></li>
        <hr class="colorgraph">
        <div>
      
            <form>
                <div class="well">
                            REPORTING OFFICER <?="id of the reporting officer";?>
                            <select id="officer-id" placeholder="Choose an officer">
                                  <optgroup id="Opt1" label="To be checked">
                                    <option selected="selected">----</option>";
                                    <?php
                                        for($i=0;$i<count($id);$i++){
                                          if($id[$i]['set']!=1)
                                            echo "<option id=o".$i."value=".$id[$i]['officer_id'].">".$id[$i]['officer_id']."</option>";
                                        // print_r($id);
                                        }

                                    ?>
                                  </optgroup>
                                  <optgroup id="Opt2" label="Checked">
                                    <?php
                                        for($i=0;$i<count($id);$i++){
                                          if($id[$i]['set']==1)
                                            echo "<option value=".$id[$i]['officer_id'].">".$id[$i]['officer_id']."</option>";
                                        // print_r($id);
                                        }   

                                    ?>
                                  </optgroup>
                            </select>
                </div>

                <label>SELECT THE OFFICER</label>
                <select id="officer-id" placeholder="Choose an officer">
                  <optgroup id="opt1" label="To be checked">
                    <option selected="selected">----</option>";
                   <?php
                        for($i=0;$i<count($id);$i++){
                          if($id[$i]['set']!=2)
                            echo "<option id=o".$i."value=".$id[$i]['officer_id'].">".$id[$i]['officer_id']."</option>";
                        // print_r($id);
                        }

                    ?>
                  </optgroup>
                  <optgroup id="opt2" label="Checked">
                     <?php
                        for($i=0;$i<count($id);$i++){
                          if($id[$i]['set']==2)
                            echo "<option value=".$id[$i]['officer_id'].">".$id[$i]['officer_id']."</option>";
                        // print_r($id);
                        }

                    ?>
                  </optgroup>

                </select>
               
            <a href="#officer_info" style="color:green;" data-toggle="modal" id="clickprofile" title="officer-profile"><i class="fa fa-user fa-4x" style="position:fixed;left:0;top:30%;color:purple;"></i>OFFICER PROFILE</a>
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
        
<div class="container">   
        
        <div class="jumbotron">
            <ol><form action="#">
                <li>
                    <div class="form-group">REMARKS OF THE REVIEWING OFFICER</div>
                    <label> Length of service under the Reviewing Officer</label>
                    <input type="number">
                </li>
                <br>
                <li>
                    <div>Do you agree with the assessment made by the <em><strong>reporting officer</strong></em> with respect to the work output and the various attributes in <a href="#">Part-3 </a>&amp; <a href="#">Part-4</a> <b>?</b> Do you agree with the assessment of reporting officer in respect to extraordinary achievements/ significant failures of the officer reported upon? (Ref. <a href="#">Part-3(A) (iv) </a>and <a>Part-4(5)</a>
                    </div>
                    <small>(In case you do not agree with any of the numerical assessments of attributes please record your assessments on the column provided for you in that section and initial your entries)
                    </small>
                    <br>
                    <input type="radio" name="agree" id="yes" value="0" hidden onclick="yesorno(this,7)">
                    <label for="yes" class="switch switch--on">Yes</label>

                    <input type="radio" name="agree" id="no" value="1" hidden onclick="yesorno(this,7)">
                    <label for="no" class="switch switch--off">No</label>
                    
                       
                </li>
                <li style="display:none;">
                    <div class="form-group" >
                            <label for="disagree">In case of disagreement,please specify the reasons,Is there anything you wish to modify or add</label>
                          <textarea rows=5 class="form-control" id="disagree" >  </textarea>
                      </div>
                 </li>
                
                <!-- In case of disagreement -->
                
                <li>
                    Pen Picture by Reviewing Officer. Please comment(in about 100 words) on the overall qualities of the officer including areas of strength and lesser strength and his attitude towards weaker sections. <textarea rows=5 class="form-control"></textarea>
                </li>
                   
            </form></ol>
        </div>

         <hr class="colorgraph">
        <button type='submit' class="btn btn-info" style="float:right" data-toggle="modal" data-target="review_officer">SUBMIT</button>
        <div class="modal collapse">
            <form>
                <div class="form-group">
                    <label class=""> Name in Block Letters</label>
                    <input type="text">
                </div>
                <div class="form-group">
                    <label class="">Designation:</label>
                    <input type="text">
                </div>
                <div class="form-group">
                    <label class="">During the period of Report:</label>
                    <input type="text">
                </div>
            </form>
        </div>
       
</div>