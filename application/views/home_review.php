<style>
.report {
  display: block;
  position:absolute;

  top:2px; right: 3px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  margin: 1px 1px 1px 31px;
  padding: 0 0 12px 22px;
  border: none;
  font: bold 8px/normal "Zeyada", Helvetica, sans-serif;
  color: rgba(255,255,255,1);
  text-decoration: normal;
  text-align: center;
  text-indent: -6px;
  -o-text-overflow: clip;
  text-overflow: clip;
  white-space: pre-wrap;
  text-shadow: 0 0 10px rgba(255,255,255,1) , 0 0 20px rgba(255,255,255,1) , 0 0 30px rgba(255,255,255,1) , 0 0 40px #ff00de , 0 0 70px #ff00de , 0 0 80px #ff00de , 0 0 100px #ff00de ;
  -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
}

.report:hover {
  margin: 0;
  padding: 10px;
  font: normal 8px/normal "Warnes", Helvetica, sans-serif;
  white-space: pre;
  text-shadow: 0 0 10px rgba(255,255,255,1) , 0 0 20px rgba(255,255,255,1) , 0 0 30px rgba(255,255,255,1) , 0 0 40px #00ffff , 0 0 70px #00ffff , 0 0 80px #00ffff , 0 0 100px #00ffff ;
}

.button:active {
  font: normal 48px/normal "Zeyada", Helvetica, sans-serif;
  text-indent: -6px;
  white-space: pre-wrap;
  text-shadow: 0 0 10px rgba(255,255,255,1) , 0 0 20px rgba(255,255,255,1) , 0 0 30px rgba(255,255,255,1) , 0 0 40px #ff00de , 0 0 70px #ff00de , 0 0 80px #ff00de , 0 0 100px #ff00de ;
}
</style>
<div class="container">
    <div class="container" style="border-color:green;">
    <header class="row">
       
                <h2><center><strong><i class="fa fa-level-up fa-4x"></i>REVIEWING OFFICER<small><a href="<?=base_url()?>Login/logout" style=" margin-left:10px; color:#71081E; font-size:small">Logout</a></small></strong></center></h1>
       
        <hr class="colorgraph">
        <div>
      
            <form>
                <div class="well">
                            REPORTING OFFICER <?="id of the reporting officer";?>
                            <select id="reporting-id" placeholder="Choose an officer">
                                  <optgroup id="Opt1" label="To be checked">
                                    <option selected="selected">----</option>";
                                    <?php
                                        for($i=0;$i<count($repoting_offcr);$i++){
                                          if($repoting_offcr[$i]['set']!=1)
                                            echo "<option id=o".$i."value=".$repoting_offcr[$i]['reporting-officer-id'].">".$repoting_offcr[$i]['reporting-officer-id']."</option>";
                                        // print_r'reporting-officer-id'                                   
                                    }

                                    ?>
                                  </optgroup>
                                  <optgroup id="Opt2" label="Checked">
                                    <?php
                                        for($i=0;$i<count($repoting_offcr);$i++){
                                          if($repoting_offcr[$i]['set']==1)
                                           echo "<option id=o".$i."value=".$repoting_offcr[$i]['reporting-officer-id'].">".$repoting_offcr[$i]['reporting-officer-id']."</option>";
                                        // print_r($id);
                                        }   

                                    ?>
                                  </optgroup>
                            </select>
                </div>

                <label>SELECT THE OFFICER</label>
                <select id="officer-id" placeholder="Choose an officer">
                  <option selected="selected" >----</option>
                  <optgroup id="pt1" label="To be checked">
                    
                  
                  </optgroup>
                  <optgroup id="pt2" label="Checked">
                     
                  </optgroup>

                </select>
               
                <a href="#officer_info" style="color:green;" data-toggle="modal" id="clickprofile" title="officer-profile"><div style="position:fixed;left:0;top:30%;color:black;"> <small style="color: rgb(254, 242, 2);font-weight:bold; margin-left:10px;"></small><br><i class="fa fa-user fa-4x"></i> <br><small style="color: rgb(254, 242, 2);font-weight:bold;">OFFICER<br>PROFILE</small></div></a>
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

    <div class="modal modal-wide fade" id="part-3" >
        <div class="modal-dialog" style="min-width:60%">
            <!-- Modal content -->
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body" id="show">
                </div>
            </div>
        </div>
    </div>
</div>
        
<div class="container">   
        
        <div class="jumbotron">
            <ol>
           <?=form_open(base_url()."Home/reviewing-officer");?>
                <li>
                    <div class="form-group">REMARKS OF THE REVIEWING OFFICER</div>
                    <label> Length of service under the Reviewing Officer</label>
                    <input type="number">
                </li>
                <br>
                <li>
                    <div style="position:relative; padding-right:50px;">Do you agree with the assessment made by the <em><strong><a href="#part-3   " data-toggle="modal" style="color:black;">reporting officer</a></strong></em> with respect to the work output and the various attributes in <a href="#part-3" data-toggle="modal">Part-3 </a>&amp; <a href="#">Part-4</a> <b>?</b> Do you agree with the assessment of reporting officer in respect to extraordinary achievements/ significant failures of the officer reported upon? (Ref. <a href="#">Part-3(A) (iv) </a>and <a>Part-4(5)</a> 
                        <div class="report" data-toggle="modal" data-target="#part-3">         VIEW
                        REPORTING-OFFICER
                        REPORT
                        </div>
                   
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


<script type="text/javascript">
    
    $('#reporting-id').on('change',function(){
        $("#pt1").empty();
         $("#pt2").empty();
        var reporting_id = $('#reporting-id').val();
       // alert(reporting_id);        
        $.ajax({
         type: 'POST',
         url: '<?php echo base_url(); ?>Home/get_officer_reporting', //We are going to make the request to the method "list_dropdown" in the match controller
          data: {'id':reporting_id}, //POST parameter to be sent with the tournament id
        success: function(resp) { //When the request is successfully completed, this function will be executed
            var obj = jQuery.parseJSON(resp);
            //alert(obj);
            //displaying the officer-list
           // alert(resp.join(" "));
           $.each(obj, function(key,value) {
                if(key=="unchecked")
                $.each(value , function(key,value) {
                     $('<option />', {value: value, text: value}).appendTo($("#pt1"));
                });
                else
                 $.each(value , function(key,value) {
                     $('<option />', {value: value, text: value}).appendTo($("#pt2"));
                });
                //$("#pt1").append(value);
            });
           }
        });
    });
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
          else{
             $("#show-profile").html(resp);
            $("#exit").hide();
            $(".submit-msg").hide();
            $("#b2,#b1").hide();
            }
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
</script>