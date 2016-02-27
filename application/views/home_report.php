<?php if(!isset($set)) :?>
  <div class="container-fluid hid" style="border-color:green;">
    <header class="row">
      <h1><strong><center><i class=" fa fa-file-text-o fa-3x"></i> REPORTING OFFICER<small><a href="<?=base_url()?>Login/logout" style=" margin-left:10px; color:#71081E; font-size:small" class="rem">Logout</a></small></center></strong></h1>
      
      <hr class="colorgraph">
      <div>
        
        <form>
          <label class="rem">SELECT THE OFFICER</label>
          <select class="rem" id="officer-id" placeholder="Choose an officer">
            <optgroup id="opt1" label="To be checked">
              <option selected="selected">----</option>
              <?php
              for($i=0;$i<count($id);$i++){
                if($id[$i]['set']<=0)
                  echo "<option id='o".$i."' value=".$id[$i]['officer_id'].">".$id[$i]['officer_id']."</option>";
                        // print_r($id);
              }

              ?>
            </optgroup>
            <optgroup id="opt2" label="Checked">
             <?php
             for($i=0;$i<count($id);$i++){
              if($id[$i]['set']>=1)
                echo "<option value=".$id[$i]['officer_id'].">".$id[$i]['officer_id']."</option>";
                        // print_r($id);
            }

            ?>
          </optgroup>

        </select>
        
        <a href="#officer_info" style="color:green;" class="rem" data-toggle="modal" id="clickprofile" title="officer-profile"><div style="position:fixed;left:0;top:30%;color:black;"> <small style="color: rgb(254, 242, 2);font-weight:bold; margin-left:10px;"></small><br><i class="fa fa-user fa-4x"></i> <br><small style="color: rgb(254, 242, 2);font-weight:bold;">OFFICER<br>PROFILE</small></div></a>
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
          <button type="button" class="close" data-dismiss="modal" >&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
            <div class="show">
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--header tag -->

<div class="container"  id="msg" style="display:none" >
  You have submitted the details for this id.
</div>
<?php endif; ?>


