        <div class="modal modal-wide fade" id="rep-off" >
          <div class="modal-dialog" style="min-width:60%">
            <!-- Modal content -->
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Reporting-officer<br><small>&#40;To befilled by the Administrative Section concerned of Ministry/Department/Office&#41;</small>
                    </h4>
                </div>
                <div class="modal-body" id="">
                  <div class="container-fluid">
                    <div class="row">
                    
                     <form id="rep-officer">
                        enter officer-id<input type="text"name="officer_id">
                        enter password <input type="password" name="password">
                        <input type='submit'>
                     </form>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>

        <div class="modal modal-wide fade" id="rep-edit" >
          <div class="modal-dialog" style="min-width:60%">
            <!-- Modal content -->
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 style="display:inline;" class="modal-title">Add an Officer
                    </h4>
                    <select style="margin 0 auto;" id="off-list">
                      <?php for($i=0;$i<count($detail1);$i++):?>
                        <?php if($detail1[$i]['set']==-1):?>
                            <option ><?=$detail1[$i]['officer_id'];?></option>
                        <?php endif;?>
                      <?php endfor;?>


                    </select>
                    <button id="off-btn" type="button" style=" width: 30px;
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

                        <tbody id="unique-list">
                        
                        </tbody>
              
                     </table>



                    <!-- </ol> -->
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>

 Add Reporting Officer <i data-toggle="modal" data-target="#rep-off"class="fa fa-plus-square  add_field"></i>
                <table class="table">
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
                        EDIT Officers
                      </th>
                      <th>
                        Status
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php for($i=0;$i<count($detail2);$i++):?>
                      <tr>
                        <td class="idr2"><?=$detail2[$i]['id'];?></td>
                        <td class="ide2"><?=$detail2[$i]['officer_id'];?></td>
                          <td><button onclick='alert("<?=$detail2[$i]['password']?>")' > show</button></td>
                           <td class="rep-edit n" data-toggle="modal" data-target="#rep-edit"><i class="glyphicon glyphicon-plus">/<i  class="glyphicon glyphicon-minus"></i></td>
                        <td><i  class=" del2 glyphicon glyphicon-minus"></i></td>
                      </tr>
                    <?php endfor; ?>
                  </tbody>
                </table> 
<?php if($this->session->flashdata('message')) echo $this->session->flashdata('message');?>

<script>   
/*To delete the officers under a given reporting officer*/
$(document).ready(function(){
    $(document).on("click", ".off-del", function() {
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
               $.ajax({
               type: 'POST',
               url: '<?php echo base_url(); ?>Admin/off_del', //We are going to make the request to the method "list_dropdown" in the match controller
               data: {'id':id}, //POST parameter to be sent with the tournament id
               //With the ".html()" method we include the html code returned by AJAX into the matches list
               success: function(resp) { 
                alert('you have successfully deleted');
                alert(resp);  
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

 // $(".off-del").click(function()
 // {
 //          alert('hello');
 //          var id= $(this).closest('tr').first().html();
 //          alert(id);
 //          var v= $(this).closest('tr').find('td.idr').html();
 //          var v=parseInt(v);
 //          console.log(id);
 //         var answer = confirm ("Are you sure you want to delete from the database?");
 //          if (answer)
 //          {
 //            var whichtr=$(this).closest("tr");
 //            alert('worked'); // Alert does not work
 //            whichtr.remove();
 //            var tableRow = $("td").filter(function() {
 //                return $(this).text() == id;
 //            }).closest("tr");
 //            tableRow.remove();

         
 //             // your ajax code
            
 //          }
 // });

  /*To view officers of given reporting officer*/
 
   $(".n").click(function(){
          var id= $(this).closest('tr').find('td.ide2').html();
          $("#unique-list").children("tr").remove();
           $.ajax({
             type: 'POST',
             url: '<?php echo base_url(); ?>Admin/show', //We are going to make the request to the method "list_dropdown" in the match controller
             dataType:'json',
             data: {'id':id}, //POST parameter to be sent with the tournament id
             //With the ".html()" method we include the html code returned by AJAX into the matches list
             success: function(resp) { 
              //alert('you have successfully deleted');
              // alert(resp);
               // if((resp.length)==1)
               //    resp.length=0;
               for(var i=0;i<(resp.length);i++){
                //console.log(resp[i]);
               
                var row = $('<tr></tr>').appendTo($("#unique-list"));
                //for (var j = 0; j < 2; j++) {
                  $('<td />',{text:resp[i]}).appendTo(row);
                  $('<td class="off-del glyphicon glyphicon-minus"></td>').appendTo(row);  

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

          /* to add officer inside reporting officer*/
            $("#off-btn").click(function(){
              var oid=$("#off-list").val();
              $("#unique-list").children("tr").remove();
              console.log(oid);
              $.ajax({
                type:'POST',
                url:'<?php echo base_url(); ?>Admin/add_off',
                data:{'oid':oid,'id':id},
                success:function(resp){
                  alert('you have successfully added');
                }
              });
              $.ajax({
               type: 'POST',
               url: '<?php echo base_url(); ?>Admin/show', //We are going to make the request to the method "list_dropdown" in the match controller
               dataType:'json',
               data: {'id':id}, //POST parameter to be sent with the tournament id
               //With the ".html()" method we include the html code returned by AJAX into the matches list
               success: function(resp) { 
                //alert('you have successfully deleted');
                // alert(resp);
                 // if((resp.length)==1)
                 //    resp.length=0;
                 for(var i=0;i<(resp.length);i++){
                  //console.log(resp[i]);
                 
                  var row = $('<tr></tr>').appendTo($("#unique-list"));
                  //for (var j = 0; j < 2; j++) {
                    $('<td />',{text:resp[i]}).appendTo(row);
                    $('<td class="off-del glyphicon glyphicon-minus"></td>').appendTo(row);  

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
            });



         
        //}
    });


});


    $(".del2").click(function(){
      var id= $(this).closest('tr').find('td.ide2').html();
      var v= $(this).closest('tr').find('td.idr2').html();
      var v=parseInt(v);
      console.log(id);
     var answer = confirm ("Are you sure you want to delete from the database?");
      if (answer)
      {
        var whichtr=$(this).closest("tr");
        alert('worked'); // Alert does not work
        whichtr.remove();
        // var tableRow = $("td").filter(function() {
        //     return $(this).text() == id;
        // }).closest("tr");
        // tableRow.remove();

     
         // your ajax code
         $.ajax({
           type: 'POST',
           url: '<?php echo base_url(); ?>Admin/del2', //We are going to make the request to the method "list_dropdown" in the match controller
           data: {'id':id,'v':v}, //POST parameter to be sent with the tournament id
           //With the ".html()" method we include the html code returned by AJAX into the matches list
           success: function(resp) { 
            alert('you have successfully deleted');
            //alert(resp);
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
    $("#rep-officer").on('submit',function(e){
        e.preventDefault();
        $.ajax({
           type: 'POST',
           url: '<?php echo base_url(); ?>Admin/insert_rep', //We are going to make the request to the method "list_dropdown" in the match controller
           data: $(this).serialize(), //POST parameter to be sent with the tournament id
           //With the ".html()" method we include the html code returned by AJAX into the matches list
           success: function(resp) { 
            alert('you have successfully inserted');
             $('#rep-off').modal('toggle');
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

   // $(document).ajaxStop(function(){
   //        window.location.reload();
   //      });




</script>