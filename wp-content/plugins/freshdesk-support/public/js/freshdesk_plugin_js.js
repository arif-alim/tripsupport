jQuery(document).ready(function($){

	toggle_url();	

	$('.fd_convert_ticket').on('click',function(evt){
		evt.preventDefault();
		var comment_link = this;
		// var ticket_link= $(this).find('fd_ticket_link').first();
		var commentId= $(this).attr('id');
		var ticketId= $(this).attr('ticket_id');
		var href= $(this).attr('domain_url');

		if(ticketId == undefined){
			var data = {
				action: 'fd_ticket_action',
				commentId: commentId
			};

				// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
			$.post(ajaxurl, data, function(response) {
				resp = jQuery(response).find('response_data').text();
				if(resp == -1 || resp == ""){
					alert('Unable to create ticket on Freshdesk');
				}
				else{
					$(comment_link).text('View Ticket');
					$(comment_link).attr('ticket_id',resp);
					confirm('Ticket #'+resp+' created Successfully.');
				}

			});
		}
		else{
			window.open(href+"/helpdesk/tickets/"+ticketId, '_blank');
		}
	});

	if($('#freshdesk_enable_feedback')[0] && $('#freshdesk_enable_feedback')[0].checked){
		toggle_feedback_widget();
	}

	$('#freshdesk_enable_feedback').on('click',function(){
		toggle_feedback_widget();
	});

	// conditions for 3rd option (convert wp comments to tickets)
	if( $('#freshdesk_enable_tickets')[0] && $('#freshdesk_enable_tickets')[0].checked){
	 	toggle_tickets();
	}

	$('#freshdesk_enable_tickets').on('click',function(){
		toggle_tickets();
	});
	// conditions/events for 3rd option (convert wp comments to tickets) ends here

	if( $('#freshdesk_enable_sso')[0] && $('#freshdesk_enable_sso')[0].checked){
	 	toggle_sso();
	}
	$('#freshdesk_enable_sso').on('click',function(){
		toggle_sso();
	});

	if(document.getElementById('sso_type_freshwork_id').checked) {
		toggle_sso_type('freshwork');
	} else if(document.getElementById('sso_type_freshdesk_id').checked) {
		toggle_sso_type('freshdesk');
	}

	$('#sso_type_freshwork_id').on('click',function(){
		toggle_sso_type('freshwork');
	});
	$('#sso_type_freshdesk_id').on('click',function(){
		toggle_sso_type('freshdesk');
	});

	// $('.freshdesk_domain_url').on('blur',function(){
	// 	toggle_url();
	// });

	// select double click to select all - Remote Login URL / Remote Logout URL
	$('.remote-url').on('dblclick', function() {
		$(this).select();
	});

	$('.freshdesk_domain_url').on('keyup', function() {
		$('.freshdesk_domain_url').val($(this).val());
	});
	function toggle_sso_type(sso_type){
		console.log(sso_type);
		if(sso_type == 'freshwork'){
			$('#sso_type_is_freshwork').slideDown();
			$('#sso_type_is_freshdesk').slideUp();
		} else if(sso_type == 'freshdesk'){
			$('#sso_type_is_freshdesk').slideDown();
			$('#sso_type_is_freshwork').slideUp();
		}
	}

	function toggle_url(){
		if($('.freshdesk_domain_url').val() != ''){
			$('.freshdesk_sso_settings').slideDown();
			url = $('.freshdesk_domain_url').val();
			// $('.freshdesk_helpdesk_url').find('a').each(function(){
			// 	$(this).attr('href',url+'/admin/security');
			// });
			$('.freshdesk_widget_url').find('a').first().attr('href',url+'/admin/widget_config');
			return;
		}
		// $('.freshdesk_sso_settings').slideUp();
	}

	function toggle_feedback_widget(){
		if($('#freshdesk_enable_feedback')[0].checked){
			$('#freshdesk_feedback_widget_id').slideDown();
			$('#freshdesk_fb_widget_code').prop('disabled',false);
			return;
		}
		$('#freshdesk_fb_widget_code').prop('disabled',true);
		$('#freshdesk_feedback_widget_id').slideUp();
	}

	function toggle_sso(){
		if($('#freshdesk_enable_sso')[0].checked){
			$('#freshdesk_sso_options').slideDown();
			//$('#freshdesk_fb_widget_code').prop('disabled',false);
			return;
		}
		//$('#freshdesk_fb_widget_code').prop('disabled',true);
		$('#freshdesk_sso_options').slideUp();
	}

	function toggle_tickets() {
		if($('#freshdesk_enable_tickets')[0].checked){
			$('#freshdesk_tickets_options').slideDown();
			//$('#freshdesk_fb_widget_code').prop('disabled',false);
			return;
		}
		//$('#freshdesk_fb_widget_code').prop('disabled',true);
		$('#freshdesk_tickets_options').slideUp();
	}

});
