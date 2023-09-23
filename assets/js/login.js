$(document).on('ready', login);
	function login()
	{
		$("html").niceScroll();
        $('.form').validator();
		// Función de logeo
	    $('#regresarLogin').submit(function(event){
	        event.preventDefault();
	        $.ajax({
	            url: $(this).attr("action"),
	            type: $(this).attr("method"),
	            data: $( this ).serialize() ,
	            success:function(resp){
	                if(resp==="error"){
	                    notif({
	                        type: "warning",
	                        msg: "¡Ops!... Datos incorrectos, intentelo nuevamente.",
	                        position: "right",
	                        width: 400,
	                        height: 60,
	                        autohide: true
	                    });
	                }else{
	                    window.location.href = "home";
	                }
	            }
	        });
	    });
	}
