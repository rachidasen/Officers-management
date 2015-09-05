    <div class="modal modal-wide fade" id="rev-off" >
            <div class="modal-dialog" style="min-width:60%">
                <!-- Modal content -->
                <div class="modal-content" >
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Reviwing-officer<br><small>&#40;To be filled by the Administrative Section concerned of Ministry/Department/Office&#41;</small>
                        </h4>
                    </div>
                    <div class="modal-body" id="">
                      <div class="container-fluid">
                        <div class="row">
                        <form id = 'rev-officer'>
                         
                            enter officer-id<input type="text" name="officer_id">
                            enter password <input type="text" onkeyup="(this.type='password')" name="password">
                            <input type='submit'>
                         </form>>
                        </div>
                       </div>
                     </div>
                </div>
              </div>
    </div>

      <div class="modal modal-wide fade" id="rev-edit" >
          <div class="modal-dialog" style="min-width:60%">
            <!-- Modal content -->
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 style="display:inline;" class="modal-title">Add an Officer
                    </h4>
                    <select style="margin 0 auto;" id="rff-list">
                      <?php for($i=0;$i<count($detail2);$i++):?>
                        <?php if($detail2[$i]['set']==-1):?>
                            <option ><?=$detail2[$i]['officer_id'];?></option>
                        <?php endif;?>
                      <?php endfor;?>


                    </select>
                    <button id="rff-btn" type="button" style=" width: 30px;
                                                height: 30px;
                                                text-align: center;
                                                padding: 6px 0;
                                                font-size: 12px;
                                                line-height: 1.428571429;
                                                border-radius: 15px;
                            "class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i></button>
                </div>
                <div class="modal-body" id="">
                  <div class="container-fluid">
                    <div class="row">
                    <!-- <ol id="unique-list"> -->
                      <!-- need ajax call to display the officers -->
                         <table class="table">
                        <thead>
                          <tr>
                            <th>
                              
                              OFFICER-ID
                            </th>
                            
                            <th>
                              Delete
                            </th>
                          </tr>
                        </thead>

                        <tbody id="runique-list">
                        
                        </tbody>
              
                     </table>



                    <!-- </ol> -->
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
                        EDIT Officers
                      </th>
                  <th>
                    Status
                  </th>
                </tr>
              </thead>
              <tbody>
              <?php for($i=0;$i<count($detail3);$i++):?>
                <tr>
                  <td class="idr3"><?=$detail3[$i]['id'];?></td>
                  <td class="ide3"><?=$detail3[$i]['officer_id'];?></td>
                    <td><button onclick='alert("<?=$detail3[$i]['password']?>")' > show</button></td>
                    <td class="rev-edit rn" data-toggle="modal" data-target="#rev-edit"><i class="glyphicon glyphicon-plus">/<i  class="glyphicon glyphicon-minus"></i></td>
                  <td><i  class=" del3 glyphicon glyphicon-minus"></i></td>
                </tr>
              <?php endfor; ?>
              </tbody>
  </table> 
<script >
    $(document).on("click", ".rff-del", function() {
              //alert('hello');
              var id= $(this).closest('tr').find($(":first-child")).html();
              // var v= $(this).closest('tr').find('td.idr').html();
              // var v=parseInt(v);
              console.log(id);
              var answer = confirm ("Are you sure you want to delete from the database?");
              if (answer){
                var whichtr=$(this).closest("tr");
                alert('worked'); // Alert does not work
                whichtr.remove();
                var tableRow = $("td").filter(function() {
                    return $(this).text() == id;
                }).closest("tr");
                tableRow.remove();
                $('<option />',{text:id}).appendTo("#rff-list");
               $.ajax({
               type: 'POST',
               url: '<?php echo base_url(); ?>Admin/rff_del', //We are going to make the request to the method "list_dropdown" in the match controller
               data: {'id':id}, //POST parameter to be sent with the tournament id
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

    
   $(".rn").click(function(){
          var id= $(this).closest('tr').find('td.ide3').html();
          $("#runique-list").children("tr").remove();
           $.ajax({
             type: 'POST',
             url: '<?php echo base_url(); ?>Admin/show2', //We are going to make the request to the method "list_dropdown" in the match controller
             dataType:'json',
             data: {'id':id}, //POST parameter to be sent with the tournament id
             //With the ".html()" method we include the html code returned by AJAX into the matches list
             success: function(resp) { 
              //alert('you have successfully deleted');
               //  alert(resp);
               // if((resp.length)==1)
               //    resp.length=0;
               for(var i=0;i<(resp.length);i++){
                //console.log(resp[i]);
               
                var row = $('<tr></tr>').appendTo($("#runique-list"));
                //for (var j = 0; j < 2; j++) {
                  $('<td />',{text:resp[i]}).appendTo(row); 
                  $('<td class="rff-del glyphicon glyphicon-minus"></td>').appendTo(row);  

              }
              //alert('kdsfja');
              //$(".del").closest('tr').remove();
              // $(".del").on('click', function(e) {
                       
              // });
              },

             error: function(resp) {
               console.log('error');
              console.log(arguments);
             }
           });

          // /* to add officer inside reporting officer*/
            $("#rff-btn").click(function(){
              var oid=$("#rff-list").val();
              $("#runique-list").children("tr").remove();
              console.log(oid);
              $.ajax({
                type:'POST',
                url:'<?php echo base_url(); ?>Admin/add_rff',
                data:{'oid':oid,'id':id},
                success:function(resp){
                  alert('you have successfully added');
                }
              });

             $.ajax({
               type: 'POST',
               url: '<?php echo base_url(); ?>Admin/show2', //We are going to make the request to the method "list_dropdown" in the match controller
               dataType:'json',
               data: {'id':id}, //POST parameter to be sent with the tournament id
               //With the ".html()" method we include the html code returned by AJAX into the matches list
               success: function(resp) { 
                //alert('you have successfully deleted');
                //alert(resp);
                 for(var i=0;i<(resp.length);i++){
                  //console.log(resp[i]);
                 
                  var row = $('<tr></tr>').appendTo($("#runique-list"));
                  //for (var j = 0; j < 2; j++) {
                    $('<td />',{text:resp[i]}).appendTo(row);
                    $('<td class="rff-del glyphicon glyphicon-minus"></td>').appendTo(row);  

                }
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

$(".del3").click(function(){
      var id= $(this).closest('tr').find('td.ide3').html();
      var v= $(this).closest('tr').find('td.idr3').html();
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
           url: '<?php echo base_url(); ?>Admin/del3', //We are going to make the request to the method "list_dropdown" in the match controller
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
        $(document).ajaxStop(function(){
            window.location.reload();
        });
    });
//   $(document).ajaxStop(function(){
//     window.location.reload();
// });
  
</script>
