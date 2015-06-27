$(document).ready(function() {
  var max_fields = 10; //maximum input boxes allowed
  var table = $("#objectives"); //Fields wrapper
  var add_button = $(".add_field"); //Add button ID

  var x = 1; //initlal text box count
  $(add_button).click(function() { //on add input button click
    //e.preventDefault();
    if (x < max_fields) { //max input box allowed
      x++; //text box increment
      $(table).append(' <tr class="form-group">     <td><input class="form-control" type="text" name="target[]"></td><td><input class="form-control" type="text" name="achievement[]"></td><td class="remove_field"><a href="#">Remove</a></td></tr>'); //add input box
    }
    else{
      //working
    }
  });
  
  $(table).on("click", ".remove_field", function(e) { //user click on remove text
    e.preventDefault();
    $(this).parent('tr').remove();
    x--;
  })
});

/*function yesorno(elt){
    alert(elt.value);  
    if(document.getElementById(elt.id).value==1){
        document.getElementById('trainings').style.display="block";
     }
  else                                                                  
    document.getElementById('trainings').style.display="none";
    
}
function yesorno(elt){
    //alert(elt.value);  
  //alert(document.getElementById(elt.id).value);
  if(elt.value==1){
    //if(document.getElementById(elt.id).value==1){
        //alert("hello");
        document.getElementsByClassName('hidden-msg').style.display="block";
     }
  else                                                                  
    document.getElementsByClassName('hidden-msg').style.display="none";
    
}
*/

//Apply properties to all class

/*
var s=document.getElementsByClassName('hidden_msg');
//changing the style to 
for(i=0;i<s.length;i++){
    console.log(s[i].style.display="inline");
}


*/
//The working version

function yesorno(elt,i){
  change=elt.parentNode.parentNode.childNodes;
  console.log(i);
  if(elt.value==1)
      console.debug(change[i].style.display="block");
  else
      console.debug(change[i].style.display="none");
  
}

function next(){					
  document.getElementById("one").className='';
  document.getElementById("two").className="active";
	document.getElementsByClassName("btn")[0]. setAttribute("data-toggle",'tab');
}

