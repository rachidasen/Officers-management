
//The working version

function yesorno(elt,i){
  change=elt.parentNode.parentNode.childNodes;
  console.log(i);
  if(elt.value==1){
    if(change[i].style.display=="none"){
        console.log("heelo");
        console.debug(change[i].style.display="block");
        //same time trigger ajax form

      var id = $('#reporting-id').val();
      $.ajax({
         type: 'POST',
         url: '<?php echo base_url();?>Home/get_reporting_officer', //We are going to make the request to the method "list_dropdown" in the match controller
         data:{'id':id}, //POST parameter to be sent with the tournament id
         success: function(resp) { //When the request is successfully completed, this function will be executed
         //Activate and fill in the matches list
          if(id==="----")
            $("#show-profile").html("<div id='no-officer'> No officer Selected </div>");
          else{
             $("#show").html(resp);
             $(".rem").remove();
            alert('success');
            console.log('success');  
            console.log(resp);
          }
          //$("#show").html(resp);
         },
         error: function(resp) { //When the request is successfully completed, this function will be executed
         //Activate and fill in the matches list
         //With the ".html()" method we include the html code returned by AJAX into the matches list
          console.log('error');
          console.log(arguments);
         }
      });
    

    }
    else{
        console.log(change[i].child)
    }
      console.log(change[i].childNodes[1].childNodes[3].setAttribute('required','true'));
  }
  else
      console.debug(change[i].style.display="none");
  
}
function next(){					
  document.getElementById("one").className='';
  document.getElementById("two").className="active";
	document.getElementsByClassName("btn")[0]. setAttribute("data-toggle",'tab');
}
function back(){
    document.getElementById("two").className='';
  document.getElementById("one").className="active";
    
}

$(document).ready(function(){
   if($('#yestrain').is(':checked')) { 
      $("#hidden-display").css("display",'block');  
  }
});


$(document).ready(function() {
  var max_fields = 10; //maximum input boxes allowed
  var table = $("#objectives"); //Fields wrapper
  var add_button = $(".add_field"); //Add button ID

  var x = 1; //initlal text box count
   if($('#b2').prop("disabled")){
          console.log("inside");
         $(".add_field").css("pointer-events", "none");
          $(".add_field").remove();
          if($("#date_of_filling").val().length != 0){
            console.log("date filled");
            $("#n").prop("checked",true);
            $("#y").prop("disabled",true);
            $("#date_of_filling").parent().css("display","block");
          }
    }
  $(add_button).click(function() { //on add input button click
    //e.preventDefault();
   
    //else{
      console.log("outside");
      if (x < max_fields) { //max input box allowed
        x++; //text box increment
        $(table).append(' <tr class="form-group">     <td><input class="form-control" type="text" name="target[]"></td><td><input class="form-control" type="text" name="achievement[]"></td><td class="remove_field "><i class="fa fa-minus-square fa-2x"></i></td></tr>'); //add input box
    //}
    }
      
  });
  
  $(table).on("click", ".remove_field", function(e) { //user click on remove text
    e.preventDefault();
    $(this).parent('tr').remove();
    x--;
  });

 
});

// <----------------missed the doc ready function