<div class="container-fluid" id= "detail">
 <?php $attributes = array('id' => 'myform'); ?>
 <?=form_open(base_url()."Home/reporting_officer/", $attributes);?>
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
          <th class="col-sm-3 col-lg-3 rev-officer"  style="display:none;" >Initials of Reviewing Authority</th>	
        </tr> 
      </thead>
      <tbody>

        <tr>
          <td><b>Accomplishment of planned work/work alotted as per subjects alotted</td>
          <td>
           <select  class="form-control"   style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="plannedwork" id="plannedwork"    >
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
         <select  class="form-control rev-officer"  style="display:none;  width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="rplannedwork" id="rplannedwork"  >
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

        <select  class="form-control"   style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="qualityoutput" id="qualityoutput"  >
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

        <select  class="form-control rev-officer"  style="display:none;  width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="rqualityoutput" id="rqualityoutput"  >
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


        <select  class="form-control"   style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="analytical" id="analytical"  >
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


        <select  class="form-control rev-officer"  style="display:none;  width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="ranalytical" id="ranalytical">
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
        <select  class="form-control"   style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="exceptionalwork" id="exceptionalwork"  >
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
        <select  class="form-control rev-officer"  style="display:none;  width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="rxceptionalwork" id="rexceptionalwork"  >
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

        <input  type="number" readonly class="form-control"  <?php if(isset($set)): ?> value=<?=(int)$overall_workoutput;?> <?php endif;?>style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="overall_workoutput" id="overall_workoutput" >
        


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
        <select name="attitudetowork" id="attitudetowork" class="form-control"   style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;"  >
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
        <select name="rattitudetowork" id="rattitudetowork" class="form-control rev-officer"  style="display:none;  width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;"  >
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

        <select  name="responsibility" id="responsibility" class="form-control"   style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;"  >
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

        <select  name="rresponsibility " id="rresponsibility" class="form-control rev-officer"  style="display:none;  width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;"  >
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
        <select  name="discipline" id="discipline" class="form-control"   style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;"  >
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

        <select  name="rdiscipline" id="rdiscipline" class="form-control rev-officer"  style="display:none;  width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;"  >
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

        <select name="communication" id="communication" class="form-control"   style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;"  >
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

        <select name="rcommunication" id="rcommunication" class="form-control rev-officer"  style="display:none;  width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;"  >
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


        <select  name="leadership" id="leadership" class="form-control"   style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;"  >
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


        <select  name="rleadership" id="rleadership" class="form-control rev-officer"  style="display:none;  width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;"  >
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


        <select name="teamspirit" id="teamspirit" class="form-control"   style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;"  >
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


        <select name="rteamspirit" id="rteamspirit" class="form-control rev-officer"  style="display:none;  width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;"  >
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


        <select name="timeschedule" id="timeschedule" class="form-control"   style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;"  >
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


        <select name="rtimeschedule" id="rtimeschedule" class="form-control rev-officer"  style="display:none;  width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
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


        <select  name="inter_personal" id="inter_personal" class="form-control"   style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;"  >
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


        <select  name="rinter_personal" id="rinter_personal" class="form-control rev-officer"  style="display:none;  width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;"  >
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

        <select name="personality" id="personality" class="form-control"   style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;"  >
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

        <select name="rpersonality" id="rpersonality" class="form-control rev-officer"  style="display:none;  width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;"  >
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

        <input  type="number" id="overall_personalattributes"  readonly name="overall_personalattributes" <?php if(isset($set)): ?> value=<?=$overall_personalattributes;?> <?php endif;?> class="form-control"   style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;">
        
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
        <th class="col-sm-3 col-lg-3 rev-officer"  style="display:none">Initials of Reviewing Authority</th> 
      </tr> 
    </thead>
    <tbody>
      <tr>
        <td><b>Knowledge of rules/regulations/procedures in the area of function and  ability to perform them correctly</td>
        <td>


          <select  class="form-control"  style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="Knowledgeofrules" id="Knowledgeofrules"  >
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


          <select  class="form-control rev-officer"  style="display:none; width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="rKnowledgeofrules" id="rKnowledgeofrules"  >
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

          <select  class="form-control"  style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="strategic" id="strategic"  >
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

          <select  class="form-control rev-officer"  style="display:none; width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="rstrategic" id="rstrategic"  >
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

         <select  class="form-control"  style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="decision" id="decision"  >
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

       <select  class="form-control rev-officer"  style="display:none; width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="rdecision" id="rdecision"  >
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

     <select  class="form-control"  style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="coordination" id="coordination"  >
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

   <select  class="form-control rev-officer"  style="display:none; width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="rcoordination" id="rcoordination"  >
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

    <select  class="form-control"  style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="subordinates" id="subordinates"  >
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

    <select  class="form-control rev-officer"  style="display:none; width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="rsubordinates" id="rsubordinates"  >
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

    <select  class="form-control"  style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="handlingproblems" id="handlingproblems"  >
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

    <select  class="form-control rev-officer"  style="display:none; width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="rhandlingproblems" id="rhandlingproblems"  >
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

   <select  class="form-control"  style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="inspection" id="inspection"  >
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

 <select  class="form-control rev-officer"  style="display:none; width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="inspection" id="inspection"  >
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

   <select  class="form-control"  style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="financialpropriety" id="financialpropriety"  >
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

 <select  class="form-control rev-officer"  style="display:none; width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="financialpropriety" id="financialpropriety"  >
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

   <input type="number"  readonly  class="form-control"   <?php if(isset($set)): ?> value=<?=(int)$overall_functionalcompetency;?> <?php endif;?> style="width: 100%; height: 100%; border: none; color:#999 ;font-style: italic; font-size: 13px;" name="overall_functionalcompetency" id="overall_functionalcompetency">
   
 </td>

</tr>

</tbody>
</table>
</div>


</div>
</div>

<div class="panel panel-info rem">
  <div class="panel-heading "data-toggle="collapse" data-target="#part-4">
    GENERAL
  </div>
  
  <div class="panel-body" id="part-4">
    <li>
      <label>Relations with public (wherever applicable)</label>
      <textarea class="form-control" name="public_relation"></textarea>
    </li>
    <li><label>Training</label>
      <textarea class="form-control" name="training"></textarea>
    </li>
    <li>
      <label>State of health</label>
      <textarea class="form-control" name="health"></textarea>
    </li>
    <li><label>Integrity</label>
      <textarea rows=6  class="form-control"></textarea>
    </li>
    <li>
      <label>Pen Picture by Reporting Officer (in about 100 words ) on the overall qualities of the officer including areas of strength and lesser strength, extraordinary achievements, significant failures (ref 3(A) &amp; 3 (B) of part-2) and attitude towards waeker sections</label><textarea  rows=6 class="form-control" name="reporting_officer_pen_picture"></textarea>
    </li>
    <li><label>Overall numerical grading on the basis of weightage given in sectionA, B and C in part-3 of the Report</label>
      <input type="number" readonly id="overall_numerical_grading" name="overall_numerical_grading"<?php if(isset($set)): ?> value=<?=(int)$overall_numerical_grading;?> <?php endif;?>>
    </li>
  </div>
</div>

<?php if(!isset($set)): ?>
 <button type="submit" value="Submit" class="btn btn-primary btn-inline center-block rem" tabindex="7">SUBMIT</button>
<?php endif;?> 

<?=form_close();?>
</div>




