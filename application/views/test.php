<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<form action="<?php echo site_url('Leads/test'); ?>" method="post" id="testform">

		<input type="text" name="fullname" id="fullname" />

		<input type="text" name="email" id="email" />

		<button>Submit</button>

	</form>

	<script type="text/javascript">
		
		$(document).ready(function() {
		
			$('#testform').submit(function(e) {

				// Prevent normal submission
				e.preventDefault();

				var full_name = $("input[name='full_name']").val();
				var email = $("input[name='email']").val();
				
				var data = {
					fullname: full_name,
					email: email,
				};

				// Initialize ajax
				$.ajax({
					url: <?php echo site_url('Leads/test'); ?>,
					method: 'post',
					data: data,
					dataType: 'json',
					error: function (res) {

						// TODO: Find a more proper way to log error

						// Alert error
						alert("An error occurred. Please try again.");

						// Exit the method
						return;
					},
					success: function(response) {

						// Initialize Toast component
						var successMessage = new ej.notifications.Toast({
							title: 'Registration Successful',
							content: 'You have successfully registered for a free consultation, and you wil be contacted based on the information you provided.',
							target: document.body
						});
					
						// Render initialized Toast component
						successMessage.appendTo('#successMessage');
						successMessage.show();
					}
				});
			});
		});
	</script>

</body>
</html>
