jQuery(document).ready(function($){
    // login validation
    $("#owner_login").validate({
        rules: {
            login_email: {
                required: true
            },
            login_password: {
                required: true
            }
        },
        messages: {
            login_email: {
                required: 'Please Enter Your Username or email'
            },
            login_password: {
                required: 'Please Enter Your Password'
            }
        }
    });
    $('#owner_login #login_submit').click(function(e){
        e.preventDefault();
        var ajaxurl = ajax_owneraction_object.ajax_url;
        if($("#owner_login").valid()){
            var loginformdata = $('#owner_login').serialize();
            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: ajaxurl,
                data: loginformdata,
                success: function(message){
					if(!message.loggedin == false && message.dashboard == ''){
						jQuery('#login_message').html(message.message);
						window.location.href = ajax_owneraction_object.home_url +'/signup/';
					}else if(message.dashboard && message.loggedin == true){  
						jQuery('#login_message').html(message.message);
						window.location.href = ajax_owneraction_object.home_url +'/portal-checklist/';
					}else{
						jQuery('#login_message').html(message.message);
					}
                }
          });
        }
    });

    // user_email_check validation
    $("#user_email_check").validate({
        rules: {
            email: {
                required: true
            }
        },
        messages: {
            email: {
                required: 'Please Enter Your Username or email'
            }
        }
    });
	$('.user_email_check button.next-btn').click(function(e){
		e.preventDefault();
		var email = $('#zero_section_step #email').val();
		if($("#user_email_check").valid()){
			var ajaxurl = ajax_owneraction_object.ajax_url;
			$.ajax({
				type: 'POST',
				dataType: 'json',
				url: ajaxurl,
				data: {
						action : 'email_check_ajax_action',
						email : email
					},
				success: function(msg){
					if(msg.error){
						jQuery('#zero_section_step #error').html(msg.error);
						_check_email = false
					}else{
						jQuery('form#owner_register').show();
						jQuery('.owner_user_full ul.owner_user_tab').hide();
						jQuery('.owner_user_container .users_panel .user_email_check').hide();
						jQuery('.owner_user_container .users_panel').removeClass('bg_blue_class');
						//jQuery('.own_slider')[0].slick.refresh();
						var slickGoTo = jQuery(".own_slider").slick('slickGoTo', 0);
						slickGoTo.refresh();
						jQuery('#first_section_step #email_address').val(email); 
					}
				}
			});
		}else{
			$('#zero_section_step #email').css( 'border', '1px solid red' )
		}
		
	});
	
	 // register validation
    $("#owner_register, #update_password").validate({
        rules: {
            password: {
				required: true,
                minlength : 5
            },
            confirm_password: {
				required: true,
                minlength : 5,
				equalTo : "#password"
            }
        },
        messages: {
            password: {
                required: 'Please Enter Your Password'
            },
            confirm_password: {
                required: 'Please Enter Your Confirm Password'
            }
        }
    });
    $('#owner_register #submit').click(function(e){
        e.preventDefault();
        var ajaxurl = ajax_owneraction_object.ajax_url;
		if($("#owner_register").valid()){
			var formData = $('#owner_register').serialize();
			$.ajax({
				type: 'POST',
				dataType: 'json',
				url: ajaxurl,
				data: formData,
				success: function(msg){
					console.log(msg);
					jQuery('#own-msg').html(msg.msg);
					window.location.href = ajax_owneraction_object.home_url +'/portal-checklist/';
				}
			});
		}
    });
	
	//update_password
	$('a.update_password').click(function(e){
		e.preventDefault();
		$('.updatepassword').toggle();
	});
	
	//update_password ajax
	$('#update_password input[type="submit"]').click(function(e){
        e.preventDefault();
        var ajaxurl = ajax_owneraction_object.ajax_url;
		if($("#update_password").valid()){
			var formData = $('#update_password').serialize();
			$.ajax({
				type: 'POST',
				dataType: 'json',
				url: ajaxurl,
				data: formData+'&action=update_password_ajax',
				success: function(msg){
					if(msg.loggedin == true){
						jQuery('.updatepassword #own-msg').html(msg);
						setTimeout(function () {
							location.reload()
						}, 800);
					}else{
						jQuery('.updatepassword #own-msg').html(msg);
					}
					
				}
			});
		}
    });
	
	//update_somethingelse ajax
	$('#update_somethingelse input[type="submit"]').click(function(e){
        e.preventDefault();
        var ajaxurl = ajax_owneraction_object.ajax_url;
		var formData = $('#update_somethingelse').serialize();
		var _check_form = true
		$( '#update_somethingelse input, textarea' ).each( function(){
			let _this  = $( this )
			if( _this.val() == '' ){
				_this.css( 'border', '1px solid red' )
				_check_form = false
			}else{
				$.ajax({
				type: 'POST',
				dataType: 'json',
				url: ajaxurl,
				data: formData+'&action=update_somethingelse_ajax',
				success: function(msg){
					jQuery('#update_somethingelse #own-msg').html(msg.succes);
					window.location.href = ajax_owneraction_object.home_url +'/portal-checklist/';
				}
			});
			}
		} )
		if( !_check_form ){
			return false;
		}
    });
	

	$('select#select-expertise').on('change', function(){
	  var _thisval = $(this).val();
		if(_thisval == 'other'){
			$('#others_expertise').show();
			$('ul.own_slider button.slick-next.slick-arrow').css('display', 'none');
			$('ul.own_slider button.slick-next.slick-arrow').after('<a class="next_btn" href="#">Next</a>')
		}else{
			$('#others_expertise').hide();
			$('ul.own_slider button.slick-next.slick-arrow').css('display', 'block');
			$('#owner_register .next_btn').css('display', 'none');
			$(".own_slider").slick('slickGoTo', _thisval);
		}
	});
	
	if($('#owner_register .next_btn').length < 1){
		$('#owner_register .next_btn').on('click', function(e){
			e.preventDefault();
			$(".own_slider").slick('slickGoTo', 8);
		});
	}
	
	$('#third_section_step input[type="checkbox"]').change(function(){
		var _this = $(this);
		if(_this.val() == 'Other' && $(this).is(':checked')){
			$('#others_services').show();
			$('input[type="checkbox"].services').prop('checked',false);
		}else{
			$('#others_services').hide();
			$('#service-others').prop('checked',false);
		}
	});
	$('#fourth_section_step input[type="checkbox"]').change(function(){
		var _this = $(this);
		if(_this.val() == 'Other' && $(this).is(':checked')){
			$('#others_firm').show();
			$('input[type="checkbox"].firms').prop('checked',false);
		}else{
			$('#others_firm').hide();
			$('#firm-other').prop('checked',false);
		}
	});
	$('#five_section_step input[type="checkbox"]').change(function(){
		var _this = $(this);
		if(_this.val() == 'Other' && $(this).is(':checked')){
			$('#others_firm_two').show();
			$('input[type="checkbox"].firm_two').prop('checked',false);
		}else{
			$('#others_firm_two').hide();
			$('#firm-two-other').prop('checked',false);
		}
	});
	$('#six_section_step input[type="checkbox"]').change(function(){
		var _this = $(this);
		if(_this.val() == 'Other' && $(this).is(':checked')){
			$('#others_consulting').show();
			$('input[type="checkbox"].consulting').prop('checked',false);
		}else{
			$('#others_consulting').hide();
			$('#consulting-other').prop('checked',false);
		}
	});
	$('#seven_section_step input[type="checkbox"]').change(function(){
		var _this = $(this);
		if(_this.val() == 'Other' && $(this).is(':checked')){
			$('#others-marketing').show();
			$('input[type="checkbox"].marketing').prop('checked',false);
		}else{
			$('#others-marketing').hide();
			$('#marketing-other').prop('checked',false);
		}
	});
	$('#eight_section_step input[type="checkbox"]').change(function(){
		var _this = $(this);
		if(_this.val() == 'Other' && $(this).is(':checked')){
			$('#others-web_devlopement').show();
			$('input[type="checkbox"].web_devlopement').prop('checked',false);
		}else{
			$('#others-web_devlopement').hide();
			$('#marketing-other').prop('checked',false);
		}
	});
	$('#nine_section_step input[type=radio]').change(function(){
		if (this.value == 'selectedpage'){
			$('#msa_states').show();
		}else{
			$('#msa_states').hide();
		}
	});
	
	//jQuery('.own_slider').slick('refresh');
    jQuery('.own_slider').slick({
        infinite: false,
        speed: 500,
        slidesToShow: 1,
        arrows: true,
        slidesToScroll: 1,
        adaptiveHeight: true,
        verticalSwiping: false,
        draggable: false,
        fnCanGoPrev: function(instance, currentSlide){
            switch ( currentSlide ) {
                case 0:
					
					break;
				case 1:
					jQuery('.next_btn').css('display','none');
					jQuery('ul.own_slider button.slick-next.slick-arrow').css('display','block');
					break;
				case 2:
					break;
				case 3:
					$(".own_slider").slick('slickGoTo', 1);
					break;
				case 4:
					$(".own_slider").slick('slickGoTo', 1);
					break;
				case 5:
					$(".own_slider").slick('slickGoTo', 1);
					break;
				case 6:
					$(".own_slider").slick('slickGoTo', 1);
					break;
				case 7:
					$(".own_slider").slick('slickGoTo', 1);
					break;
				case 8:
					$(".own_slider").slick('slickGoTo', 1);
					break;
                default:
                  break;
            }
            return true;
        },
        fnCanGoNext: function(instance, currentSlide){
            switch ( currentSlide ) {
                case 0:
                    var _check_form = true
                    $( '#first_section_step .user_form_field input' ).each( function(){
                        let _this  = $( this )
                        if( _this.val() == '' ){
                            _this.css( 'border', '1px solid red' )
                            _check_form = false
                        }else{
                            _this.css( 'border', '1px solid #ccc' )
                        }
                    } )
                    if( !_check_form ){
                        return false;
                    }

                    break;
                case 1:

                    break;
                case 2:
                    if($('#third_section_step input[type=checkbox]:checked').length == 0){
                        $('#third_section_step .error').show();
                        return false;
                    }
					$(".own_slider").slick('slickGoTo', 8);
					
                    break;
                case 3:
                    if($('#fourth_section_step input[type=checkbox]:checked').length == 0){
                        $('#fourth_section_step .error').show();
                        return false;
                    }
					$(".own_slider").slick('slickGoTo', 8);
					
                    break;
				case 4:
                    if($('#five_section_step input[type=checkbox]:checked').length == 0){
                        $('#five_section_step .error').show();
                        return false;
                    }
					$(".own_slider").slick('slickGoTo', 8);
					
                    break;
				case 5:
                    if($('#six_section_step input[type=checkbox]:checked').length == 0){
                        $('#six_section_step .error').show();
                        return false;
                    }
					$(".own_slider").slick('slickGoTo', 8);
					
                    break;
				case 6:
                    if($('#seven_section_step input[type=checkbox]:checked').length == 0){
                        $('#seven_section_step .error').show();
                        return false;
                    }
					$(".own_slider").slick('slickGoTo', 8);

                    break;
				case 7:
					//alert(currentSlide);
                    if($('#eight_section_step input[type=checkbox]:checked').length == 0){
                        $('#eight_section_step .error').show();
                        return false;
                    }
					$(".own_slider").slick('slickGoTo', 8);
					
                    break;
				case 8:
					var _check_form = true
                   
                    if( !_check_form ){
                        return false;
                    }
                    break;
                default:
                    break;
            }
            return true;
        }
    });
	
   
   // update user data
	$('#update_register input[type="submit"]').click(function(e){
        e.preventDefault();
        var ajaxurl = ajax_owneraction_object.ajax_url;
		var formData = $('#update_register').serialize();
		$.ajax({
			type: 'POST',
			dataType: 'json',
			url: ajaxurl,
			data: formData + '&action=update_user_question_data',
			success: function(msg){
				if(msg.msg){
					jQuery('#own-msg').html(msg.msg);
					jQuery('#own-msg').css('width','100%');
					setTimeout(function () {
						location.reload()
					}, 800);
				}else{
					jQuery('#own-msg').html(msg.error);
				}
			}
		});
    });
	
	//do_not_action_update
	$('a.do_not_action_update').click(function(e){
        e.preventDefault();
        var ajaxurl = ajax_owneraction_object.ajax_url;
		$.ajax({
			type: 'POST',
			dataType: 'json',
			url: ajaxurl,
			data: 'action=do_not_action_update',
			success: function(msg){
				if(msg.msg){
					alert(msg);
				}
			}
		});
    });
	
	//do_not_send_leads
	$('a.do_not_send_leads').click(function(e){
        e.preventDefault();
        var ajaxurl = ajax_owneraction_object.ajax_url;
		$.ajax({
			type: 'POST',
			dataType: 'json',
			url: ajaxurl,
			data: 'action=do_not_send_leads',
			success: function(msg){
				if(msg.msg){
					alert(msg);
				}
			}
		});
    });
	
	//delete_my_account
	$('a.delete_my_account').click(function(e){
        e.preventDefault();
		if(confirm("Are you sure you want to delete this?")){
			var ajaxurl = ajax_owneraction_object.ajax_url;
			$.ajax({
				type: 'POST',
				dataType: 'json',
				url: ajaxurl,
				data: 'action=delete_my_account',
				success: function(msg){
					if(msg){
						window.location.href = ajax_owneraction_object.home_url +'/register/';
					}
				}
			});
		}else{
			return false;
		}
    });
	
	
	// slider_portal welcomepage
	jQuery('.slider_portal').slick({
        infinite: false,
        speed: 500,
        slidesToShow: 1,
        arrows: true,
        slidesToScroll: 1,
        adaptiveHeight: true,
        verticalSwiping: false,
        draggable: false,
        fnCanGoPrev: function(instance, currentSlide){
            switch ( currentSlide ) {
                case 0:
					break;
				case 1:
					break;
				case 2:
					
					break;
				case 3:
					
					break;
				case 4:
					
					break;
				case 5:
					
					break;
				case 6:
					
					break;
				case 7:
					
					break;
				case 8:
					
					break;
                default:
                  break;
            }
            return true;
        },
        fnCanGoNext: function(instance, currentSlide){
            switch ( currentSlide ) {
                case 0:
					var _check_form = true
                    $( '#welcome_portal_1 input' ).each( function(){
                        let _this  = $( this )
                        if( _this.val() == '' ){
                            _this.css( 'border', '1px solid red' )
                            _check_form = false
                        }else{
                            _this.css( 'border', '1px solid #ccc' )
							var your_name = $(this).val();
							$('#your_name_text').html(your_name);
                        }
                    } )
                    if( !_check_form ){
                        return false;
                    }
                    break;
                case 1:
					
                    break;
                case 2: 
					
                    break;
                case 3:
                   
                    break;
				case 4:
                   
                    break;
				case 5:
                   
                    break;
				case 6:
                   
                    break;
				case 7:
					
                    break;
				case 8:
					
                    break;
                default:
                    break;
            }
            return true;
        }
    });
	
	//welcome_portal_2 radio
	
	$('.thanks_portal input[type=radio][name=business_portal]').change(function(){
		var business_portal = $(this).val();
		//$('.slider_portal .purchase.about-two.thanks-page.would-like a.thanks-next').attr('href', business_portal);
		$('.slider_portal .purchase.about-two.thanks-page.would-like .thanks-next').attr('thanksval', business_portal);
		if(business_portal == 'start'){
			$(".slider_portal").slick('slickGoTo', 2);
		}else if(business_portal == 'buy'){
			$(".slider_portal").slick('slickGoTo', 3);
		}else if(business_portal == 'franchise'){
			$(".slider_portal").slick('slickGoTo', 4);
		}else if(business_portal == 'undecided'){
			$(".slider_portal").slick('slickGoTo', 11);
			$("section.welcome-sec.get-started-sec.set_up .back_undecided").show();
		}else if(business_portal == 'manage'){
			$(".slider_portal").slick('slickGoTo', 6);
		}else if(business_portal == 'sell'){
			$(".slider_portal").slick('slickGoTo', 7);
		}else if(business_portal == 'close'){
			$(".slider_portal").slick('slickGoTo', 8);
		}else{
			alert('please select one.');
		}
	});
	
  
	$('.slider_portal .purchase.about-two.thanks-page.would-like .thanks-next').click(function(){
		var _this = $(this).attr('thanksval');
		if(_this == 'start'){
			$(".slider_portal").slick('slickGoTo', 2);
		}else if(_this == 'buy'){
			$(".slider_portal").slick('slickGoTo', 3);
		}else if(_this == 'franchise'){
			$(".slider_portal").slick('slickGoTo', 4);
		}else if(_this == 'undecided'){
			$(".slider_portal").slick('slickGoTo', 11); 
		}else if(_this == 'manage'){
			$(".slider_portal").slick('slickGoTo', 6);
		}else if(_this == 'sell'){
			$(".slider_portal").slick('slickGoTo', 7);
		}else if(_this == 'close'){
			$(".slider_portal").slick('slickGoTo', 8);
		}else{
			alert('please select one.');
		}
		
	});
	$('.slider_portal .purchase.about-two.thanks-page.would-like button.thanks-previous').click(function(){
		$(".slider_portal").slick('slickGoTo', 0);
	});
	$('.slider_portal a.back_undecided').click(function(e){
		e.preventDefault();
		$(".slider_portal").slick('slickGoTo', 1);
	});
	
	// back btn click
	$('.back_btn_question').click(function(){
		var back_screen = $(this).attr('back_screen');
		$(".slider_portal").slick('slickGoTo', back_screen);
	});
	
	// back back_btn_id_two click
	$('.slider_portal .back_btn_id_two').click(function(){
		$(".slider_portal").slick('slickGoTo', 1);
	});
	
	// start validation
	$('.slider_portal #start_number a.close-next').click(function(e){
		e.preventDefault();
		radiovalidation();
	});
	function radiovalidation(){
		var determined = $("input[name='determined']:checked").val();
		var physical_product = $("input[name='physical_product']:checked").val();
		var fee_based = $("input[name='fee_based']:checked").val();
		var distribute_products = $("input[name='distribute_products']:checked").val();
		var selling_food = $("input[name='selling_food']:checked").val();
		var medical_services = $("input[name='medical_services']:checked").val();
		var physical_site = $("input[name='physical_site']:checked").val();
		var specialized_equipment = $("input[name='specialized_equipment']:checked").val();
		var vehicles = $("input[name='vehicles']:checked").val();
		var outside_investors = $("input[name='outside_investors']:checked").val();
		var hired_employees = $("input[name='hired_employees']:checked").val();
		var employees_soon = $("input[name='employees_soon']:checked").val();
		if(determined && physical_product && fee_based && distribute_products && selling_food && medical_services && physical_site && specialized_equipment && vehicles && outside_investors && hired_employees && employees_soon){
			/* var screen_id = $(this).attr('screen_id');
			$('#retails_screen').find($('.back_btn_question').attr('back_screen', screen_id)); */
			var body = $("html, body");
			body.stop().animate({scrollTop:0}, 500, 'swing', function() {
			});
			$(".slider_portal").slick('slickGoTo', 11);
		}else{
			$('.error_button').show();
		}
	}
	// franchise validation
	$('.slider_portal #welcome_portal_franchise a.close-next').click(function(e){
		e.preventDefault();
		franchisevalidation();
	});
	function franchisevalidation(){
		var entity = $("input[name='entity']:checked").val();
		var franchise_partner = $("input[name='franchise_partner']:checked").val();
		var physical_site = $("input[name='physical_site']:checked").val();
		var physical_product = $("input[name='physical_product']:checked").val();
	
		if(entity && franchise_partner && physical_site && physical_product ){
			var body = $("html, body");
			body.stop().animate({scrollTop:0}, 500, 'swing', function() {
			});
			$(".slider_portal").slick('slickGoTo', 11);
		}else{
			$('.error_button').show();
		}
	}
	
	// manage validation
	$('.slider_portal #owner_mange a.close-next').click(function(e){
		e.preventDefault();
		owner_mangevalidation();
	});
	function owner_mangevalidation(){
		var choose_business = $("input[name='choose_business']:checked").val();
		var is_franchies = $("input[name='is_franchies']:checked").val();
		var hired_employees = $("input[name='hired_employees']:checked").val();
		var hired_employees_soon = $("input[name='hired_employees_soon']:checked").val();
		var specialized_equipment = $("input[name='specialized_equipment']:checked").val();
		var others_produce = $("input[name='others_produce']:checked").val();
		var outside_investors = $("input[name='outside_investors']:checked").val();
	
		if(choose_business && is_franchies && hired_employees && hired_employees_soon && specialized_equipment && others_produce && outside_investors){
			var body = $("html, body");
			body.stop().animate({scrollTop:0}, 500, 'swing', function() {
			});
			$(".slider_portal").slick('slickGoTo', 11);
		}else{
			$('.error_button').show();
		}
	}
	
	// portal_sell validation
	$('.slider_portal #portal_sell a.close-next').click(function(e){
		e.preventDefault();
		sell_mangevalidation();
	});
	function sell_mangevalidation(){
		var choose_business = $("input[name='choose_business']:checked").val();
		var any_employees = $("input[name='any_employees']:checked").val();
		var physical_location = $("input[name='physical_location']:checked").val();
		var business_brokers = $("input[name='business_brokers']:checked").val();
	
		if(choose_business && any_employees && physical_location && business_brokers ){
			var body = $("html, body");
			body.stop().animate({scrollTop:0}, 500, 'swing', function() {
			});
			$(".slider_portal").slick('slickGoTo', 11);
		}else{
			$('.error_button').show();
		}
	}
	
	// buy validation
	$('.slider_portal #welcome_portal_buy a.close-next').click(function(e){
		e.preventDefault();
		buyvalidation();
	});
	function buyvalidation(){
		var buy_business = $("input[name='buy_business']:checked").val();
		var entity = $("input[name='entity']:checked").val();
		var fee_based = $("input[name='fee_based']:checked").val();
		var distribute_products = $("input[name='distribute_products']:checked").val();
		var selling_food = $("input[name='selling_food']:checked").val();
		var medical_services = $("input[name='medical_services']:checked").val();
		var physical_site = $("input[name='physical_site']:checked").val();
		var specialized_equipment = $("input[name='specialized_equipment']:checked").val();
		var vehicles = $("input[name='vehicles']:checked").val();
		var outside_investors = $("input[name='outside_investors']:checked").val();
		if(buy_business && entity && fee_based && distribute_products && selling_food && medical_services && physical_site && specialized_equipment && vehicles && outside_investors){
			var body = $("html, body");
			body.stop().animate({scrollTop:0}, 500, 'swing', function() {
			});
			$(".slider_portal").slick('slickGoTo', 11);
		}else{
			$('.error_button').show();
		}
	}
	// sourced validation
	$('.slider_portal #sourced_sell_screen a.submit-sell').click(function(e){
		e.preventDefault();
		buyvalidation();
	});
	function buyvalidation(){
		var sell_any_employees = $("input[name='sell_any_employees']:checked").val();
		var sell_employees_soon = $("input[name='sell_employees_soon']:checked").val();
		var sell_physical_product = $("input[name='sell_physical_product']:checked").val();
		var fee_based_service = $("input[name='fee_based_service']:checked").val();
		var drinks_to_customers = $("input[name='drinks_to_customers']:checked").val();
		var medical_advice = $("input[name='medical_advice']:checked").val();
		var sell_retail_site = $("input[name='sell_retail_site']:checked").val();
		var office_space = $("input[name='office_space']:checked").val();
		var industrial_site = $("input[name='industrial_site']:checked").val();
		var outside_investors = $("input[name='outside_investors']:checked").val();
		var operate_business = $("input[name='operate_business']:checked").val();
		var sell_specialized_equipment = $("input[name='sell_specialized_equipment']:checked").val();
		if(sell_any_employees && sell_employees_soon && sell_physical_product && fee_based_service && drinks_to_customers && medical_advice && sell_retail_site && office_space && industrial_site && outside_investors && operate_business && sell_specialized_equipment){
			var body = $("html, body");
			body.stop().animate({scrollTop:0}, 500, 'swing', function() {
			});
			$(".slider_portal").slick('slickGoTo', 11);
		}else{
			$('.error_button').show();
		}
	}
	// close validation
	$('.slider_portal #welcome_portal_close a.close-next').click(function(e){
		e.preventDefault();
		closevalidation();
	});
	function closevalidation(){
		var close_choose_business = $("input[name='close_choose_business']:checked").val();
		var close_any_employees = $("input[name='close_any_employees']:checked").val();
		var close_physical_location = $("input[name='close_physical_location']:checked").val();

		if(close_choose_business && close_any_employees && close_physical_location){
			var body = $("html, body");
			body.stop().animate({scrollTop:0}, 500, 'swing', function() {
			});
			$(".slider_portal").slick('slickGoTo', 11);
		}else{
			$('.error_button').show();
		}
	}
	$('.slider_portal button.thanks-next-lets').click(function(){
		var _check_form = true
		$( '#welcome_portal_1 input' ).each( function(){
			let _this  = $( this )
			if( _this.val() == '' ){
				_this.css( 'border', '1px solid red' )
				_check_form = false
			}else{
				_this.css( 'border', '1px solid #ccc' )
				var your_name = $('#first_name').val();
				$('#your_name_text').html(your_name);
				$(".slider_portal").slick('slickGoTo', 1);
			}
		} )
		if( !_check_form ){
			return false;
		}
	});
	
	// login validation
    $('#slider_portal_form').validate({
        rules: {
            username: {
                required: true,
				email: true
            },
			user_pass: {
                required: true
            }
        },
        messages: {
            username: {
                required: 'Please enter email'
            },
            user_pass: {
                 required: 'Please enter password'
            }
        }
    });
	
	$('#slider_portal_form input[type="submit"]').click(function(e){
        e.preventDefault();
        var ajaxurl = ajax_owneraction_object.ajax_url;
		if($("#slider_portal_form").valid()){
            var slider_portal_start_form = $('#slider_portal_form').serialize();
			$('.owner_loading #overlay').show();
            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: ajaxurl,
                data: slider_portal_start_form +'&action=slider_portal_start_form_action',
                success: function(message){
					$('.owner_loading #overlay').hide();
					if(message.type == 'success'){
						jQuery('#slider_portal_form #mssg').html(message.msg);
						window.location.href = ajax_owneraction_object.home_url +'/portal-checklist';
					}else{
						jQuery('#slider_portal_form #mssg').html(message.msg);
					}
                }
			});
		}
    });
	
	$('.source input[type=radio][name=is_franchies]').change(function(){
		var source_close = $(this).closest();
		var _value = $(this).val();
		if(_value == 'Yes'){
			source_close.parents('.founded').find($('.manage_franchise_name').show());
		}else{
			$('.manage_franchise_name').hide();
		}
	});
	
	$('.source input[type=radio][name=have_you]').change(function(){
		var source_close = $(this).closest();
		var _value = $(this).val();
		if(_value == 'Yes'){
			source_close.parents('.founded').find($('.start_check').show());
		}else{
			$('.start_check').hide();
		}
	});
	
	$('.source input[type=radio][name=buy_have_you]').change(function(){
		var source_close = $(this).closest();
		var _value = $(this).val();
		if(_value == 'Yes'){
			source_close.parents('.founded').find($('.start_check').show());
		}else{
			$('.start_check').hide();
		}
	});
	
	$('.source input[type=radio][name=determined]').change(function(){
		var source_close = $(this).closest();
		var _value = $(this).val();
		if(_value == 'Yes'){
			source_close.parents('.founded').find($('.start_structure').show());
		}else{
			$('.start_structure').hide();
		}
	});
	
	$('.source input[type=radio][name=entity]').change(function(){
		var source_close = $(this).closest();
		var _value = $(this).val();
		if(_value == 'Yes'){
			source_close.parents('.founded').find($('.entity_check').show());
		}else{
			$('.entity_check').hide();
		}
	});
	
	$('.sourced input[type=radio][name=franchise_unit]').change(function(){
		var source_close = $(this).closest();
		var _value = $(this).val();
		if(_value == 'Yes'){
			source_close.parents('.founded').find($('.physical_site').show());
		}else{
			$('.physical_site').hide();
		}
	});
	
	// physical_site
	$('.sourced input[type=radio][name=physical_site]').change(function(){
		var source_close = $(this).closest();
		var _value = $(this).val();
		if(_value == 'Yes'){
			source_close.parents('.founded').find($('.physical_site').show());
			$('.next-main .close-next').hide();
			$('.next-main .if-next').show();
		}else{
			$('.physical_site').hide();
			$('.next-main .if-next').hide();
			$('.next-main .close-next').show();
		}
	});
	
	// physical_site manage
	$('#owner_mange .source input[type=radio][name=physical_site]').change(function(){
		var source_close = $(this).closest();
		var _value = $(this).val();
		if(_value == 'Yes'){
			source_close.parents('.founded').find($('.physical_site').show());
		}else{
			$('.physical_site').hide();
		}
	});
	
	// sell_if
	$('.sell_if input[type=radio][name=business_brokers]').change(function(){
		var _value = $(this).val();
		if(_value == 'Yes'){
			$('.next-main .close-next').hide();
			$('.next-main .if-sell').show();
		}else{
			$('.next-main .if-sell').hide();
			$('.next-main .close-next').show();
		}
	});
	// undecided back
	$('a.back_undecided').click(function(e){
		e.preventDefault();
		$(".slider_portal").slick('slickGoTo', 2);
	});
	
	$('a.if-next').click(function(e){
		e.preventDefault();
		var _check_form = true
		var checkedNum = $('input[name="physical_site_apply[]"]:checked').length;
		if (!checkedNum){
			alert('Please choose all the apply.');
			_check_form = false
		}else{
			var body = $("html, body");
			body.stop().animate({scrollTop:0}, 500, 'swing', function() {
			});
			var screen_id = $(this).attr('screen_id');
			$('#retails_screen').find($('.back_btn').attr('back_screen', screen_id));
			$(".slider_portal").slick('slickGoTo', 9);
		}
		if( !_check_form ){ 
			return false;
		}
	});
	
	$('a.if-sell').click(function(e){
		e.preventDefault();
		var body = $("html, body");
		body.stop().animate({scrollTop:0}, 500, 'swing', function() {
		});
		var screen_id = $(this).attr('screen_id');
		$('#sourced_sell_screen').find($('.back_btn').attr('back_screen', screen_id));
		$(".slider_portal").slick('slickGoTo', 10);
	});
	
	$('a.submit-next').click(function(e){
		e.preventDefault();
		var _check_form = true
		if ($(".physical_site_check .source-area input[type='checkbox'][name='location_house']:checked").length == 0){
			alert('Please check one.');
			_check_form = false
		}else{
			var body = $("html, body");
			body.stop().animate({scrollTop:0}, 500, 'swing', function() {
			});
			$(".slider_portal").slick('slickGoTo', 11);
		}
		if( !_check_form ){ 
			return false;
		}
	});
	
	jQuery('.slider_portal').on('afterChange', function(event, slick, currentSlide, nextSlide){
		if(currentSlide == 2 || currentSlide == 3 || currentSlide == 4 || currentSlide == 6){
			jQuery('.slider_portal .slick-list').addClass('slick_height');
		}else{
			jQuery('.slider_portal .slick-list').removeClass('slick_height');
		}
	});
	
	 var inputQuantity = [];
	 $(".question_year").each(function(i) {
		inputQuantity[i]=this.defaultValue;
		 $(this).data("idx",i); // save this field's index to access later
	  });
	  
      $(".question_year").on("keyup", function (e) {
			var $field = $(this),
            val=this.value,
            $thisIndex=parseInt($field.data("idx"),10); // retrieve the index
        if (this.validity && this.validity.badInput || isNaN(val) || $field.is(":invalid") ) {
            this.value = inputQuantity[$thisIndex];
            return;
        } 
        if (val.length > Number($field.attr("maxlength"))) {
          val=val.slice(0, 4);
          $field.val(val);
        }
        inputQuantity[$thisIndex]=val;
      });     
		
});