<script>
  

  var $newdiv1 = $( "<div id='conf-msg'class='container-fluid success' style='background-color:green;color:white; padding-right:50px; display:none;'> <center>YOUR FORM HAS BEEN SUBMITTED<a href='#part-3' data-toggle='modal' id='sss' style='float:right; color:black;' >view</a></center></div>" );
         
  $( "div" ).find("#detail").append( $newdiv1);
  if($("#officer-id").val()==="----"){ 
    $("#myform").hide();
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
       $("#two > a").attr("data-toggle","tab");
       // $("#two").children().setAttr("data-toggle");
       $("form > .well ").hide();
       $("#b2,#b1").hide();
       $(".hiddd").hide();
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
  $(document).on('change','#officer-id',function(){
    $( "div" ).find("#conf-msg").hide();
    var officer_id = $('#officer-id').val();
    if($("#officer-id").val()==="----"){ 
      $("#myform").hide();
      $("header").append("<div id='msg-inf'>Currently no option selected</div>")
    }
    else{
      $.ajax({
       type: 'POST',
           url: '<?php echo base_url(); ?>Home/reporting', //We are going to make the request to the method "list_dropdown" in the match controller
            data: {'id':officer_id}, //POST parameter to be sent with the tournament id
            success: function(resp) { //When the request is successfully completed, this function will be executed
             $("#msg-inf").remove();
            //alert(officer_id);
                if(resp==0){
                  //form hasn't been submitted
                  
                  console.log("inside 0");
                  $('#msg').hide();
                  $("#detail").show();
                       //adding after changing else adding grren pannel
                       if($("#myform").css('display')=='none'){
                          // $("#conf-msg").remove();
                          console.log("form hidden");
                          $("#myform").show();
                          $('button[type="submit"]').prop("disabled",false);


                        }
                        
                        //$("#myform").show();
                      }
                else{
                  $('#msg').show();
                  $("#myform").hide();
                  $( "div" ).find("#conf-msg").show();
                  console.log('form is submitted');
                }          
            }
      });
  }
  });

  $(document).on('click',"#sss",function(){
    $(".del").remove();
    var id = $('#officer-id').val();
    var page='home_report.php';
    console.log('hello');
    $(".show").empty();
    $.ajax({
                     type: 'POST',
                     url: '<?php echo base_url();?>Home/get_reporting_officer', //We are going to make the request to the method "list_dropdown" in the match controller
                     data:{'id':id,'page':page}, //POST parameter to be sent with the tournament id
                     success: function(resp) { //When the request is successfully completed, this function will be executed
                      $( ".show" ).append( "<div class='del'></div>" );
                      $(".del").html(resp);
                      
                    }
                    
                  });
    $(document).on('hidden.bs.modal',function(){
      $(".del").remove();
      //console.log('modal hidden');
    });
    console.log('empty');
    
  });

  $('#myform').on('submit',function(e){
        alert("Once Submitted Can't Be Proceed");
        if(!confirm("Are you sure you want to proceed?"))
        {
          e.preventDefault(); // <------this will restrict the page refresh
          sum1=parseInt($("#plannedwork").val())+parseInt($("#qualityoutput").val()) +parseInt($("#analytical").val()) + parseInt($("#exceptionalwork").val());
          $("#overall_workoutput").val(sum1/4);
          sum2=parseInt($("#attitudetowork").val())+parseInt($("#responsibility").val())+parseInt($("#discipline").val())+parseInt($("#communication").val())+parseInt($("#leadership").val())+parseInt($("#teamspirit").val())+parseInt($("#timeschedule").val())+parseInt($("#inter_personal").val())+parseInt($("#personality").val());
          $("#overall_personalattributes").val(sum2/9);
          sum3=parseInt($("#Knowledgeofrules").val())+parseInt($("#strategic").val())+parseInt($("#decision").val())+ parseInt($("#coordination").val())+parseInt($("#subordinates").val())+parseInt($("#handlingproblems").val())+parseInt($("#inspection").val())+parseInt($("#financialpropriety").val())
          $("#overall_functionalcompetency").val(sum3/8);
          overall_grading=sum1/10 + sum2/30 + 3*sum3/80;
          $("#overall_numerical_grading").val(overall_grading);
          $('button[type="submit"]').prop("disabled",true);
          var id=$("#officer-id :selected").val();
          $.ajax({
            type: 'POST',
            url: "<?php echo base_url(); ?>Home/reporting_officer1",
            data: $(this).serialize() + '&id=' + id, // $(this).serialize(); you can use this too
            success: function(msg) {
                // console.log(msg); 
               //  $("").show(); 
               alert(msg);
               $("#myform").hide();
               $("#opt2").append($("#officer-id :selected"));
                 $( "div" ).find("#conf-msg").hide();
                }

              });
        }
        else
          return false;
  }); 


</script>


