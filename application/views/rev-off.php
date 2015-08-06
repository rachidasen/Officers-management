          <div class="modal modal-wide fade" id="rev-off" >
        <div class="modal-dialog" style="min-width:60%">
            <!-- Modal content -->
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Reporting-officer<br><small>&#40;To be filled by the Administrative Section concerned of Ministry/Department/Office&#41;</small>
                    </h4>
                </div>
                <div class="modal-body" id="">
                  <div class="container-fluid">
            <div class="row">
            <form id = 'rev-officer'>
             
                enter officer-id<input type="text">
                enter password <input type="text" onkeyup="(this.type='password')">
                <input type='submit'>
             </form>>
            </div>
          </div>
                </div>
        </div>
        </div>
    </div>

 Add Reviewing Officer <i data-toggle="modal" data-target="#rev-off"class="fa fa-plus-square  add_field"></i>
  <table class="table">
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
              <?php for($i=0;$i<count($detail3);$i++):?>
                <tr>
                  <td><?=$detail3[$i]['id'];?></td>
                  <td><?=$detail3[$i]['officer_id'];?></td>
                    <td><button onclick='alert("<?=$detail3[$i]['password']?>")' > show</button></td>
                  <td><?=$detail3[$i]['set'];?></td>
                </tr>
              <?php endfor; ?>
              </tbody>
  </table> 
<script >
  $("#rev-officer").on('submit',function(e){
        e.preventDefault();
        $.ajax({
           type: 'POST',
           url: '<?php echo base_url(); ?>Admin/insert_rev', //We are going to make the request to the method "list_dropdown" in the match controller
           data: $(this).serialize(), //POST parameter to be sent with the tournament id
           //With the ".html()" method we include the html code returned by AJAX into the matches list
           success: function(resp) { 
            alert('you have successfully inserted');
             $('#rev-off').modal('toggle');
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
</script>