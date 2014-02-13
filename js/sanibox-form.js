jQuery(document).ready(function(){

  jQuery('#form-numero form').bind('submit',function( event ) {
    event.preventDefault();
  });

  jQuery( "#customer_number input" ).keyup(function() {
    if(jQuery(this).val().length > 2){
    jQuery.ajax({
    async: true,
    url: "http://www.sanibox.ch/service/customer_number.php",
    type: "GET",
    data: {number: jQuery(this).val()},
    success: function (data) {
        jQuery('.validation-icon').remove()
        if(data === "true"){  
          jQuery('#customer_number').append('<img class="validation-icon" src="'+templateUrl+'/images/true.png"/>')
          jQuery('#form-numero form').unbind('submit')
        }
        else{
          jQuery('#customer_number').append('<img class="validation-icon" src="'+templateUrl+'/images/false.png"/>')
        }
      }
    });
    }
  });
  
}) 