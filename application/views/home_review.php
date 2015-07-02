
<div class="container">
    
        <div class="row">
                <h2><center><Strong><i class="fa fa-level-up fa-4x"></i>REVIEWING OFFICER</Strong></center></h2>
        </div>
        <hr class="colorgraph">
        <div >
            <form class="form-vertical"><label>SELECT THE OFFICER 
            <select>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select></label>
            <a href="#officer_info" style="color:green;" data-toggle="modal">OFFICER PROFILE</a>
            </form>
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
                    <p>hello</p>
                </div>
            </div>
        </div>
        </div>
    
        <div class="well">
            REPORTING OFFICER <?="id of the reporting officer";?>
            
        </div>
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
                <input type="radio" name="choice" id="yes" value="0" hidden onclick="yesorno(this,7)">
                <label for="yes" class="switch switch--on">Yes</label>

                <input type="radio" name="choice" id="no" value="1" hidden onclick="yesorno(this,7)">
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