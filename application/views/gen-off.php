  <div class="modal modal-wide fade" id="gen-off" >
        <div class="modal-dialog" style="min-width:60%">
            <!-- Modal content -->
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">
                       OFFICER-LOGIN(DETAIL)<br><small>&#40;To be filled by the Admin&#41;</small>
                    </h4>
                </div>
                <div class="modal-body" id="">
                  <div class="container-fluid">
                    <div class="row">
                    <?php $attributes = array('id' => 'officer'); ?>
                      <?=form_open("Admin/insert_gen",$attributes);?>
                        <!---adding form -->
                        
                          <div class="well submit-msg" style="background-color:green;color:white;margin-top:12px; display:none">
                              YOU HAVE SUCCESSFULLY SUBMITTED THE FORM
                          </div>
                        
                         
                          <hr class="colorgraph">
                         
                          
                          <div class="row">
                          <div class="form-group col-xs-8">
                              <label for="name">Name of the officer</label>
                              <input name="name" id="name" class="form-control input-lg" placeholder="Name of the Officer" tabindex="1" type="text">
                          </div>
                          </div>
                            
                          <div class="row">
                          <div class="form-group col-xs-8">
                              <label for="cadre">Cadre</label>
                              <input name="cadre" id="cadre" class="form-control input-lg" placeholder="Cadre" tabindex="2" type="text">
                          </div>
                          </div>
                          <div class="row">
                            <div class="form-group col-xs-8">
                              <labelfor="yearreport">Report for the year\period ending</label>
                              <input name="yearreport" class="form-control input-lg"  id="yearreport" placeholder="Report for the year\period ending" tabindex="7" type="month">
                            </div>
                          </div>
                          <div class="row">
                            <div class="form-group col-xs-6">
                              <label for="officer_id">Login-id</label>
                              <input name="officer_id" id="officer_id" class="form-control input-lg" placeholder="Officer-id" type="text">
                            </div>
                            <div class="form-group col-xs-6">
                              <label for="password">Password</label>
                              <input name="password" id="name" class="form-control input-lg" placeholder="Password" type="text" onkeydown="this.type='password'">
                            </div>
                          </div>
                          
                          <hr class="colorgraph">
                        
                          <div class="row">
                            <div class="form-group col-xs-8">
                             <button id="b1" type="submit" value="Submit" class="btn btn-primary btn-inline btn-lg" >SUBMIT</button>
                            </div>
                          </div>
                      <?=form_close()?>
                    </div>
                  </div>
                </div>
            </div>
        </div>
  </div>

    <div class="modal modal-wide fade" id="gen-del" >
        <div class="modal-dialog" style="min-width:60%">
            <!-- Modal content -->
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">
                       PERSONAL DATA<br><small>&#40;To be filled by the Administrative Section concerned of Ministry/Department/Office&#41;</small>
                    </h4>
                </div>
                <div class="modal-body" id="">
                  <div class="container-fluid"> 
                     <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>
                              Id.no
                            </th>
                            <th>
                              OFFICER-ID
                            </th>
                            <th>
                              Password
                            </th>
                            <th>
                              Delete
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        <?php for($i=0;$i<count($detail1);$i++):?>
                          <tr>
                            <td class='idr'><?=$detail1[$i]['id'];?></td>
                            <td class='ide'><?=$detail1[$i]['officer_id'];?></td>
                              <td><button onclick='alert("<?=$detail1[$i]['password']?>")' > change</button></td>
                            <td><i  class=" del glyphicon glyphicon-minus"></i></td>
                          </tr>
                        <?php endfor; ?>
                        </tbody>
              
                     </table>
            
                  </div>
                </div>
            </div>
        </div>
    </div>

 <div>Add General Officer <i data-toggle="modal" data-target="#gen-off"class="fa fa-plus-square  add_field"></i>
 
 <span style="float:right;">Delete/Edit General Officer <i data-toggle="modal" data-target="#gen-del"class="fa fa-minus-circle  add_field"></i></span></div>
 <table class="table table-bordered">
              <thead>
                <tr>
                  <th>
                    S.no
                  </th>
                  <th>
                    OFFICER-ID
                  </th>
                  <th>
                    Password
                  </th>
                  <th>
                    Status
                  </th>
                </tr>
              </thead>

              <tbody>
              <?php for($i=0;$i<count($detail1);$i++):?>
                <tr>
                  <td><?=$detail1[$i]['id'];?></td>
                  <td><?=$detail1[$i]['officer_id'];?></td>
                    <td><button onclick='alert("<?=$detail1[$i]['password']?>")' > show</button></td>
                  <td><?=$detail1[$i]['set'];?></td>
                </tr>
              <?php endfor; ?>
              </tbody>
            
 </table>



 


<script >
  $(document).ready(function(){
    $(".del").click(function(){
      var id= $(this).closest('tr').find('td.ide').html();
      var v= $(this).closest('tr').find('td.idr').html();
      var v=parseInt(v);
      console.log(id);
     var answer = confirm ("Are you sure you want to delete from the database?");
      if (answer)
      {
        var whichtr=$(this).closest("tr");
        alert('worked'); // Alert does not work
        whichtr.remove();
        var tableRow = $("td").filter(function() {
            return $(this).text() == id;
        }).closest("tr");
        tableRow.remove();

     
         // your ajax code
         $.ajax({
           type: 'POST',
           url: '<?php echo base_url(); ?>Admin/del', //We are going to make the request to the method "list_dropdown" in the match controller
           data: {'id':id,'v':v}, //POST parameter to be sent with the tournament id
           //With the ".html()" method we include the html code returned by AJAX into the matches list
           success: function(resp) { 
            alert('you have successfully deleted');
            //$(".del").closest('tr').remove();
            // $(".del").on('click', function(e) {
                     
            // });
            },

           error: function(resp) {
             console.log('error');
            console.log(arguments);
           }
         });
      }
    });
    $("#officer").on('submit',function(e){
        e.preventDefault();
        $.ajax({
           type: 'POST',
           url: '<?php echo base_url(); ?>Admin/insert_gen', //We are going to make the request to the method "list_dropdown" in the match controller
           data: $(this).serialize(), //POST parameter to be sent with the tournament id
           //With the ".html()" method we include the html code returned by AJAX into the matches list
           success: function(resp) { 
            alert('you have successfully inserted');
             $('#gen-off').modal('toggle');
            //$(".del").closest('tr').remove();
            // $(".del").on('click', function(e) {
                     
            // });
            },

           error: function(resp) {
             console.log('error');
            console.log(arguments);
           }
         });
    });
  });

</script>


