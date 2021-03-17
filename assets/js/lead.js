
// Make request to get the available time slots for the selected
// date and load the proper ui slots
function loadAvailableSlotsBySelectedDate(param, url, formattedDate) {
	
	var cardSlots = document.getElementById("time_slot_cards");

	// Remove the time slot
	cardSlots.classList.remove('slot_selection_show');

	// The calendar was just cleared...
	if (param.value == null) {

		// Exit the method
		return;
	}

	$.ajax({
		url: url,
		method: 'post',
		data: {
			date: formattedDate
		},
		dataType: 'json',
		error: function (res) {

			// TODO: Find a more proper way to log error

			// Alert error
			alert("An error occurred. Please try again.");

			// Exit the method
			return;
		},
		success: function(response) {

			// Display the time slot
			cardSlots.classList.add('slot_selection_show');

			// Get the slot indices

			var slotIndex1 = $( "label[slot-index='0']" );
			var slotIndex2 = $( "label[slot-index='1']" );
			var slotIndex3 = $( "label[slot-index='2']" );
			var slotIndex4 = $( "label[slot-index='3']" );
			var slotIndex5 = $( "label[slot-index='4']" );
			var slotIndex6 = $( "label[slot-index='5']" );

			var slotIndexValue1 = slotIndex1.attr("slot-index");
			var slotIndexValue2 = slotIndex2.attr("slot-index");
			var slotIndexValue3 = slotIndex3.attr("slot-index");
			var slotIndexValue4 = slotIndex4.attr("slot-index");
			var slotIndexValue5 = slotIndex5.attr("slot-index");
			var slotIndexValue6 = slotIndex6.attr("slot-index");

			// Verify slot indices
			
			// Slot 1
			if (!slotIsAvailable(slotIndexValue1, response.availableSlots)) {

				slotIndex1.attr("aria-disabled", true);
				slotIndex1.attr("class", "ms-RadioButton-field is-disabled custom-radio");
			}
			else {
				slotIndex1.attr("aria-disabled", false);
				slotIndex1.attr("class", "ms-RadioButton-field custom-radio");
			}

			// Slot 2
			if (!slotIsAvailable(slotIndexValue2, response.availableSlots)) {

				slotIndex2.attr("aria-disabled", true);
				slotIndex2.attr("class", "ms-RadioButton-field is-disabled custom-radio");
			}
			else {
				slotIndex2.attr("aria-disabled", false);
				slotIndex2.attr("class", "ms-RadioButton-field custom-radio");
			}
			
			// Slot 3
			if (!slotIsAvailable(slotIndexValue3, response.availableSlots)) {

				slotIndex3.attr("aria-disabled", true);
				slotIndex3.attr("class", "ms-RadioButton-field is-disabled custom-radio");
			}
			else {
				slotIndex3.attr("aria-disabled", false);
				slotIndex3.attr("class", "ms-RadioButton-field custom-radio");
			}

			// Slot 4
			if (!slotIsAvailable(slotIndexValue4, response.availableSlots)) {

				slotIndex4.attr("aria-disabled", true);
				slotIndex4.attr("class", "ms-RadioButton-field is-disabled custom-radio");
			}
			else {
				slotIndex4.attr("aria-disabled", false);
				slotIndex4.attr("class", "ms-RadioButton-field custom-radio");
			}

			// Slot 5
			if (!slotIsAvailable(slotIndexValue5, response.availableSlots)) {

				slotIndex5.attr("aria-disabled", true);
				slotIndex5.attr("class", "ms-RadioButton-field is-disabled custom-radio");
			}
			else {
				slotIndex5.attr("aria-disabled", false);
				slotIndex5.attr("class", "ms-RadioButton-field custom-radio");
			}

			// Slot 6
			if (!slotIsAvailable(slotIndexValue6, response.availableSlots)) {

				slotIndex6.attr("aria-disabled", true);
				slotIndex6.attr("class", "ms-RadioButton-field is-disabled custom-radio");
			}
			else {
				slotIndex6.attr("aria-disabled", false);
				slotIndex6.attr("class", "ms-RadioButton-field custom-radio");
			}
		}
	});
}

// Remove time slots
function removeTimeSlots(param) 
{
	loadAvailableSlotsBySelectedDate(param);
}

