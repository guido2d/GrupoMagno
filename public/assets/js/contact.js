
(function ($) {
    "use strict";
    jQuery(document).ready(function ($) {
        $(document).on('submit', '#get_in_touch', function (e) {
            e.preventDefault();
            var name = $('#uname').val();
            var email = $('#email').val();
            var message = $('#message').val();

            if (!name) {
                 $('#uname').removeClass('error');
                 $('#uname').addClass('error').attr('placeholder','Please Enter Name');
             }else{
                 $('#uname').removeClass('error');
             }
           
            if (!email) {
                 $('#email').removeClass('error');
                 $('#email').addClass('error').attr('placeholder','Please Enter Email')
             }else{
                 $('#email').removeClass('error');
             }
            if (!message) {
                 $('#message').removeClass('error');
                 $('#message').addClass('error').attr('placeholder','Please Enter Your Message')
             }else{
                 $('#message').removeClass('error');
             }
             
            
            if ( name && email && message && phone && subject ) {
             	$.ajax({
	                 type: "POST",
	                 url:'contact.php',
	                 data:{
                         'name': name,
                         'email': email,
                         'message': message,
	                 },
	                 success:function(data){
                         $('#get_in_touch').children('.email-success').remove();
                         $('#get_in_touch').prepend('<span class="alert alert-success email-success">' + data + '</span>');
                         $('#uname').val('');
                         $('#email').val('');
                         $('#message').val('');
                         $('.email-success').fadeOut(5000);
	                 },
	                 error:function(res){

	                 }
	             });
             }else{
                $('#get_in_touch').children('.email-success').remove();
                $('#get_in_touch').prepend('<span class="alert alert-danger email-success">Somenthing is wrong</span>');
                $('.email-success').fadeOut(5000);
             }
        });
    })

}(jQuery));	
