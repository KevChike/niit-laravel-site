$( document ).ready( function () {
    $( "#career_fair_form" ).validate( {
        rules: {
            email: {
                required: true,
                email: true
            },
            name: {
                required: true
            },
            gender: {
                required: true
            },
            phone: {
                required: true
            }
        },

        messages: {
            email: {
                required: 'Email is required',
                email: 'Enter a valid email'
            },
            name: {
                required: 'Full name is required'
            },
            gender: {
                required: 'Gender is required'
            },
            phone: {
                required: 'Phone number is required'
            }
        },

        errorElement: "em",
        errorPlacement: function ( error, element ) {
            // Add the `help-block` class to the error element
            error.addClass( "help-block" );

            if ( element.prop( "type" ) === "checkbox" ) {
                error.insertAfter( element.parent( "label" ) );
            } else {
                error.insertAfter( element );
            }
        },
        highlight: function(element) { // hightlight error inputs
            $(element)
                .closest('.form-group').addClass('has-error'); // set error class to the control group
        },
        unhighlight: function(element) { // revert the change done by hightlight
            $(element)
                .closest('.form-group').removeClass('has-error'); // set error class to the control group
        },
        success: function(label) {
            label
                .closest('.form-group').removeClass('has-error'); // set success class to the control group
        },

        submitHandler: function(form) {

        	function formOverlay() {
        		$( '.form_spinner' ).addClass('spinner');
                $( '.form_spinner_bg' ).addClass('form_spinner_bg_overlay');
                $('input').prop({"disabled": true});
                $('select').prop({"disabled": true});
                $('button').prop({"disabled": true});
        	}

        	function removeFormOverlay() {
        		$( '.form_spinner' ).removeClass('spinner');
                $( '.form_spinner_bg' ).removeClass('form_spinner_bg_overlay');
                $('input').prop({"disabled": false});
                $('select').prop({"disabled": false});
                $('button').prop({"disabled": false});
        	}

        	function hideNotification(css_class) {
        		setTimeout(function() {
	        		$('.notify_me').slideUp(200, function() {
	        			$( '.notify_me' ).removeClass(css_class);
	        		});
	        	}, 6000);
        	} 
        	

        	function showNotification(css_class, message) {
        		$('.notify_me').text(message);
	        	$( '.notify_me' ).addClass(css_class);
	        	$('.notify_me').slideDown(200);
        	}

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var postData = {
                'name': $('input[name=name]').val(),
                'email': $('input[name=email]').val(),
                'gender': $('select[name=gender]').val(),
                'phone': $('input[name=phone]').val(),
                'event_id': $('input[name=event_id]').val(),
            };

            $.ajax({
                type: 'POST',
                url: '/career-fair',
                data: postData,
                beforeSend : function() {
                  formOverlay();
                },
                success: function(response) {
                	removeFormOverlay();
                	document.getElementById('career_fair_form').reset();
                	showNotification('notify_me_success', response.success_msg);
                	hideNotification('notify_me_success');
                    
                },
                error: function(response) {
                	if(response.status == 422) {
                		removeFormOverlay();
	                	showNotification('notify_me_error', 'Missing or incorrect input');
	                	hideNotification('notify_me_error');
                    } else if(response.status == 500) {
                		removeFormOverlay();
	                	showNotification('notify_me_error', 'Try again! Something went wrong!');
	                	hideNotification('notify_me_error');
                	}
                    else {
                		removeFormOverlay();
	                	showNotification('notify_me_error', response.responseJSON.error_msg);
	                	hideNotification('notify_me_error');
                	}
                	
                    
                }
            });
        }

    });
});