// Returns true if the specified 
// time slot is available
function slotIsAvailable(value, arr) {
	var status = false;

	for (var i = 0; i < arr.length; i++) {
		var slot = arr[i];
		if (slot == value) {
			status = true;
			break;
		}
	}

	return status;
}

// Post leads' data
function postLeadsData() {

	// Disable button

	// Disable the button
	$('#lead-submit-btn').prop("disabled", true);

	// Remove text and show spinner
	$('#lead-submit-btn-text').addClass('btn-text-hide');

	// Add the spinner
	$('#lead-spinner').addClass('roller-active');

	// Initialize all variables
	var url = $("input[id='base_url']").val();
	absolute_url = url + "Leads/post_lead_info";

	var full_name = $("input[name='full_name']").val();
	var email = $("input[name='email']").val();
	var phone = $("input[name='phone']").val();
	var company_name = $("input[name='company_name']").val();
	var website = $("input[name='website']").val();
	var date = $("input[name='date_picker_element']").val();
	var time = $("input[name='time_selection_element']").val();
	var timeIndex = $("input[name='specified_time_slot']").val();
	var lead_magnet_id = 1;
	
	// If time slot was not specified...
	if (timeIndex === "") {
		// Pop up error
		var timeSlotError = new ej.notifications.Toast({
				title: 'Error',
				showProgressBar: true,
				cssClass: 'e-toast-danger',
				content: 'You need to specify a time slot',
				beforeOpen: function (e) {
					if (timeSlotError.element.childElementCount === 1) {
						e.cancel = true;
					} else {
						e.cancel = false;
					}
				},
				target: document.body
			});
			
		// Render initialized Toast component
		timeSlotError.appendTo('#errorPopup');
		timeSlotError.show();

		// Enable the button
		$('#lead-submit-btn').removeAttr("disabled");

		// Remove text and show spinner
		$('#lead-submit-btn-text').removeClass('btn-text-hide');

		// Add the spinner
		$('#lead-spinner').removeClass('roller-active');
			
		// Exit the function
		return;
	}

	var data = {
		fullname: full_name,
		email: email,
		phone: phone,
		company_name: company_name,
		website: website,
		date: date,
		time: time,
		timeIndex: timeIndex,
		lead_magnet_id: lead_magnet_id
	};

	// Initialize ajax
	$.ajax({
		url: absolute_url,
		method: 'post',
		data: data,
		dataType: 'json',
		error: function (res) {

			// Enable the button
			$('#lead-submit-btn').removeAttr("disabled");

			// Remove text and show spinner
			$('#lead-submit-btn-text').removeClass('btn-text-hide');

			// Add the spinner
			$('#lead-spinner').removeClass('roller-active');

			// Hide the form row
			$('#lead-form-row').css({'display': 'none'});
			$('#lead-form-title').css({'display': 'none'});
			$('#response-message-panel').addClass("active");
			$('.ms-MessageBar.ms-MessageBar--error').css({'display': 'inline-block'});

			// Exit the function
			return;
		},
		success: function(response) {

			// If there is an error
			if (response.errorMessage != null) {
				// Pop up error notification
				var emailDuplicateError = new ej.notifications.Toast({
					title: 'Email Duplicate',
					showProgressBar: true,
					cssClass: 'e-toast-danger',
					content: response.errorMessage,
					beforeOpen: function (e) {
						if (emailDuplicateError.element.childElementCount === 1) {
							e.cancel = true;
						} else {
							e.cancel = false;
						}
					},
					target: document.body
				});
				
				// Render initialized Toast component
				emailDuplicateError.appendTo('#errorPopup');
				emailDuplicateError.show();
		
				// Enable the button
				$('#lead-submit-btn').removeAttr("disabled");
		
				// Remove text and show spinner
				$('#lead-submit-btn-text').removeClass('btn-text-hide');
		
				// Add the spinner
				$('#lead-spinner').removeClass('roller-active');
					
				// Exit the function
				return;
			}
			// Enable the button
			$('#lead-submit-btn').removeAttr("disabled");

			// Remove text and show spinner
			$('#lead-submit-btn-text').removeClass('btn-text-hide');

			// Add the spinner
			$('#lead-spinner').removeClass('roller-active');

			// Hide the form row and display success
			$('#lead-form-row').css({'display': 'none'});
			$('#lead-form-title').css({'display': 'none'});
			$('#response-message-panel').addClass("active");
			$('.ms-MessageBar.ms-MessageBar--success').css({'display': 'inline-block'});
		}
	});
}
