// Wait for the DOM to be ready
$(document).ready(function () {

	// Initialize form validation on the registration form.
	// It has the name attribute "registration"
	$("form[name='lead-application']").validate({
		// Specify validation rules
		rules: {
			// The key name on the left side is the name attribute
			// of an input field. Validation rules are defined
			// on the right side
			full_name: "required",
			email: {
                required: true,
				// Specify that email should be validated
				// by the built-in "email" rule
				email: true,
			},
			phone: "required",
			company_name: "required",
			date_picker_element: "required"
			// time_selection_element: "required"
		},
		// Specify validation error messages
		messages: {
			full_name: "Please enter your full name",
			phone: "Please enter your phone number",
			company_name: "Please specify your company name",
			date_picker_element: "Please choose a date for consultation"
			// time_selection_element: "Please select a time for consultation"
		},
		// Make sure the form is submitted to the destination defined
		// in the "action" attribute of the form when valid
		submitHandler: function (form) {
			// form.submit();
			postLeadsData();
		},
	});
});
