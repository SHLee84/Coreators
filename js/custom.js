$('html').click(function() {
	$('nav').removeClass('active');
});

$(".scroll").click(function(event){
		event.preventDefault();
		//calculate destination place
		var dest=0;
		if($(this.hash).offset().top > $(document).height()-$(window).height()){
			dest=$(document).height()-$(window).height();
		}else{
		dest=$(this.hash).offset().top;
		}
		//go to destination
		$('html,body').animate({scrollTop:dest}, 700,'swing');
	});

$('#mobile-nav').click(function(event) {
	event.stopPropagation();
	$('nav').toggleClass('active');
});

$(document).ready(function(){

	$("#submit").click(function(e){
		e.preventDefault();
		var name = $("#name").val();
		var email = $("#email").val();
		var content = $("#content").val();
		var dataString = 'name='+ name + '&email='+ email + '&content='+ content;
		$.ajax({type: "POST",
			url: "ajax/sendmail.php",
			data: dataString,
			cache: false,
			success: function(res){
				$("#mail_message").removeClass("alert-error").addClass("alert-success").html('<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;&nbsp;Your message has been delivered successfully').fadeIn("fast", function() {
                    $("#contactform").trigger("reset");
                }).delay(5000).fadeOut("fast");
			},
			error: function(res){
				$("#mail_message").removeClass("alert-success").addClass("alert-error").html('<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp;&nbsp;Your message was not delivered').fadeIn("fast").delay(5000).fadeOut("fast");
    		}
		});
	});

	$(".btn-create").click(function() {
		$(this).closest("center").fadeOut("fast", function() {
			$(this).closest("div").find(".add_main_post").toggleClass("active");
		});
	});

	$(".btn-cancel").click(function() {
		$(this).closest("form").trigger("reset");
		$(this).closest(".add_main_post").toggleClass("active");
		$(this).closest(".add_main_post").fadeOut("fast", function() {
			$(this).closest(".divider").find("center").fadeIn("fast");
		});
	})
});