jQuery(function($){

    var MANGUE = window.LOAD || {};
    
    MANGUE.preloader = function(){
    	
    	 $('.status').fadeOut();
    	 $('.preloader').delay(350).fadeOut('slow');
    	 $('body').delay(350).css({'overflow':'visible'});

    }

    MANGUE.scroll = function(){

    	var lastId, 
    	    topMenu = $(".app-menu nav"),
            topMenuHeight = topMenu.outerHeight()+15,
            menuItems = topMenu.find("a"),
            body = $(".scroll-click"),
            bodyItens = body.find("a"),

            scrollItems = menuItems.map(function(){
            	var item = $($(this).attr("href"));
            	if (item.length) { return item; }
            });

            bodyItens.click(function(e){
            	var href = $(this).attr("href"),
            	    offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
            	    $('html, body').stop().animate({ 
            	    	scrollTop: offsetTop
            	    }, 300);
            	
            	e.preventDefault();
            });

    	$(window).scroll(function(){

    		var fromTop = $(this).scrollTop()+topMenuHeight;
    		var cur = scrollItems.map(function(){
    			if ($(this).offset().top < fromTop)
    				return this;
    		});

    		cur = cur[cur.length-1];
    		var id = cur && cur.length ? cur[0].id : "";

    		if (lastId !== id) {
                lastId = id;
                menuItems.parent().removeClass("active").end().filter("[href='#"+id+"']").parent().addClass("active");
            }                   
        });

		var nav = $('.app-header');   
		
		$(window).scroll(function () { 
			if ($(this).scrollTop() > 68) { 
				nav.addClass("menu-fixo"); 
			} else { 
				nav.removeClass("menu-fixo"); 
			} 
		});  

    }

    MANGUE.owl = function(){
    	$(".owl-galeria").owlCarousel({
    		items: 1,
    		lazyLoad: true,
    		video: false,
    		navigation: true,
    		pagination: true,
        //loop: true,
        autoplay: true,
        autoplayTimeout:7000,
        navigationText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
            ]
        });
    
    }

    MANGUE.slick = function(){

    	$('.slider-for').slick({
    		slidesToShow: 1,
    		slidesToScroll: 1,
    		arrows: true,
    		prevArrow:"<i class='ion-android-arrow-back - Ionicons'></i>",
    		nextArrow:"<i class='ion-android-arrow-forward - Ionicons'></i>",
    		fade: true,
            adaptiveHeight: false,
    		asNavFor: '.slider-nav'
    	});

    	$('.slider-nav').slick({
    		slidesToShow: 5,
    		slidesToScroll: 1,
    		asNavFor: '.slider-for',
    		dots: false,
    		arrows: false,
            adaptiveHeight: false,
    		centerMode: true,
    		focusOnSelect: true,
    		variableWidth: true
    	});

        $('.slider-for2').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            prevArrow:"<i class='ion-android-arrow-back - Ionicons'></i>",
            nextArrow:"<i class='ion-android-arrow-forward - Ionicons'></i>",
            fade: true,
            adaptiveHeight: false,
            asNavFor: '.slider-nav2'
        });

        $('.slider-nav2').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '.slider-for2',
            dots: false,
            arrows: false,
            centerMode: true,
            focusOnSelect: true,
            adaptiveHeight: false,
            variableWidth: true
        });

    }

    MANGUE.modal = function(){
   
    }

    MANGUE.newsletter = function(){

        $(".newsletter-form").validate({

            errorClass: "error",

            rules: {
                email: {required: true, email: true, maxlength: 100},
            },
            messages: {
                email: {required: 'campo requerido', email: 'Digite um email válido', maxlength: 'Máximo 100 Caracteres'},
            },

            submitHandler: function(form) {

                var dados = $('.newsletter-form');

                $('.newsletter-form button').text('Enviando...');

                $.ajax({
                    type: "POST",
                    url: 'http://localhost/fenapam/administrador/json/newsletter',
                    data: dados.serialize(),
                    dataType: 'json',

                    success: function(data) {

                        $('.newsletter-form button').text('Enviar');

                        $('#modal').modal('show');

                        $('.modal-body').html('');

                        $('.modal-title').text('Newsleter');

                        if (data == 501) {
                            $('.modal-body').html('<p style="color: #F91818;text-align: center;font-family:Yanone-Light;font-size: 32px;"> Preencha todos os campos. </p>');
                        } else if (data == 502) {
                            $('.modal-body').html('<p style="color: #F91818;text-align: center;font-family:Yanone-Light;font-size: 32px;"> O email já está cadastrado. </p>');
                        } else if (data == 200 ) {
                            $('.modal-body').html('<p style="color: #4CAF50;text-align: center;font-family:Yanone-Light;font-size: 32px;"> Cadastrado com sucesso. </p>');
                        } else {
                            $('.modal-body').html('<p style="color: #F91818;text-align: center;font-family:Yanone-Light;font-size: 32px;">Aconteceu um erro interno, por favor tente novamente. </p>');
                        }
                    }
                });
            },

            error:function (data){

                $('.newsletter-form button').html('Enviar');

            }
        });
    }

    MANGUE.contato = function(){

        $(".contato-form").validate({

            errorClass: "error",

            rules: {
                nome: {required: true, maxlength: 50},
                assunto: {required: true, maxlength: 50},
                telefone: {required: true},
                mensagem: {required: true, maxlength: 250}
            },
            messages: {
                nome: {required: 'campo requerido', maxlength: 'Máximo 50 Caracteres'},
                assunto: {required: 'campo requerido', maxlength: 'Máximo 50 Caracteres'},
                telefone: {required: 'campo requerido'},
                mensagem: {required: 'campo requerido', maxlength: 'Máximo 250 Caracteres'},
            },

            submitHandler: function(form) {

                var dados = $('.contato-form');

                $('.contato-form button').text('Enviando...');

                $.ajax({
                    type: "POST",
                    url: 'http://localhost/fenapam/administrador/json/contato',
                    data: dados.serialize(),
                    dataType: 'json',

                    success: function(data) {

                        $('.contato-form button').text('Enviar');

                        $('#modal').modal('show');

                        $('.modal-body').html('');

                        $('.modal-title').text('Contato');

                        if (data == 501) {
                            $('.modal-body').html('<p style="color: #F91818;text-align: center;font-family:Yanone-Light;font-size: 32px;"> Preencha todos os campos. </p>');
                        } else if (data == 200 ) {
                            $('.modal-body').html('<p style="color: #4CAF50;text-align: center;font-family:Yanone-Light;font-size: 32px;"> Enviado com sucesso. </p>');
                        } else {
                            $('.modal-body').html('<p style="color: #F91818;text-align: center;font-family:Yanone-Light;font-size: 32px;">Aconteceu um erro interno, por favor tente novamente. </p>');
                        }
                    }
                });
            },

            error:function (data){

                $('.contato-form button').html('Enviar');

            }
        });

    }

    MANGUE.midia = function(){

    }

    MANGUE.revolution = function(){

    	$('.slideshow').revolution({
			delay:5000,                                                
			startheight:676,  
			startwidth:1440,
			autoplay:true
		}); 

    }

    MANGUE.mascaras = function(){

        /* números */

        var FormataNumero = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        
        Options = {
            onKeyPress: function(val, e, field, options) {
                field.mask(FormataNumero.apply({}, arguments), options);
            }
        };

        $('.numero').mask(FormataNumero, Options);

    }


    /* ==================================================
    Init
    ================================================== */

    $(document).ready(function(){

        MANGUE.mascaras();
        MANGUE.preloader();
        MANGUE.scroll();
        //MANGUE.owl();
        MANGUE.revolution();
        MANGUE.slick();
        MANGUE.modal();
        MANGUE.newsletter();
        MANGUE.contato();
        MANGUE.midia();

    });

});